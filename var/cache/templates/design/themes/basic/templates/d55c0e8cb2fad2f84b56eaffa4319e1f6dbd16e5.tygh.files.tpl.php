<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:50
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/product_tabs/files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659641121533e9c5e9a8685-49255610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55c0e8cb2fad2f84b56eaffa4319e1f6dbd16e5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/product_tabs/files.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '659641121533e9c5e9a8685-49255610',
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
  'unifunc' => 'content_533e9c5e9dd722_82275999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c5e9dd722_82275999')) {function content_533e9c5e9dd722_82275999($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/files.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/files.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
