<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:12:40
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/products2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33907738953442e0842b8d0-79920573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53dec46f7b71ea705ed32aa10b89b244fedd4a58' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/products2.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33907738953442e0842b8d0-79920573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'columns' => 0,
    'items' => 0,
    'products' => 0,
    'block' => 0,
    'splitted_products' => 0,
    'sproducts' => 0,
    'product' => 0,
    'obj_id' => 0,
    'cell_width' => 0,
    'form_open' => 0,
    'obj_id_prefix' => 0,
    'cur_number' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'hide_add_to_cart_button' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442e085ed7c8_37401903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442e085ed7c8_37401903')) {function content_53442e085ed7c8_37401903($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('more_info','more_info'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['columns']->value>count($_smarty_tpl->tpl_vars['items']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
<?php }?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>$_smarty_tpl->tpl_vars['columns']->value,'assign'=>"splitted_products"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>$_smarty_tpl->tpl_vars['columns']->value,'assign'=>"cell_width"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="products2-table">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
?>
<tr>
    <td class="lm-left">&nbsp;</td>
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
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['obj_id']->value, null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>__("more_info")), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'extra_button'=>Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['obj_id']->value]), 0);?>

        <td style="width: <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>100<?php }?>%" class="lm-center image-border compact left valign-top">
            <div class="products-2">
            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

                <div class="clearfix">
                    <div class="float-right">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"70",'image_height'=>"70",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>
</a>
                    </div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
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
                </div>
                <?php if ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value!='Y') {?>
                    <div class="buttons-container-item">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                    </div>
                <?php }?>
            <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

            </div>
        </td>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['last']) {?>
            <td class="delimiter"></td>
        <?php }?>
    <?php }?>
    <?php } ?>
    <td class="lm-left">&nbsp;</td>
</tr>
<?php } ?>
</table>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/products2.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/products2.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['columns']->value>count($_smarty_tpl->tpl_vars['items']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["columns"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
<?php }?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>$_smarty_tpl->tpl_vars['columns']->value,'assign'=>"splitted_products"),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>$_smarty_tpl->tpl_vars['columns']->value,'assign'=>"cell_width"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
<?php }?>
<table class="products2-table">
<?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
?>
<tr>
    <td class="lm-left">&nbsp;</td>
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
        <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['obj_id']->value, null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>__("more_info")), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'extra_button'=>Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['obj_id']->value]), 0);?>

        <td style="width: <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>100<?php }?>%" class="lm-center image-border compact left valign-top">
            <div class="products-2">
            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

                <div class="clearfix">
                    <div class="float-right">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"70",'image_height'=>"70",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>
</a>
                    </div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
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
                </div>
                <?php if ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value!='Y') {?>
                    <div class="buttons-container-item">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                    </div>
                <?php }?>
            <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

            </div>
        </td>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['last']) {?>
            <td class="delimiter"></td>
        <?php }?>
    <?php }?>
    <?php } ?>
    <td class="lm-left">&nbsp;</td>
</tr>
<?php } ?>
</table>
<?php }?><?php }} ?>
