<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 20:54:55
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/taxes/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5080417775342d85f1a0da3-18170206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf4e038ac8072c521a8afa980c3277ffbfe8f5f' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/taxes/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5080417775342d85f1a0da3-18170206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tax' => 0,
    'id' => 0,
    'destination_id' => 0,
    'destinations' => 0,
    'destination' => 0,
    'd_id' => 0,
    'rates' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'runtime' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342d85f3ecdc0_05570594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342d85f3ecdc0_05570594')) {function content_5342d85f3ecdc0_05570594($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('name','regnumber','tt_views_taxes_update_regnumber','priority','rates_depend_on','shipping_address','billing_address','price_includes_tax','location','rate_value','type','absolute','percent','new_tax','editing_tax'));
?>
<?php if ($_smarty_tpl->tpl_vars['tax']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['tax']->value['tax_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="tax_form" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="tax_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="destination_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_general">
<fieldset>
    <div class="control-group">
        <label for="elm_tax" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[tax]" id="elm_tax" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_regnumber"><?php echo $_smarty_tpl->__("regnumber");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_taxes_update_regnumber")), 0);?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[regnumber]" id="elm_regnumber" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_priority"><?php echo $_smarty_tpl->__("priority");?>
:</label>
        <div class="controls">
            <input type="text" name="tax_data[priority]" id="elm_priority" size="5" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="elm_address_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("rates_depend_on");?>
:</label>
        <div class="controls">
        <select name="tax_data[address_type]" id="elm_address_type">
            <option value="S" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("shipping_address");?>
</option>
            <option value="B" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("billing_address");?>
</option>
        </select>
        </div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"tax_data[status]",'id'=>"elm_tax_data",'obj'=>$_smarty_tpl->tpl_vars['tax']->value), 0);?>

    
    <div class="control-group">
        <label class="control-label" for="elm_price_includes_tax"><?php echo $_smarty_tpl->__("price_includes_tax");?>
:</label>
        <div class="controls">
            <input type="hidden" name="tax_data[price_includes_tax]" value="N" />
            <input type="checkbox" name="tax_data[price_includes_tax]" id="elm_price_includes_tax" value="Y" <?php if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax']=="Y") {?>checked="checked"<?php }?> />
        </div>
    </div>
</fieldset>
<!-- id="content_general" --></div>

<div id="content_tax_rates">

<table class="table table-middle">
<thead>
<tr>
    <th><?php echo $_smarty_tpl->__("location");?>
</th>
    <th><?php echo $_smarty_tpl->__("rate_value");?>
</th>
    <th><?php echo $_smarty_tpl->__("type");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["d_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['destination']->value['destination_id'], null, 0);?>
<tr>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td><input type="hidden" name="tax_data[rates][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="tax_data[rates][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_value'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" /></td>
    <td>
        <select name="tax_data[rates][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d_id']->value, ENT_QUOTES, 'UTF-8');?>
][rate_type]">
            <option value="F" <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_type']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
            <option value="P" <?php if ($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['d_id']->value]['rate_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
        </select>
    </td>
</tr>
<?php } ?>
</table>
<!-- id="content_tax_rates" --></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[taxes.update]",'but_role'=>"submit-link",'but_target_form'=>"tax_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true,'active_tab'=>$_REQUEST['selected_section']), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_tax"), null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_tax");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['tax']->value['tax']), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
