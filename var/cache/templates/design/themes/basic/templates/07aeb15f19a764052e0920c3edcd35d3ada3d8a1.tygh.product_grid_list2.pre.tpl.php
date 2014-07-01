<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:15:00
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/wishlist/hooks/products/product_grid_list2.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5681385753442e9403cc47-31388760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07aeb15f19a764052e0920c3edcd35d3ada3d8a1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/wishlist/hooks/products/product_grid_list2.pre.tpl',
      1 => 1396611756,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5681385753442e9403cc47-31388760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_wishlist' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442e94087943_29448174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442e94087943_29448174')) {function content_53442e94087943_29448174($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('remove','remove','remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="wishlist-remove-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i><span><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_grid_list2.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_grid_list2.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="wishlist-remove-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i><span><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }?><?php }?><?php }} ?>
