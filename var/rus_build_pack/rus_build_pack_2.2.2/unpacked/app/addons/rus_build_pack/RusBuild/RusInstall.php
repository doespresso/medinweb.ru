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

namespace RusBuild;

use Tygh\Settings;
use Tygh\Languages\Languages;

class RusInstall
{

    public static function settings_install()
    {
        $install_settings = fn_get_schema('rus_build_pack', 'install_settings', 'php', true);

        if (!empty($install_settings)) {
            foreach ($install_settings['default_settings'] as $name => $check_value) {
                $setting = Settings::instance()->getSettingDataByName($name);

                if ($setting['value'] == $check_value) {
                    Settings::instance()->updateValue($name, $install_settings['new_settings'][$name]);
                }
            }
        }

        return true;
    }

    public static function payments_install()
    {

        $payments = fn_get_schema('rus_build_pack', 'payments', 'php', true);

        if (!empty($payments)) {
            foreach ($payments as $payment => $array) {

                $payment = array(
                    'processor' => $array['processor'],
                    'processor_script' => $array['processor_script'],
                    'processor_template' => $array['processor_template'],
                    'admin_template' => $array['admin_template'],
                    'callback' => $array['callback'],
                    'type' => $array['type'],
                );

                $processor_id = db_get_field("SELECT processor_id FROM ?:payment_processors WHERE admin_template = ?s", $array['admin_template']);

                if (empty($processor_id)) {
                    db_query('INSERT INTO ?:payment_processors ?e', $payment);
                } else {
                    db_query("UPDATE ?:payment_processors SET ?u WHERE processor_id = ?i", $payment ,$processor_id);
                }
            }
        }

        return true;
    }

    public static function shippings_install()
    {

        $objects = fn_get_schema('rus_build_pack', 'ems_and_post', 'php', true);

        $position = 90;
        if (!empty($objects)) {
            foreach ($objects as $object => $description) {

                $object_id = db_get_field("SELECT object_id FROM ?:settings_objects WHERE name = ?s", $description['name']);

                if (empty($object_id)) {

                    $object_id = db_query("INSERT INTO ?:settings_objects (`edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`) VALUES ('ROOT', ?s, '7', '0', 'C', 'Y', ?i, 'Y')", $description['name'] , $position);
                    $position = $position + 10;

                    foreach (Languages::getAll() as $lang_code => $v) {

                        $value = isset($description[$lang_code]) ? $description[$lang_code] : '';

                        if (empty($value)) {
                            $value = $description['ru'];
                        }

                        db_query("INSERT INTO ?:settings_descriptions (`object_id`, `object_type`, `lang_code`, `value`, `tooltip`) VALUES (?i, 'O', ?s, ?s, '')", $object_id, $lang_code, $value);
                    }
                }

                $service_id = db_get_field("SELECT service_id FROM ?:shipping_services WHERE module = ?s", $description['module']);

                if (empty($service_id)) {
                    $service = array(
                        'status' => $description['status'],
                        'module' => $description['module'],
                        'code' => $description['code'],
                        'sp_file' => $description['sp_file'],
                        'description' => $description['description']
                    );

                    $service_id = db_query('INSERT INTO ?:shipping_services ?e', $service);

                    $service['service_id'] = $service_id;

                    foreach (Languages::getAll() as $lang_code => $v) {
                        $service['lang_code'] = $lang_code;
                        db_query('INSERT INTO ?:shipping_service_descriptions ?e', $service);
                    }
                } else {
                    $service = array(
                        'status' => $description['status'],
                        'code' => $description['code'],
                        'sp_file' => $description['sp_file'],
                        'description' => $description['description']
                    );

                    db_query("UPDATE ?:shipping_services SET ?u WHERE service_id = ?i", $service, $service_id);

                    foreach (Languages::getAll() as $lang_code => $v) {
                        db_query('UPDATE ?:shipping_service_descriptions SET ?u WHERE service_id = ?i AND lang_code = ?s', $service , $service_id, $lang_code);
                    }
                }
            }
        }

        return true;
    }

}
