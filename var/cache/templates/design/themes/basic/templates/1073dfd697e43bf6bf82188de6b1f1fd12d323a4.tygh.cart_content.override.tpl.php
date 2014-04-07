<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/catalog_mode/hooks/checkout/cart_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152755397753416ac8d6fe05-11666738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1073dfd697e43bf6bf82188de6b1f1fd12d323a4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/catalog_mode/hooks/checkout/cart_content.override.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152755397753416ac8d6fe05-11666738',
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
  'unifunc' => 'content_53416ac8da4361_98809215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac8da4361_98809215')) {function content_53416ac8da4361_98809215($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (fn_catalog_mode_may_disable_minicart('')=='Y') {?>
    &nbsp;
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/catalog_mode/hooks/checkout/cart_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/catalog_mode/hooks/checkout/cart_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (fn_catalog_mode_may_disable_minicart('')=='Y') {?>
    &nbsp;
<?php }?><?php }?><?php }} ?>
