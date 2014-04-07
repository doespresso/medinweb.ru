<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 19:47:41
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/product_features/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011478190533ed41d4b66b3-55282299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeecaa95e789f433ded9c711efedaeaeaad1d717' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/product_features/view.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2011478190533ed41d4b66b3-55282299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'variant_data' => 0,
    'products' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ed41d629c76_35379361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ed41d629c76_35379361')) {function content_533ed41d629c76_35379361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_no_products','text_no_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="feature-image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0);?>

    </div>
    <?php }?>
    <div class="feature-description">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>
<?php if ($_REQUEST['advanced_filter']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('separate_form'=>true), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

<?php }?>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];?>
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
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="feature-image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0);?>

    </div>
    <?php }?>
    <div class="feature-description">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>
<?php if ($_REQUEST['advanced_filter']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('separate_form'=>true), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

<?php }?>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
