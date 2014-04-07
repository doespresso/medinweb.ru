<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 21:02:19
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/news/list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9157213625341889b3201c9-96976571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ac76f00122de6fa72823a20163851cf0902cd1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/news/list.post.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9157213625341889b3201c9-96976571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'n' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5341889b3e40a3_69905151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341889b3e40a3_69905151')) {function content_5341889b3e40a3_69905151($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('more_w_ellipsis','more_w_ellipsis'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['n']->value['news_id'],"N"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <p><a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></p>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/news/list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/news/list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['n']->value['news_id'],"N"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D") {?>
    <p><a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['n']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("more_w_ellipsis");?>
</a></p>
<?php }?><?php }?><?php }} ?>
