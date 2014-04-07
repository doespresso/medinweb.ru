<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 20:50:40
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/pages/page_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867283737534185e0bb0421-29274278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a157774f9a5af3370796fe318be750bfe177bc2' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/pages/page_extra.post.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1867283737534185e0bb0421-29274278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534185e0bf2705_29932112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534185e0bf2705_29932112')) {function content_534185e0bf2705_29932112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('discussion_title_page','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object_type'=>"A",'title'=>__("discussion_title_page"),'wrap'=>true), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/pages/page_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/pages/page_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object_type'=>"A",'title'=>__("discussion_title_page"),'wrap'=>true), 0);?>
<?php }?><?php }} ?>
