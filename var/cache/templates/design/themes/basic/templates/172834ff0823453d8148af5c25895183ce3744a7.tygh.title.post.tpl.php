<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 16:00:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/seo/hooks/index/title.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1868326779533e9ec3f19f00-56202836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172834ff0823453d8148af5c25895183ce3744a7' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/seo/hooks/index/title.post.tpl',
      1 => 1396611754,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1868326779533e9ec3f19f00-56202836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9ec4033907_00485281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9ec4033907_00485281')) {function content_533e9ec4033907_00485281($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['search']->value) {?><?php echo htmlspecialchars(fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['search']->value) {?><?php echo htmlspecialchars(fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }?><?php }} ?>
