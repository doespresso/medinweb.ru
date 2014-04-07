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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (defined('PAYMENT_NOTIFICATION')) {
    if (empty($_REQUEST['orderId'])) {
        die('Access denied');
    }

    $order_id = $_REQUEST['orderId'];
    $order_info = fn_get_order_info($order_id);
    $order_total = fn_format_rate_value($order_info['total'], 'F', 2, '.', '', '');
    $rbk_secretKey = (!empty($_REQUEST['secretKey'])) ? $_REQUEST['secretKey'] : $order_info['payment_method']['processor_params']['rbk_secretKey'];
    $eshopId = $order_info['payment_method']['processor_params']['rbk_eshopId'];

    $pp_response = array();

    if ($mode == 'placement') {
        if (empty($_REQUEST['serviceName']) || empty($_REQUEST['eshopAccount']) || empty($_REQUEST['recipientCurrency']) || empty($_REQUEST['paymentStatus']) || empty($_REQUEST['userName']) || empty($_REQUEST['userEmail']) || empty($_REQUEST['paymentData'])) {
            die('Access denied');
        }
        $hash = $eshopId . '::' . $order_id . '::' . $_REQUEST['serviceName'] . '::' . $_REQUEST['eshopAccount'] . '::' . $order_total . '::' . $_REQUEST['recipientCurrency'] . '::' . $_REQUEST['paymentStatus'] . '::' . $_REQUEST['userName'] . '::' . $_REQUEST['userEmail'] . '::' . $_REQUEST['paymentData'] . '::' . $rbk_secretKey;
        $sign = md5($hash);
        $pp_response['transaction_id'] = $_REQUEST['paymentId'];
        $paymentStatus = $_REQUEST['paymentStatus'];

        if ($sign == $_REQUEST['hash']) {
            if ($paymentStatus == 3) {
                $pp_response['order_status'] = 'O';
                fn_finish_payment($order_id, $pp_response, false);
            }
            if ($paymentStatus == 5) {
                fn_change_order_status($order_id, 'P');
            }
            $pp_response['reason_text'] = __('rbk_status' . $_REQUEST['paymentStatus']);
        } else {
            $pp_response['order_status'] = 'F';
            $pp_response['reason_text'] = __('error');
            fn_finish_payment($order_id, $pp_response);
        }
    } elseif ($mode == 'success') {
        $pp_response['reason_text'] = __('success');
        fn_order_placement_routines('route', $order_id, false);
    } elseif ($mode == 'fail') {
        $pp_response['order_status'] = 'F';
        $pp_response['reason_text'] = __('error');
        fn_finish_payment($order_id, $pp_response);
        fn_order_placement_routines('route', $order_id, false);
    }
} else {
    $processor_url = 'https://rbkmoney.ru/acceptpurchase.aspx';
    $order_total = fn_format_rate_value($order_info['total'], 'F', 2, '.', '', '');
    $rbk_eshopId = $processor_data['processor_params']['rbk_eshopId'];
    $_order_id = $order_info['repaid'] ? ($order_id . '_' . $order_info['repaid']) : $order_info['order_id'];
    $_currency = $processor_data['processor_params']['currency'];
    if ($_currency == 'RUB') {
        $_currency = 'RUR';
    }

    $post = array();
    $post['eshopId'] = $rbk_eshopId;
    $post['orderId'] = $_order_id;
    $post['serviceName'] = __('rbk_serviceName');
    $post['recipientAmount'] = $order_total;
    $post['recipientCurrency'] = $_currency;
    $post['user_email'] = $order_info['email'];
    $post['version'] = 1;
    $post['preference'] = $processor_data['processor_params']['rbk_paymethod'];
    $post['language'] = $processor_data['processor_params']['rbk_language'];
    $post['successUrl'] = fn_url('payment_notification.success?payment=rbk&orderId=' . $_order_id);
    $post['failUrl'] = fn_url('payment_notification.fail?payment=rbk&orderId=' . $_order_id);
    $post['rbk_secretKey'] = $processor_data['processor_params']['rbk_secretKey'];
    $hash = $post['eshopId'] . '::' . $post['recipientAmount'] . '::' . $post['recipientCurrency'] . '::' . $post['user_email'] . '::' . $post['serviceName'] . '::' . $post['orderId'] . '::::' . $post['rbk_secretKey'];
    $post['hash'] = md5($hash);
echo <<<EOT
<form method="post" action="$processor_url" name="process">
EOT;
    foreach ($post as $name => $value) {
        echo "<input type=\"hidden\" name=\"$name\" value=\"$value\" />\n";
    }

    $msg = __('text_cc_processor_connection', array(
        '[processor]' => __('rbk')
    ));
    echo "\n";
    echo <<<EOT
</form>
<p><div align=center>{$msg}</div></p>
    <script type="text/javascript">
    window.onload = function(){
        document.process.submit();
    };
    </script>
</body>
</html>
EOT;
exit;
}
