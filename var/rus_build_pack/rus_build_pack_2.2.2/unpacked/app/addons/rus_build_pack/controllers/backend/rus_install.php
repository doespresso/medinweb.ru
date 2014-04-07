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
use Tygh\Settings;
use RusBuild\RusBuild;
use RusBuild\RusInstall;
use RusBuild\RusCurrency;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$view = Registry::get('view');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'function') {
        unset($_REQUEST['return_url']);

        RusInstall::settings_install();

        $rus_function = $_REQUEST['rus_function'];
        $settings = array();

        $rub_create = $rus_function['currencies'] == "Y" ? "Y" : "N" ;

        if ($rub_create == "Y") {
            $symbol = RusCurrency::rub_create();
        }

        $magic_key = RusCurrency::currency_sync_generate_key(CRON_IMPORT_KEY_LENGTH);

        if ($rus_function['payments'] == "Y") {
            RusInstall::payments_install();
        }

        if ($rus_function['shippings'] == "Y") {
            RusInstall::shippings_install();
        }

        $settings['cron_key'] = $magic_key;
        $settings['check_install'] = "Y";

        RusBuild::updateRusOptions($settings, 'rus_build_pack');

        Registry::set('addons.rus_build_pack.cron_key', $magic_key);
        Registry::set('addons.rus_build_pack.check_install', "Y");

        fn_redirect("addons.update&addon=rus_build_pack");

        return array(CONTROLLER_STATUS_REDIRECT, "addons.update&addon=rus_build_pack");
    }
}
