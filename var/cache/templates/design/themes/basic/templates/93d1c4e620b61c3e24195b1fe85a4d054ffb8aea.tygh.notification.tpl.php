<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:26
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1852595844533e9d72323406-52521616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d1c4e620b61c3e24195b1fe85a4d054ffb8aea' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/notification.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1852595844533e9d72323406-52521616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_info' => 0,
    'product_buttons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d723a0215_21774957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d723a0215_21774957')) {function content_533e9d723a0215_21774957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="product-notification-body"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="product-notification-buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<div class="product-notification-body"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="product-notification-buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php }?><?php }} ?>
