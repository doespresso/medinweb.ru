<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:22
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1180807100533e9cf6bea634-69037187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f837f93778852ce2a19cafaa10ab6be637845ab4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1180807100533e9cf6bea634-69037187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf6bfaaf3_10244199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf6bfaaf3_10244199')) {function content_533e9cf6bfaaf3_10244199($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_features']) {?>
<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_data']->value['product_features']), 0);?>

</fieldset>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
