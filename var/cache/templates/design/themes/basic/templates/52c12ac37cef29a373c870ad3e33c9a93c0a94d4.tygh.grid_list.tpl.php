<?php /* Smarty version Smarty-3.1.15, created on 2014-04-09 11:22:29
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/products/grid_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7098302985344f53503b0c3-87000729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c12ac37cef29a373c870ad3e33c9a93c0a94d4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/products/grid_list.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7098302985344f53503b0c3-87000729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    '_show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5344f5350e6632_92916192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5344f5350e6632_92916192')) {function content_5344f5350e6632_92916192($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'show_list_buttons'=>false,'show_descr'=>true,'but_role'=>'action','separate_buttons'=>true), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'show_list_buttons'=>false,'show_descr'=>true,'but_role'=>'action','separate_buttons'=>true), 0);?>
<?php }?><?php }} ?>
