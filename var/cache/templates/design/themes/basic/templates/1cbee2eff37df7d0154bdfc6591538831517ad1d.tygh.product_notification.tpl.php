<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:26
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/product_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:818066351533e9d7211ea57-00107553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbee2eff37df7d0154bdfc6591538831517ad1d' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/product_notification.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '818066351533e9d7211ea57-00107553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d72269bf2_10237655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d72269bf2_10237655')) {function content_533e9d72269bf2_10237655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_cart','items_in_cart','cart_subtotal','view_cart','items_in_cart','cart_subtotal'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <div class="float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("view_cart"),'but_href'=>"checkout.cart"), 0);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_redirect']!="Y") {?>
        <div class="float-right">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.checkout"), 0);?>

        </div>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("info", null, null); ob_start(); ?>
    <div class="clearfix"></div>
    <hr class="product-notification-divider" />

    <div class="product-notification-total-info clearfix">
        <div class="float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_SESSION['cart']['amount']));?>
</div>
        <div class="product-notification-subtotal float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'product_info'=>Smarty::$_smarty_vars['capture']['info']), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/product_notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/product_notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <div class="float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("view_cart"),'but_href'=>"checkout.cart"), 0);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_redirect']!="Y") {?>
        <div class="float-right">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.checkout"), 0);?>

        </div>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("info", null, null); ob_start(); ?>
    <div class="clearfix"></div>
    <hr class="product-notification-divider" />

    <div class="product-notification-total-info clearfix">
        <div class="float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_SESSION['cart']['amount']));?>
</div>
        <div class="product-notification-subtotal float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'product_info'=>Smarty::$_smarty_vars['capture']['info']), 0);?>
<?php }?><?php }} ?>
