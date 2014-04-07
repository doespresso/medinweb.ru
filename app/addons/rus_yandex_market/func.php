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

// rus_build_yandex_market

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_rus_yandex_market_url_auto()
{
    $key = Registry::get('addons.rus_yandex_market.cron_key');
    $company_id = Registry::get('runtime.simple_ultimate') ? Registry::get('runtime.forced_company_id') : Registry::get('runtime.company_id');
    $url = fn_url('exim.yandex_cron_export?cron_key=' . urlencode($key) . '&switch_company_id=' . $company_id , 'A');
    $text = __('yml_export_auto_info') . '<br/ >' . $url ;

    //if ($company_id == 0) {
        $text =  '<br/ ><br/ >' . __('yml_export_auto_info_header') . '<br/ ><br/ >' . $text . '<br /><br/ >' . __('yml_export_auto_info_end') . '<br /><br/ >' . __('yml_export_auto_info_bottom') ;
    //}

    $file = fn_get_files_dir_path() . Registry::get('addons.rus_yandex_market.cron_filename');
    $url_to_file = Registry::get('config.current_location') . '/var/files/' . $company_id . '/' . Registry::get('addons.rus_yandex_market.cron_filename');

    $text .= '<br/ ><br/ >' . __('yml_export_auto_info_file') . '<br/ >' . $file . '<br/ ><a href =' . $url_to_file . '>' . $url_to_file . '</a>';

    return $text;
}

function fn_settings_variants_addons_rus_yandex_market_feature_for_brand()
{
    $join = "LEFT JOIN ?:product_features_descriptions as b ON a.feature_id = b.feature_id";
    $brands = db_get_hash_single_array("SELECT a.feature_id, b.description FROM ?:product_features as a $join WHERE a.feature_type = ?s AND b.lang_code = ?s", array('description', 'description'), "E", DESCR_SL);

    return $brands;
}

function fn_rus_yandex_market_get_disable_categories()
{
    static $disable_categories = null;

    if (!isset($disable_categories_full_list)) {
        $disable_categories_list = db_get_fields("SELECT id_path FROM ?:categories WHERE yml_disable_cat = 'Y'");

        if (!empty($disable_categories_list)) {
            $like_path = "id_path LIKE '" . implode("%' OR id_path LIKE '", $disable_categories_list) . "%'"; // id_path LIKE '166/196%' OR id_path LIKE '203/204/212%' ...
            $disable_categories = db_get_fields("SELECT category_id FROM ?:categories WHERE ?p", $like_path);
        } else {
            $disable_categories = array();
        }
    }

    return $disable_categories;
}

function fn_yandex_market_prepare_offer($products_data, $options, $enclosure)
{
    $error_products = array(
        'products_zero_price' => '',
        'disabled_products' => '',
        'out_of_stock' => '',
        'empty_brand' => '',
        'empty_model' => '',
        'disable_cat_list' => '',
        'disable_cat_list_d' => ''
    );

    $addon_settings = Registry::get('addons.rus_yandex_market');
    $export_type = $addon_settings['export_type'];

    list($products_data, $product_ids) = fn_yandex_market_filter_products($products_data, $addon_settings, $error_products);

    if (empty($products_data)) {
        return true;
    }

    $visible_categories = fn_yandex_market_get_visible_categories($addon_settings);
    $market_categories = fn_yandex_market_get_market_categories($addon_settings);

    $yml_offers = array();
    $yml_products_data = db_get_hash_array("SELECT product_id, yml_brand, yml_origin_country, yml_store, yml_pickup, yml_delivery, yml_bid, yml_cbid, yml_model, yml_sales_notes, yml_type_prefix, yml_market_category FROM ?:products WHERE product_id IN (?n)", 'product_id', $product_ids);

    foreach ($products_data as $product) {

        if ($addon_settings['disable_cat_d'] == "Y") {
            if (!in_array($product['CategoryId'], $visible_categories)) {
                $error_products['disable_cat_list_d'] .= $product['Product name'] . ', ';

                continue;
            }
        }

        $brand = fn_yandex_market_get_brand($product, $yml_products_data[$product['Product id']], $addon_settings);

        if ($export_type == 'vendor_model') {
            if (empty($brand)) {
                $error_products['empty_brand'] .= $product['Product name'] . ', ';

                continue;
            }

            if (empty($yml_products_data[$product['Product id']]['yml_model'])) {
                $error_products['empty_model'] .= $product['Product name'] . ', ';

                continue;
            }
        }

        fn_yandex_market_build_offer($product, $yml_products_data[$product['Product id']], $addon_settings, $brand, $market_categories, $yml_offers);

        $_SESSION['yandex_export_count']++;
    }

    if (!empty($error_products) && $addon_settings['notify_disable_products'] == "Y") {
        foreach ($error_products as $key => $value) {
            if (!empty($value)) {
                fn_set_notification('W', __('error'), __('yml_export_unsuccessfull_' . $key) . $value);
            }
        }
    }

    fn_yandex_market_write_yml($options['filename'], 'a+', fn_yandex_market_array_to_yml($yml_offers));

    return true;
}

