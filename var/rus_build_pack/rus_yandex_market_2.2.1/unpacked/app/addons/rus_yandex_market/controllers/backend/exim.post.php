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

// rus_build_yandex_market dbazhenov

use Tygh\Registry;

ini_set('auto_detect_line_endings', true);
set_time_limit(3600);
fn_define('DB_LIMIT_SELECT_ROW', 30);

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'yandex_cron_export') {

    $addon_settings = Registry::get('addons.rus_yandex_market');
    $params = $_REQUEST;

    if ($params['cron_key'] != $addon_settings['cron_key']) {
        fn_set_notification('E', __('error'), __('yml_export_error_cron_key'));
        fn_echo(__('yml_export_error_cron_key'));
        exit;
    }

    $layout_data_cols = array(
        'Product id',
        'Product code',
        'Language',
        'CategoryId',
        'Category',
        'Price',
        'Status',
        'Amount',
        'Weight',
        'Shipping freight',
        'Free shipping',
        'Product name',
        'Product features',
        'Product url',
        'Image url',
        'Company id',
        'Product description',
    );

    $options = array(
        'lang_code' => array (
            DEFAULT_LANGUAGE
        ),
        'price_dec_sign_delimiter' => '.',
        'delimiter' => 'T',
        'output' => 'S',
    );

    $pattern = fn_get_pattern_definition('yandex_market', 'export');

    $options['filename'] = Registry::get('addons.rus_yandex_market.cron_filename');

    if (fn_export($pattern, $layout_data_cols, $options)) {
        fn_echo("<br/>Экспорт выполнен успешно");
    } else {
        fn_set_notification(
            'E',
            __('error'),
            __('yml_export_error_cron')
        );
    }

    exit;
}
