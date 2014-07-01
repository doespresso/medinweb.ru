<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 20:51:34
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/taxes/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12093471215342d796e63611-87400200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe85389701cafabd1461968b47a585fbd7be220d' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/taxes/manage.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12093471215342d796e63611-87400200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'taxes' => 0,
    'tax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342d79715fc43_25951329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342d79715fc43_25951329')) {function content_5342d79715fc43_25951329($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','regnumber','priority','rates_depend_on','price_includes_tax','status','shipping_address','billing_address','edit','delete','no_data','apply_tax_to_products','unset_tax_to_products','add_tax','taxes'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="taxes_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th width="15%"><?php echo $_smarty_tpl->__("name");?>
</th>
    <th><?php echo $_smarty_tpl->__("regnumber");?>
</th>
    <th><?php echo $_smarty_tpl->__("priority");?>
</th>
    <th><?php echo $_smarty_tpl->__("rates_depend_on");?>
</th>
    <th class="center"><?php echo $_smarty_tpl->__("price_includes_tax");?>
</th>
    <th width="5%">&nbsp;</th>
    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['tax']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-ct-tax-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
">
    <td class="center" width="1%">
        <input type="checkbox" name="tax_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td class="nowrap" data-ct-tax-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php echo htmlspecialchars(fn_url("taxes.update?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</a>
    </td>
    <td>
        <input type="text" name="tax_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][regnumber]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" /></td>
    <td class="center">
        <input type="text" name="tax_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][priority]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" /></td>
    <td><select name="tax_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][address_type]">
            <option value="S" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("shipping_address");?>
</option>
            <option value="B" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("billing_address");?>
</option>
        </select>
    </td>
    <td class="center">
        <input type="hidden" name="tax_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][price_includes_tax]" value="N" />
        <input type="checkbox" name="tax_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
][price_includes_tax]" value="Y" <?php if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax']=="Y") {?>checked="checked"<?php }?> class="checkbox" />
    </td>
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"taxes.update?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id'])));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete"),'class'=>"cm-confirm",'href'=>"taxes.delete?tax_id=".((string)$_smarty_tpl->tpl_vars['tax']->value['tax_id'])));?>
</li>
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
    <td class="right nowrap">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['tax']->value['tax_id'],'status'=>$_smarty_tpl->tpl_vars['tax']->value['status'],'object_id_name'=>"tax_id",'table'=>"taxes"), 0);?>

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
    <?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"taxes:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"taxes:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("apply_tax_to_products"),'dispatch'=>"dispatch[taxes.apply_selected_taxes]",'form'=>"taxes_form"));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("unset_tax_to_products"),'dispatch'=>"dispatch[taxes.unset_selected_taxes]",'form'=>"taxes_form"));?>
</li>
                <li class="divider"></li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[taxes.m_delete]",'form'=>"taxes_form"));?>
</li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"taxes:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['taxes']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[taxes.m_update]",'but_role'=>"submit-link",'but_target_form'=>"taxes_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"taxes.add",'prefix'=>"top",'hide_tools'=>true,'title'=>__("add_tax"),'icon'=>"icon-plus"), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("taxes"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
