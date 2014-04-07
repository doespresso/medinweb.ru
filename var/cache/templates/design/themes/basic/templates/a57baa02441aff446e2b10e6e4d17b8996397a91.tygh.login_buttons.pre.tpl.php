<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:53
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/hybrid_auth/hooks/index/login_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157437156533e9b357a42c3-02235416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57baa02441aff446e2b10e6e4d17b8996397a91' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/hybrid_auth/hooks/index/login_buttons.pre.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157437156533e9b357a42c3-02235416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'option_name' => 0,
    'value' => 0,
    'provider_id' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b3584e961_12332799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b3584e961_12332799')) {function content_533e9b3584e961_12332799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('hybrid_auth_social_login','hybrid_auth_social_login'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("hybrid_auth", null, null); ob_start(); ?>
<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons']->value['hybrid_auth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option_name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?><?php if (strpos($_smarty_tpl->tpl_vars['option_name']->value,"_status")!==false&&$_smarty_tpl->tpl_vars['value']->value=="Y") {?><?php $_smarty_tpl->tpl_vars['provider_id'] = new Smarty_variable(str_replace("_status",'',$_smarty_tpl->tpl_vars['option_name']->value), null, 0);?><a class="cm-login-provider" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
" /></a><?php }?><?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (Smarty::$_smarty_vars['capture']['hybrid_auth']) {?>
	<?php echo $_smarty_tpl->__("hybrid_auth_social_login");?>
:

	<p class="text-center"><?php echo Smarty::$_smarty_vars['capture']['hybrid_auth'];?>
</p>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/login_buttons.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/login_buttons.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("hybrid_auth", null, null); ob_start(); ?>
<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons']->value['hybrid_auth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option_name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?><?php if (strpos($_smarty_tpl->tpl_vars['option_name']->value,"_status")!==false&&$_smarty_tpl->tpl_vars['value']->value=="Y") {?><?php $_smarty_tpl->tpl_vars['provider_id'] = new Smarty_variable(str_replace("_status",'',$_smarty_tpl->tpl_vars['option_name']->value), null, 0);?><a class="cm-login-provider" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_id']->value, ENT_QUOTES, 'UTF-8');?>
" /></a><?php }?><?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (Smarty::$_smarty_vars['capture']['hybrid_auth']) {?>
	<?php echo $_smarty_tpl->__("hybrid_auth_social_login");?>
:

	<p class="text-center"><?php echo Smarty::$_smarty_vars['capture']['hybrid_auth'];?>
</p>
<?php }?><?php }?><?php }} ?>
