<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:18:47
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203675777534002b765ed08-96633276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20ac09038a14146693313035f95d9012235e246' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1203675777534002b765ed08-96633276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'check_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534002b7678238_84221965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534002b7678238_84221965')) {function content_534002b7678238_84221965($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cart','wishlist'));
?>
<label for="cb_product_type_c"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;"/>
<?php echo $_smarty_tpl->__("cart");?>
</label>

<label for="cb_product_type_w"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_w']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_w" id="cb_product_type_w" onclick="if (!this.checked) document.getElementById('cb_product_type_c').checked = true;"  />
<?php echo $_smarty_tpl->__("wishlist");?>
</label><?php }} ?>
