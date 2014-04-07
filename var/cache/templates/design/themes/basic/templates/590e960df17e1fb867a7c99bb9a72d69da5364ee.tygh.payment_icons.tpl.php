<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:59
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/payment_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363814408533e9b3b996584-26629893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590e960df17e1fb867a7c99bb9a72d69da5364ee' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/payment_icons.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1363814408533e9b3b996584-26629893',
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
  'unifunc' => 'content_533e9b3b9cd377_22785526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b3b9cd377_22785526')) {function content_533e9b3b9cd377_22785526($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="payment-icons">
	<span class="payment-icon 2checkout">&nbsp;</span>
	<span class="payment-icon paypal">&nbsp;</span>
	<span class="payment-icon mastercard">&nbsp;</span>
	<span class="payment-icon visa">&nbsp;</span>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/payment_icons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/payment_icons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<div class="payment-icons">
	<span class="payment-icon 2checkout">&nbsp;</span>
	<span class="payment-icon paypal">&nbsp;</span>
	<span class="payment-icon mastercard">&nbsp;</span>
	<span class="payment-icon visa">&nbsp;</span>
</div>
<?php }?><?php }} ?>
