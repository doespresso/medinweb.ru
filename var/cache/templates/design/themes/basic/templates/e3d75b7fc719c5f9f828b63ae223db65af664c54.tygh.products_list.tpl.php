<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 16:18:27
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/products_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453201927533ea313922381-41844182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d75b7fc719c5f9f828b63ae223db65af664c54' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/products_list.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '453201927533ea313922381-41844182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'settings' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'bulk_addition' => 0,
    'js_product_var' => 0,
    'hide_links' => 0,
    'discount_label' => 0,
    'obj_id_prefix' => 0,
    'rating' => 0,
    'item_number' => 0,
    'sku' => 0,
    'add_to_cart' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'product_features' => 0,
    'prod_descr' => 0,
    'product_options' => 0,
    'product_amount' => 0,
    'qty' => 0,
    'advanced_options' => 0,
    'min_qty' => 0,
    'product_edp' => 0,
    'form_close' => 0,
    'force_ajax' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ea31409a7c7_11194480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ea31409a7c7_11194480')) {function content_533ea31409a7c7_11194480($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['product']->key;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("capt_options_vs_qty", null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0);?>


<div class="product-container template-products list clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template") {?> long<?php }?>">
    <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

    <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
        <input class="cm-item float-right" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>" <?php if (($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['product']->value['price']==0)) {?>disabled="disabled"<?php }?> />   
    <?php }?>
    
    <div class="float-left product-item-image center">
        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 image-reload" id="list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 image-wrapper">

            

            <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value) {?>
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][link]" value="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][data]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'], ENT_QUOTES, 'UTF-8');?>
,product" />
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

            
            <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value) {?>
                </a>
            <?php }?>
        <!--list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
    <div class="product-info">
        <?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?>
            <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><strong><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
        <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

        
        <div class="float-right right add-product">
            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

        </div>
        
        <div class="prod-info">
            <div class="prices-container clearfix">
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                <div class="float-left product-prices">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                </div>


            </div>
            <div class="product-descr">
                <div class="features"><?php $_smarty_tpl->tpl_vars["product_features"] = new Smarty_variable("product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_features']->value];?>
</div>
                <p><?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</p>
            </div>
            
            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
                <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <div class="options-wrapper">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>

                <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


            <?php }?>
            
            <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>

        </div>
        
    </div>
    <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

</div>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?>
<hr />
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    $(document).ready(function(){

        $.ceEvent('on', 'ce.commoninit', function(context) {            
            if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                context.find('.cm-picker-product-options').switchAvailability(true, false);
            }
            
        });

        $(_.doc).on('click', '.cm-item', function() {
            $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
        });
    });

}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/products_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/products_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['product']->key;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("capt_options_vs_qty", null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0);?>


<div class="product-container template-products list clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_product_details_layout']!="default_template") {?> long<?php }?>">
    <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

    <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
        <input class="cm-item float-right" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>" <?php if (($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['product']->value['price']==0)) {?>disabled="disabled"<?php }?> />   
    <?php }?>
    
    <div class="float-left product-item-image center">
        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 image-reload" id="list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 image-wrapper">

            

            <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value) {?>
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][link]" value="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][data]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'], ENT_QUOTES, 'UTF-8');?>
,product" />
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

            
            <?php if (!$_smarty_tpl->tpl_vars['hide_links']->value) {?>
                </a>
            <?php }?>
        <!--list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        
        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
    <div class="product-info">
        <?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?>
            <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><strong><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
        <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

        
        <div class="float-right right add-product">
            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

        </div>
        
        <div class="prod-info">
            <div class="prices-container clearfix">
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                <div class="float-left product-prices">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                </div>


            </div>
            <div class="product-descr">
                <div class="features"><?php $_smarty_tpl->tpl_vars["product_features"] = new Smarty_variable("product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_features']->value];?>
</div>
                <p><?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</p>
            </div>
            
            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
                <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <div class="options-wrapper">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>

                <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


            <?php }?>
            
            <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>

        </div>
        
    </div>
    <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

</div>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?>
<hr />
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    $(document).ready(function(){

        $.ceEvent('on', 'ce.commoninit', function(context) {            
            if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                context.find('.cm-picker-product-options').switchAvailability(true, false);
            }
            
        });

        $(_.doc).on('click', '.cm-item', function() {
            $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
        });
    });

}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
