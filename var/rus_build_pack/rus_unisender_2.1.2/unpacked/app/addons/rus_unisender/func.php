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

// rus_build_unisender dbazhenov

use Tygh\Http;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_rus_unisender_update_profile($action, $user_data, $current_user_data)
{
    if ($action == 'add') {
        if (fn_allowed_for('MULTIVENDOR') || (fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id'))) {
            $arr_id = array($user_data['user_id']);
            fn_add_users_to_unisender($arr_id, false);
        }
    }
}

function fn_settings_variants_addons_rus_unisender_list_name()
{
    return fn_unisender_get_lists();
}

function fn_add_users_to_unisender($user_ids, $notify = true)
{
    $api_key = Registry::get('addons.rus_unisender.api_key');
    $list_name = Registry::get('addons.rus_unisender.list_name');

    if (!empty($api_key)) {
        $post = array(
            'api_key' => $api_key,
            'field_names' => array(
                'Firstname',
                'Lastname',
                'Name',
                'email',
                'email_list_ids',
                'email_status',
                'phone',
                'phone_list_ids',
                'phone_status'
            ),
            'double_optin' => '1'
        );

        $data = array();
        foreach ($user_ids as $key => $id) {
            $user_data = db_get_row('SELECT email, firstname, lastname, phone FROM ?:users WHERE user_id = ?i', $id);
            if (!empty($user_data['firstname'])) {
                $data[$key][0] = $user_data['firstname'];
                $data[$key][2] = $user_data['firstname'];
            }

            if (!empty($user_data['lastname'])) {
                $data[$key][1] = $user_data['lastname'];
                $data[$key][2] .= ' ' . $user_data['lastname'];
            }
            if (!empty($user_data['email'])) {
                $data[$key][3] = $user_data['email'];
            }

            $data[$key][4] = $list_name;
            $data[$key][5] = 'active';

            if (!empty($user_data['phone'])) {
                $data[$key][6] = $user_data['phone'];
            }

            $data[$key][7] = $list_name;
            $data[$key][8] = 'active';
        }

        $post['data'] = $data;

        if (fn_unisender_api('importContacts', $post, $response, $notify)) {
            if ($notify) {
                fn_set_notification('N', __('notice'), __('users_added'));
            }

            return true;

        } elseif ($notify) {
            fn_set_notification('E', __('notice'), __('users_not_added_list'));
        }

    } elseif (empty($api_key) && $notify) {
        fn_set_notification('E', __('notice'), __('users_not_added_key'));
    }

    return false;
}

function fn_unisender_subscribe($user_data, $list_id, $activated = false)
{
    $api_key = Registry::get('addons.rus_unisender.api_key');

    if (!empty($api_key) && !empty($user_data['email'])) {
        $ip = fn_get_ip();
        Registry::get('settings.General.address_position') == 'billing_first' ? $address_zone = 'b' : $address_zone = 's';

        $post = array(
            'api_key' => $api_key,
            'fields' => array(
                'Firstname' => !empty($user_data[$address_zone . '_firstname']) ? $user_data[$address_zone . '_firstname'] : '',
                'Lastname' => !empty($user_data[$address_zone . '_lastname']) ? $user_data[$address_zone . '_lastname'] : '',
                'Name' => !empty($user_data[$address_zone . '_firstname']) ? $user_data[$address_zone . '_firstname'] : '',
                'email' => $user_data['email'],
                'email_status' => !empty($activated) ? 'active' : '',
                'phone' => !empty($user_data[$address_zone . '_phone']) ? $user_data[$address_zone . '_phone'] : '',
                'phone_status' => !empty($activated) && !empty($user_data[$address_zone . '_phone']) ? 'active' : '',
            ),
            'request_ip' => $ip['host'],
            'request_time' => date('Y-m-d H:m:s', TIME),
            'overwrite' => 2,
            'double_optin' => '0',
            'list_ids' => $list_id,
        );

        if ($activated) {
            $post['double_optin'] = 3;
        }

        if (fn_unisender_api('subscribe', $post, $response)) {

            $data = array(
                'subscriber_id' => fn_unisender_get_subscriber_id($user_data['email'], true),
                'list_id' => $list_id,
            );
            db_query("REPLACE INTO ?:unisender_user_mailing_lists ?e", $data);

            return true;
        }
    }

    return false;
}

function fn_unisender_unsubscribe($subscriber_id)
{
    if (!empty($subscriber_id)) {
        $email = db_get_field("SELECT email FROM ?:unisender_subscribers WHERE subscriber_id = ?i", $subscriber_id);
        $post = array(
            'api_key' => Registry::get('addons.rus_unisender.api_key'),
            'list_ids' => Registry::get('addons.rus_unisender.list_name'),
            'contact_type' => 'email',
            'contact' => $email,
        );

        if (fn_unisender_api('exclude', $post, $response)) {
            db_query("DELETE FROM ?:unisender_user_mailing_lists WHERE subscriber_id = ?i", $subscriber_id);
        }
    }

    return true;
}

function fn_unisender_add_subscriber($email)
{
    return db_query("INSERT INTO ?:unisender_subscribers ?e", array('email' => $email));
}

function fn_unisender_get_subscriber_id($email, $create = false)
{
    $subscriber_id = db_get_field("SELECT subscriber_id FROM ?:unisender_subscribers WHERE email = ?s", $email);

    if (empty($subscriber_id) && $create) {
        $subscriber_id = fn_unisender_add_subscriber($email);
    }

    return $subscriber_id;
}

function fn_unisender_get_user_lists($email)
{
    $user_lists = array();
    if (!empty($email)) {
        $user_lists = db_get_hash_array("SELECT * FROM ?:unisender_subscribers AS s INNER JOIN ?:unisender_user_mailing_lists AS uml ON s.subscriber_id = uml.subscriber_id WHERE s.email = ?s", 'list_id', $email);
        $lists = fn_unisender_get_lists();

        foreach ($user_lists as $key => $data) {
            $user_lists[$key]['title'] = $lists[$key];
        }
    }

    return $user_lists;
}

function fn_unisender_get_enabled_lists()
{
    $list_id = Registry::get('addons.rus_unisender.list_name');
    $lists = fn_unisender_get_lists();

    $enable_lists = array();

    foreach ($lists as $key => $data) {
        if ($list_id == $key) {
            $enable_lists[$key]['title'] = $lists[$key];
            $enable_lists[$key]['list_id'] = $key;
        }
    }

    return $enable_lists;
}

function fn_unisender_get_lists()
{
    $lists = array();
    $api_key = Registry::get('addons.rus_unisender.api_key');

    if (!empty($api_key)) {
        if (fn_unisender_api('getLists', array('api_key' => $api_key), $response)) {
            $lists[] = __('none');
            foreach ($response as $list) {
                $lists[$list['id']] = $list['title'];
            }
        } else {
            $lists[] = __('enter_api_key');
        }

    } else {
        $lists[] = __('enter_api_key');
    }

    return $lists;
}

function fn_unisender_api($method, $post, &$response, $notify = true)
{
    $result = Http::post('https://api.unisender.com/ru/api/' . $method . '?format=json', $post);
    $_result = json_decode($result, true);

    $response = '';
    if (empty($_result)) {
        if ($notify) {
            fn_set_notification('E', __('notice'), __('no_response'));
        }
        $response = __('no_response');

    } elseif (!empty($_result['error']) && AREA != 'C') {

        $error_text = 'Unisender: ' . $_result['error'];

        if ($_result['code'] == 'invalid_api_key') {
            $error_text = 'Unisender: ' . __('invalid_api_key');
        }

        if ($notify) {
            fn_set_notification('E', __('notice'), $error_text);
        }

        $response = $error_text;
    }

    if (empty($response)) {
        $response = $_result['result'];
        return true;
    } else {
        return false;
    }
}