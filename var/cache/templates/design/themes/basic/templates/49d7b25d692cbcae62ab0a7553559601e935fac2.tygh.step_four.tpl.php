<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:30
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_four.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980503166533e9d7617f531-85903682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d7b25d692cbcae62ab0a7553559601e935fac2' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_four.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '980503166533e9d7617f531-85903682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'edit' => 0,
    'settings' => 0,
    'profile_fields' => 0,
    'complete' => 0,
    'edit_step' => 0,
    'cart' => 0,
    'continue_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d762bd981_59037257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d762bd981_59037257')) {function content_533e9d762bd981_59037257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('billing_options','text_no_payments_needed','submit_my_order','text_no_shipping_methods','text_min_order_amount_required','billing_options','text_no_payments_needed','submit_my_order','text_no_shipping_methods','text_min_order_amount_required'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> step-four" data-ct-checkout="billing_options" id="step_four">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> clearfix">
            <span class="float-left"><?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>4<?php } else { ?>3<?php }?></span>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_four&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("billing_options");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_four_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> <?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>hidden<?php }?>">
        <div class="clearfix">
            
            <?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                    <div class="clearfix">

                        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id']), 0);?>

                        <?php } else { ?>
                            <div class="checkout-inside-block"><h2 class="subheader"><?php echo $_smarty_tpl->__("text_no_payments_needed");?>
</h2></div>

                            <form name="paymens_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                <div class="checkout-buttons">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit_my_order"),'but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"place_order"), 0);?>
    
                                </div>
                            </form>
                        <?php }?>
                    </div>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_failed']) {?>
                    <p class="error-text center"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
                    <div class="checkout-inside-block">
                        <p class="error-text"><?php echo $_smarty_tpl->__("text_min_order_amount_required");?>
&nbsp;<strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['settings']->value['General']['min_order_amount']), 0);?>
</strong></p>
                    </div>
                <?php }?>

                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

                </div>
                
            <?php }?>
        </div>
    </div>
<!--step_four--></div>

<div id="place_order_data" class="hidden">
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/step_four.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/step_four.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> step-four" data-ct-checkout="billing_options" id="step_four">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> clearfix">
            <span class="float-left"><?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>4<?php } else { ?>3<?php }?></span>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_four&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("billing_options");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_four_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> <?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>hidden<?php }?>">
        <div class="clearfix">
            
            <?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                    <div class="clearfix">

                        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['cart']->value['payment_id']), 0);?>

                        <?php } else { ?>
                            <div class="checkout-inside-block"><h2 class="subheader"><?php echo $_smarty_tpl->__("text_no_payments_needed");?>
</h2></div>

                            <form name="paymens_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                <div class="checkout-buttons">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("submit_my_order"),'but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"place_order"), 0);?>
    
                                </div>
                            </form>
                        <?php }?>
                    </div>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_failed']) {?>
                    <p class="error-text center"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
                    <div class="checkout-inside-block">
                        <p class="error-text"><?php echo $_smarty_tpl->__("text_min_order_amount_required");?>
&nbsp;<strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['settings']->value['General']['min_order_amount']), 0);?>
</strong></p>
                    </div>
                <?php }?>

                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

                </div>
                
            <?php }?>
        </div>
    </div>
<!--step_four--></div>

<div id="place_order_data" class="hidden">
</div><?php }?><?php }} ?>
