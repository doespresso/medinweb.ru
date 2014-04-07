<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:36
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77892745533e9d7c253455-06403130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e53eb48e4566f996c19d22b5b0e2d3f0a1b9c90' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/cart_content.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '77892745533e9d7c253455-06403130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'result_ids' => 0,
    'continue_url' => 0,
    'payment_methods' => 0,
    'link_href' => 0,
    'checkout_add_buttons' => 0,
    'checkout_add_button' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7c368232_15190491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7c368232_15190491')) {function content_533e9d7c368232_15190491($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('cart_contents','or_use','cart_contents','or_use'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["result_ids"] = new Smarty_variable("cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart", null, 0);?>

<form name="checkout_form" class="cm-check-changes" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
<h1 class="mainbox-title">
        <span><?php echo $_smarty_tpl->__("cart_contents");?>
</span>
</h1>
<div class="buttons-container cart-top-buttons clearfix">
    <div class="float-left cart-left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm nobg"), 0);?>
</div>
    <div class="float-right right cart-right-buttons">
        <div class="float-right">
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?></div>
        <div class="float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart",'but_name'=>"dispatch[checkout.update]"), 0);?>
</div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


</form>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


<div class="buttons-container cart-bottom-buttons clearfix">
    <div class="float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>
</div>
    <div class="float-right right cart-right-buttons">
        <div class="float-right">
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?>
        </div>
        <div class="float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_external_click_id'=>"button_cart",'but_meta'=>"cm-external-click"), 0);?>
</div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
<div class="payment-methods-wrap" id="payment-methods">
    <div class="payment-methods"><span class="payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="table-width">
        <tr>
            <?php  $_smarty_tpl->tpl_vars["checkout_add_button"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["checkout_add_button"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checkout_add_buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["checkout_add_button"]->key => $_smarty_tpl->tpl_vars["checkout_add_button"]->value) {
$_smarty_tpl->tpl_vars["checkout_add_button"]->_loop = true;
?>
                <td><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
            <?php } ?>
        </tr>
        </table>
    </div>
<!--payment-methods--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["result_ids"] = new Smarty_variable("cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart", null, 0);?>

<form name="checkout_form" class="cm-check-changes" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
<h1 class="mainbox-title">
        <span><?php echo $_smarty_tpl->__("cart_contents");?>
</span>
</h1>
<div class="buttons-container cart-top-buttons clearfix">
    <div class="float-left cart-left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm nobg"), 0);?>
</div>
    <div class="float-right right cart-right-buttons">
        <div class="float-right">
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?></div>
        <div class="float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart",'but_name'=>"dispatch[checkout.update]"), 0);?>
</div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


</form>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


<div class="buttons-container cart-bottom-buttons clearfix">
    <div class="float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>
</div>
    <div class="float-right right cart-right-buttons">
        <div class="float-right">
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?>
        </div>
        <div class="float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_external_click_id'=>"button_cart",'but_meta'=>"cm-external-click"), 0);?>
</div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
<div class="payment-methods-wrap" id="payment-methods">
    <div class="payment-methods"><span class="payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="table-width">
        <tr>
            <?php  $_smarty_tpl->tpl_vars["checkout_add_button"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["checkout_add_button"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checkout_add_buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["checkout_add_button"]->key => $_smarty_tpl->tpl_vars["checkout_add_button"]->value) {
$_smarty_tpl->tpl_vars["checkout_add_button"]->_loop = true;
?>
                <td><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
            <?php } ?>
        </tr>
        </table>
    </div>
<!--payment-methods--></div>
<?php }?>
<?php }?><?php }} ?>
