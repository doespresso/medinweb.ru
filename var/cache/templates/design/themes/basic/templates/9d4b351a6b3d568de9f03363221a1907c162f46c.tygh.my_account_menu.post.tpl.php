<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:53
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1885446811533e9b353cece0-31754608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4b351a6b3d568de9f03363221a1907c162f46c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/profiles/my_account_menu.post.tpl',
      1 => 1396611754,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1885446811533e9b353cece0-31754608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b354241e7_85181178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b354241e7_85181178')) {function content_533e9b354241e7_85181178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('my_points','my_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_points");?>
&nbsp;<span>(<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_info']->value['points'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
)</span></a></li>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_points");?>
&nbsp;<span>(<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_info']->value['points'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
)</span></a></li>
<?php }?><?php }?><?php }} ?>
