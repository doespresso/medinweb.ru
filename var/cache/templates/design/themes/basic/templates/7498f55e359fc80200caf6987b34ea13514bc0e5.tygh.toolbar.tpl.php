<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:32:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272273008534432ad653600-88832031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7498f55e359fc80200caf6987b34ea13514bc0e5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/toolbar.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '272273008534432ad653600-88832031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'title' => 0,
    'href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534432ad69eee8_04026893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534432ad69eee8_04026893')) {function content_534432ad69eee8_04026893($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="top-panel"><div id="minimize_block" class="top-panel__wrapper"><div class="top-panel__logo"><i class="top-panel__icon-basket icon-basket"></i></div><h4 class="top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4><div class="top-panel-action"><span class="top-panel-action_item">&nbsp;</span><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="top-panel__close top-panel-action_item"><i class="icon-cancel"></i></a></div></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/toolbar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/toolbar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="top-panel"><div id="minimize_block" class="top-panel__wrapper"><div class="top-panel__logo"><i class="top-panel__icon-basket icon-basket"></i></div><h4 class="top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4><div class="top-panel-action"><span class="top-panel-action_item">&nbsp;</span><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="top-panel__close top-panel-action_item"><i class="icon-cancel"></i></a></div></div></div><?php }?><?php }} ?>
