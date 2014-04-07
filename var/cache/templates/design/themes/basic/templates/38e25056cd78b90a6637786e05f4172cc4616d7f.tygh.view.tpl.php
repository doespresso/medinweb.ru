<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:01
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/categories/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:859245087533e9c69789be8-91807071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e25056cd78b90a6637786e05f4172cc4616d7f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/categories/view.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '859245087533e9c69789be8-91807071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'subcategories' => 0,
    'category_data' => 0,
    'columns' => 0,
    'rows' => 0,
    'splitted_subcategories' => 0,
    'ssubcateg' => 0,
    'category' => 0,
    'settings' => 0,
    'products' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'product_columns' => 0,
    'show_no_products_block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c69908d01_56056992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c69908d01_56056992')) {function content_533e9c69908d01_56056992($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_split')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_no_products','text_no_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp)),$_smarty_tpl);?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['category_data']->value['description']&&$_smarty_tpl->tpl_vars['category_data']->value['description']!='') {?>
    <div class="compact wysiwyg-content margin-bottom"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
<?php }?>

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
    <div class="subcategories">
    <ul>
    <?php  $_smarty_tpl->tpl_vars["ssubcateg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ssubcateg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ssubcateg"]->key => $_smarty_tpl->tpl_vars["ssubcateg"]->value) {
$_smarty_tpl->tpl_vars["ssubcateg"]->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ssubcateg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>class="with-image"<?php }?>>
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>

                    <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php }?>
        <?php } ?>
    <?php } ?>
    </ul>
    </div>
    <?php }?>
</div>
<?php }?>

<?php if ($_REQUEST['advanced_filter']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('separate_form'=>true), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0);?>

<?php }?>

<?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
<p class="no-items cm-pagination-container"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php } else { ?>
<div class="cm-pagination-container"></div>
<?php }?>
<!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>count($_smarty_tpl->tpl_vars['subcategories']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp)),$_smarty_tpl);?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['subcategories']->value,'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_subcategories"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['category_data']->value['description']&&$_smarty_tpl->tpl_vars['category_data']->value['description']!='') {?>
    <div class="compact wysiwyg-content margin-bottom"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
<?php }?>

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value) {?>
    <div class="subcategories">
    <ul>
    <?php  $_smarty_tpl->tpl_vars["ssubcateg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ssubcateg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ssubcateg"]->key => $_smarty_tpl->tpl_vars["ssubcateg"]->value) {
$_smarty_tpl->tpl_vars["ssubcateg"]->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ssubcateg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>class="with-image"<?php }?>>
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>

                    <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php }?>
        <?php } ?>
    <?php } ?>
    </ul>
    </div>
    <?php }?>
</div>
<?php }?>

<?php if ($_REQUEST['advanced_filter']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('separate_form'=>true), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0);?>

<?php }?>

<?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
<p class="no-items cm-pagination-container"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php } else { ?>
<div class="cm-pagination-container"></div>
<?php }?>
<!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
