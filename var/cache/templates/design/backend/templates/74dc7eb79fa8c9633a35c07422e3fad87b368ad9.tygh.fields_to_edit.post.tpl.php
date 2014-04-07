<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 17:54:41
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480250621533eb9a157f1b8-27665881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74dc7eb79fa8c9633a35c07422e3fad87b368ad9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '480250621533eb9a157f1b8-27665881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533eb9a158f856_22077141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb9a158f856_22077141')) {function content_533eb9a158f856_22077141($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <li class="select-field">
        <label class="checkbox" for="seo_name">
        	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
        <?php echo $_smarty_tpl->__("seo_name");?>
</label>
    </li>
<?php }?><?php }} ?>
