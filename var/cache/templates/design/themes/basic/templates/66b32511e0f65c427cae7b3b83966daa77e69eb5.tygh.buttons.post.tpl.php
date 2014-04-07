<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:55:10
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1715411437533e9d9e376661-60304071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b32511e0f65c427cae7b3b83966daa77e69eb5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl',
      1 => 1396611756,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1715411437533e9d9e376661-60304071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d9e3ad978_31006606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d9e3ad978_31006606')) {function content_533e9d9e3ad978_31006606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0);?>

<input type="hidden" name="result_ids" value="cart_status*,wishlist*,account_info*" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/gift_certificates/buttons.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/gift_certificates/buttons.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0);?>

<input type="hidden" name="result_ids" value="cart_status*,wishlist*,account_info*" />
<?php }?><?php }} ?>
