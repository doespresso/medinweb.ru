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

// rus_build_exim_1C dbazhenov

use Tygh\Registry;

$_GET['allow_initialization'] = true;

define('AREA', 'A');
require './../../../init.php';

fn_load_addon('rus_exim_1c');

if (Registry::get('addons.rus_exim_1c.status') != 'A') {
    fn_echo('ADDON DISABLED');
    exit;
}

if (!empty($_SERVER['PHP_AUTH_USER'])) {
    $_data['user_login'] = $_SERVER['PHP_AUTH_USER'];
} else {
    fn_exim_1c_auth_error(EMPTY_USER_1C);
    exit;
}

$_auth_1c = array();
list($status, $user_data, $user_login, $password, $salt) = fn_auth_routines($_data, $_auth_1c);

if (empty($_SERVER['PHP_AUTH_USER']) || !($user_login == $_SERVER['PHP_AUTH_USER'] && $user_data['password'] == fn_generate_salted_password($_SERVER['PHP_AUTH_PW'], $salt))) {
    fn_exim_1c_auth_error(WRONG_KEY_1C);
    exit;
}

$cookie = COOKIE_1C;
$cookie_id = uniqid();
$file_limit = FILE_LIMIT;
$type = $_REQUEST['type'];
$mode = $_REQUEST['mode'];

$filename = (!empty($_REQUEST['filename'])) ? fn_basename($_REQUEST['filename']) : '';

if ($_REQUEST['type'] == 'test') {
    sleep($_REQUEST['time'] * 60);
    fn_echo('success');
    exit;
}

