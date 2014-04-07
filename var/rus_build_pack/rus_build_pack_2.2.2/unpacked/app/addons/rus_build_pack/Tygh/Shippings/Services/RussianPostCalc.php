<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

// rus_build_pack dbazhenov

namespace Tygh\Shippings\Services;

use Tygh\Shippings\IService;
use Tygh\Registry;
use Tygh\Http;

/**
 * UPS shipping service
 */
class RussianPostCalc implements IService
{
    /**
     * Availability multithreading in this module
     *
     * @var array $_allow_multithreading
     */
    private $_allow_multithreading = false;

    /**
     * Maximum allowed requests to Russian Post server
     *
     * @var integer $_max_num_requests
     */
    private $_max_num_requests = 2;

    /**
     * Stack for errors occured during the preparing rates process
     *
     * @var array $_error_stack
     */
    private $_error_stack = array();

    private function _internalError($error)
    {
        $this->_error_stack[] = $error;
    }

    /**
     * Sets data to internal class variable
     *
     * @param array $shipping_info
     */
    public function prepareData($shipping_info)
    {
        $this->_shipping_info = $shipping_info;
    }

    /**
     * Gets shipping cost and information about possible errors
     *
     * @param  string $resonse Reponse from Shipping service server
     * @return array  Shipping cost and errors
     */
    public function processResponse($response)
    {
        $return = array(
            'cost' => false,
            'error' => false,
        );

        $shipping_type = $this->_shipping_info['service_params']['shipping_type'];
        $response = json_decode($response, true);

        if ($response['msg']['type'] == 'done') {

            foreach($response['calc'] as $calc) {
                if ($calc['type'] == $shipping_type) {
                    $return['cost'] = $calc['cost'];
                    break;
                }
            }

        } else {
            $return['error'] = $this->processErrors($response);
        }

        return $return;
    }

    /**
     * Gets error message from shipping service server
     *
     * @param  string $resonse Reponse from Shipping service server
     * @return string Text of error or false if no errors
     */
    public function processErrors($response)
    {
        $error = __('error_occurred');
        if ($response['msg']['type'] == 'error') {
            $error = $response['msg']['text'];
        }

        return $error;
    }

    /**
     * Checks if shipping service allows to use multithreading
     *
     * @return bool true if allow
     */
    public function allowMultithreading()
    {
        return $this->_allow_multithreading;
    }

    /**
     * Prepare request information
     *
     * @return array Prepared data
     */
    public function getRequestData()
    {
        $weight_data = fn_expand_weight($this->_shipping_info['package_info']['W']);
        $origination = $this->_shipping_info['package_info']['origination'];
        $location = $this->_shipping_info['package_info']['location'];

        $url = 'http://russianpostcalc.ru/api_v1.php';
        $request = array(
            'apikey' => $this->_shipping_info['service_params']['user_key'],
            'method' => 'calc',
            'from_index' => $origination['zipcode'],
            'to_index' => $location['zipcode'],
            'weight' => $weight_data['plain'],
            'ob_cennost_rub' => 1,
        );

        $all_to_md5 = $request;
        $all_to_md5[] = $this->_shipping_info['service_params']['user_key_password'];
        $request['hash'] = md5(implode("|", $all_to_md5));

        $request_data = array(
            'method' => 'post',
            'url' => $url,
            'data' => $request,
        );

        return $request_data;
    }

    /**
     * Process simple request to shipping service server
     *
     * @return string Server response
     */
    public function getSimpleRates()
    {

        $data = $this->getRequestData();

        // Russian post server works very unstably, that is why we cannot use multithreading and should use cycle.
        $retry = 0;
        do {
            $retry++;
            $response = Http::get($data['url'], $data['data']);
        } while (strpos($response, 'Результаты расчёта') == 0 && $retry <= $this->_max_num_requests);

        if ($retry == $this->_max_num_requests) {
            $this->_internalError(__('error_occurred'));
        }

        return $response;
    }
}
