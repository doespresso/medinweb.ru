<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:45
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/products/view_main_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158195215533e9c598a9701-65710398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b18cba4b2be4cee85a680a1530efcec9cf8bbb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/discussion/hooks/products/view_main_info.post.tpl',
      1 => 1396611752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1158195215533e9c598a9701-65710398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'quick_view' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c5990a3a9_26637241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c5990a3a9_26637241')) {function content_533e9c5990a3a9_26637241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('write_review','write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('new_post_title'=>__("write_review"),'discussion'=>$_smarty_tpl->tpl_vars['product']->value['discussion'],'post_redirect_url'=>fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion")), 0);?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/view_main_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/products/view_main_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('new_post_title'=>__("write_review"),'discussion'=>$_smarty_tpl->tpl_vars['product']->value['discussion'],'post_redirect_url'=>fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion")), 0);?>

<?php }?><?php }?><?php }} ?>