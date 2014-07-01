<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:48:26
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207762143053429e9a689ff8-49313832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edaef963d0d340f9a82a4afbdac269cc61a549a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/theme_editor.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '207762143053429e9a689ff8-49313832',
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
  'unifunc' => 'content_53429e9a6d1a14_34071290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429e9a6d1a14_34071290')) {function content_53429e9a6d1a14_34071290($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="theme_editor">
<div class="theme-editor"></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/theme_editor.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/theme_editor.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div id="theme_editor">
<div class="theme-editor"></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor></div>
<?php }?><?php }} ?>
