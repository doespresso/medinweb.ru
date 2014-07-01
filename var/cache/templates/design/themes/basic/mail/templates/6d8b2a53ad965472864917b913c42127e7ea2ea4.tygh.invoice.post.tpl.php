<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:46:28
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283380468535e3184391623-21421184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8b2a53ad965472864917b913c42127e7ea2ea4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1283380468535e3184391623-21421184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e31843dc280_65463326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e31843dc280_65463326')) {function content_535e31843dc280_65463326($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div align="center" style="padding: 50px 0px 30px 0px;"><?php echo $_smarty_tpl->getSubTemplate ("addons/barcode/barcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/barcode/hooks/orders/invoice.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/barcode/hooks/orders/invoice.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div align="center" style="padding: 50px 0px 30px 0px;"><?php echo $_smarty_tpl->getSubTemplate ("addons/barcode/barcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>
</div><?php }?><?php }} ?>
