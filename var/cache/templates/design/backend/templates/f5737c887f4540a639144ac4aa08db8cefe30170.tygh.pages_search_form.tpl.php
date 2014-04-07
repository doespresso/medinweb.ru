<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 20:22:50
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/pages/components/pages_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028648609533edc5a2b3497-74873800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5737c887f4540a639144ac4aa08db8cefe30170' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/pages/components/pages_search_form.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1028648609533edc5a2b3497-74873800',
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
    'page_types' => 0,
    't' => 0,
    'p' => 0,
    'random_value' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533edc5a426298_17625664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533edc5a426298_17625664')) {function content_533edc5a426298_17625664($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','find_results_with','type','parent_page','all_pages','all_pages','search_in','page_name','description','subpages','status','active','hidden','disabled'));
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
" name="pages_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="get_tree" value="" />
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
    <label><?php echo $_smarty_tpl->__("find_results_with");?>
</label>
    <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("type");?>
</label>
    <select class="small" name="page_type">
        <option value="">--</option>
        <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_smarty_tpl->tpl_vars["t"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
 $_smarty_tpl->tpl_vars["t"]->value = $_smarty_tpl->tpl_vars["p"]->key;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['page_type']==$_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p']->value['name']);?>
</option>
        <?php } ?>
    </select>
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("parent_page");?>
</label>
    <?php if (fn_show_picker("pages",@constant('PAGE_THRESHOLD'))) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_page",'input_name'=>"parent_id",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['parent_id'],'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("all_pages"),'extra'=>'','no_container'=>true,'prepend'=>true), 0);?>

    <?php } else { ?>
        <select name="parent_id">
            <option value="">- <?php echo $_smarty_tpl->__("all_pages");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_from = fn_get_pages_plain_list(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_id']==$_smarty_tpl->tpl_vars['p']->value['page_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['p']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['page'], ENT_QUOTES, 'UTF-8', true));?>
</option>
            <?php } ?>
        </select>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<div class="group">
    <label><?php echo $_smarty_tpl->__("search_in");?>
</label>
    <table width="100%">
    <tr>
        <td class="select-field"><label for="pname" class="checkbox"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pname']=="Y") {?>checked="checked"<?php }?> name="pname" id="pname"/><?php echo $_smarty_tpl->__("page_name");?>
</label></td>
        <td>&nbsp;&nbsp;&nbsp;</td>

        <td class="select-field"><label class="checkbox" for="pdescr"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pdescr']=="Y") {?>checked="checked"<?php }?> name="pdescr" id="pdescr" /><?php echo $_smarty_tpl->__("description");?>
</label></td>
        <td>&nbsp;&nbsp;&nbsp;</td>

        <td class="select-field"><label class="checkbox" for="subpages"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['subpages']=="Y") {?>checked="checked"<?php }?> name="subpages" id="subpages" /><?php echo $_smarty_tpl->__("subpages");?>
</label></td>
    </tr>
    </table>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
        <div class="controls">
            <select name="status">
                <option value="">--</option>
                <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="H" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
    </div>

    <?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"random_value"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"company_id_".((string)$_smarty_tpl->tpl_vars['random_value']->value)), 0);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"pages",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?><?php }} ?>
