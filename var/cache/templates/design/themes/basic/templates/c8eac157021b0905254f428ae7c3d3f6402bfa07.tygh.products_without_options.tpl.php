<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 16:18:27
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/product_list_templates/products_without_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971117022533ea313860e14-97204730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8eac157021b0905254f428ae7c3d3f6402bfa07' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/product_list_templates/products_without_options.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '971117022533ea313860e14-97204730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ea31391a078_42312725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ea31391a078_42312725')) {function content_533ea31391a078_42312725($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>false,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'separate_buttons'=>true), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/products_without_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/products_without_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_sku'=>false,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'separate_buttons'=>true), 0);?>
<?php }?><?php }} ?>
