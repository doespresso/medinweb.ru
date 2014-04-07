<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_three.tpl" */ ?>
<?php /*%%SmartyHeaderCode:942571508533e9d75f23da1-33607000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beb85d287f0ea981957754fab9c8cef805c0a63b' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/steps/step_three.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '942571508533e9d75f23da1-33607000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'edit' => 0,
    'settings' => 0,
    'complete' => 0,
    'profile_fields' => 0,
    'edit_step' => 0,
    'ajax_form' => 0,
    'cart' => 0,
    'but_text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d761713c5_47685677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d761713c5_47685677')) {function content_533e9d761713c5_47685677($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('change','shipping_options','text_no_shipping_methods','delivery_times_text','shipping_tips','change','shipping_options','text_no_shipping_methods','delivery_times_text','shipping_tips'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?>" data-ct-checkout="shipping_options" id="step_three">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>-complete<?php }?> clearfix">
            <span class="float-left"><?php if (!$_smarty_tpl->tpl_vars['complete']->value||$_smarty_tpl->tpl_vars['edit']->value) {?><?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>3<?php } else { ?>2<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?><i class="icon-ok"></i><?php }?></span>

            <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <span class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-ajax",'but_href'=>"checkout.checkout?edit_step=step_three&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value),'but_target_id'=>"checkout_*",'but_text'=>__("change"),'but_role'=>"tool"), 0);?>

                </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_three&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("shipping_options");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_three_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> <?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>hidden<?php }?> clearfix">
        <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
            <form name="step_three_payment_and_shipping" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="<?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>get<?php } else { ?>post<?php }?>">
                <input type="hidden" name="update_step" value="step_three" />
                <input type="hidden" name="next_step" value="step_four" />
                <input type="hidden" name="result_ids" value="checkout*" />
                
                <div class="clearfix">
                    <div class="checkout-inside-block">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:select_shipping")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:select_shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_form'=>true,'display'=>"radio"), 0);?>

                        <?php } else { ?>
                            <p class="error-text"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:select_shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
                    
                    
                    <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="shipping-tips">
                        <p><?php echo $_smarty_tpl->__("delivery_times_text");?>
</p>
                            <?php echo $_smarty_tpl->__("shipping_tips");?>

                        </div>
                    <?php }?>
                    </div>
                </div>
                
                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_steps]",'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_id'=>"step_three_but"), 0);?>

                </div>
            </form>
        <?php }?>
    </div>
<!--step_three--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/step_three.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/step_three.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="step-container<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?>" data-ct-checkout="shipping_options" id="step_three">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>
        <h2 class="step-title<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>-complete<?php }?> clearfix">
            <span class="float-left"><?php if (!$_smarty_tpl->tpl_vars['complete']->value||$_smarty_tpl->tpl_vars['edit']->value) {?><?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>3<?php } else { ?>2<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?><i class="icon-ok"></i><?php }?></span>

            <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <span class="float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-ajax",'but_href'=>"checkout.checkout?edit_step=step_three&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value),'but_target_id'=>"checkout_*",'but_text'=>__("change"),'but_role'=>"tool"), 0);?>

                </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:edit_link_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a class="title<?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?> cm-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['complete']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>href="<?php echo htmlspecialchars(fn_url("checkout.checkout?edit_step=step_three&from_step=".((string)$_smarty_tpl->tpl_vars['edit_step']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="checkout_*"<?php }?>><?php echo $_smarty_tpl->__("shipping_options");?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:edit_link_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    <?php }?>

    <div id="step_three_body" class="step-body<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>-active<?php }?> <?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>hidden<?php }?> clearfix">
        <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
            <form name="step_three_payment_and_shipping" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_form']->value, ENT_QUOTES, 'UTF-8');?>
 cm-ajax-full-render" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="<?php if (!$_smarty_tpl->tpl_vars['edit']->value) {?>get<?php } else { ?>post<?php }?>">
                <input type="hidden" name="update_step" value="step_three" />
                <input type="hidden" name="next_step" value="step_four" />
                <input type="hidden" name="result_ids" value="checkout*" />
                
                <div class="clearfix">
                    <div class="checkout-inside-block">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:select_shipping")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:select_shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_form'=>true,'display'=>"radio"), 0);?>

                        <?php } else { ?>
                            <p class="error-text"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</p>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:select_shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
                    
                    
                    <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="shipping-tips">
                        <p><?php echo $_smarty_tpl->__("delivery_times_text");?>
</p>
                            <?php echo $_smarty_tpl->__("shipping_tips");?>

                        </div>
                    <?php }?>
                    </div>
                </div>
                
                <div class="checkout-buttons">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_steps]",'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_id'=>"step_three_but"), 0);?>

                </div>
            </form>
        <?php }?>
    </div>
<!--step_three--></div>
<?php }?><?php }} ?>