function fn_yandex_market_filter_products($products_data, $addon_settings, $error_products)
{
    $disable_categories = fn_rus_yandex_market_get_disable_categories();

    $product_ids = array();
    //$products_category_ids = array();
    $products_filter = array();

    foreach ($products_data as $product) {
        $price = !floatval($product['Price']) ? fn_parse_price($product['Price']) : $product['Price'];

        if (empty($price) || $price == '0') {
            $error_products['products_zero_price'] .= $product['Product name'] . ', ';
            continue;
        }

        if (in_array($product['CategoryId'], $disable_categories)) {
            $error_products['disable_cat_list'] .= $product['Product name'] . ', ';
            continue;
        }

        $tracking = db_get_field("SELECT tracking FROM ?:products WHERE product_id = ?i", $product['Product id']);

        if ($tracking == 'O') {
            $data['Amount'] = db_get_field("SELECT SUM(amount) FROM ?:product_options_inventory WHERE product_id = ?i", $data['Product id']);
        }

        if ($addon_settings['export_stock'] == "Y" && $product['Amount'] <= 0) {
            $error_products['out_of_stock'] .= $product['Product name'] . ', ';
            continue;
        }

        $product_ids[] = $product['Product id'];
        //$products_category_ids[] = $product['CategoryId'];
        $products_filter[] = $product;
    }

    return array($products_filter, $product_ids);
}

function fn_yandex_market_get_visible_categories($addon_settings)
{
    $visible_categories = null;

    if (!isset($visible_categories)) {
        $visible_categories = array();

        if ($addon_settings['disable_cat_d'] == "Y") {
            $params['plain'] = true;
            $params['status'] = array('A', 'H');
            list($categories_tree, ) = fn_get_categories($params);

            if (!empty($categories_tree)) {
                foreach ($categories_tree as $value) {
                    if (isset($value['category_id'])) {
                        $visible_categories[] = $value['category_id'];
                    }
                }
            }
        }
    }

    return $visible_categories;
}

function fn_yandex_market_get_market_categories($addon_settings)
{
    static $market_categories = null;

    if (!isset($market_categories)) {
        $market_categories = array();

        if ($addon_settings['market_category'] == "Y" && $addon_settings['market_category_object'] == "category") {
            $market_categories = db_get_hash_single_array("SELECT category_id, yml_market_category FROM ?:categories WHERE yml_market_category != ?s", array('category_id', 'yml_market_category'), '');
        }
    }

    return $market_categories;
}

