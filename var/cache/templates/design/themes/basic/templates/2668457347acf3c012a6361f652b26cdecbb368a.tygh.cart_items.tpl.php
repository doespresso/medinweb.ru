<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:36
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/cart_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2000981552533e9d7c494ff0-84727423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2668457347acf3c012a6361f652b26cdecbb368a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/checkout/components/cart_items.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2000981552533e9d7c494ff0-84727423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'cart_products' => 0,
    'product' => 0,
    'key' => 0,
    'show_images' => 0,
    'obj_id' => 0,
    'settings' => 0,
    'ajax_class' => 0,
    'disable_ids' => 0,
    'name' => 0,
    'price_info_title' => 0,
    'use_ajax' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7c99b488_37021845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7c99b488_37021845')) {function content_533e9d7c99b488_37021845($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('product','unit_price','quantity','total_price','remove','sku','free','discount','taxes','price','quantity','discount','tax','subtotal','text_click_here','cart_items','product','unit_price','quantity','total_price','remove','sku','free','discount','taxes','price','quantity','discount','tax','subtotal','text_click_here','cart_items'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("cartbox", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:form_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:form_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div id="cart_items">
<table class="table top table-width">
<?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>

<?php $_smarty_tpl->tpl_vars["prods"] = new Smarty_variable(false, null, 0);?>

<tr>
    <th colspan="2" class="left"><?php echo $_smarty_tpl->__("product");?>
</th>
    <th class="right"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
    <th class="quantity-cell"><?php echo $_smarty_tpl->__("quantity");?>
</th>
    <th class="right"><?php echo $_smarty_tpl->__("total_price");?>
</th>
</tr>                
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product']->value['object_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:items_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
<tr>
    <td class="product-image-cell">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="cart"||$_smarty_tpl->tpl_vars['show_images']->value) {?>
    <div class="product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_icon")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>
</a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_icon"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="product-description" style="width: 50%;">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a><?php }?>
        <p class="sku<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        </p>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
            <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 options" id="options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0);?>

            <!--options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }?>
        <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['name']->value, null, null); ob_start(); ?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("product_info_update", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
            <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])||($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal")) {?>
                <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                    <?php $_smarty_tpl->tpl_vars["price_info_title"] = new Smarty_variable($_smarty_tpl->__("discount"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["price_info_title"] = new Smarty_variable($_smarty_tpl->__("taxes"), null, 0);?>
                <?php }?>
                <p><a data-ca-target-id="discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                <div class="product-options hidden" id="discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                <table class="table">
                <tr>
                    <th><?php echo $_smarty_tpl->__("price");?>
</th>
                    <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                    <th><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td>
                    <td class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td><?php }?>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0);?>
</td>
                </tr>
                <tr class="table-footer">
                    <td colspan="5">&nbsp;</td>
                </tr>
                </table>
                </div>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if (trim(Smarty::$_smarty_vars['capture']['product_info_update'])) {?>
            <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo Smarty::$_smarty_vars['capture']['product_info_update'];?>

            <!--product_info_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value])) {?>
        <div class="clear"></div>
        <a id="sw_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination detailed-link"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>

        <div id="options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="product-options hidden">
            <div class="caret-info-wrapper">
                <span class="caret-info light"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            </div>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

        </div>
        <?php }?>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"sub-price"), 0);?>

    <!--price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="quantity-cell center<?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true&&$_smarty_tpl->tpl_vars['cart']->value['amount']!=1) {?>
            <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
        <?php }?>
        
        <div class="quantity cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

            <label for="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                    <div class="center valign value-changer cm-value-changer">
                    <a class="cm-increase increase">&#43;</a>
                <?php }?>
                <input type="text" size="3" id="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                    <a class="cm-decrease decrease">&minus;</a>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y") {?>
                <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
            <?php }?>
        <!--quantity_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?>
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:items_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:extra_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:extra_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</table>
<!--cart_items--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("cart_items"),'content'=>Smarty::$_smarty_vars['capture']['cartbox']), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("cartbox", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:form_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:form_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div id="cart_items">
<table class="table top table-width">
<?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>

<?php $_smarty_tpl->tpl_vars["prods"] = new Smarty_variable(false, null, 0);?>

<tr>
    <th colspan="2" class="left"><?php echo $_smarty_tpl->__("product");?>
</th>
    <th class="right"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
    <th class="quantity-cell"><?php echo $_smarty_tpl->__("quantity");?>
</th>
    <th class="right"><?php echo $_smarty_tpl->__("total_price");?>
</th>
</tr>                
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product']->value['object_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:items_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
<tr>
    <td class="product-image-cell">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="cart"||$_smarty_tpl->tpl_vars['show_images']->value) {?>
    <div class="product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_icon")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>
</a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_icon"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="product-description" style="width: 50%;">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a><?php }?>
        <p class="sku<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        </p>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
            <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 options" id="options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0);?>

            <!--options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }?>
        <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['name']->value, null, null); ob_start(); ?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("product_info_update", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
            <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])||($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal")) {?>
                <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                    <?php $_smarty_tpl->tpl_vars["price_info_title"] = new Smarty_variable($_smarty_tpl->__("discount"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["price_info_title"] = new Smarty_variable($_smarty_tpl->__("taxes"), null, 0);?>
                <?php }?>
                <p><a data-ca-target-id="discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                <div class="product-options hidden" id="discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                <table class="table">
                <tr>
                    <th><?php echo $_smarty_tpl->__("price");?>
</th>
                    <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                    <th><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td>
                    <td class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?><td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0);?>
</td><?php }?>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0);?>
</td>
                </tr>
                <tr class="table-footer">
                    <td colspan="5">&nbsp;</td>
                </tr>
                </table>
                </div>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php if (trim(Smarty::$_smarty_vars['capture']['product_info_update'])) {?>
            <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo Smarty::$_smarty_vars['capture']['product_info_update'];?>

            <!--product_info_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value])) {?>
        <div class="clear"></div>
        <a id="sw_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination detailed-link"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>

        <div id="options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="product-options hidden">
            <div class="caret-info-wrapper">
                <span class="caret-info light"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            </div>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

        </div>
        <?php }?>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"sub-price"), 0);?>

    <!--price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="quantity-cell center<?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true&&$_smarty_tpl->tpl_vars['cart']->value['amount']!=1) {?>
            <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
        <?php }?>
        
        <div class="quantity cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

            <label for="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                    <div class="center valign value-changer cm-value-changer">
                    <a class="cm-increase increase">&#43;</a>
                <?php }?>
                <input type="text" size="3" id="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                    <a class="cm-decrease decrease">&minus;</a>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y"||$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y") {?>
                <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
            <?php }?>
        <!--quantity_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?>
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:items_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:extra_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:extra_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</table>
<!--cart_items--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("cart_items"),'content'=>Smarty::$_smarty_vars['capture']['cartbox']), 0);?>

<?php }?><?php }} ?>
