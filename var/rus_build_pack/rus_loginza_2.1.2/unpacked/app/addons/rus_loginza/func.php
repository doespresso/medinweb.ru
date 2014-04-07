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

// rus_build_loginza vmalyshev

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_rus_loginza_fill_user_fields(&$exclude)
{
    $exclude[] = 'loginza_identifier';
}

function fn_loginza_user_social($promotion_id, $promotion, $auth)
{
    $loginza_id = db_get_field("SELECT loginza_identifier FROM ?:users WHERE user_id = ?i", $auth['user_id']);

    return !empty($loginza_id) ? 'Y' : 'N';
}

function fn_settings_variants_addons_rus_loginza_socials_box()
{
    return fn_get_schema('rus_build_pack', 'loginza');
}

function fn_loginza_convert_socials_to_string($social_array)
{
    return implode(',', array_keys($social_array));
}