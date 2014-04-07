<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_two.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781860460533e9d75cc2844-43462783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac90a698b287fa5e2d465990e0282711216b1602' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_two.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '781860460533e9d75cc2844-43462783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'edit' => 0,
    'settings' => 0,
    'complete' => 0,
    'edit_step' => 0,
    'ajax_form' => 0,
    'hide_profile_name' => 0,
    'cart' => 0,
    'first_section' => 0,
    'profile_fields' => 0,
    'first_section_text' => 0,
    'sec_section' => 0,
    'body_id' => 0,
    'sec_section_text' => 0,
    '_action' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d75f131f9_65966810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d75f131f9_65966810')) {function content_533e9d75f131f9_65966810($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('change','billing_shipping_address','billing_address','shipping_address','text_ship_to_billing','shipping_address','billing_address','text_billing_same_with_shipping','continue','change','billing_shipping_address','billing_address','shipping_address','text_ship_to_billing','shipping_address','billing_address','text_billing_same_with_shipping','continue'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']) {?>
    <?php $_smarty_tpl->tpl_vars["_action"] = new Smarty_variable(".".((string)$_smarty_tpl->tpl_vars['runtime']->value['action']), null, 0);?>
<?php }?>

<div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> step-two" data-ct-checkout="billing_shipping_address" id="step_two">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>-complete<?php }?> clearfix">
            <span class="float-left"><?php if (!$_smarty_tpl->tpl_vars['complete']->value||$_smarty_tpl->tpl_vars['edit']->value) {?>2<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?><i class="icon-ok"></i><?php }?></span>

            
            <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <span class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-ajax",'but_href'=>"checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value),'but_target_id'=>"checkout_*",'but_text'=>__("change"),'but_role'=>"tool"), 0);?>

                </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("billing_shipping_address");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_two_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?> hidden<?php }?> cm-skip-save-fields">
            <form name="step_two_billing_address" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="<?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>get<?php } else { ?>post<?php }?>">
            <input type="hidden" name="update_step" value="step_two" />
            <input type="hidden" name="next_step" value="<?php if ($_REQUEST['from_step']&&$_REQUEST['from_step']!="step_two"&&$_REQUEST['from_step']!="step_one") {?><?php echo htmlspecialchars($_REQUEST['from_step'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>step_three<?php }?>" />
            <input type="hidden" name="result_ids" value="checkout*,account*" />
            <input type="hidden" name="dispatch" value="checkout.checkout" />

            <?php if ($_REQUEST['profile']=="new") {?>
                <?php $_smarty_tpl->tpl_vars["hide_profile_name"] = new Smarty_variable(false, null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["hide_profile_name"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                <div class="clearfix">
                    <div class="checkout-inside-block">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_text'=>true,'hide_profile_name'=>$_smarty_tpl->tpl_vars['hide_profile_name']->value,'hide_profile_delete'=>true,'profile_id'=>$_smarty_tpl->tpl_vars['cart']->value['profile_id'],'create_href'=>"checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)."&profile=new"), 0);?>

                    </div>
                </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['address_position']=="billing_first") {?>
                <?php $_smarty_tpl->tpl_vars["first_section"] = new Smarty_variable("B", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["first_section_text"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section"] = new Smarty_variable("S", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section_text"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["ship_to_another_text"] = new Smarty_variable($_smarty_tpl->__("text_ship_to_billing"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["body_id"] = new Smarty_variable("sa", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["first_section"] = new Smarty_variable("S", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["first_section_text"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section"] = new Smarty_variable("B", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section_text"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["ship_to_another_text"] = new Smarty_variable($_smarty_tpl->__("text_billing_same_with_shipping"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["body_id"] = new Smarty_variable("ba", null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['first_section']->value]) {?>
                    <div class="clearfix" data-ct-address="billing-address">
                        <div class="checkout-inside-block">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>$_smarty_tpl->tpl_vars['first_section']->value,'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->tpl_vars['first_section_text']->value), 0);?>

                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['sec_section']->value]) {?>
                    <div class="clearfix" data-ct-address="shipping-address">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>$_smarty_tpl->tpl_vars['sec_section']->value,'body_id'=>$_smarty_tpl->tpl_vars['body_id']->value,'address_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value),'ship_to_another'=>$_smarty_tpl->tpl_vars['cart']->value['ship_to_another'],'title'=>$_smarty_tpl->tpl_vars['sec_section_text']->value,'grid_wrap'=>"checkout-inside-block"), 0);?>

                    </div>
                <?php }?>
                
                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_steps".((string)$_smarty_tpl->tpl_vars['_action']->value)."]",'but_text'=>__("continue")), 0);?>

                </div>
            <?php }?>
            </form>
        </div>

<!--step_two--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/step_two.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/step_two.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['action']) {?>
    <?php $_smarty_tpl->tpl_vars["_action"] = new Smarty_variable(".".((string)$_smarty_tpl->tpl_vars['runtime']->value['action']), null, 0);?>
<?php }?>

<div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> step-two" data-ct-checkout="billing_shipping_address" id="step_two">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>-complete<?php }?> clearfix">
            <span class="float-left"><?php if (!$_smarty_tpl->tpl_vars['complete']->value||$_smarty_tpl->tpl_vars['edit']->value) {?>2<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?><i class="icon-ok"></i><?php }?></span>

            
            <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <span class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-ajax",'but_href'=>"checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value),'but_target_id'=>"checkout_*",'but_text'=>__("change"),'but_role'=>"tool"), 0);?>

                </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("billing_shipping_address");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_two_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?> hidden<?php }?> cm-skip-save-fields">
            <form name="step_two_billing_address" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="<?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>get<?php } else { ?>post<?php }?>">
            <input type="hidden" name="update_step" value="step_two" />
            <input type="hidden" name="next_step" value="<?php if ($_REQUEST['from_step']&&$_REQUEST['from_step']!="step_two"&&$_REQUEST['from_step']!="step_one") {?><?php echo htmlspecialchars($_REQUEST['from_step'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>step_three<?php }?>" />
            <input type="hidden" name="result_ids" value="checkout*,account*" />
            <input type="hidden" name="dispatch" value="checkout.checkout" />

            <?php if ($_REQUEST['profile']=="new") {?>
                <?php $_smarty_tpl->tpl_vars["hide_profile_name"] = new Smarty_variable(false, null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["hide_profile_name"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                <div class="clearfix">
                    <div class="checkout-inside-block">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_text'=>true,'hide_profile_name'=>$_smarty_tpl->tpl_vars['hide_profile_name']->value,'hide_profile_delete'=>true,'profile_id'=>$_smarty_tpl->tpl_vars['cart']->value['profile_id'],'create_href'=>"checkout.checkout?edit_step=step_two&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)."&profile=new"), 0);?>

                    </div>
                </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['address_position']=="billing_first") {?>
                <?php $_smarty_tpl->tpl_vars["first_section"] = new Smarty_variable("B", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["first_section_text"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section"] = new Smarty_variable("S", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section_text"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["ship_to_another_text"] = new Smarty_variable($_smarty_tpl->__("text_ship_to_billing"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["body_id"] = new Smarty_variable("sa", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["first_section"] = new Smarty_variable("S", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["first_section_text"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section"] = new Smarty_variable("B", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["sec_section_text"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["ship_to_another_text"] = new Smarty_variable($_smarty_tpl->__("text_billing_same_with_shipping"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["body_id"] = new Smarty_variable("ba", null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['first_section']->value]) {?>
                    <div class="clearfix" data-ct-address="billing-address">
                        <div class="checkout-inside-block">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>$_smarty_tpl->tpl_vars['first_section']->value,'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->tpl_vars['first_section_text']->value), 0);?>

                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['sec_section']->value]) {?>
                    <div class="clearfix" data-ct-address="shipping-address">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>$_smarty_tpl->tpl_vars['sec_section']->value,'body_id'=>$_smarty_tpl->tpl_vars['body_id']->value,'address_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value),'ship_to_another'=>$_smarty_tpl->tpl_vars['cart']->value['ship_to_another'],'title'=>$_smarty_tpl->tpl_vars['sec_section_text']->value,'grid_wrap'=>"checkout-inside-block"), 0);?>

                    </div>
                <?php }?>
                
                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_steps".((string)$_smarty_tpl->tpl_vars['_action']->value)."]",'but_text'=>__("continue")), 0);?>

                </div>
            <?php }?>
            </form>
        </div>

<!--step_two--></div><?php }?><?php }} ?>
