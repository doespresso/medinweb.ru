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

// rus_build_edost dbazhenov

namespace Tygh\Shippings\Services;

use Tygh\Shippings\IService;
use Tygh\Registry;
use Tygh\Http;

/**
 * Edost shipping service
 */
class Edost implements IService
{
    /**
     * Abailability multithreading in this module
     *
     * @var array $_allow_multithreading
     */
    private $_allow_multithreading = false;

    /**
     * Stack for errors occured during the preparing rates process
     *
     * @var array $_error_stack
     */
    private $_error_stack = array();

    protected static $_error_descriptions = array(
        '0' => 'Выбранный метод доставки недоступен',
        '2' => 'Доступ к расчету заблокирован',
        '3' => 'Не верные данные магазина (пароль или идентификатор)',
        '4' => 'Не верные входные параметры',
        '5' => 'Не верный город или страна',
        '6' => 'Внутренняя ошибка сервера расчетов',
        '7' => 'Не заданы компании доставки в настройках магазина',
        '8' => 'Сервер расчета не отвечает',
        '9' => 'Превышен лимит расчетов за день',
        '10' => 'Не верный формат XML',
        '11' => 'Не указан вес',
        '12' => 'Не заданы данные магазина (пароль или идентификатор)',
        '14' => 'Настройки сервера не позволяют отправить запрос на расчет'
    );

    /**
     * Current Company id environment
     *
     * @var int $company_id
     */
    public $company_id = 0;

    /**
     * Collects errors during preparing and processing request
     *
     * @param string $error
     */
    private function _internalError($error)
    {
        $this->_error_stack[] = $error;
    }

    /**
     * Fills edost_cod array in session cart variable
     *
     * @param  string $code       Shipping service code
     * @param  int    $company_id Selected company identifier
     * @param  array  $rates      Previously calculated rates
     * @return bool   true Always true
     */
    private function _fillSessionData($shipping_info, $company_id, $rates = array())
    {
        $group_key = $shipping_info['keys']['group_key'];
        $shipping_id = $shipping_info['keys']['shipping_id'];

        $code = $shipping_info['service_code'];

        /* Bad code: We should not use Global variables in the Class methods */
        if (!isset($_SESSION['cart']['shippings_extra'][$group_key])) {
            $_SESSION['cart']['shippings_extra'][$group_key] = array();
        }

        $price = !empty($rates[$code]['price']) ? $rates[$code]['price'] : 0;
        $pricecash = !empty($rates[$code]['pricecash']) ? $rates[$code]['pricecash'] : 0;
        $transfer = !empty($rates[$code]['transfer']) ? $rates[$code]['transfer'] : 0;

        $shipping_data = array(
            'price' => !empty($rates[$code]['price']) ? $rates[$code]['price'] : 0,
            'pricecash' => $pricecash,
            'pricediff' => ($pricecash > $price) ? $pricecash - $price : 0,
            'transfer' => $transfer,
            'day' => !empty($rates[$code]['day']) ? $rates[$code]['day'] : 0,
        );

        $_SESSION['cart']['shippings_extra']['rates'][$group_key][$shipping_id] = $shipping_data;

        return true;
    }

    /**
     * Gets numeric representation of Country/Region/City
     *
     * @param  array $destination Country, Region, City of geographic place
     * @return int   Numeric representation
     */
    private function _getDestinationCode($destination)
    {
        static $result = NULL;

        if (!isset($result)) {

            $cities = fn_get_schema('edost', 'cities');
            $regions = fn_get_schema('edost', 'regions');
            $countries = fn_get_schema('edost', 'countries');

            $result = '';

            if ($destination['country'] != 'RU') {
                $result = !empty($countries[$destination['country']]) ? $countries[$destination['country']] : '';
            } else {

                if (Registry::get('addons.rus_cities.status') == 'A') {
                    if (preg_match('/^[a-zA-Z]+$/',$destination['city'])) {
                        $lang_code = 'en';
                    } else {
                        $lang_code = 'ru';
                    }

                    $condition = db_quote(" d.lang_code = ?s AND d.city = ?s AND c.status = ?s", $lang_code , $destination['city'] , 'A');

                    if (!empty($destination['state'])) {
                        $condition .= db_quote(" AND c.state_code = ?s", $destination['state']);
                    }
                    if (!empty($destination['country'])) {
                        $condition .= db_quote(" AND c.country_code = ?s", $destination['country']);
                    }

                    $result = db_get_field("SELECT c.city_code FROM ?:rus_city_descriptions as d LEFT JOIN ?:rus_cities as c ON c.city_id = d.city_id WHERE ?p", $condition);


                }

                if(empty($result)) {
                    $result = !empty($cities[$destination['city']]) ? $cities[$destination['city']] : '';

                    if ($result == '') {
                        $alt_city = $destination['city'] . ' (' . fn_get_state_name($destination['state'], $destination['country'], 'RU') . ')';
                        if (!empty($cities[$alt_city])) {
                            $result = $cities[$alt_city];
                        }
                    }

                    if ($result == '') {
                        $result = !empty($regions[$destination['state']]) ? $regions[$destination['state']] : '';
                    }
                }
            }

        }

        return $result;
    }

