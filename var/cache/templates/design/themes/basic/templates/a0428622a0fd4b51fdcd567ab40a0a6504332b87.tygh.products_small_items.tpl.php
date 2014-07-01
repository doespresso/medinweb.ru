<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:17:49
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_small_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170051262653442f3d80c285-01491146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0428622a0fd4b51fdcd567ab40a0a6504332b87' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_small_items.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170051262653442f3d80c285-01491146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    '_show_name' => 0,
    '_show_trunc_name' => 0,
    '_show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53442f3d8ad8a4_35958885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53442f3d8ad8a4_35958885')) {function content_53442f3d8ad8a4_35958885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["_show_name"] = new Smarty_variable("true", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>$_smarty_tpl->tpl_vars['_show_name']->value,'show_trunc_name'=>$_smarty_tpl->tpl_vars['_show_trunc_name']->value,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>false,'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_small_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_small_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["_show_name"] = new Smarty_variable("true", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>$_smarty_tpl->tpl_vars['_show_name']->value,'show_trunc_name'=>$_smarty_tpl->tpl_vars['_show_trunc_name']->value,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>false,'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), 0);?>

<?php }?><?php }} ?>
