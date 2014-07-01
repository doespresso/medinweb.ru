<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:14:59
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/grid_list2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63551864353442e93d1e027-30368863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4d6fe013a3ed275fb07243de0c7808ffed82b2' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/grid_list2.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63551864353442e93d1e027-30368863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'columns' => 0,
    'item_number' => 0,
    'splitted_products' => 0,
    'sproducts' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'cell_width' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'obj_id_prefix' => 0,
    'settings' => 0,
    'add_to_cart' => 0,
    'cur_number' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'form_close' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442e93f3bb68_38454041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442e93f3bb68_38454041')) {function content_53442e93f3bb68_38454041($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
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

<?php if (sizeof($_smarty_tpl->tpl_vars['products']->value)<$_smarty_tpl->tpl_vars['columns']->value) {?>
<?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="fixed-layout multicolumns-list template-grid-list2 table-width">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
?>
<tr>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <td class="product-spacer">&nbsp;</td>
    <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">

        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_grid_list2")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_grid_list2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="table-width">
        <tr>
            <td class="product-image">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>
</a>
                <div class="buttons-container">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </div>
            </td>
            <td class="product-description" style="width: 40%;">
                <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>
<?php }?>
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                
                <p>
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                </p>
            </td>
        </tr>
        </table>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_grid_list2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


    </td>
    <td class="product-spacer">&nbsp;</td>
    <?php }?>
<?php } ?>
</tr>
<?php } ?>
</table>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list2.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/grid_list2.tpl"),$_smarty_tpl);?>
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

<?php if (sizeof($_smarty_tpl->tpl_vars['products']->value)<$_smarty_tpl->tpl_vars['columns']->value) {?>
<?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="fixed-layout multicolumns-list template-grid-list2 table-width">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
?>
<tr>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <td class="product-spacer">&nbsp;</td>
    <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">

        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_grid_list2")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_grid_list2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="table-width">
        <tr>
            <td class="product-image">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>
</a>
                <div class="buttons-container">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </div>
            </td>
            <td class="product-description" style="width: 40%;">
                <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>
<?php }?>
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                
                <p>
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                    
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                </p>
            </td>
        </tr>
        </table>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_grid_list2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


    </td>
    <td class="product-spacer">&nbsp;</td>
    <?php }?>
<?php } ?>
</tr>
<?php } ?>
</table>

<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
