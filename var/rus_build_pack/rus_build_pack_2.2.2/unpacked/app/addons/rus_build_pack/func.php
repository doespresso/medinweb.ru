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

use Tygh\Registry;
use RusBuild\RusBuild;

/*
rus_build_pack dbazhenov
*/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_rus_init_pack()
{
    return new RusBuild(RUS_SERVER . '/index.php?dispatch=license.check_available', Registry::get('addons.rus_build_pack.license_key'));
}

function fn_russian_pack_shippings_uninstall()
{
    $objects = fn_get_schema('rus_build_pack', 'ems_and_post', 'php', true);

    if (!empty($objects)) {
        foreach ($objects as $object) {
            $object_ids = db_get_fields('SELECT object_id FROM ?:settings_objects WHERE name = ?s', $object['name']);

            if (!empty($object_ids)) {
                foreach ($object_ids as $object_id) {
                    db_query('DELETE FROM ?:settings_objects WHERE object_id = ?i', $object_id);
                    db_query('DELETE FROM ?:settings_descriptions WHERE object_id = ?i', $object_id);
                }
            }

            $service_ids = db_get_fields('SELECT service_id FROM ?:shipping_services WHERE module = ?s', $object['module']);

            if (!empty($service_ids)) {
                db_query('DELETE FROM ?:shipping_services WHERE service_id IN (?a)', $service_ids);
                db_query('DELETE FROM ?:shipping_service_descriptions WHERE service_id IN (?a)', $service_ids);
            }
        }
    }
}

function fn_russian_pack_available()
{
    $lic_info = RusBuild::getLicenseInfo(Registry::get('addons.rus_build_pack.license_key'));

    if (!empty($lic_info) && isset($lic_info->license_data->status) && $lic_info->license_data->status != 'D') {
        return true;
    } else {
        return false;
    }
}

function fn_russian_pack_delete_payments()
{
    $payments = fn_get_schema('rus_build_pack', 'payments', 'php', true);

    if (!empty($payments)) {
        foreach ($payments as $payment) {
            $processor_id = db_get_field("SELECT processor_id FROM ?:payment_processors WHERE admin_template = ?s", $payment['admin_template']);
            $payment_ids = db_get_fields("SELECT payment_id FROM ?:payments WHERE processor_id = ?i", $processor_id);

            if (!empty($payment_ids)) {
                foreach ($payment_ids as $payment_id) {
                    db_query("UPDATE ?:payments SET processor_id = 0, status = 'D' WHERE payment_id = ?i", $payment_id);
                }
            }
            if (!empty($processor_id)) {
                db_query("DELETE FROM ?:payment_processors WHERE admin_template = ?s", $payment['admin_template']);
            }
        }
    }
}

function fn_rus_log_cut()
{
    Registry::set('log_cut', true);
}

function fn_russian_pack_format_price ($price, $payment_currency)
{
    $currencies = Registry::get('currencies');

    if (array_key_exists($payment_currency, $currencies)) {
        if ($currencies[$payment_currency]['is_primary'] != 'Y') {
            $price = fn_format_price($price / $currencies[$payment_currency]['coefficient']);
        }
    } else {
        return false;
    }

    return $price;
}

function fn_russian_pack_log_write($data, $file, $path = NULL)
{
    if (!isset($path)) {
        $path = Registry::get('config.dir.var');
    }

    $file = fopen($path . $file, 'a');

    if (!empty($file)) {
        fputs($file, fn_array2code_string($data));
        fclose($file);
    }
}

function fn_russian_pack_normalize_phone($phone)
{
    $phone_normalize = '';

    if (!empty($phone)) {
        if (strpos('+', $phone) === false && $phone[0] == '8') {
            $phone[0] = '7';
        }

        $phone_normalize = str_replace(array(' ', '(', ')', '-'), '', $phone);
    }

    return $phone_normalize;
}