<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:30
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/checkout/order_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1933120590533e9d76cafa35-04797402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de04ab915a96301921bbeab2aad40ec5b5de2ac' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/checkout/order_info.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1933120590533e9d76cafa35-04797402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'completed_steps' => 0,
    'profile_fields' => 0,
    'cart' => 0,
    'field' => 0,
    'value' => 0,
    'group_key' => 0,
    'shipping_id' => 0,
    'product_groups' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d76dc85d9_29108649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d76dc85d9_29108649')) {function content_533e9d76dc85d9_29108649($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('billing_address','shipping_address','shipping_method','billing_address','shipping_address','shipping_method'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['completed_steps']->value['step_two']) {?>
    <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields("I"), null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <h4><?php echo $_smarty_tpl->__("billing_address");?>
:</h4>

        <ul id="tygh_billing_adress" class="shipping-adress clearfix">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['B']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                    <li class="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
        </ul>

        <hr />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <h4><?php echo $_smarty_tpl->__("shipping_address");?>
:</h4>
        <ul id="tygh_shipping_adress" class="shipping-adress clearfix">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['S']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                    <li class="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
        </ul>
        <hr />
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!empty($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'])&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
        <h4><?php echo $_smarty_tpl->__("shipping_method");?>
:</h4>
        <ul id="tygh_shipping_method">
            <?php  $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_id"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_id"]->key => $_smarty_tpl->tpl_vars["shipping_id"]->value) {
$_smarty_tpl->tpl_vars["shipping_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars["shipping_id"]->key;
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_groups']->value[$_smarty_tpl->tpl_vars['group_key']->value]['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]['shipping'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
        </ul>
    <?php }?>

<?php }?>
<?php $_smarty_tpl->tpl_vars["block_wrap"] = new Smarty_variable("checkout_order_info_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_wrap", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["block_wrap"] = clone $_smarty_tpl->tpl_vars["block_wrap"];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/order_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/checkout/order_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['completed_steps']->value['step_two']) {?>
    <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields("I"), null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <h4><?php echo $_smarty_tpl->__("billing_address");?>
:</h4>

        <ul id="tygh_billing_adress" class="shipping-adress clearfix">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['B']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                    <li class="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
        </ul>

        <hr />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <h4><?php echo $_smarty_tpl->__("shipping_address");?>
:</h4>
        <ul id="tygh_shipping_adress" class="shipping-adress clearfix">
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['S']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                    <li class="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
        </ul>
        <hr />
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!empty($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'])&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
        <h4><?php echo $_smarty_tpl->__("shipping_method");?>
:</h4>
        <ul id="tygh_shipping_method">
            <?php  $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_id"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_id"]->key => $_smarty_tpl->tpl_vars["shipping_id"]->value) {
$_smarty_tpl->tpl_vars["shipping_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars["shipping_id"]->key;
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_groups']->value[$_smarty_tpl->tpl_vars['group_key']->value]['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]['shipping'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
        </ul>
    <?php }?>

<?php }?>
<?php $_smarty_tpl->tpl_vars["block_wrap"] = new Smarty_variable("checkout_order_info_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_wrap", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["block_wrap"] = clone $_smarty_tpl->tpl_vars["block_wrap"];?>
<?php }?><?php }} ?>
