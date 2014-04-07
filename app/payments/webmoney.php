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

use Tygh\Registry;

if (!empty($_REQUEST['resend']) && $_REQUEST['resend'] == 'Y') {

    require './init_payment.php';

    define('WM_CHARSET', 'windows-1251');
    header("Content-Type: text/html; charset=" . WM_CHARSET);
    $_REQUEST['LMI_PAYMENT_DESC'] = fn_convert_encoding('UTF-8', 'windows-1251', $_REQUEST['LMI_PAYMENT_DESC']);

    echo <<<EOT
<form method="post" action="{$_REQUEST['url']}" name="process">
    <input type="hidden" name ="LMI_PAYMENT_AMOUNT" value="{$_REQUEST['LMI_PAYMENT_AMOUNT']}" />
    <input type="hidden" name ="LMI_PAYMENT_DESC" value="{$_REQUEST['LMI_PAYMENT_DESC']}" />
    <input type="hidden" name ="LMI_PAYMENT_NO" value="{$_REQUEST['LMI_PAYMENT_NO']}" />
    <input type="hidden" name ="LMI_PAYEE_PURSE" value="{$_REQUEST['LMI_PAYEE_PURSE']}" />
EOT;

    if (isset($_REQUEST['LMI_SIM_MODE'])) {
        echo <<<EOT
    <input type="hidden" name ="LMI_SIM_MODE" value="{$_REQUEST['LMI_SIM_MODE']}" />
EOT;
    }

    echo <<<EOT
    <input type="hidden" name ="LMI_RESULT_URL" value="{$_REQUEST['LMI_RESULT_URL']}" />
    <input type="hidden" name ="LMI_SUCCESS_URL" value="{$_REQUEST['LMI_SUCCESS_URL']}" />
    <input type="hidden" name ="LMI_SUCCESS_METHOD" value="{$_REQUEST['LMI_SUCCESS_METHOD']}" />
    <input type="hidden" name ="LMI_FAIL_URL" value="{$_REQUEST['LMI_FAIL_URL']}" />
    <input type="hidden" name ="LMI_FAIL_METHOD" value="{$_REQUEST['LMI_FAIL_METHOD']}" />
</form>
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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (defined('PAYMENT_NOTIFICATION')) {

    if ($mode == 'unsupported_currency') {

        $pp_response = array();
        $pp_response['order_status'] = 'F';
        $pp_response['reason_text'] = __('text_unsupported_currency');

        fn_finish_payment($_REQUEST['order_id'], $pp_response);
        fn_order_placement_routines('route', $_REQUEST['order_id']);

    } elseif ($mode == 'result') {

        if (isset($_REQUEST['LMI_PREREQUEST']) && ($_REQUEST['LMI_PREREQUEST'] == 1)) {

            $order_id = $_REQUEST['LMI_PAYMENT_NO'];

            $order_info = fn_get_order_info($order_id);
            $processor_data = fn_get_payment_method_data($order_info['payment_id']);

            $payment_amount = fn_webmoney_get_price_by_payee_purse_type ($order_info['total'], $processor_data['processor_params']['lmi_payee_purse']);

            $prerequest_success = true;
            $reason_text = '';

            if (!$payment_amount) {
                $prerequest_success = false;
                $reason_text .= __('text_unsupported_currency');
            }
            if ($_REQUEST['LMI_PAYMENT_AMOUNT'] != $payment_amount) {
                $prerequest_success = false;
                $reason_text .= __('wm_rt_differ_payment_amount_in_prerequest');
            }
            if ($_REQUEST['LMI_PAYEE_PURSE'] != $processor_data['processor_params']['lmi_payee_purse']) {
                $prerequest_success = false;
                $reason_text .= __('wm_rt_differ_payee_purse_in_prerequest');
            }
            if ($_REQUEST['LMI_MODE'] != $processor_data['processor_params']['lmi_mode']) {
                $prerequest_success = false;
                $reason_text .= __('wm_rt_differ_mode_in_prerequest');
            }

            $pp_response = array();
            if ($prerequest_success) {
                $pp_response['lmi_payer_wm'] = $_REQUEST['LMI_PAYER_WM'];
                $pp_response['lmi_payer_purse'] = $_REQUEST['LMI_PAYER_PURSE'];
                echo 'YES';
            } else {
                $pp_response['order_status'] = 'F';
                $pp_response['reason_text'] = $reason_text;
            }
            fn_update_order_payment_info($order_id, $pp_response);
            exit;

        } else {

            $order_id = $_REQUEST['LMI_PAYMENT_NO'];

            $order_info = fn_get_order_info($order_id);
            $processor_data = fn_get_payment_method_data($order_info['payment_id']);

            if (!empty($order_info['payment_info']['order_status']) && ($order_info['payment_info']['order_status'] == 'F')) {
                exit;
            }

            $payment_amount = fn_webmoney_get_price_by_payee_purse_type($order_info['total'], $processor_data['processor_params']['lmi_payee_purse']);

            $hash_str = $processor_data['processor_params']['lmi_payee_purse'].$payment_amount.$order_id.$processor_data['processor_params']['lmi_mode'].$_REQUEST['LMI_SYS_INVS_NO'].$_REQUEST['LMI_SYS_TRANS_NO'].$_REQUEST['LMI_SYS_TRANS_DATE'].$processor_data['processor_params']['lmi_secret_key'].$_REQUEST['LMI_PAYER_PURSE'].$_REQUEST['LMI_PAYER_WM'];
            $hash = strtoupper(md5($hash_str));

            $notification_of_payment_success = true;
            $reason_text = '';

            if (!$payment_amount) {
                $prerequest_success = false;
                $reason_text .= __('text_unsupported_currency');
            }
            if ($_REQUEST['LMI_HASH'] != $hash) {
                $notification_of_payment_success = false;
                $reason_text .= __('wm_rt_differ_hash_in_notification_request');
            }
            if ($_REQUEST['LMI_PAYMENT_AMOUNT'] != $payment_amount) {
                $notification_of_payment_success = false;
                $reason_text .= __('wm_rt_differ_payment_amount_in_notification_request');
            }
            if ($_REQUEST['LMI_PAYEE_PURSE'] != $processor_data['processor_params']['lmi_payee_purse']) {
                $notification_of_payment_success = false;
                $reason_text .= __('wm_rt_differ_payee_purse_in_notification_request');
            }
            if ($_REQUEST['LMI_MODE'] != $processor_data['processor_params']['lmi_mode']) {
                $notification_of_payment_success = false;
                $reason_text .= __('wm_rt_differ_mode_in_notification_request');
            }

            $pp_response = array();
            if ($notification_of_payment_success) {
                $pp_response['lmi_payer_wm'] = $_REQUEST['LMI_PAYER_WM'];
                $pp_response['lmi_payer_purse'] = $_REQUEST['LMI_PAYER_PURSE'];
                $pp_response['paid_amount'] = $payment_amount;
                $pp_response['lmi_sys_invs_no'] = $_REQUEST['LMI_SYS_INVS_NO'];
                $pp_response['lmi_sys_trans_no'] = $_REQUEST['LMI_SYS_TRANS_NO'];
                $pp_response['lmi_sys_trans_date'] = $_REQUEST['LMI_SYS_TRANS_DATE'];
            } else {
                $pp_response['order_status'] = 'F';
                $pp_response['reason_text'] = $reason_text;
            }

            fn_update_order_payment_info($order_id, $pp_response);
            exit;
        }

    } elseif ($mode == 'success') {

        $order_id = $_REQUEST['LMI_PAYMENT_NO'];
        $order_info = fn_get_order_info($order_id);
        $processor_data = fn_get_payment_method_data($order_info['payment_id']);

        $pp_response = array();

        if (!empty($order_info['payment_info']['order_status']) && ($order_info['payment_info']['order_status'] == 'F')) {
            $pp_response = $order_info['payment_info'];
        } else {
            $pp_response['order_status'] = 'P';
            $pp_response['lmi_sys_invs_no'] = $_REQUEST['LMI_SYS_INVS_NO'];
            $pp_response['lmi_sys_trans_no'] = $_REQUEST['LMI_SYS_TRANS_NO'];
            $pp_response['lmi_sys_trans_date'] = $_REQUEST['LMI_SYS_TRANS_DATE'];
        }
        fn_finish_payment($order_id, $pp_response);
        fn_order_placement_routines('route', $order_id);

    } elseif ($mode == 'fail') {

        $order_id = $_REQUEST['LMI_PAYMENT_NO'];
        $order_info = fn_get_order_info($order_id);
        $processor_data = fn_get_payment_method_data($order_info['payment_id']);

        $pp_response = array();
        $pp_response['order_status'] = 'F';
        $pp_response['lmi_sys_invs_no'] = $_REQUEST['LMI_SYS_INVS_NO'];
        $pp_response['lmi_sys_trans_no'] = $_REQUEST['LMI_SYS_TRANS_NO'];
        $pp_response['lmi_sys_trans_date'] = $_REQUEST['LMI_SYS_TRANS_DATE'];

        fn_finish_payment($order_id, $pp_response);
        fn_order_placement_routines('route', $order_id);
    }

} else {

    $url = 'https://merchant.webmoney.ru/lmi/payment.asp';

    $payment_amount = fn_webmoney_get_price_by_payee_purse_type($order_info['total'], $processor_data['processor_params']['lmi_payee_purse']);

    if ($payment_amount == false) {
        fn_set_notification('E', __('error'), __('text_unsupported_currency'));
        $url = fn_url("payment_notification.unsupported_currency?payment=webmoney&order_id=$order_id", AREA, 'current');
        echo <<<EOT
    <form action="{$url}" method="POST" name="process">
    </form>
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

    $LMI_PAYMENT_AMOUNT = $payment_amount;
    //$LMI_PAYMENT_DESC = fn_convert_encoding('UTF-8', 'windows-1251', $processor_data['processor_params']['lmi_payment_desc'] . $order_id);
    $LMI_PAYMENT_DESC = $processor_data['processor_params']['lmi_payment_desc'] . $order_id . ($order_info['repaid'] ? "_{$order_info['repaid']}" : '');

    $LMI_PAYMENT_NO = $order_id;
    $LMI_PAYEE_PURSE = $processor_data['processor_params']['lmi_payee_purse'];
    $LMI_SIM_MODE = $processor_data['processor_params']['lmi_sim_mode'];

    $LMI_RESULT_URL = fn_url("payment_notification.result?payment=webmoney", AREA, 'current');

    $LMI_SUCCESS_URL = fn_url("payment_notification.success?payment=webmoney", AREA, 'current');
    $LMI_SUCCESS_METHOD = '1';

    $LMI_FAIL_URL = fn_url("payment_notification.fail?payment=webmoney", AREA, 'current');
    $LMI_FAIL_METHOD = '1';

    $f_action = fn_payment_url('current', 'webmoney.php');

echo <<<EOT
<form method="post" action="$f_action" name="process">
    <input type="hidden" name ="url" value="{$url}" />
    <input type="hidden" name ="resend" value="Y" />
    <input type="hidden" name ="LMI_PAYMENT_AMOUNT" value="{$LMI_PAYMENT_AMOUNT}" />
    <input type="hidden" name ="LMI_PAYMENT_DESC" value="{$LMI_PAYMENT_DESC}" />
    <input type="hidden" name ="LMI_PAYMENT_NO" value="{$LMI_PAYMENT_NO}" />
    <input type="hidden" name ="LMI_PAYEE_PURSE" value="{$LMI_PAYEE_PURSE}" />
EOT;
if ($processor_data['processor_params']['lmi_mode'] == 1) {
echo <<<EOT
    <input type="hidden" name ="LMI_SIM_MODE" value="{$LMI_SIM_MODE}" />
EOT;
}
echo <<<EOT
    <input type="hidden" name ="LMI_RESULT_URL" value="{$LMI_RESULT_URL}" />
    <input type="hidden" name ="LMI_SUCCESS_URL" value="{$LMI_SUCCESS_URL}" />
    <input type="hidden" name ="LMI_SUCCESS_METHOD" value="{$LMI_SUCCESS_METHOD}" />
    <input type="hidden" name ="LMI_FAIL_URL" value="{$LMI_FAIL_URL}" />
    <input type="hidden" name ="LMI_FAIL_METHOD" value="{$LMI_FAIL_METHOD}" />

EOT;

$msg = __('text_cc_processor_connection', array(
    '[processor]' => 'WebMoney server'
));
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

function fn_webmoney_get_price_by_payee_purse_type ($price, $purse)
{
    $currencies = Registry::get('currencies');

    $purse_type = substr($purse, 0, 1);

    if ($purse_type == 'R') {
        $currency = 'RUB';
    } elseif ($purse_type == 'Z') {
        $currency = 'USD';
    } elseif ($purse_type == 'E') {
        $currency = 'EUR';
    } elseif ($purse_type == 'U') {
        $currency = 'UAH';
    } elseif ($purse_type == 'B') {
        $currency = 'BYR';
    } elseif ($purse_type == 'Y') {
        $currency = 'UZS';
    } else {
        return false;
    }

    if (empty($currencies[$currency])) {
        return false;
    }

    return fn_format_price($price / $currencies[$currency]['coefficient'], CART_PRIMARY_CURRENCY, 2, false);
}