function fn_yandex_market_get_brand($product, $yml_product_data, $addon_settings)
{
    $brand = '';

    if (!empty($yml_product_data['yml_brand'])) {
        $brand = $yml_product_data['yml_brand'];

    } elseif (!empty($product['Product features'])) {

        $feature_for_brand = $addon_settings['feature_for_brand'];
        $brands = array();

        if (!empty($feature_for_brand)) {

            foreach ($feature_for_brand as $brand_name => $check) {
                if ($check == "Y") {
                    $brands[] = $brand_name;
                }
            }
            $brands = array_unique($brands);
        }

        foreach ($product['Product features'] as $feature) {
            if (in_array($feature['description'], $brands)) {
                $brand = $feature['value'];
                break;
            }
        }
    }

    return $brand;
}

function fn_yandex_market_build_offer($product, $yml_product_data, $addon_settings, $brand, $market_categories, &$yml_offers)
{
    $export_type = $addon_settings['export_type'];

    //True or false should be a string value
    $avail = fn_is_accessible_product(array('product_id' => $product['Product id'])) ? 'true' : 'false';

    $offer_attrs = '';
    if (!empty($yml_product_data['yml_bid'])) {
        $offer_attrs .= '@bid=' . $yml_product_data['yml_bid'];
    }

    if (!empty($yml_product_data['yml_cbid'])) {
        $offer_attrs .= '@cbid=' . $yml_product_data['yml_cbid'];
    }

    if (CART_PRIMARY_CURRENCY != "RUB") {
	    $price = fn_russian_pack_format_price($product['Price'], "RUB");
	    $price = !floatval($price) ? fn_parse_price($price) : $price;

    } else {
	    $price = !floatval($product['Price']) ? fn_parse_price($product['Price']) : $product['Price'];
    }

    $image_url = fn_yandex_market_c_encode($product['Image url']);
    $s = urlencode("–");
    $image_url = str_replace("–", $s, $image_url);

    $url = (!empty($product['Product url'])) ? fn_url($product['Product url']) : '';
    if (!empty($url)) {
        $yml_data['url'] = $url;
    }

    $yml_data['price'] = $price;
    $yml_data['currencyId'] = "RUB";
    $yml_data['categoryId@type=Own'] = $product['CategoryId'];
	if ($addon_settings['market_category'] == "Y") {

        if ($addon_settings['market_category_object'] == "category" && isset($market_categories[$product['CategoryId']])) {
            $yml_data['market_category'] = $market_categories[$product['CategoryId']];

        } elseif ($addon_settings['market_category_object'] == "product" && !empty($yml_product_data['yml_market_category'])) {
            $yml_data['market_category'] = $yml_product_data['yml_market_category'];
        }

    }
    $yml_data['picture'] = $image_url;
    $yml_data['store'] = ($yml_product_data['yml_store'] == 'Y' ? 'true' : 'false');
    $yml_data['pickup'] = ($yml_product_data['yml_pickup'] == 'Y' ? 'true' : 'false');
    $yml_data['delivery'] = ($yml_product_data['yml_delivery'] == 'Y' ? 'true' : 'false');

    $type = '';
    if ($export_type == 'vendor_model') {

        $type = '@type=vendor.model';

        if ($addon_settings['type_prefix'] == "Y") {
            if (!empty($yml_product_data['yml_type_prefix'])) {
                $yml_data['typePrefix'] = $yml_product_data['yml_type_prefix'];

            } else {
                $yml_data['typePrefix'] = $product['Category'];
            }
        }

        $yml_data['vendor'] = $brand;
        $yml_data['vendorCode'] = $product['Product code'];
        $yml_data['model'] = !empty($yml_product_data['yml_model']) ? $yml_product_data['yml_model'] : '';

    } elseif ($export_type == 'simple') {
        $yml_data['name'] = $product['Product name'];

        if (!empty($brand)) {
            $yml_data['vendor'] = $brand;
        }

        $yml_data['vendorCode'] = $product['Product code'];
    }

    if (!empty($product['Product description'])) {
        $yml_data['description'] = $product['Product description'];
    }

    if (!empty($yml_product_data['yml_sales_notes'])) {
        $yml_data['sales_notes'] = $yml_product_data['yml_sales_notes'];
    }

    if (!empty($yml_product_data['yml_origin_country']) && fn_yandex_market_check_countries($yml_product_data['yml_origin_country'])) {
        $yml_data['country_of_origin'] = $yml_product_data['yml_origin_country'];
    }

    if (!empty($product['Product features'])) {
        foreach ($product['Product features'] as $feature) {
            $yml_data['param@name=' . $feature['description']] = $feature['value'];
        }
    }

    $yml_offers['offer@id=' . $product['Product id'] . $type . '@available=' . $avail . $offer_attrs] = $yml_data;
}

