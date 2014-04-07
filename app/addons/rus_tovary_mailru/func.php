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

// rus_build_mailru dbazhenov

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_mailru_prepare_offer($_result, $options, $enclosure)
{
    $yml = array();
    $products = '';
    foreach ($_result as $key => $data) {
        $products .= $data['product_id'] . ',';
    }
    $products = explode(',', substr($products, 0, -1));

    $yml_data = db_get_hash_array("SELECT product_id, mailru_brand, mailru_mcp FROM ?:products WHERE product_id IN (?n)", 'product_id', $products);
    $products_zero_price = '';

    foreach ($_result as $data) {

        if ($data['status'] != 'A') {
            continue;
        }

        //Products with zero price could not be imported into Yandex.
        $price = !floatval($data['price']) ? fn_parse_price($data['price']) : $data['price'];

        if (empty($price)) {
            $products_zero_price .= $data['product'] . ', ';
            continue;
        }

        $brand = !empty($yml_data[$data['product_id']]['mailru_brand']) ? $yml_data[$data['product_id']]['mailru_brand'] : __('mailru_vendor_not_specified');
        $url = fn_url($data['product_url']);
        $url = htmlentities($url);

        $offer_attrs = '';
        if (!empty($yml_data[$data['product_id']]['mailru_mcp'])) {
            $offer_attrs .= ' mpc="' . $yml_data[$data['product_id']]['mailru_mcp'] . '"';
        }

        if (CART_PRIMARY_CURRENCY == "RUB") {
                $currency_id = "RUR";
        } else {
                $currency_id = CART_PRIMARY_CURRENCY ;
        }

        $yml[] = '  <offer id="' . $data['product_id'] . '" type="good" ' . $offer_attrs . '>';
        $yml[] = '      <url>' . $url . '</url>';
        $yml[] = '      <price>' . $price . '</price>';
        $yml[] = '      <price2>' . $price . '</price2>';
        $yml[] = '      <currencyId>' . $currency_id . '</currencyId>';
        $yml[] = '      <categoryId>' . $data['category'] . '</categoryId>';
        $yml[] = '      <picture>' . $data['image_url'] . '</picture>';
        $yml[] = '      <vendor>' . $brand . '</vendor>';
        $yml[] = '      <name>' . htmlspecialchars($data['product_name']) . '</name>';
        $yml[] = '      <description>' . $data['full_description'] . '</description>';
        $yml[] = '      <delivery_type>' . ((Registry::get('settings.Shippings.disable_shipping') == 'Y') ? 0 : 1) . '</delivery_type>';
        if (Registry::get('settings.Shippings.disable_shipping') != 'Y' && $data['is_edp'] == 'N') {
            $delivery_price = 0;
            if ($data['free_shipping'] == 'N') {
                if ($data['shipping_freight'] > 0) {
                    $delivery_price = $data['shipping_freight'];
                } else {
                    // + means that shipping price depends on some facts and cannot be calculated
                    $delivery_price = '+';
                }
            }
            $yml[] = '      <delivery_price>' . $delivery_price . '</delivery_price>';
        }
        $yml[] = '  </offer>';
    }

    if ($products_zero_price) {
        fn_set_notification('W', __('error'), __('mailru_export_unsuccessfull') . $products_zero_price);
    }

    fn_mailru_write_yml($options['filename'], 'a+', $yml);

    return true;
}

function fn_mailru_check_currencies($currency)
{
    //only these currencies available
    $currencies = array(
        'RUB',
        'USD',
        'EUR'
    );

    return in_array($currency, $currencies);
}

function fn_mailru_put_bottom($filename)
{
    $yml[] = '</offers>';
    $yml[] = '</shop>';
    $yml[] = '</torg_price>';

    fn_mailru_write_yml($filename, 'a+', $yml);

    return true;
}

function fn_mailru_put_header($filename)
{
    $shop_name = Registry::get('addons.rus_tovary_mailru.shop_name');
    if (empty($shop_name)) {
        if (fn_allowed_for('ULTIMATE')) {
            $company_id = Registry::ifGet('runtime.company_id', fn_get_default_company_id());
            $shop_name = fn_get_company_name($company_id);
        } else {
            $shop_name = Registry::get('settings.Company.company_name');
        }
    }

    $yml = array();
    $yml[] = '<?xml version="1.0" encoding="windows-1251"?>';
    $yml[] = '<torg_price date="' . date('Y-m-d G:i') . '">';
    $yml[] = '<shop>';
    $yml[] = '<shopname>' . $shop_name . '</shopname>';
    $yml[] = '<company>' . Registry::get('settings.Company.company_name') . '</company>';
    $yml[] = '<url>' . Registry::get('config.http_location') . '</url>';
    $yml[] = '<currencies>';

    fn_mailru_write_yml($filename, 'w+', $yml);

    $currencies = Registry::get('currencies');
    foreach ($currencies as $cur) {
        if (fn_mailru_check_currencies($cur['currency_code'])) {
            if ($cur['currency_code'] == "RUB") {
                    $cur['currency_code'] = "RUR";
            }
            $yml[] = '	<currency id="' . $cur['currency_code'] . '" rate="' . $cur['coefficient'] . '"/>';
        }
    }
    $yml[] = '</currencies>';
    fn_mailru_write_yml($filename, 'a+', $yml);

    $params = array (
        'simple' => false,
        'plain' => true,
    );

    if (fn_allowed_for('ULTIMATE') && is_numeric($shop_name)) {
        $params['company_ids'] = $shop_name;
    }

    list($categories_tree, ) = fn_get_categories($params);

    $yml[] = '<categories>';
    foreach ($categories_tree as $cat) {
        if (isset($cat['category_id'])) {
                $yml[] = '	<category id="' . $cat['category_id'] . '" parentId="' . $cat['parent_id'] . '">' . htmlspecialchars($cat['category']) . '</category>';
        }
    }
    $yml[] = '</categories>';
    $yml[] = '<offers>';

    fn_mailru_write_yml($filename, 'a+',$yml);
}

function fn_mailru_write_yml($filename, $mode, &$yml)
{
    $path = fn_get_files_dir_path();

    if (!is_dir($path)) {
        fn_mkdir($path);
    }

    $fd = fopen($path . $filename, $mode);
    if ($fd) {
        foreach ($yml as $key => $content) {
            fwrite($fd, fn_convert_encoding('UTF-8', 'windows-1251', $content . "\n", 'S'));
            unset($yml[$key]);
        }
        fclose($fd);
        @chmod($path . $filename, DEFAULT_FILE_PERMISSIONS);
    }
}

function fn_mailru_check_currency()
{
    $currencies = Registry::get('currencies');

    if (empty($currencies[CURRENCY_RUB]) || $currencies[CURRENCY_RUB]['is_primary'] != 'Y') {
        fn_set_notification('W', __('warning'), __('core.currency_is_absent', array(
            '[code]' => CURRENCY_RUB
        )));
    }
}
