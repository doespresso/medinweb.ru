<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 22:32:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/product_filters/components/product_filters_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9007204455342ef3aa29326-50173120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bba44de50e24e39a70021282c8f3f6c91da7bf7' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/product_filters/components/product_filters_search_form.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9007204455342ef3aa29326-50173120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'form_meta' => 0,
    'put_request_vars' => 0,
    'v' => 0,
    'k' => 0,
    'extra' => 0,
    'search' => 0,
    's_cid' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342ef3aac2a21_97315171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342ef3aac2a21_97315171')) {function content_5342ef3aac2a21_97315171($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','category','all_categories','feature','filter'));
?>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_filters_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_REQUEST; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value&&$_smarty_tpl->tpl_vars['k']->value!="callback") {?>
            <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } ?>
<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

<div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("category");?>
</label>
        <div class="break clear correct-picker-but">
        <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['category_ids']) {?>
                <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['category_ids'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("all_categories"),'extra'=>''), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0);?>

        <?php }?>
        </div>
</div>
<div class="sidebar-field">
    <label for="elm_feature_name"><?php echo $_smarty_tpl->__("feature");?>
:</label>
    <div class="break">
        <input type="text" name="feature_name" id="elm_feature_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['feature_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="search-input-text" />
    </div>
</div>
<div class="sidebar-field">
    <label for="elm_filter_name"><?php echo $_smarty_tpl->__("filter");?>
:</label>
    <div class="break">
        <input type="text" name="filter_name" id="elm_filter_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['filter_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="search-input-text" />
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_filters:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_filters:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_filters:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"product_filters",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?><?php }} ?>
