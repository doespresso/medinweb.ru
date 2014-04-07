<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:37
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/checkout/payment_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690615525533e9d7d972d26-17439168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830d9afaed97567db8f8880256ebced00ad5f628' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/reward_points/hooks/checkout/payment_options.post.tpl',
      1 => 1396611754,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '690615525533e9d7d972d26-17439168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'cart_products' => 0,
    'cart' => 0,
    'user_info' => 0,
    'location' => 0,
    'additional_ids' => 0,
    'config' => 0,
    'use_ajax' => 0,
    '_redirect_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7db4ea92_10300381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7db4ea92_10300381')) {function content_533e9d7db4ea92_10300381($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('points_to_use','apply','text_point_in_account','points_lower','points_in_use_lower','points_to_use','apply','text_point_in_account','points_lower','points_in_use_lower'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']=="multi_page") {?>
    <?php $_smarty_tpl->tpl_vars["additional_ids"] = new Smarty_variable(",step_three", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="coupons-container">
    <div id="point_payment" class="code-input discount-coupon">
        <form class="cm-ajax" name="point_payment_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <div class="control-group input-append reward-points">
            <input type="text" class="input-text valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"checkout.point_payment",'alt'=>__("apply")), 0);?>

            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
        </form>
        <div class="discount-info">
            <span class="caret-info"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            <span class="block"><?php echo $_smarty_tpl->__("text_point_in_account");?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
.</span>
            
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                <?php $_smarty_tpl->tpl_vars["_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("cm-ajax", null, 0);?><?php }?>
                <span class="points-in-use"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_in_use_lower");?>
.&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0);?>
)<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points"), 0);?>
<?php }?></span>
            <?php }?>
        </div>
</div>        
    <!--point_payment--></div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_options.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_options.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']=="multi_page") {?>
    <?php $_smarty_tpl->tpl_vars["additional_ids"] = new Smarty_variable(",step_three", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="coupons-container">
    <div id="point_payment" class="code-input discount-coupon">
        <form class="cm-ajax" name="point_payment_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
        <input type="hidden" name="redirect_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <div class="control-group input-append reward-points">
            <input type="text" class="input-text valign cm-hint" name="points_to_use" size="40" value="<?php echo $_smarty_tpl->__("points_to_use");?>
" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"checkout.point_payment",'alt'=>__("apply")), 0);?>

            <input type="submit" class="hidden" name="dispatch[checkout.point_payment]" value="" />
        </div>
        </form>
        <div class="discount-info">
            <span class="caret-info"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            <span class="block"><?php echo $_smarty_tpl->__("text_point_in_account");?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
.</span>
            
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']) {?>
                <?php $_smarty_tpl->tpl_vars["_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?><?php $_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("cm-ajax", null, 0);?><?php }?>
                <span class="points-in-use"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_in_use_lower");?>
.&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0);?>
)<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']!="multi_page") {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout*,cart_status*,subtotal_price_in_points"), 0);?>
<?php }?></span>
            <?php }?>
        </div>
</div>        
    <!--point_payment--></div>
<?php }?><?php }?><?php }} ?>
