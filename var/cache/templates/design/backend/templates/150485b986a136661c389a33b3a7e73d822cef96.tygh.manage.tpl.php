<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 17:54:40
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/categories/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1614578944533eb9a0cad057-74314765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '150485b986a136661c389a33b3a7e73d822cef96' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/categories/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1614578944533eb9a0cad057-74314765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_inputs' => 0,
    'categories_tree' => 0,
    'category_id' => 0,
    'config' => 0,
    'categories_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533eb9a0e5d5e4_73234125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb9a0e5d5e4_73234125')) {function content_533eb9a0e5d5e4_73234125($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_items','text_select_fields2edit_note','modify_selected','select_fields_to_edit','bulk_category_addition','edit_selected','add_category','total','categories','products','active_categories','hidden_categories','disabled_categories','categories'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(fn_check_form_permissions(''), null, 0);?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="category_tree_form" class="<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>cm-hide-inputs<?php }?>">
    <div class="items-container">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>"1",'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'st_result_ids'=>"categories_stats",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("select_fields_to_edit", null, null); ob_start(); ?>

    <p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
    <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("modify_selected"),'but_meta'=>"cm-process-items",'but_name'=>"dispatch[categories.store_selection]",'cancel_action'=>"close"), 0);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"select_fields_to_edit",'text'=>__("select_fields_to_edit"),'content'=>Smarty::$_smarty_vars['capture']['select_fields_to_edit']), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("bulk_category_addition"),'href'=>"categories.m_add"));?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form"));?>
</li>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[categories.m_delete]",'form'=>"category_tree_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[categories.m_update]",'but_role'=>"submit-link",'but_target_form'=>"category_tree_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"categories.add",'prefix'=>"top",'hide_tools'=>"true",'title'=>__("add_category"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row" id="categories_stats">
        <h6><?php echo $_smarty_tpl->__("total");?>
</h6>
        <ul class="unstyled sidebar-stat">
            <li><?php echo $_smarty_tpl->__("categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("products");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['products_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("active_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_active'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("hidden_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_hidden'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("disabled_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_disabled'], ENT_QUOTES, 'UTF-8');?>
</span></li>
        </ul>
    <!--categories_stats--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("categories"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>

<?php }} ?>
