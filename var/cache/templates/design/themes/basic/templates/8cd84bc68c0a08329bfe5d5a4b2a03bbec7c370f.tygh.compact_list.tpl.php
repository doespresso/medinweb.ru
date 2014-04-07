<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 15:54:08
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/compact_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114035618753414060d06a72-07612946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd84bc68c0a08329bfe5d5a4b2a03bbec7c370f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/compact_list.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114035618753414060d06a72-07612946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'config' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'obj_id_prefix' => 0,
    'obj_id' => 0,
    'discount_label' => 0,
    'name' => 0,
    'show_sku' => 0,
    'sku' => 0,
    'old_price' => 0,
    'price' => 0,
    'show_add_to_cart' => 0,
    'product_options' => 0,
    'qty' => 0,
    'add_to_cart' => 0,
    'force_ajax' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53414060ec28b7_76124164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53414060ec28b7_76124164')) {function content_53414060ec28b7_76124164($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="short_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<table class="table products table-width">

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["product"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
 $_smarty_tpl->tpl_vars["product"]->iteration++;
 $_smarty_tpl->tpl_vars["product"]->last = $_smarty_tpl->tpl_vars["product"]->iteration === $_smarty_tpl->tpl_vars["product"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['last'] = $_smarty_tpl->tpl_vars["product"]->last;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_compact_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <tr class="valign <?php echo smarty_function_cycle(array('values'=>',table-row'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?> last<?php }?>">
        <td class="product-image">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

            </a>
        </td>
        <td class="compact">
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


            <br/>
            <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <span class="sku"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</span>
                <br/>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
 <?php }?><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

        </td>

        <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <td class="nowrap right">

            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>

            <?php }?>
            

            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

        </td>
        <?php }?>
    </tr>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_compact_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
</table>

</form>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/compact_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/compact_list.tpl"),$_smarty_tpl);?>
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

<form <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="short_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<table class="table products table-width">

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["product"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
 $_smarty_tpl->tpl_vars["product"]->iteration++;
 $_smarty_tpl->tpl_vars["product"]->last = $_smarty_tpl->tpl_vars["product"]->iteration === $_smarty_tpl->tpl_vars["product"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['last'] = $_smarty_tpl->tpl_vars["product"]->last;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_compact_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_compact_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <tr class="valign <?php echo smarty_function_cycle(array('values'=>',table-row'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?> last<?php }?>">
        <td class="product-image">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

            </a>
        </td>
        <td class="compact">
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


            <br/>
            <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <span class="sku"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>
</span>
                <br/>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
 <?php }?><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

        </td>

        <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <td class="nowrap right">

            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']) {?>
            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

            
            <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>

            <?php }?>
            

            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

        </td>
        <?php }?>
    </tr>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_compact_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
</table>

</form>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0);?>

<?php }?>

<?php }?><?php }?><?php }} ?>
