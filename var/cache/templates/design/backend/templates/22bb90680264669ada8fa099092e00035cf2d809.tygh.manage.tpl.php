<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:05
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/shippings/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088149496533e9c3139b316-53679237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22bb90680264669ada8fa099092e00035cf2d809' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/shippings/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2088149496533e9c3139b316-53679237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shippings' => 0,
    'settings' => 0,
    'shipping' => 0,
    'allow_save' => 0,
    'usergroups' => 0,
    'link_text' => 0,
    'status_display' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c3152b627_29646678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c3152b627_29646678')) {function content_533e9c3152b627_29646678($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('position_short','name','delivery_time','weight_limit','usergroups','status','edit','view','usergroup','delete','no_data','add_shipping_method','realtime_shippings','settings','manage_shippings'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shippings_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th width="1%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <th width="20%"><?php echo $_smarty_tpl->__("name");?>
</th>
    <th><?php echo $_smarty_tpl->__("delivery_time");?>
</th>
    <th><?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</th>
    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
        <th><?php echo $_smarty_tpl->__("usergroups");?>
</th>
    <?php }?>
    <th width="5%">&nbsp;</th>
    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shippings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['shipping']->value,"shippings"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php $_smarty_tpl->tpl_vars["status_display"] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["status_display"] = new Smarty_variable("text", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['shipping']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php } else { ?>cm-no-hide-input<?php }?>">
<input type="hidden" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
" />
    <td>
        <input type="checkbox" name="shipping_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td>
        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" /></td>
    <td data-ct-shipping-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['shipping']->value), 0);?>

    </td>
    <td>
        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][delivery_time]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" /></td>
    <td class="nowrap">
        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][min_weight]" size="4" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['min_weight'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" />&nbsp;-&nbsp;<input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][max_weight]" size="4" value="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['max_weight']!="0.00") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['max_weight'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="input-mini input-hidden right" /></td>
    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
        <td class="nowrap">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select_mode'=>true,'title'=>__("usergroup"),'id'=>"ship_data_".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'name'=>"shipping_data[".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])."][usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['usergroup_ids'],'input_extra'=>''), 0);?>

        </td>
    <?php }?>
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>"shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])));?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"cm-confirm",'href'=>"shippings.delete?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'],'display'=>$_smarty_tpl->tpl_vars['status_display']->value,'status'=>$_smarty_tpl->tpl_vars['shipping']->value['status'],'hidden'=>'','object_id_name'=>"shipping_id",'table'=>"shippings"), 0);?>
        
    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[shippings.m_delete]",'form'=>"shippings_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[shippings.m_update]",'but_role'=>"submit-link",'but_target_form'=>"shippings_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"shippings.add",'prefix'=>"top",'hide_tools'=>true,'link_text'=>'','title'=>__("add_shipping_method"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("content_sidebar", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <ul class="nav nav-list">
                <li><a href="<?php echo htmlspecialchars(fn_url("settings.manage?section_id=Shippings"), ENT_QUOTES, 'UTF-8');?>
"><i class="exicon-car"></i><?php echo $_smarty_tpl->__("realtime_shippings");?>
</a></li>
            </ul>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['content_sidebar'],'title'=>__("settings")), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("manage_shippings"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>
<?php }} ?>
