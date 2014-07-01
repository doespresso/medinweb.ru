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
use Tygh\Storage;
use Tygh\Session;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$cart = & $_SESSION['cart'];

if ($mode == 'checkout') {

	if(isset($_REQUEST['select_office']) && !empty($_REQUEST['select_office'])) {
		if (isset($_SESSION['cart']['select_office'])) {
			foreach($_REQUEST['select_office'] as $g_id => $select) {
				foreach($select as $s_id => $o_id) {
					$_SESSION['cart']['select_office'][$g_id][$s_id] = $o_id;
				}
			}
		} else {
			$_SESSION['cart']['select_office'] = $_REQUEST['select_office'];
		}
	}

	if(isset($_SESSION['cart']['select_office'])) {
		Registry::get('view')->assign('select_office', $_SESSION['cart']['select_office']);
	}

} elseif ($mode == 'update_steps') {

	if (isset($_SESSION['cart']['select_office'])) {
		foreach($_REQUEST['select_office'] as $g_id => $select) {
			foreach($select as $s_id => $o_id) {
				$_SESSION['cart']['select_office'][$g_id][$s_id] = $o_id;
			}
		}
	} elseif(isset($_REQUEST['select_office']) && !empty($_REQUEST['select_office'])) {
		$_SESSION['cart']['select_office'] = $_REQUEST['select_office'];
	}

}