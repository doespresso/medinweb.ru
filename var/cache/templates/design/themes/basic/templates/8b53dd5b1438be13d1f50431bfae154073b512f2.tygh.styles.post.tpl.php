<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115829900853416ac840b575-90599449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b53dd5b1438be13d1f50431bfae154073b512f2' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_loginza/hooks/index/styles.post.tpl',
      1 => 1396612053,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115829900853416ac840b575-90599449',
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
  'unifunc' => 'content_53416ac843c293_87718537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac843c293_87718537')) {function content_53416ac843c293_87718537($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php echo smarty_function_style(array('src'=>"addons/rus_loginza/styles.css"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_loginza/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_loginza/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<?php echo smarty_function_style(array('src'=>"addons/rus_loginza/styles.css"),$_smarty_tpl);?>

<?php }?><?php }} ?>
