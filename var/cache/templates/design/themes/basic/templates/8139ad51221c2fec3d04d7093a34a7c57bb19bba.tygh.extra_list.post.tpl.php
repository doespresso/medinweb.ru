<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:54:36
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/hooks/checkout/extra_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1210624126533e9d7cc190c8-27372518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8139ad51221c2fec3d04d7093a34a7c57bb19bba' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/gift_certificates/hooks/checkout/extra_list.post.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1210624126533e9d7cc190c8-27372518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'config' => 0,
    'gift' => 0,
    'gift_key' => 0,
    'show_images' => 0,
    'obj_id' => 0,
    'settings' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'use_ajax' => 0,
    'addons' => 0,
    'cart_products' => 0,
    'key' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9d7d05b604_41292643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9d7d05b604_41292643')) {function content_533e9d7d05b604_41292643($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('edit','gift_certificate','remove','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','qty','discount','tax','subtotal','remove','price_summary','free','free','free','edit','gift_certificate','remove','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','qty','discount','tax','subtotal','remove','price_summary','free','free','free'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['gift']->value['object_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['gift_key']->value : $tmp), null, 0);?>
<?php if (!Smarty::$_smarty_vars['capture']['prods']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("prods", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<tr>
    <td class="product-image-cell">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="cart"||$_smarty_tpl->tpl_vars['show_images']->value) {?>
    <div class="product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

            </a>
            <p class="center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("edit"),'but_href'=>"gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0);?>
</p>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

        <?php }?>
    <!--product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="product-description" style="width: 50%">
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->__("gift_certificate");?>
<?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
"  data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a><?php }?></a>&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true&&$_smarty_tpl->tpl_vars['cart']->value['amount']!=1) {?>
                <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
            <?php }?>
        <?php } else { ?>
            <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
        <?php }?>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("amount");?>
:</label><span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0);?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("send_via");?>
:</label><span><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="E") {?><?php echo $_smarty_tpl->__("email");?>
<?php } else { ?><?php echo $_smarty_tpl->__("postal_mail");?>
<?php }?></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y"&&!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
        
        <a id="sw_gift_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination detailed-link"><?php echo $_smarty_tpl->__("free_products");?>
</a>

        <div id="gift_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="product-options hidden">
            <div class="caret-info-wrapper">
                <span class="caret-info light"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            </div>
            <table class="table fixed-layout table-width">
            <tr>
                <th style="width: 40%"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("qty");?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("discount");?>
</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("tax");?>
</th>
                <?php }?>
                <th class="right" style="width: 16%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
            <tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
                <td style="width: 30%">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']),70,"...",true);?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true) {?>
                        <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
                    <?php }?>
                    <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a>
                    <p><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_options']),'fields_prefix'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][product_options]"), 0);?>
</p>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][parent][certificate]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" /></td>
                <td class="center">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0);?>
</td>
                <td class="center">
                    <input type="text" size="3" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y") {?>readonly="readonly"<?php }?> />
                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                <td class="center">
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount']), 0);?>
<?php } else { ?>-<?php }?></td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                <td class="center">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total']), 0);?>
</td>
                <?php }?>
                <td class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0);?>
</td>
            </tr>
            <?php }?>
            <?php } ?>
            </table>
            <div class="control-group product-list-field float-right nowrap">
                <p><label class="valign"><?php echo $_smarty_tpl->__("price_summary");?>
:</label>
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?></p>
            </div>
            <div class="clear"></div>
        </div>
        <?php }?>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"sub-price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="quantity-cell center">
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php } ?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/extra_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/extra_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['gift']->value['object_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['gift_key']->value : $tmp), null, 0);?>
<?php if (!Smarty::$_smarty_vars['capture']['prods']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("prods", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<tr>
    <td class="product-image-cell">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="cart"||$_smarty_tpl->tpl_vars['show_images']->value) {?>
    <div class="product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

            </a>
            <p class="center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("edit"),'but_href'=>"gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0);?>
</p>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0);?>

        <?php }?>
    <!--product_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </td>
    <td class="product-description" style="width: 50%">
    <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->__("gift_certificate");?>
<?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
"  data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a><?php }?></a>&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true&&$_smarty_tpl->tpl_vars['cart']->value['amount']!=1) {?>
                <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
            <?php }?>
        <?php } else { ?>
            <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
        <?php }?>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("amount");?>
:</label><span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0);?>
</span>
        </div>
        <div class="control-group product-list-field">
            <label class="valign"><?php echo $_smarty_tpl->__("send_via");?>
:</label><span><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="E") {?><?php echo $_smarty_tpl->__("email");?>
<?php } else { ?><?php echo $_smarty_tpl->__("postal_mail");?>
<?php }?></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y"&&!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
        
        <a id="sw_gift_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination detailed-link"><?php echo $_smarty_tpl->__("free_products");?>
</a>

        <div id="gift_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="product-options hidden">
            <div class="caret-info-wrapper">
                <span class="caret-info light"> <span class="caret-outer"></span> <span class="caret-inner"></span></span>
            </div>
            <table class="table fixed-layout table-width">
            <tr>
                <th style="width: 40%"><?php echo $_smarty_tpl->__("product");?>
</th>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("qty");?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("discount");?>
</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                <th style="width: 15%"><?php echo $_smarty_tpl->__("tax");?>
</th>
                <?php }?>
                <th class="right" style="width: 16%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
            <tr <?php echo smarty_function_cycle(array('values'=>",class=\"table-row\""),$_smarty_tpl);?>
>
                <td style="width: 30%">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']),70,"...",true);?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value==true) {?>
                        <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
                    <?php }?>
                    <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 icon-delete-big" href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="icon-cancel-circle"></i></a>
                    <p><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['product_options']),'fields_prefix'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][product_options]"), 0);?>
</p>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][parent][certificate]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" /></td>
                <td class="center">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0);?>
</td>
                <td class="center">
                    <input type="text" size="3" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']=="Y") {?>readonly="readonly"<?php }?> />
                    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
                <td class="center">
                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount']), 0);?>
<?php } else { ?>-<?php }?></td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                <td class="center">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total']), 0);?>
</td>
                <?php }?>
                <td class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0);?>
</td>
            </tr>
            <?php }?>
            <?php } ?>
            </table>
            <div class="control-group product-list-field float-right nowrap">
                <p><label class="valign"><?php echo $_smarty_tpl->__("price_summary");?>
:</label>
                <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?></p>
            </div>
            <div class="clear"></div>
        </div>
        <?php }?>
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"sub-price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_display_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
    <td class="quantity-cell center">
    </td>
    <td class="right price-cell cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'class'=>"price"), 0);?>
<?php } else { ?><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span><?php }?>
    <!--price_subtotal_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
</tr>
<?php } ?>

<?php }?>
<?php }?><?php }} ?>
