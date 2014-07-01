<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:17:26
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/first_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170256081453442f26daa0b6-74455013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b19d7ab919987bf56d8386e66eae4d6cde59e44' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/list_templates/first_item.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170256081453442f26daa0b6-74455013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'obj_id_prefix' => 0,
    'block' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442f27086322_61488682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442f27086322_61488682')) {function content_53442f27086322_61488682($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="template-item-first">
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->index++;
 $_smarty_tpl->tpl_vars["product"]->first = $_smarty_tpl->tpl_vars["product"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['first'] = $_smarty_tpl->tpl_vars["product"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>
        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <div class="compact clearfix">
                <div class="item-image product-item-image">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"50",'image_height'=>"50",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0);?>
</a>
                </div>
                <div class="item-description">
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                </div>
            </div>
    
            <p>
            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
            
            <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

            </p>
    
            <div class="margin-bottom">
                <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

            </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        <<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>ol start="2"<?php } else { ?>ul<?php }?> class="bullets-list compact">
    <?php } else { ?>
        <li>
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

        </li>
    <?php }?>
<?php } ?>
</<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>ol<?php } else { ?>ul<?php }?>>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/first_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/first_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="template-item-first">
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["product"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product"]->index++;
 $_smarty_tpl->tpl_vars["product"]->first = $_smarty_tpl->tpl_vars["product"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['first'] = $_smarty_tpl->tpl_vars["product"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>
        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <div class="compact clearfix">
                <div class="item-image product-item-image">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"50",'image_height'=>"50",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0);?>
</a>
                </div>
                <div class="item-description">
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                </div>
            </div>
    
            <p>
            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
            
            <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

            </p>
    
            <div class="margin-bottom">
                <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

            </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        <<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>ol start="2"<?php } else { ?>ul<?php }?> class="bullets-list compact">
    <?php } else { ?>
        <li>
            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

        </li>
    <?php }?>
<?php } ?>
</<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {?>ol<?php } else { ?>ul<?php }?>>
</div><?php }?><?php }} ?>
