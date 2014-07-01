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

// rus_build_unisender
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'add_selected') {
        fn_add_users_to_unisender($_REQUEST['user_ids']);

    } elseif ($mode == 'send_sms') {
		fn_rus_unisender_send_sms($_REQUEST['text_sms'], $_REQUEST['text_phone']); //user_sms

    } elseif ($mode == 'update') {

        fn_unisender_update_fields($_REQUEST['unisender_data']['fields']);

        return array(CONTROLLER_STATUS_OK, 'unisender.manage');
    }

    return array(CONTROLLER_STATUS_OK, 'profiles.manage?user_type=C');
}

if ($mode == 'manage') {
    $params = $_REQUEST;

    // [Page sections]
    Registry::set('navigation.tabs', array (
        'fields' => array (
            'title' => __('map_fields'),
            'js' => true
        ),
    ));
    // [/Page sections]

    $fields = fn_unisender_get_fields();
    $unisender_fields = fn_unisender_get_unisender_fields();
    $profile_fields = fn_get_profile_fields('ALL', array(), DESCR_SL);

    Registry::get('view')->assign('unisender_fields', $unisender_fields);
    Registry::get('view')->assign('profile_fields', $profile_fields);
    Registry::get('view')->assign('fields', $fields);

}

