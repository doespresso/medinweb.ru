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

include_once(Registry::get('config.dir.addons') . 'rus_yandex_market/schemas/exim/yandex_market.functions.php');

$schema = array(
    'section' => 'products',
    'name' => __('yml'),
    'pattern_id' => 'yandex_market',
    'key' => array('product_id'),
    'table' => 'products',
    'export_only' => true,
    'filename' => __('yml_products_filename') . '_' . date('mdY') . '.yml',
    'func_save_content_to_file' => 'fn_yandex_market_prepare_offer',
    'condition' => array(
        'use_company_condition' => true,
        'conditions' => array(
            'yml_export_yes' => 'Y',
            'status' => 'A',
        ),
    ),
    'pre_processing' => array(
        'yandex_market_put_header' => array(
            'function' => 'fn_yandex_market_put_header',
            'args' => array('@filename'),
        ),
    ),
    'post_processing' => array(
        'yandex_market_put_bottom' => array(
            'function' => 'fn_yandex_market_put_bottom',
            'args' => array('@filename'),
        ),
    ),
    'references' => array (
        'product_descriptions' => array (
            'reference_fields' => array ('product_id' => '#key', 'lang_code' => '#lang_code'),
            'join_type' => 'LEFT'
        ),
        'product_prices' => array (
            'reference_fields' => array ('product_id' => '#key', 'lower_limit' => 1, 'usergroup_id' => 0),
            'join_type' => 'LEFT'
        ),
        'images_links' => array (
            'reference_fields' => array('object_id' => '#key', 'object_type' => 'product', 'type' => 'M'),
            'join_type' => 'LEFT'
        ),
        'products_categories' => array (
            'reference_fields' => array ('product_id' => '#key', 'link_type' => 'M'),
            'join_type' => 'LEFT'
        ),
        'category_descriptions' => array (
            'reference_fields' => array ('category_id' => '#products_categories.category_id', 'lang_code' => '#lang_code'),
            'join_type' => 'LEFT'
        ),
    ),
    'range_options' => array (
        'selector_url' => 'products.manage',
        'object_name' => __('products'),
    ),
    'options' => array (
        'lang_code' => array (
            'title' => 'language',
            'type' => 'languages',
            'default_value' => array(DEFAULT_LANGUAGE),
        ),
        'price_dec_sign_delimiter' => array (
            'title' => 'price_dec_sign_delimiter',
            'description' => 'text_price_dec_sign_delimiter',
            'type' => 'input',
            'default_value' => '.'
        )
    ),
    'override_options' => array (
        'delimiter' => 'T',
    ),
    'export_fields' => array (
        'Product id' => array (
            'db_field' => 'product_id',
            'required' => true,
        ),
        'Product code' => array (
            'db_field' => 'product_code',
            'alt_key' => true,
            'required' => true,
        ),
        'Language' => array(
            'table' => 'product_descriptions',
            'db_field' => 'lang_code',
            'type' => 'languages',
            'required' => true,
            'multilang' => true
        ),
        'CategoryId' => array (
            'table' => 'products_categories',
            'db_field' => 'category_id',
            'required' => true,
        ),
        'Category' => array (
            'table' => 'category_descriptions',
            'db_field' => 'category',
            'required' => true,
            'multilang' => true
        ),
        'Price' => array (
            'table' => 'product_prices',
            'db_field' => 'price',
            'process_get' => array ('fn_exim_yml_export_price', '#this', '@price_dec_sign_delimiter'),
            'required' => true
        ),
        'Status' => array (
            'db_field' => 'status',
            'required' => true
        ),
        'Amount' => array (
            'db_field' => 'amount',
            'required' => true
        ),
        'Weight' => array (
            'db_field' => 'weight',
            'required' => true
        ),
        'Shipping freight' => array (
            'db_field' => 'shipping_freight',
            'process_get' => array ('fn_exim_yml_export_price', '#this', '@price_dec_sign_delimiter'),
            'required' => true
        ),
        'Free shipping' => array (
            'db_field' => 'free_shipping',
            'required' => true
        ),
        'Product name' => array (
            'db_field' => 'product',
            'table' => 'product_descriptions',
            'process_get' => array ('fn_exim_yml_get_product_info', '#this'),
            'required' => true,
            'multilang' => true
        ),
        'Product description' => array (
            'db_field' => 'full_description',
            'table' => 'product_descriptions',
            'process_get' => array ('fn_exim_yml_get_product_info', '#this'),
            'required' => false,
            'multilang' => true
        ),
        'Product features' => array (
            'process_get' => array ('fn_exim_yml_get_product_features', '#key', '#lang_code'),
            'linked' => false, // this field is not linked during import-export
            'required' => true,
            'multilang' => true
        ),
        'Product url' => array (
            'process_get' => array ('fn_exim_yml_get_product_url', '#key', '#lang_code'),
            'linked' => false,
            'export_only' => true,
            'required' => true,
            'multilang' => true
        ),
        'Image url' => array (
            'process_get' => array ('fn_exim_yml_get_image_url', '#key', 'product', 'M', false, true, '#lang_code'),
            'db_field' => 'image_id',
            'table' => 'images_links',
            'export_only' => true,
            'required' => true
        ),
    ),
);
if (fn_allowed_for('ULTIMATE')) {
    $schema['references']['companies'] = array ('reference_fields' => array ('company_id' => '&company_id'), 'join_type' => 'LEFT', 'import_skip_db_processing' => true);
    $schema['export_fields']['Company id'] = array (
        'db_field' => 'company_id',
        'required' => true
    );
}

return $schema;