function fn_yandex_market_check_currencies($currency)
{
    $currencies = array(
        'RUR',
        'RUB',
        'UAH',
        'BYR',
        'KZT',
        'USD',
        'EUR'
    );

    return in_array($currency, $currencies);
}

function fn_yandex_market_put_bottom($filename)
{
    $yml = array(
        '</offers>',
        '</shop>',
        '</yml_catalog>'
    );

    fn_yandex_market_write_yml($filename, 'a+', $yml);

    if (!defined('AJAX_REQUEST')) {
        $msg = str_replace(
            '[count]',
            $_SESSION['yandex_export_count'],
            __('yml_export_export_true')
        );
        //fn_set_notification('N', __('notice'), $msg, 'S');
        fn_echo("<br/>" . $msg);
    }
    unset($_SESSION['yandex_export_count']);

    return true;
}

function fn_yandex_market_put_header($filename)
{
    $_SESSION['yandex_export_count'] = 0;
    $shop_name = Registry::get('addons.rus_yandex_market.shop_name');

    if (empty($shop_name)) {
        if (fn_allowed_for('ULTIMATE')) {
            $company_id = Registry::ifGet('runtime.company_id', fn_get_default_company_id());
            $shop_name = fn_get_company_name($company_id);
        } else {
            $shop_name = Registry::get('settings.Company.company_name');
        }
    }

    $shop_name = strip_tags($shop_name);

    $yml_header = array(
        '<?xml version="1.0" encoding="' . Registry::get('addons.rus_yandex_market.export_encoding') . '"?>',
        '<!DOCTYPE yml_catalog SYSTEM "shops.dtd">',
        '<yml_catalog date="' . date('Y-m-d G:i') . '">',
        '<shop>'
    );

    $yml_data = array(
        'name' => $shop_name,
        'company' => Registry::get('settings.Company.company_name'),
        'url' => Registry::get('config.http_location'),
    );

    fn_yandex_market_build_currencies($yml_data);

    fn_yandex_market_build_categories($yml_data);

    $yml = implode("\n", $yml_header) . "\n" . fn_yandex_market_array_to_yml($yml_data) . "<offers>\n";

    fn_yandex_market_write_yml($filename, 'w+', $yml);
}

function fn_yandex_market_build_currencies(&$yml_data)
{
    $currencies = Registry::get('currencies');

    if (CART_PRIMARY_CURRENCY != "RUB") {

        $rub_coefficient = !empty($currencies['RUB']) ? $currencies['RUB']['coefficient'] : 1;
        $primary_coefficient = $currencies[CART_PRIMARY_CURRENCY]['coefficient'];

        foreach ($currencies as $cur) {
            if (fn_yandex_market_check_currencies($cur['currency_code']) && $cur['status'] == 'A') {

                if ($cur['currency_code'] == "RUB") {
                    $coefficient = '1.0000';
                    $yml_data['currencies']['currency@id=' . $cur['currency_code'] . '@rate=' . $coefficient] = '';

                } else {
                    $coefficient = $cur['coefficient'] * $primary_coefficient / $rub_coefficient;
                    $yml_data['currencies']['currency@id=' . $cur['currency_code'] . '@rate=' . $coefficient] = '';
                }
            }
        }

    } else {
        foreach ($currencies as $cur) {
            if (fn_yandex_market_check_currencies($cur['currency_code']) && $cur['status'] == 'A') {
                $yml_data['currencies']['currency@id=' . $cur['currency_code'] . '@rate=' . $cur['coefficient']] = '';
            }
        }
    }
}

