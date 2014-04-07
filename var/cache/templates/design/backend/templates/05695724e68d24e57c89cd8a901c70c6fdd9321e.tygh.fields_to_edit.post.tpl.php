<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 17:54:41
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2087202782533eb9a15970d9-39967716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05695724e68d24e57c89cd8a901c70c6fdd9321e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2087202782533eb9a15970d9-39967716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533eb9a159bc21_61532984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb9a159bc21_61532984')) {function content_533eb9a159bc21_61532984($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
