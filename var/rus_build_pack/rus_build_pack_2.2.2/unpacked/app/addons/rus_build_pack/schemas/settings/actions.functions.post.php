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

/**
 * Enable/disable EMS
 */

function fn_settings_actions_shippings_ems_enabled(&$new_value, $old_value)
{
    $currencies = Registry::get('currencies');
    if ($new_value == 'Y' && (empty($currencies[CURRENCY_RUB]) || $currencies[CURRENCY_RUB]['is_primary'] == 'N')) {
        fn_set_notification('E', __('warning'), __('ems_activation_error'), 'S');
        $new_value = 'N';
    }
}

/**
 * Enable/disable Russian Post
 */

function fn_settings_actions_shippings_russian_post_enabled(&$new_value, $old_value)
{
    $currencies = Registry::get('currencies');
    if ($new_value == 'Y' && (empty($currencies[CURRENCY_RUB]) || $currencies[CURRENCY_RUB]['is_primary'] == 'N')) {
        fn_set_notification('E', __('warning'), __('russian_post_activation_error'), 'S');
        $new_value = 'N';
    } elseif ($new_value == 'Y') {
        fn_set_notification('W', __('warning'), __('russian_post_consuming_error'));
    }
}
