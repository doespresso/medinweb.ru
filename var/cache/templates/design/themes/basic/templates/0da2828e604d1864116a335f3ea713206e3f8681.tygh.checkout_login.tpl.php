<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/checkout_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088037018533e9d752e5ee3-34586493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da2828e604d1864116a335f3ea713206e3f8681' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/checkout_login.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2088037018533e9d752e5ee3-34586493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'ajax_form' => 0,
    'contact_fields_filled' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7540f3b8_08275895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7540f3b8_08275895')) {function content_533e9d7540f3b8_08275895($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('register','email','checkout_as_guest','new_customer','register','create_new_account','checkout_as_guest','create_guest_account','register','email','checkout_as_guest','new_customer','register','create_new_account','checkout_as_guest','create_guest_account'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><script type="text/javascript">
//<![CDATA[
function fn_switch_checkout_type()
{
    var $ = Tygh.$;

    $.ceNotification('closeAll');
    $('#step_one_register').show();
    $('#step_one_login').hide();
}

function fn_show_checkout_buttons(type)
{
    var $ = Tygh.$;
    if (type == 'register') {
        $('#register_checkout').show();
        $('#anonymous_checkout').hide();
    } else {
        $('#register_checkout').hide();
        $('#anonymous_checkout').show();
    }
}

//]]>
</script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="login-form float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"checkout_login",'style'=>"checkout",'result_ids'=>"checkout*,account*"), 0);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:register_customer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:register_customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="checkout-register">
        <div class="checkout-separator"></div>
        <?php $_smarty_tpl->_capture_stack[0][] = array("register", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['approve_user_profiles']!="Y") {?>
                <div id="register_checkout" class="checkout-buttons"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"fn_switch_checkout_type();",'but_text'=>__("register")), 0);?>
</div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php $_smarty_tpl->_capture_stack[0][] = array("anonymous", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                <div id="anonymous_checkout" class="cm-noscript">
                    <form name="step_one_anonymous_checkout_form" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="result_ids" value="checkout*,account*" />

                        <?php if (!$_smarty_tpl->tpl_vars['contact_fields_filled']->value) {?>
                            <div class="control-group">
                                <label for="guest_email" class="cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                                <input type="text" id="guest_email" name="user_data[email]" size="32" value="" class="input-text " />
                            </div>
                        <?php }?>

                        <div class="checkout-buttons">
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.customer_info.guest_checkout]",'but_text'=>__("checkout_as_guest")), 0);?>

                        </div>
                    </form>
                </div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <div class="register-content">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['approve_user_profiles']!="Y"||$_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("new_customer")), 0);?>

            <?php }?>

            <ul class="register-methods">
                <li class="one"><input class="radio valign" type="radio" id="checkout_type_register" name="checkout_type" value="" checked="checked" onclick="fn_show_checkout_buttons('register')" /><div class="radio1"><label for="checkout_type_register"><span class="method-title"><?php echo $_smarty_tpl->__("register");?>
</span><span class="method-hint"><?php echo $_smarty_tpl->__("create_new_account");?>
</span></label></div></li>

                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                    <li><input class="radio valign" type="radio" id="checkout_type_guest" name="checkout_type" value="" onclick="fn_show_checkout_buttons('guest')" /><div class="radio1"><label for="checkout_type_guest"><span class="method-title"><?php echo $_smarty_tpl->__("checkout_as_guest");?>
</span><span class="method-hint"><?php echo $_smarty_tpl->__("create_guest_account");?>
</span></label></div></li>
                <?php }?>
            </ul>
        </div>

        <?php echo Smarty::$_smarty_vars['capture']['register'];?>

        <?php echo Smarty::$_smarty_vars['capture']['anonymous'];?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:register_customer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_login.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_login.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><script type="text/javascript">
//<![CDATA[
function fn_switch_checkout_type()
{
    var $ = Tygh.$;

    $.ceNotification('closeAll');
    $('#step_one_register').show();
    $('#step_one_login').hide();
}

function fn_show_checkout_buttons(type)
{
    var $ = Tygh.$;
    if (type == 'register') {
        $('#register_checkout').show();
        $('#anonymous_checkout').hide();
    } else {
        $('#register_checkout').hide();
        $('#anonymous_checkout').show();
    }
}

//]]>
</script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="login-form float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"checkout_login",'style'=>"checkout",'result_ids'=>"checkout*,account*"), 0);?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:register_customer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:register_customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="checkout-register">
        <div class="checkout-separator"></div>
        <?php $_smarty_tpl->_capture_stack[0][] = array("register", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['approve_user_profiles']!="Y") {?>
                <div id="register_checkout" class="checkout-buttons"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"fn_switch_checkout_type();",'but_text'=>__("register")), 0);?>
</div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php $_smarty_tpl->_capture_stack[0][] = array("anonymous", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                <div id="anonymous_checkout" class="cm-noscript">
                    <form name="step_one_anonymous_checkout_form" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="result_ids" value="checkout*,account*" />

                        <?php if (!$_smarty_tpl->tpl_vars['contact_fields_filled']->value) {?>
                            <div class="control-group">
                                <label for="guest_email" class="cm-required"><?php echo $_smarty_tpl->__("email");?>
</label>
                                <input type="text" id="guest_email" name="user_data[email]" size="32" value="" class="input-text " />
                            </div>
                        <?php }?>

                        <div class="checkout-buttons">
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.customer_info.guest_checkout]",'but_text'=>__("checkout_as_guest")), 0);?>

                        </div>
                    </form>
                </div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <div class="register-content">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['approve_user_profiles']!="Y"||$_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("new_customer")), 0);?>

            <?php }?>

            <ul class="register-methods">
                <li class="one"><input class="radio valign" type="radio" id="checkout_type_register" name="checkout_type" value="" checked="checked" onclick="fn_show_checkout_buttons('register')" /><div class="radio1"><label for="checkout_type_register"><span class="method-title"><?php echo $_smarty_tpl->__("register");?>
</span><span class="method-hint"><?php echo $_smarty_tpl->__("create_new_account");?>
</span></label></div></li>

                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['disable_anonymous_checkout']!="Y") {?>
                    <li><input class="radio valign" type="radio" id="checkout_type_guest" name="checkout_type" value="" onclick="fn_show_checkout_buttons('guest')" /><div class="radio1"><label for="checkout_type_guest"><span class="method-title"><?php echo $_smarty_tpl->__("checkout_as_guest");?>
</span><span class="method-hint"><?php echo $_smarty_tpl->__("create_guest_account");?>
</span></label></div></li>
                <?php }?>
            </ul>
        </div>

        <?php echo Smarty::$_smarty_vars['capture']['register'];?>

        <?php echo Smarty::$_smarty_vars['capture']['anonymous'];?>

    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:register_customer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
