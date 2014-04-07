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

// rus_build_mailru dbazhenov

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'manage') {

    $selected_fields = Registry::get('view')->getTemplateVars('selected_fields');

    $selected_fields[] = array('name' => '[data][mailru_brand]', 'text' => __('mailru_brand'));
    $selected_fields[] = array('name' => '[data][mailru_mcp]', 'text' => __('mailru_mcp'));
    $selected_fields[] = array('name' => '[data][mailru_export]', 'text' => __('mailru_export'));

    Registry::get('view')->assign('selected_fields', $selected_fields);

} elseif ($mode == 'm_update') {

    $selected_fields = $_SESSION['selected_fields'];

    $field_groups = Registry::get('view')->getTemplateVars('field_groups');
    $filled_groups = Registry::get('view')->getTemplateVars('filled_groups');
    $field_names = Registry::get('view')->getTemplateVars('field_names');

    if (!empty($selected_fields['data']['mailru_brand'])) {
        $field_groups['A']['mailru_brand'] = 'products_data';
        $filled_groups['A']['mailru_brand'] = __('mailru_brand');
        unset($field_names['mailru_brand']);
    }

    if (!empty($selected_fields['data']['mailru_mcp'])) {
        $field_groups['A']['mailru_mcp'] = 'products_data';
        $filled_groups['A']['mailru_mcp'] = __('mailru_mcp');
        unset($field_names['mailru_mcp']);
    }

    if (!empty($selected_fields['data']['mailru_export'])) {
        $field_groups['S']['mailru_export']['name'] = 'products_data';
        $field_groups['S']['mailru_export']['variants'] = array(
            'Y' => 'yes',
            'N' => 'no',
        );
        $filled_groups['S']['mailru_export'] = __('mailru_export');
        unset($field_names['mailru_export']);
    }

    Registry::get('view')->assign('field_groups', $field_groups);
    Registry::get('view')->assign('filled_groups', $filled_groups);
    Registry::get('view')->assign('field_names', $field_names);

}