function fn_yandex_market_build_categories(&$yml_data)
{
    $params = array (
        'simple' => false,
        'plain' => true,
    );

    if (Registry::get('addons.rus_yandex_market.disable_cat_d') == "Y") {
        $params['status'] = array('A', 'H');
    }

    if (fn_allowed_for('ULTIMATE')) {
        $params['company_ids'] = Registry::ifGet('runtime.company_id', fn_get_default_company_id());
    }

    $disable_cat_full_list = fn_rus_yandex_market_get_disable_categories();

    list($categories_tree, ) = fn_get_categories($params);

    foreach ($categories_tree as $cat) {
        if (isset($cat['category_id']) && !in_array($cat['category_id'], $disable_cat_full_list)) {

            if ($cat['parent_id'] == 0) {
                $yml_data['categories']['category@id=' . $cat['category_id']] = $cat['category'];

            } else {
                $yml_data['categories']['category@id=' . $cat['category_id'] . '@parentId=' . $cat['parent_id']] = $cat['category'];
            }
        }
    }
}

function fn_yandex_market_c_encode($s)
{
    $rep = array(
        " "=> "%20",
        "а"=>"%D0%B0", "А"=>"%D0%90",
        "б"=>"%D0%B1", "Б"=>"%D0%91",
        "в"=>"%D0%B2", "В"=>"%D0%92",
        "г"=>"%D0%B3", "Г"=>"%D0%93",
        "д"=>"%D0%B4", "Д"=>"%D0%94",
        "е"=>"%D0%B5", "Е"=>"%D0%95",
        "ё"=>"%D1%91", "Ё"=>"%D0%81",
        "ж"=>"%D0%B6", "Ж"=>"%D0%96",
        "з"=>"%D0%B7", "З"=>"%D0%97",
        "и"=>"%D0%B8", "И"=>"%D0%98",
        "й"=>"%D0%B9", "Й"=>"%D0%99",
        "к"=>"%D0%BA", "К"=>"%D0%9A",
        "л"=>"%D0%BB", "Л"=>"%D0%9B",
        "м"=>"%D0%BC", "М"=>"%D0%9C",
        "н"=>"%D0%BD", "Н"=>"%D0%9D",
        "о"=>"%D0%BE", "О"=>"%D0%9E",
        "п"=>"%D0%BF", "П"=>"%D0%9F",
        "р"=>"%D1%80", "Р"=>"%D0%A0",
        "с"=>"%D1%81", "С"=>"%D0%A1",
        "т"=>"%D1%82", "Т"=>"%D0%A2",
        "у"=>"%D1%83", "У"=>"%D0%A3",
        "ф"=>"%D1%84", "Ф"=>"%D0%A4",
        "х"=>"%D1%85", "Х"=>"%D0%A5",
        "ц"=>"%D1%86", "Ц"=>"%D0%A6",
        "ч"=>"%D1%87", "Ч"=>"%D0%A7",
        "ш"=>"%D1%88", "Ш"=>"%D0%A8",
        "щ"=>"%D1%89", "Щ"=>"%D0%A9",
        "ъ"=>"%D1%8A", "Ъ"=>"%D0%AA",
        "ы"=>"%D1%8B", "Ы"=>"%D0%AB",
        "ь"=>"%D1%8C", "Ь"=>"%D0%AC",
        "э"=>"%D1%8D", "Э"=>"%D0%AD",
        "ю"=>"%D1%8E", "Ю"=>"%D0%AE",
        "я"=>"%D1%8F", "Я"=>"%D0%AF"
    );

    $s = strtr($s, $rep);

    return $s;
} 