if ($type == 'catalog') {
    if ($mode == 'checkauth') {
        fn_exim_1c_checkauth($cookie, $cookie_id);
    } elseif ($mode == 'init') {
        fn_echo("zip=no\n");
        fn_echo("file_limit=$file_limit\n");
        fn_exim_1c_clear_1c_dir(DIR_C);
    } elseif ($mode == 'file') {
        if (fn_exim_1c_get_external_file(DIR_C, $filename) === false) {
            fn_echo("failure");
            exit;
        }
        fn_echo("success\n");
    } elseif ($mode == 'import') {
        $fileinfo = pathinfo($filename);
        $xml = @simplexml_load_file(DIR_C . $filename);
        if ($xml === false) {
            fn_echo("failure");
            exit;
        }
        if ($fileinfo['filename'] == 'import') {
            if (Registry::get('addons.rus_exim_1c.exim_1c_export_check_prices') != 'Y') {
                if (isset($xml->Классификатор)) {
                    fn_exim_1c_import_categories($xml->Классификатор);
                    fn_exim_1c_collect_features($xml->Классификатор);
                }
                if (isset($xml->Каталог)) {
                    fn_exim_1c_import_products($xml->Каталог);
                }
            }
        } elseif ($fileinfo['filename'] == 'offers') {
            if (isset($xml->ПакетПредложений)) {
                if (Registry::get('addons.rus_exim_1c.exim_1c_export_check_prices') != 'Y') {
                    $changes = strval($xml->ПакетПредложений->attributes()->СодержитТолькоИзменения);
                    fn_exim_1c_import_offers($xml->ПакетПредложений, $changes);
                } 
            }
        }
        fn_echo("success\n");
    }
    
} elseif (($type == 'sale') && (Registry::get('addons.rus_exim_1c.exim_1c_export_check_prices') != 'Y')) {
    if ($mode == 'checkauth') {
        fn_exim_1c_checkauth($cookie, $cookie_id);
    } elseif ($mode == 'init') {
        fn_echo("zip=no\n");
        fn_echo("file_limit=$file_limit\n");

    //export 1C orders to CS-Cart
    } elseif ($mode == 'file') {
        if (fn_exim_1c_get_external_file(DIR_C, $filename) === false) {
            fn_echo("failure");
            exit;
        }
        $xml = @simplexml_load_file(DIR_C . $filename);
        if (isset($xml->Документ)) {
            fn_exim_1c_import_orders($xml);
        }
        fn_echo("success\n");

    //export CS-Cart orders to 1C
    } elseif ($mode == 'query') {
        $params['company_name'] = true;
        if (Registry::get('addons.rus_exim_1c.exim_1c_export_add_true_orders') == 'Y') {
            $statuses = Registry::get('addons.rus_exim_1c.exim_1c_export_order_statuses');
            if (!empty($statuses)) {
                foreach($statuses as $key => $status) {
                    $params['status'][] = $key;
                }
            }
        }
        list($orders, $search) = fn_get_orders($params);
        header("Content-type: text/xml; charset=utf-8");
        fn_echo("\xEF\xBB\xBF");
        fn_echo("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");
        fn_echo("    <КоммерческаяИнформация ВерсияСхемы=\"2.05\" ДатаФормирования=\"".date("Y-m-d")."\">\n");
        foreach ($orders as $k => $data) {
            $order_data = fn_get_order_info($data['order_id']);
            $order_data = fn_exim_1c_data_encode($order_data);
            if (empty($order_data['secondary_currency']) || $order_data['secondary_currency'] == 'RUR' || $order_data['secondary_currency'] == 'RUB') {
                $currency = __('1c_export_currency');
            } else {
                $currency = $order_data['secondary_currency'];
            }
            fn_echo("        <Документ>\n");
            fn_echo("            <Ид>$data[order_id]</Ид>\n");
            fn_echo("            <Номер>$data[order_id]</Номер>\n");
            fn_echo("            <Дата>".date('Y-m-d', $data['timestamp'])."</Дата>\n");
            fn_echo("            <ХозОперация>Заказ товара</ХозОперация>\n");
            fn_echo("            <Роль>Продавец</Роль>\n");
            fn_echo("            <Валюта>$currency</Валюта>\n");
            fn_echo("            <Курс>1</Курс>\n");
            fn_echo("            <Сумма>$data[total]</Сумма>\n");

            //customer info
            fn_echo("            <Контрагенты>\n");
            $o_cust = fn_exim_1c_build_customer_info($order_data);
            foreach ($o_cust as $_o_cust) {
                fn_echo($_o_cust);
            }
            fn_echo("            </Контрагенты>\n");
            fn_echo("            <Время>".date('H:i:s', $order_data['timestamp'])."</Время>\n");

            //order_comment
            if (!empty($order_data['notes'])) {
                $notes = htmlspecialchars(db_get_field("SELECT notes FROM ?:orders WHERE order_id = ?i", $data['order_id']), ENT_QUOTES);
                fn_echo("            <Комментарий>$notes</Комментарий>\n");
            } else {
                fn_echo("            <Комментарий/>\n");
            }

            //order items
            $o_products = fn_exim_1c_build_order_products($order_data);
            fn_echo("            <Товары>\n");
            foreach ($o_products as $_o_products) {
                fn_echo($_o_products);
            }
            fn_echo("            </Товары>\n");

            //order status information
            fn_echo("<ЗначенияРеквизитов>\n");
            fn_echo("    <ЗначениеРеквизита>\n");
            if ($order_data['status'] == 'O') {
                fn_echo("        <Наименование>Статус заказа</Наименование>\n");
                fn_echo("        <Значение>[$order_data[status]] Принят</Значение>\n");
            } elseif ($order_data['status'] == 'B') {
                fn_echo("        <Наименование>Статус заказа</Наименование>\n");
                fn_echo("        <Значение>[$order_data[status]] Отложен</Значение>\n");
            } elseif ($order_data['status'] == 'P') {
                fn_echo("        <Наименование>Статус заказа</Наименование>\n");
                fn_echo("        <Значение>[$order_data[status]] Обработан</Значение>\n");
            } elseif ($order_data['status'] == 'C') {
                fn_echo("        <Наименование>Статус заказа</Наименование>\n");
                fn_echo("        <Значение>[$order_data[status]] Выполнен</Значение>\n");
            } elseif (in_array($order_data['status'], array('D', 'F', 'I'))) {
                fn_echo("        <Наименование>Отменен</Наименование>\n");
                fn_echo("        <Значение>true</Значение>\n");
            }
            fn_echo("        </ЗначениеРеквизита>\n");
            $payment_name = db_get_field("SELECT payment FROM ?:payment_descriptions WHERE payment_id = ?i AND lang_code = ?s", $order_data['payment_method']['payment_id'], CART_LANGUAGE);
            if (!empty($payment_name)) {
                fn_echo("        <ЗначениеРеквизита>\n");
                fn_echo("            <Наименование>Метод оплаты</Наименование>\n");
                fn_echo("            <Значение>$payment_name</Значение>\n");
                fn_echo("        </ЗначениеРеквизита>\n");
            }
            fn_echo("        </ЗначенияРеквизитов>\n");
            fn_echo("    </Документ>\n");
        }
        fn_echo("</КоммерческаяИнформация>\n");
    } elseif ($mode == 'success') {
        fn_echo("success");
    }
}
