<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:44:53
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/auth/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283228354533e9b355cfec2-15243362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0939f62b78f2bd51360f0720324ed137bffaac97' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/auth/login_form.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1283228354533e9b355cfec2-15243362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'id' => 0,
    'config' => 0,
    'style' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b35770c06_19237672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b35770c06_19237672')) {function content_533e9b35770c06_19237672($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('returning_customer','email','username','password','forgot_password_question','remember_me','sign_in','returning_customer','email','username','password','forgot_password_question','remember_me','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "main_login" : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("login", null, null); ob_start(); ?>
<form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
    <div class="checkout-login-form"><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("returning_customer")), 0);?>

<?php }?>
            <div class="control-group">
                <label for="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-trim<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y") {?> cm-email<?php }?>"><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y") {?><?php echo $_smarty_tpl->__("email");?>
<?php } else { ?><?php echo $_smarty_tpl->__("username");?>
<?php }?></label>
                <input type="text" id="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>

            <div class="control-group password">
                <label for="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="forgot-password-label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="forgot-password"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <input type="password" id="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" maxlength="32" />
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_login",'align'=>"left"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
        </div>
    <div class="clear-both"></div>
    <div class="checkout-buttons clearfix">
<?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>buttons-container<?php }?>">
        <?php }?>
            <div class="body-bc clearfix">
                <div class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0);?>

                </div>
                <div class="remember-me-chekbox">
                    <label for="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="valign"><input class="valign checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?>
            </div>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
    </div>
<?php }?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
    <?php echo Smarty::$_smarty_vars['capture']['login'];?>

<?php } else { ?>
    <div<?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?> class="<?php if ($_smarty_tpl->tpl_vars['style']->value!="popup") {?>form-wrap<?php }?> login"<?php }?>>
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("sign_in");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "main_login" : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("login", null, null); ob_start(); ?>
<form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
<input type="hidden" name="return_url" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
    <div class="checkout-login-form"><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("returning_customer")), 0);?>

<?php }?>
            <div class="control-group">
                <label for="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-trim<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y") {?> cm-email<?php }?>"><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y") {?><?php echo $_smarty_tpl->__("email");?>
<?php } else { ?><?php echo $_smarty_tpl->__("username");?>
<?php }?></label>
                <input type="text" id="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>

            <div class="control-group password">
                <label for="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="forgot-password-label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="forgot-password"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                <input type="password" id="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" maxlength="32" />
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"use_for_login",'align'=>"left"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
        </div>
    <div class="clear-both"></div>
    <div class="checkout-buttons clearfix">
<?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>buttons-container<?php }?>">
        <?php }?>
            <div class="body-bc clearfix">
                <div class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0);?>

                </div>
                <div class="remember-me-chekbox">
                    <label for="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="valign"><input class="valign checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?>
            </div>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
    </div>
<?php }?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
    <?php echo Smarty::$_smarty_vars['capture']['login'];?>

<?php } else { ?>
    <div<?php if ($_smarty_tpl->tpl_vars['style']->value!="checkout") {?> class="<?php if ($_smarty_tpl->tpl_vars['style']->value!="popup") {?>form-wrap<?php }?> login"<?php }?>>
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("sign_in");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }?><?php }} ?>
