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

use Tygh\Http;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (defined('PAYMENT_NOTIFICATION') && !empty($_REQUEST['order_id'])) {
    exit;
} else {

    $credit_data['name'] = $order_info['firstname'];
    $credit_data['phone_code'] = $order_info['b_phone'];
    $credit_data['phone_number'] = '';
    $credit_data['term'] = 6;
    $credit_data['start_percent'] = 10;
    $credit_data['region'] = 'Moscow';

    $credit_data['rass'] = 1;

    $total = fn_format_price($order_info['total']);

    $post_data = array(
        'Name' => $payment_info['name'],
        'Phone_code' => $credit_data['phone_code'],
        'Phone_number' => $payment_info['phone'],
        'Term' => $payment_info['yc_time_credit'],
        'SUMMA' => $total,
        'Start_percent' => $payment_info['yc_first_payment'],
        'Region' => $payment_info['region'],
        'ORDERID' => $order_id,
        'MERCHANTID' => $processor_data['processor_params']['merchant_id'],
        'TYPECREDIT' => 2,
        'approve' => 'on',
        'Rass' => "1",
        'FLASHAPI' => 1,
    );

    $url = 'http://yes-credit.su/receiver/postReceiver.aspx';
    $data = http_build_query($post_data);

    if ($order_info['products']) {
        $items = array();
        foreach ($order_info['products'] as $k => $item) {
            $items[] = urlencode('ITEMS[]=MODEL:' . str_replace('|', '', $item['product']) . '|COUNT:' . $item['amount'] . '|PRICE:' . fn_format_price($item['subtotal']));
        }
        $data .= '&' . implode('&', $items);
    }

    if (!empty($order_info['shipping_cost'])) {
        $data .= '&' . urlencode('ITEMS[]=MODEL: ' . str_replace('|', '', __('shipping_cost')) . '|COUNT:1|PRICE:' . fn_format_price($order_info['shipping_cost']));
    }

    if (!empty($order_info['taxes'])) {
        foreach ($order_info['taxes'] as $tax) {
            if ($tax['price_includes_tax'] == 'N') {
                $data .= '&' . urlencode('ITEMS[]=MODEL: ' . str_replace('|', '', __('tax')) . '|COUNT:1|PRICE:' . fn_format_price($tax['tax_subtotal']));
            }
        }
    }

    if (!empty($order_info['payment_surcharge'])) {
        $data .= '&' . urlencode('ITEMS[]=MODEL: ' . str_replace('|', '', __('payment_surcharge')) . '|COUNT:1|PRICE:' . fn_format_price($order_info['payment_surcharge']));
    }

    $response = Http::post($url, $data);
    $status = explode('::', $response);

    $pp_response = array();

    if ($status[0] == 'OK') {
        $pp_response['order_status'] = 'O';
        $pp_response['reason_text'] = __('text_yc_transaction_accepted');
    } else {
        $pp_response['order_status'] = 'F';
        $pp_response['reason_text'] = __('text_yc_transaction_rejected') . $response;
    }

    fn_finish_payment($order_id, $pp_response, false);
    fn_order_placement_routines('route', $order_id);
}
