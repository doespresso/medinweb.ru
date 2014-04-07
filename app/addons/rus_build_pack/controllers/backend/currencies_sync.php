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
use RusBuild\RusCurrency;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

unset($_REQUEST['redirect_url']);

if ($mode == 'sync') {

    if (!empty($_REQUEST['magic_key']) && urldecode($_REQUEST['magic_key']) == Registry::get('addons.rus_build_pack.cron_key')) {
        $result = RusCurrency::process_sbrf_currencies(CART_PRIMARY_CURRENCY);
    } else {
        $result = false;
    }

    if ($result) {
        fn_set_notification('N', __('notice'), __('sbrf_currencies_successfully_sync'));
    } else {
        fn_set_notification('E', __('error'), __('sbrf_currencies_unsuccessfully_sync'));
    }

    return array (CONTROLLER_STATUS_REDIRECT, 'addons.update?addon=rus_build_pack');
}

if ($mode == 'symbol_update') {

    $currencies = Registry::get('currencies');

    if (!empty($currencies[CURRENCY_RUB])) {
        RusCurrency::symbol_update();
    } else {
        fn_set_notification('E', __('error'), __('symbol_rub_no_currency_rub'));
    }

    return array (CONTROLLER_STATUS_REDIRECT, 'addons.update?addon=rus_build_pack');
}