function fn_yandex_market_write_yml($filename, $mode, $yml)
{
    $path = fn_get_files_dir_path();

    if (!is_dir($path)) {
        fn_mkdir($path);
    }

    $fd = fopen($path . $filename, $mode);

    if ($fd) {

        if (!is_array($yml)) {

            if (Registry::get('addons.rus_yandex_market.export_encoding') == 'windows-1251') {
                $yml = fn_convert_encoding('UTF-8', 'windows-1251', $yml, 'S');
            }

            fwrite($fd, $yml);

        } else {
            foreach ($yml as $key => $content) {

                $content = $content . "\n";

                if (Registry::get('addons.rus_yandex_market.export_encoding') == 'windows-1251') {
                    $content = fn_convert_encoding('UTF-8', 'windows-1251', $content, 'S');
                }

                fwrite($fd, $content);
            }
        }

        fclose($fd);
        @chmod($path . $filename, DEFAULT_FILE_PERMISSIONS);
    }
}

function fn_yandex_market_check_currency()
{
    $currencies = Registry::get('currencies');
    if (empty($currencies['RUR']) && empty($currencies[CURRENCY_RUB])) {
        fn_set_notification('W', __('warning'), __('core.currency_is_absent', array(
            '[code]' => CURRENCY_RUB
        )));
    }
}

function fn_get_market_category()
{
    $schema = fn_get_schema('yandex', 'market_category', 'php', true);

    return $schema;
}

function fn_yandex_market_check_countries($country)
{
    //List of available countries according to http://partner.market.yandex.ru/pages/help/Countries.pdf
    $countries = array(
        'Украина',
        'Беларусь',
        'Молдова',
        'Казахстан',
        'Узбекистан',
        'Киргизия',
        'Таджикистан',
        'Туркмения',
        'Азербайджан',
        'Армения',
        'Грузия',
        'Россия',
        'Австрия',
        'Албания',
        'Андорра',
        'Бельгия',
        'Болгария',
        'Босния и Герцеговина',
        'Ватикан',
        'Великобритания',
        'Венгрия',
        'Германия',
        'Гибралтар',
        'Греция',
        'Дания',
        'Ирландия',
        'Исландия',
        'Испания',
        'Италия',
        'Кипр',
        'Лихтенштейн',
        'Люксембург',
        'Македония',
        'Мальта',
        'Монако',
        'Нидерланды',
        'Норвегия',
        'Польша',
        'Португалия',
        'Румыния',
        'Сан-Марино',
        'Сербия',
        'Словакия',
        'Словения',
        'Литва',
        'Эстония',
        'Латвия',
        'Финляндия',
        'Франция',
        'Хорватия',
        'Черногория',
        'Чехия',
        'Швейцария',
        'Швеция',
        'Афганистан',
        'Бангладеш',
        'Израиль',
        'Объединенные Арабские Эмираты',
        'Турция',
        'Египет',
        'Бахрейн',
        'Иордания',
        'Ирак',
        'Иран',
        'Кувейт',
        'Ливан',
        'Саудовская Аравия',
        'Сирия',
        'Катар',
        'Йемен',
        'Оман',
        'Бруней',
        'Вьетнам',
        'Индия',
        'Индонезия',
        'Камбоджа',
        'Китай',
        'Лаос',
        'Малайзия',
        'Мальдивы',
        'Монголия',
        'Мьянма',
        'Непал',
        'Пакистан',
        'Северная Корея',
        'Сингапур (страна)',
        'Таиланд',
        'Филиппины',
        'Шри-Ланка',
        'Южная Корея',
        'Япония',
        'Бутан',
        'Восточный Тимор',
        'Алжир',
        'Ангола',
        'Бенин',
        'Ботсвана',
        'Буркина-Фасо',
        'Бурунди',
        'Габон',
        'Гамбия',
        'Гана',
        'Гвинея',
        'Гвинея-Бисау',
        'Демократическая Республика Конго',
        'Замбия',
        'Западная Сахара',
        'Зимбабве',
        'Кабо-Верде',
        'Камерун',
        'Кения',
        'Коморские острова',
        'Республика Конго',
        'Кот-д\'Ивуар',
        'Лесото',
        'Либерия',
        'Ливия',
        'Маврикий',
        'Мавритания',
        'Мадагаскар',
        'Малави',
        'Мали',
        'Марокко',
        'Мозамбик',
        'Намибия',
        'Нигер',
        'Нигерия',
        'Сан-Томе и Принсипи',
        'Свазиленд',
        'Сейшельские острова',
        'Сомали',
        'Судан',
        'Сьерра-Леоне',
        'Танзания',
        'Того',
        'Тунис',
        'Уганда',
        'Центрально-Африканская Республика',
        'Чад',
        'Экваториальная Гвинея',
        'Эритрея',
        'Эфиопия',
        'ЮАР',
        'Руанда',
        'Сенегал',
        'Джибути',
        'Майотта',
        'Реюньон',
        'США',
        'Канада',
        'Мексика',
        'Бермудские Острова',
        'Гренландия',
        'Антигуа и Барбуда',
        'Аргентина',
        'Багамские острова',
        'Барбадос',
        'Боливия',
        'Бразилия',
        'Венесуэла',
        'Гаити',
        'Гватемала',
        'Гондурас',
        'Гренада',
        'Доминика',
        'Доминиканская Республика',
        'Колумбия',
        'Коста-Рика',
        'Куба',
        'Никарагуа',
        'Панама',
        'Парагвай',
        'Перу',
        'Сент-Винсент и Гренадины',
        'Сент-Китс и Невис',
        'Сент-Люсия',
        'Суринам',
        'Тринидад и Тобаго',
        'Уругвай',
        'Чили',
        'Эквадор',
        'Ямайка',
        'Французская Гвиана',
        'Гайана',
        'Ангилья',
        'Аруба',
        'Нидерландские Антильские острова',
        'Белиз',
        'Американские Виргинские острова',
        'Британские Виргинские острова',
        'Гваделупа',
        'Каймановы острова',
        'Тёркс и Кайкос',
        'Новая Зеландия',
        'Австралия',
        'Фиджи',
        'Папуа - Новая Гвинея',
        'Самоа',
        'Французская Полинезия',
        'Вануату',
        'Кирибати',
        'Острова Кука',
        'Маршалловы острова',
        'Федеративные Штаты Микронезии',
        'Науру',
        'Новая Каледония',
        'Палау',
        'Тонга',
        'Тувалу',
        'Южная Корея'
    );

    return in_array($country, $countries);
}


