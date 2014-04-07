<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:18:47
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989211521534002b737be28-71904514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5f6e94341448a6ac5f13a4d9e128a6ccd227bd' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '989211521534002b737be28-71904514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534002b7387076_20067230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534002b7387076_20067230')) {function content_534002b7387076_20067230($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_s'));
?>
<td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("product_s");?>
</td><?php }} ?>
