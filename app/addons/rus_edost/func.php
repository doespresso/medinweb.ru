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

// rus_build_edost dbazhenov

if ( !defined('AREA') ) { die('Access denied'); }

function fn_rus_edost_install()
{
    $edost_id = db_query("INSERT INTO ?:settings_objects (`edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`) VALUES ('ROOT', 'edost_enabled', '7', '0', 'C', 'Y', '90', 'Y')");

    foreach (fn_get_translation_languages() as $lang_code => $v) {
        db_query("INSERT INTO ?:settings_descriptions (`object_id`, `object_type`, `lang_code`, `value`, `tooltip`) VALUES (?i, 'O', ?s, 'Включить eDost', '')", $edost_id, $lang_code);
    }

    $services = fn_get_schema('edost', 'services', 'php', true);

    foreach ($services as $service) {
        $service_id = db_query('INSERT INTO ?:shipping_services ?e', $service);
        $service['service_id'] = $service_id;

        foreach (fn_get_translation_languages() as $lang_code => $v) {
            $service['lang_code'] = $lang_code;
            db_query('INSERT INTO ?:shipping_service_descriptions ?e', $service);
        }
    }
}

function fn_rus_edost_uninstall()
{
    $edost_id = db_get_field('SELECT object_id FROM ?:settings_objects WHERE name = ?s', 'edost_enabled');

    db_query('DELETE FROM ?:settings_objects WHERE object_id = ?i', $edost_id);
    db_query('DELETE FROM ?:settings_descriptions WHERE object_id = ?i', $edost_id);

    $service_ids = db_get_fields('SELECT service_id FROM ?:shipping_services WHERE module = ?s', 'edost');
    db_query('DELETE FROM ?:shipping_services WHERE service_id IN (?a)', $service_ids);
    db_query('DELETE FROM ?:shipping_service_descriptions WHERE service_id IN (?a)', $service_ids);
}

function fn_rus_edost_calculate_cart_taxes_pre(&$cart, $cart_products, &$product_groups)
{

    if (!empty($cart['shippings_extra'])) {

        foreach($cart['shippings_extra']['rates'] as $group_key => $shippings) {
            foreach($shippings as $shipping_id => $shipping) {
                if (!empty($shipping['day'])) {
                    $product_groups[$group_key]['shippings'][$shipping_id]['delivery_time'] = $shipping['day'];
                }
            }
        }
    }

    if (!empty($cart['payment_id'])) {
        $payment_info = fn_get_payment_method_data($cart['payment_id']);

        if (strpos($payment_info['template'], 'edost_cod.tpl')) {

            $cart['shippings_extra']['sum'] = array(
                'pricediff' => 0,
                'transfer' => 0,
                'total' => 0
            );

            foreach($product_groups as $group_key => $group) {

                foreach($group['shippings'] as $shipping_id => $shipping) {

                    if (!empty($cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'])) {
                        $cart['product_groups'][$group_key]['shippings'][$shipping_id]['rate'] = $cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'];
                        $product_groups[$group_key]['shippings'][$shipping_id]['rate'] = $cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'];
                    }

                    if (!empty($cart['shipping'][$shipping_id])) {
                        $cart['shipping'][$shipping_id]['rate'] = $cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'];
                        $cart['shipping'][$shipping_id]['rates'] = 1;
                    }
                }

                if (!empty($group['chosen_shippings'])) {

                    foreach($group['chosen_shippings'] as $shipping_key => $shipping) {

                        $shipping_id = $shipping['shipping_id'];

                        if (!empty($cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'])) {
                            $cart['product_groups'][$group_key]['shippings'][$shipping_id]['rate'] = $cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricecash'];
                            $cart['shippings_extra']['sum']['pricediff'] += $cart['shippings_extra']['rates'][$group_key][$shipping_id]['pricediff'];
                        }

                        $cart['shippings_extra']['sum']['transfer'] += $cart['shippings_extra']['rates'][$group_key][$shipping_id]['transfer'];

                        if (!empty($cart['shippings_extra']['rates'][$group_key][$shipping['shipping_id']]['pricecash'])) {
                            $product_groups[$group_key]['chosen_shippings'][$shipping_key]['rate'] = $cart['shippings_extra']['rates'][$group_key][$shipping['shipping_id']]['pricecash'];
                            $cart['shipping_cost'] = $cart['shippings_extra']['rates'][$group_key][$shipping['shipping_id']]['pricecash'];
                            $cart['display_shipping_cost'] = $cart['shipping_cost'];
                        }
                    }

                    $cart['shippings_extra']['sum']['total'] = $cart['shippings_extra']['sum']['transfer'] + $cart['shippings_extra']['sum']['pricediff'];
                }



            }


        }

        $_SESSION['shipping_hash'] = fn_get_shipping_hash($cart['product_groups']);
    }



}