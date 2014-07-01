<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:47:04
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912013664535e31a80344c0-99574111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331891ff1f37f0650cc21ceeb6a1c9fbc3e9f3ea' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/complete.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1912013664535e31a80344c0-99574111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'settings' => 0,
    'auth' => 0,
    'continue_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e31a839bb19_21229981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e31a839bb19_21229981')) {function content_535e31a839bb19_21229981($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_order_placed_successfully','order_details','order_details','create_account','username','password','confirm_password','create','payment_instructions','payment_instructions','order_details','order_details','view_orders','order','text_order_placed_successfully','order_details','order_details','create_account','username','password','confirm_password','create','payment_instructions','payment_instructions','order_details','order_details','view_orders','order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="order-placed-successfully">
    <p><?php echo $_smarty_tpl->__("text_order_placed_successfully");?>

        <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>.
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>.
            <?php }?>
        <?php }?>
    </p>
</div>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_create_account_after_order']=="Y"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="order-placed-create-account">
    <h2 class="subheader"><?php echo $_smarty_tpl->__("create_account");?>
</h2>
    <div class="form-wrap login">
        <form name="order_register_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
            <div class="control-group">
                <label for="user_login_profile" class="cm-required"><?php echo $_smarty_tpl->__("username");?>
</label>
                <input id="user_login_profile" type="text" name="user_data[user_login]" size="32" maxlength="32" value="" class="input-text" />
            </div>
            <?php }?>

            <div class="control-group">
                <label for="password1" class="cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
                <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="" class="cm-autocomplete-off input-text" />
            </div>

            <div class="control-group">
                <label for="password2" class="cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
                <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="" class="cm-autocomplete-off input-text" />
            </div>

            <div class="buttons-container body-bc clearfix wrap">
                <p><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.create_profile]",'but_text'=>__("create")), 0);?>
</p>
            </div>
        </form>
        </div>

    </div>
    <div class="order-placed-login-info">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_instruction")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <div class="login-info">
                    <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
                </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } else { ?>
    <div class="order-placed-login-info login-info-full">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_instruction")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                    <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="wysiwyg-content">
                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:order_confirmation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="clearfix buttons-container wrap <?php if (!$_smarty_tpl->tpl_vars['order_info']->value||!$_smarty_tpl->tpl_vars['settings']->value['General']['allow_create_account_after_order']=="Y"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?> margin-top<?php }?>">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:complete_button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:complete_button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="float-left">
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("order_details"),'but_href'=>"orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("order_details"),'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), 0);?>

                    <?php }?>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("view_orders"),'but_href'=>"orders.search"), 0);?>

            </div>
            <div class="float-right">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"text-button-vmid",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:complete_button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("order");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/complete.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/complete.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="order-placed-successfully">
    <p><?php echo $_smarty_tpl->__("text_order_placed_successfully");?>

        <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>.
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_details");?>
</a>.
            <?php }?>
        <?php }?>
    </p>
</div>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_create_account_after_order']=="Y"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="order-placed-create-account">
    <h2 class="subheader"><?php echo $_smarty_tpl->__("create_account");?>
</h2>
    <div class="form-wrap login">
        <form name="order_register_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
            <div class="control-group">
                <label for="user_login_profile" class="cm-required"><?php echo $_smarty_tpl->__("username");?>
</label>
                <input id="user_login_profile" type="text" name="user_data[user_login]" size="32" maxlength="32" value="" class="input-text" />
            </div>
            <?php }?>

            <div class="control-group">
                <label for="password1" class="cm-required cm-password"><?php echo $_smarty_tpl->__("password");?>
</label>
                <input type="password" id="password1" name="user_data[password1]" size="32" maxlength="32" value="" class="cm-autocomplete-off input-text" />
            </div>

            <div class="control-group">
                <label for="password2" class="cm-required cm-password"><?php echo $_smarty_tpl->__("confirm_password");?>
</label>
                <input type="password" id="password2" name="user_data[password2]" size="32" maxlength="32" value="" class="cm-autocomplete-off input-text" />
            </div>

            <div class="buttons-container body-bc clearfix wrap">
                <p><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.create_profile]",'but_text'=>__("create")), 0);?>
</p>
            </div>
        </form>
        </div>

    </div>
    <div class="order-placed-login-info">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_instruction")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                <div class="login-info">
                    <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
                </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } else { ?>
    <div class="order-placed-login-info login-info-full">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_instruction")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions']) {?>
                    <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_instructions");?>
</h4>
                    <div class="wysiwyg-content">
                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['instructions'];?>

                    </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_instruction"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:order_confirmation")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:order_confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="clearfix buttons-container wrap <?php if (!$_smarty_tpl->tpl_vars['order_info']->value||!$_smarty_tpl->tpl_vars['settings']->value['General']['allow_create_account_after_order']=="Y"||$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?> margin-top<?php }?>">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:complete_button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:complete_button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="float-left">
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['child_ids']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("order_details"),'but_href'=>"orders.search?period=A&order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['child_ids'])), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("order_details"),'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), 0);?>

                    <?php }?>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("view_orders"),'but_href'=>"orders.search"), 0);?>

            </div>
            <div class="float-right">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"text-button-vmid",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:complete_button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("order");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
