<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:16:26
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/small_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161315618753442eeac37175-34103511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c2578ceb7eff6eb3305c3364536a0cfd9a283f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/small_list.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161315618753442eeac37175-34103511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'show_price_values' => 0,
    'settings' => 0,
    'auth' => 0,
    'no_sorting' => 0,
    'no_pagination' => 0,
    'columns' => 0,
    'space_width' => 0,
    'img_width' => 0,
    'cell_width' => 0,
    'item_number' => 0,
    'splitted_products' => 0,
    'sproducts' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'obj_id_prefix' => 0,
    'cur_number' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442eeb11cc52_10055932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442eeb11cc52_10055932')) {function content_53442eeb11cc52_10055932($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<?php $_smarty_tpl->tpl_vars["show_price_values"] = new Smarty_variable("0", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["show_price_values"] = new Smarty_variable("1", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['products']->value)<$_smarty_tpl->tpl_vars['columns']->value) {?>
<?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["img_width"] = new Smarty_variable("2", null, 0);?>
<?php $_smarty_tpl->tpl_vars["space_width"] = new Smarty_variable("2", null, 0);?>
<?php echo smarty_function_math(array('equation'=>"(100 + space_width) / x - space_width - img_width",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width",'space_width'=>$_smarty_tpl->tpl_vars['space_width']->value,'img_width'=>$_smarty_tpl->tpl_vars['img_width']->value),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"cell_width + img_width",'cell_width'=>$_smarty_tpl->tpl_vars['cell_width']->value,'img_width'=>$_smarty_tpl->tpl_vars['img_width']->value,'assign'=>"2_cell_width"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="table-width template-small-list">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["splitted_products"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
?>
<tr>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["product"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->iteration++;
 $_smarty_tpl->tpl_vars["product"]->last = $_smarty_tpl->tpl_vars["product"]->iteration === $_smarty_tpl->tpl_vars["product"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['last'] = $_smarty_tpl->tpl_vars["product"]->last;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <td class="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['splitted_products']['last']) {?> border-bottom<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%;">        
            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_small_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_small_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="table-width">
            <tr>
                <td class="center" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0);?>
</a></td>
                <td class="compact" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
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

                    </p>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </td>
            </tr>
            </table>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_small_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        </td>
    <?php } else { ?>
        <td class="valign-top<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['splitted_products']['last']) {?> border-bottom<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%;">&nbsp;</td>
    <?php }?>
    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['last']) {?>
    <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</td>
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
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/small_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/small_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<?php $_smarty_tpl->tpl_vars["show_price_values"] = new Smarty_variable("0", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["show_price_values"] = new Smarty_variable("1", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['products']->value)<$_smarty_tpl->tpl_vars['columns']->value) {?>
<?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["img_width"] = new Smarty_variable("2", null, 0);?>
<?php $_smarty_tpl->tpl_vars["space_width"] = new Smarty_variable("2", null, 0);?>
<?php echo smarty_function_math(array('equation'=>"(100 + space_width) / x - space_width - img_width",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width",'space_width'=>$_smarty_tpl->tpl_vars['space_width']->value,'img_width'=>$_smarty_tpl->tpl_vars['img_width']->value),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"cell_width + img_width",'cell_width'=>$_smarty_tpl->tpl_vars['cell_width']->value,'img_width'=>$_smarty_tpl->tpl_vars['img_width']->value,'assign'=>"2_cell_width"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="table-width template-small-list">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["splitted_products"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
?>
<tr>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["product"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->iteration++;
 $_smarty_tpl->tpl_vars["product"]->last = $_smarty_tpl->tpl_vars["product"]->iteration === $_smarty_tpl->tpl_vars["product"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['last'] = $_smarty_tpl->tpl_vars["product"]->last;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
        <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <td class="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['splitted_products']['last']) {?> border-bottom<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%;">        
            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_small_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_small_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <table class="table-width">
            <tr>
                <td class="center" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0);?>
</a></td>
                <td class="compact" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
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

                    </p>

                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                </td>
            </tr>
            </table>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_small_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        </td>
    <?php } else { ?>
        <td class="valign-top<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['splitted_products']['last']) {?> border-bottom<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%;">&nbsp;</td>
    <?php }?>
    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['last']) {?>
    <td style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</td>
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
