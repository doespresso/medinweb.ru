<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 16:44:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/auth_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466179182533ffa93e5ebd9-43183060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c707d4498ffbeab8e662371bdbcdfd6b6e83114' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/auth_info.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1466179182533ffa93e5ebd9-43183060',
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
  'unifunc' => 'content_533ffa93ecffc8_66016992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ffa93ecffc8_66016992')) {function content_533ffa93ecffc8_66016992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_login_form','register_new_account','text_recover_password_title','text_recover_password','text_login_form','register_new_account','text_recover_password_title','text_recover_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="login-info">
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
    <?php echo $_smarty_tpl->__("text_login_form");?>

    <a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="recover_password") {?>
    <h4><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
    <?php echo $_smarty_tpl->__("text_recover_password");?>

<?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/auth_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/auth_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="login-info">
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?>
    <?php echo $_smarty_tpl->__("text_login_form");?>

    <a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="recover_password") {?>
    <h4><?php echo $_smarty_tpl->__("text_recover_password_title");?>
</h4>
    <?php echo $_smarty_tpl->__("text_recover_password");?>

<?php }?>
</div><?php }?><?php }} ?>
