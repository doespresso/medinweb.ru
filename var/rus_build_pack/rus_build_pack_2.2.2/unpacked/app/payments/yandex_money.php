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

if (defined('PAYMENT_NOTIFICATION')) {

    if ($mode == 'ok') {

        $order_id = $_REQUEST['order_id'];
        $order_info = fn_get_order_info($order_id);

        if (fn_check_payment_script('yandex_money.php', $order_id)) {
            fn_order_placement_routines('route', $order_id);
        }

    } elseif ($mode == 'error') {

        $order_id = $_REQUEST['order_id'];
        
        $pp_response['order_status'] = 'N';
        $pp_response["reason_text"] = __('text_transaction_cancelled');

        if (fn_check_payment_script('yandex_money.php', $order_id)) {
            fn_finish_payment($order_id, $pp_response, false);
        }
        fn_order_placement_routines('route', $order_id);
        
    } elseif ($mode == 'check_order') {
        
        $order_id = $_REQUEST['orderNumber'];
        $order_info = fn_get_order_info($order_id);
        

        $date_time = date('c');
        
        $payment_id = db_get_field("SELECT payment_id FROM ?:orders WHERE order_id = ?i", $order_id);
        $processor_data = fn_get_payment_method_data($payment_id);
        
        $shop_id = $processor_data['processor_params']['shop_id'];
        $invoiceId = $_REQUEST['invoiceId'];
        
        $code = 0; 

        if ($_REQUEST['orderSumAmount'] != $order_info['total']) {
             $code = 2;
             $total = $order_info['total'];
        }
        
        $hash = $_REQUEST['action'].';'.$_REQUEST['orderSumAmount'].';'.$_REQUEST['orderSumCurrencyPaycash'].';'.$_REQUEST['orderSumBankPaycash'].';'.$_REQUEST['shopId'].';'.$_REQUEST['invoiceId'].';'.$_REQUEST['customerNumber'].';'.$processor_data['processor_params']['md5_shoppassword'];
        
        $hash = md5($hash);
        $hash = strtoupper($hash);
        
        if ($_REQUEST['md5'] != $hash) {
             $code = 1;
        } 

        if ($code == 2) {
            $xml = "<?xml version='1.0' encoding='UTF-8'?>
            <checkOrderResponse performedDatetime ='$date_time' 
            code='$code' invoiceId='$invoiceId' 
            shopId='$shop_id' orderSumAmount='$total' />";

            echo $xml;
        } else {
            $xml = "<?xml version='1.0' encoding='UTF-8'?>
            <checkOrderResponse performedDatetime ='$date_time' 
            code='$code' invoiceId='$invoiceId' 
            shopId='$shop_id'/>";

            echo $xml;
       }
        
        
        
    } elseif ($mode == 'payment_aviso') {

        $order_id = $_REQUEST['orderNumber'];
        $order_info = fn_get_order_info($order_id);
        
        $date_time = date('c');
        
        $payment_id = db_get_field("SELECT payment_id FROM ?:orders WHERE order_id = ?i", $order_id);
        $processor_data = fn_get_payment_method_data($payment_id);
        
        $shop_id = $processor_data['processor_params']['shop_id'];
        $invoiceId = $_REQUEST['invoiceId'];
        
        $code = 0; 
        
        $hash = $_REQUEST['action'].';'.$_REQUEST['orderSumAmount'].';'.$_REQUEST['orderSumCurrencyPaycash'].';'.$_REQUEST['orderSumBankPaycash'].';'.$_REQUEST['shopId'].';'.$_REQUEST['invoiceId'].';'.$_REQUEST['customerNumber'].';'.$processor_data['processor_params']['md5_shoppassword'];
        $hash = md5($hash);
        $hash = strtoupper($hash);
        
        if ($_REQUEST['md5'] == $hash) {
             $pp_response = array(
                'order_status' => 'P'
            );
            if (fn_check_payment_script('yandex_money.php', $order_id)) {
                fn_finish_payment($order_id, $pp_response);
            }
            
        } else {
            $code = 1;
            $pp_response['order_status'] = 'N';
            $pp_response["reason_text"] = __('error');

            if (fn_check_payment_script('yandex_money.php', $order_id)) {
                fn_finish_payment($order_id, $pp_response, false);
            }
            
        }
        
 
        $xml = "<?xml version='1.0' encoding='UTF-8'?>
        <paymentAvisoResponse performedDatetime ='$date_time' 
        code='$code' invoiceId='$invoiceId' 
        shopId='$shop_id'/>";

        echo $xml;
        
        if ($_REQUEST['paymentType'] != 'PC') {
            fn_order_placement_routines('route', $order_id);
        }
        
    }

} else {
    if (!defined('BOOTSTRAP')) { die('Access denied'); }

    if ($processor_data['processor_params']['mode'] == 'test') {
        $post_address = "https://demomoney.yandex.ru/eshop.xml";
    } else {
        $post_address = "http://money.yandex.ru/eshop.xml";
    }

    $payment_info['yandex_payment_type'] = mb_strtoupper($payment_info['yandex_payment_type']);

    if (empty($payment_info['yandex_payment_type'])) {
        $payment_type = 'PC';
    } else {
        $payment_type = $payment_info['yandex_payment_type'];
    }

    if ($order_info['secondary_currency'] != 'RUB') {
        fn_set_notification('E', __('error'), __('yandex_money_currency_error'));
        return array(CONTROLLER_STATUS_REDIRECT, "checkout.checkout");
    }
    
    $customer_phone = str_replace('+', '', $order_info['b_phone']);
    
    $post_data = array(
        'shopId' => $processor_data['processor_params']['shop_id'],
        'Sum' => sprintf('%.2f', $order_info['total']),
        'scid' => $processor_data['processor_params']['scid'],
        'customerNumber' => $customer_phone,
        'orderNumber' => $order_info['order_id'],
        'shopSuccessURL' => fn_url("payment_notification.ok?payment=yandex_money&order_id=$order_id", AREA),
        'shopFailURL' => fn_url("payment_notification.error?payment=yandex_money&order_id=$order_id", AREA),
        'cps_email' => $order_info['email'],
        'cps_phone' => $customer_phone,
        'paymentAvisoURL' => fn_url("payment_notification.payment_aviso?payment=yandex_money", AREA),
        'checkURL' => fn_url("payment_notification.check_order?payment=yandex_money", AREA),
        'paymentType' => $payment_type,
    );

    if ($payment_type == 'NV') {
        $post_data['cps_provider'] = 'wm';
    }

    fn_create_payment_form($post_address, $post_data, 'Yandex.Money', false);
}
exit;