    /**
     * Process' server response and gets information in needed format
     *
     * @param  string $response XML server response
     * @return array  Prepared data
     */
    private function _getRates($response)
    {
        static $return = NULL;

        if (!isset($return)) {
            $xml = @simplexml_load_string($response);

            if (!empty($xml)) {
                foreach ($xml->tarif as $shipment) {
                    $total_charge = 0;
                    $strah = (int) $shipment->strah;
                    $service_code = (int) $shipment->id * 2 + $strah + 299;

                    $return[$service_code] = array(
                        'price' => (string) $shipment->price,
                        'pricecash' => (string) $shipment->pricecash,
                        'transfer' => (string) $shipment->transfer,
                        'id' => (string) $shipment->id,
                        'day' => (string) $shipment->day
                    );
                }

                if (!empty($xml->office)) {
                    foreach ($xml->office as $office) {
                        $strah = (int) $office->strah;
                        $service_code = $office->id * 10 + $strah;
                        if (!empty($return[$service_code])) {
                            $return[$service_code]['office'] = array(
                                'name' => (string) $office->name,
                                'address' => (string) $office->address,
                                'name' => (string) $office->tel,
                                'schedule' => (string) $office->schedule,
                                'gps' => (string) $office->gps,
                            );
                        }
                    }
                }
            }
        }

        return $return;
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
     * Gets error message from shipping service server
     *
     * @param  string $resonse Reponse from Shipping service server
     * @return string Text of error or false if no errors
     */
    public function processErrors($response)
    {
        // Parse XML message returned by the edost post server.
        $xml = @simplexml_load_string($response);
        $return = false;

        if (!empty($xml)) {
            $status_code = (string) $xml->stat;

            if ($status_code != 1) {
                $return = !empty(self::$_error_descriptions[$status_code]) ? self::$_error_descriptions[$status_code] : 'Ошибка расчета';
            }
        }

        if (empty($return)) {
            $return = self::$_error_descriptions[0];
        }

        if (!empty($this->_error_stack)) {
            foreach ($this->_error_stack as $error) {
                $return .= '; ' . $error;
            }
        }

        return $return;
    }

    /**
     * Sets data to internal class variable
     *
     * @param array $shipping_info
     */
    public function prepareData($shipping_info)
    {
        $this->_shipping_info = $shipping_info;
        $this->company_id = Registry::get('runtime.company_id');
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

        $rates = $this->_getRates($response);

        if (empty($this->_error_stack) && !empty($rates[$this->_shipping_info['service_code']])) {
            $this->_fillSessionData($this->_shipping_info, $this->company_id, $rates);
            $return['cost'] = $rates[$this->_shipping_info['service_code']]['price'];
        } else {
            $return['error'] = $this->processErrors($response);
        }

        return $return;
    }

    /**
     * Prepare request information
     *
     * @return array Prepared data
     */
    public function getRequestData()
    {
        static $request_data = NULL;

        if (!isset($request_data)) {
            $weight_data = fn_expand_weight($this->_shipping_info['package_info']['W']);
            $shipping_settings = $this->_shipping_info['service_params'];
            $origination = $this->_shipping_info['package_info']['origination'];
            $location = $this->_shipping_info['package_info']['location'];
            $code = $this->_shipping_info['service_code'];

            $ruble = Registry::get('currencies.RUB');

            if ($origination['country'] != 'RU') {
                $this->_internalError(__('edost_country_error'));
            }

            if (empty($ruble) || $ruble['is_primary'] == 'N') {
                $this->_internalError(__('edost_activation_error'));
            }

            $_SESSION['cart']['shippings_extra'] = array();

            $_code = $this->_getDestinationCode($location);

            if ($_code == '') {
                $this->_internalError(__('edost_code_error'));
            }

            $url = 'http://www.edost.ru/edost_calc_kln.php';
            $post = array (
                'id' => $shipping_settings['store_id'],
                'p' => $shipping_settings['server_password'],
                'to_city' => $_code,
                'zip' => $location['zipcode'],
            );

            $_result = false;

            $post['weight'] = $weight_data['plain'];

            $post['strah'] = $this->_shipping_info['package_info']['C'];
            $post['ln'] = empty($shipping_settings['length']) ? 0 : $shipping_settings['length'];
            $post['wd'] = empty($shipping_settings['width']) ? 0 : $shipping_settings['width'];
            $post['hg'] = empty($shipping_settings['height']) ? 0 : $shipping_settings['height'];

            $request_data = array(
                'method' => 'post',
                'url' => $url,
                'data' => $post,
            );
        }

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

        $key = md5($data['data']['to_city'] . $data['data']['weight'] . $data['data']['strah']);
        $edost_data = fn_get_session_data($key);

        if (empty($edost_data)) {
            $response = Http::post($data['url'], $data['data'], array('headers' => ''));
            fn_set_session_data($key, $response);
        } else {
            $response = $edost_data;
        }

        return $response;
    }
}
