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

use Tygh\Registry;
use Tygh\Http;

if ( !defined('AREA') ) { die('Access denied'); }


if (defined('PAYMENT_NOTIFICATION')) {

    if ($mode == 'notify' && !empty($_REQUEST['order_id'])) {
        $pp_response = array();	
        $order_info = fn_get_order_info($_REQUEST['order_id']);

        if (empty($processor_data)) {
            $processor_data = fn_get_processor_data($order_info['payment_id']);
        }
        $ticket = db_get_field("SELECT data FROM ?:order_data WHERE type = 'E' AND order_id = ?i", $_REQUEST['order_id']);
        db_query("DELETE FROM ?:order_data WHERE type = 'E' AND order_id = ?i", $_REQUEST['order_id']);
        
        $info = fn_avangard_get_info($ticket, $processor_data);

        if ($info['status_code'] == '3') {         
            $pp_response['transaction_id'] = $info['id'];
            $pp_response['order_status'] = 'P';
        } else {
            $pp_response['reason_text'] = $info['status_desc'];
            $pp_response['transaction_id'] = $info['id'];
            $pp_response['order_status'] = 'F';
        }
		
        fn_finish_payment($_REQUEST['order_id'], $pp_response);
        fn_order_placement_routines('route', $_REQUEST['order_id']);
        exit;
    }
    
} else {
   
    $return_url = Registry::get('config.current_location') . "/$index_script?dispatch=payment_notification.notify&amp;payment=avangard&amp;order_id=$order_id";
    
    if (empty($processor_data)) {
        $processor_data = fn_get_processor_data($order_info['payment_id']);
    }
  
    if (!empty($order_id)) {
        $registration_data = fn_avangard_registration($order_id, $order_info, $return_url, $processor_data);
        if (!empty($registration_data['ticket'])) {
            $data = array (
                'order_id' => $order_id,
                'type' => 'E',
                'data' => $registration_data['ticket'],
            );
            db_query("REPLACE INTO ?:order_data ?e", $data);
        }
        
        if ($registration_data['response_code'] == 0) {
            $form_url = 'https://www.avangard.ru/iacq/pay';
            $ticket['ticket'] = $registration_data['ticket'];
            fn_create_payment_form($form_url, $ticket, 'Avangard');
        } else {
            $pp_response['reason_text'] = $registration_data['response_message'];
            $pp_response['order_status'] = 'F';
            $pp_response['transaction_id'] = $registration_data['id'];
        }
    }
}

function fn_avangard_registration($number_order, $order_info, $return_url, $processor_data)
{
    if (empty($order_info['notes'])) {
        $order_info['notes'] = 'Оплата заказа';
    }
    
    $url = 'https://www.avangard.ru/iacq/h2h/reg';
    $xml_array = array (
        'NEW_ORDER' => array (
            'SHOP_ID' => $processor_data['processor_params']['shop_id'],
            'SHOP_PASSWD' => $processor_data['processor_params']['password'],
            'AMOUNT' => $order_info['total'] * 100,
            'ORDER_NUMBER' => $number_order,
            'ORDER_DESCRIPTION' => $order_info['notes'],
            'LANGUAGE' => 'RU',
            'BACK_URL' => urlencode($return_url),
            'CLIENT_NAME' => $order_info['lastname'] . ' ' . $order_info['firstname'],
            'CLIENT_ADDRESS' => $order_info['b_address'].' '.$order_info['b_address_2'],
            'CLIENT_EMAIL' => $order_info['email'],
            'CLIENT_PHONE' => $order_info['b_phone'],
            'CLIENT_IP' => $_SERVER['REMOTE_ADDR']
        )
    );
    
    $result_xml = Http::post($url, 'xml=' . fn_array_to_xml($xml_array), array(
        'headers' => array(
            'Content-type: application/x-www-form-urlencoded;charset=windows-1251',
            'Expect:'
        )
    ));
    $xml_string = @simplexml_load_string($result_xml);
    $result['id'] = strval($xml_string->id);
    $result['ticket'] = strval($xml_string->ticket);
    $result['ok_code'] = strval($xml_string->ok_code);
    $result['failure_code'] = strval($xml_string->failure_code);
    $result['response_code'] = strval($xml_string->response_code);
    $result['response_message'] = strval($xml_string->response_message);
    
    return $result;
}

function fn_avangard_get_info($tiket, $processor_data)
{
    $url = 'https://www.avangard.ru/iacq/h2h/get_order_info';
    $xml_array = array (
        'get_order_info' => array (
            'ticket' => $tiket,
            'shop_id' => $processor_data['processor_params']['shop_id'],
            'shop_passwd' => $processor_data['processor_params']['password']
        )
    );
    
    $result_xml = Http::post($url, 'xml=' . fn_array_to_xml($xml_array), array(
        'headers' => array(
            'Content-type: application/x-www-form-urlencoded;charset=windows-1251',
            'Expect:'
        )
    ));
    
    $xml_string = @simplexml_load_string($result_xml);
    $result['id'] = strval($xml_string->id);
    $result['method_name'] = strval($xml_string->method_name);
    $result['auth_code'] = strval($xml_string->auth_code);
    $result['status_code'] = strval($xml_string->status_code);
    $result['status_desc'] = strval($xml_string->status_desc);
    $result['status_date'] = strval($xml_string->status_date);
    $result['response_code'] = strval($xml_string->response_code);
    $result['response_message'] = strval($xml_string->response_message);
    
    return $result;
}
