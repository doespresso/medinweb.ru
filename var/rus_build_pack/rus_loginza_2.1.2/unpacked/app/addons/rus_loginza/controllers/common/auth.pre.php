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

use Tygh\Http;
use Tygh\Registry;
use Tygh\Mailer;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'login') {
        if (!empty($_REQUEST['token'])) {
            $redirect_url = (!empty($_REQUEST['return_url'])) ? $_REQUEST['return_url'] : Registry::get('config.customer_index');
            $_token = $_REQUEST['token'];
            $_id = Registry::get('addons.rus_loginza.widget_id');
            $_secret_key = Registry::get('addons.rus_loginza.secret_key');
            $_sig = md5($_token.$_secret_key);

            $_result = Http::get("http://loginza.ru/api/authinfo?token=$_token&id=$_id&sig=$_sig");

            $data = json_decode($_result, true);
            if (!isset($data['error_type'])) {
                $user_data = array();
                $condition = db_quote(" AND loginza_identifier = ?s", $data['identity']);

                if (fn_allowed_for('ULTIMATE')) {
                    if (Registry::get('settings.Stores.share_users') == 'N' && AREA != 'A') {
                        $condition .= fn_get_company_condition('?:users.company_id');
                    }
                }

                $user_data = db_get_row("SELECT user_id, password FROM ?:users WHERE 1 $condition");

                if (empty($user_data['user_id'])) {
                    Registry::get('settings.General.address_position') == 'billing_first' ? $address_zone = 'b' : $address_zone = 's';
                    $user_data = array();
                    $user_data['loginza_identifier'] = $data['identity'];
                    $user_data['email'] = (!empty($data['email'])) ? $data['email'] : '';
                    $user_data['user_login'] = '';
                    $user_data['user_type'] = 'C';
                    $user_data['is_root'] = 'N';
                    $user_data['password'] = $user_data['password1'] = $user_data['password2'] = fn_generate_password();
                    $user_data['title'] = (isset($data['gender'])) ? ($data['gender'] == 'F' ? 'mrs' : 'mr') : '';

                    if (!empty($data['name']['first_name'])) {
                        $user_data[$address_zone . '_firstname'] = $data['name']['first_name'];

                    } elseif (!empty($data['name']['full_name'])) {
                        $user_data[$address_zone . '_firstname'] = $data['name']['full_name'];

                    } elseif (!empty($data['nickname'])) {
                        $user_data[$address_zone . '_firstname'] = $data['nickname'];

                    } else {
                        $user_data[$address_zone . '_firstname'] = '';
                    }

                    $user_data[$address_zone . '_lastname'] = (!empty($data['name']['last_name'])) ? $data['name']['last_name'] : '';
                    list($user_data['user_id'], $profile_id) = fn_update_user('', $user_data, $auth, true, false, false);
                }
                $user_status = (empty($user_data['user_id'])) ? LOGIN_STATUS_USER_NOT_FOUND : fn_login_user($user_data['user_id']);

                if ($user_status == LOGIN_STATUS_OK) {
                    if (!empty($user_data['email'])) {
                        $result = Mailer::sendMail(array(
                            'to' => $user_data['email'],
                            'from' => 'company_orders_department',
                            'company_id' => $company_id,
                            'data' => array(
                                'user_data' => $user_data,
                                'user_name' => $user_data[$address_zone . '_firstname'] . " " . $user_data[$address_zone . '_lastname'],
                            ),
                            'tpl' => 'addons/rus_loginza/create_profile.tpl',
                        ), 'C', DESCR_SL);

                        //if ($result) {
                        //    fn_set_notification('N', __('notice'), _("loginza_password_send"));
                        //}
                    }

                } elseif ($user_status == LOGIN_STATUS_USER_DISABLED) {
                    fn_set_notification('E', __('error'), __('error_account_disabled'));

                } elseif ($user_status == LOGIN_STATUS_USER_NOT_FOUND) {
                    fn_delete_notification('user_exist');
                    fn_set_notification('W', __('warning'), __('loginza_cant_create_profile'));
                }
            } elseif ($data['error_type'] == 'token_validation') {
                unset($_SESSION['notifications']);
                fn_set_notification('E', __('error'), __('request_validation_error'));
            }
            unset($_REQUEST['token']);
        }
        if (!empty($redirect_url)) {
            return array(CONTROLLER_STATUS_REDIRECT, $redirect_url);
        }
    }
}