function fn_yandex_market_array_to_yml($data, $level = 0)
{
    if (!is_array($data)) {
        return fn_html_escape($data);
    }

    $return = '';
    foreach ($data as $key => $value) {
        $attr = '';
        if (is_array($value) && is_numeric(key($value))) {
            foreach ($value as $k => $v) {
                $arr = array(
                    $key => $v
                );
                $return .= fn_array_to_xml($arr);
                unset($value[$k]);
            }
            unset($data[$key]);
            continue;
        }

        if (strpos($key, '@') !== false) {
            $data = explode('@', $key);
            $key = $data[0];
            unset($data[0]);

            if (count($data) > 0) {
                foreach ($data as $prop) {
                    if (strpos($prop, '=') !== false) {
                        $prop = explode('=', $prop);
                        $attr .= ' ' . $prop[0] . '="' . $prop[1] . '"';
                    } else {
                        $attr .= ' ' . $prop . '=""';
                    }
                }
            }
        }

        $tab = str_repeat("    ", $level);

        if (empty($value)) {
            $return .= $tab . "<" . $key . $attr . "/>\n";

        } elseif (is_array($value)){
            $return .= $tab . "<" . $key . $attr . ">\n" . fn_yandex_market_array_to_yml($value, $level + 1) . '</' . $key . ">\n";

        } else {
            $return .= $tab . "<" . $key . $attr . '>' . fn_yandex_market_array_to_yml($value, $level + 1) . '</' . $key . ">\n";
        }

    }

    return $return;
}