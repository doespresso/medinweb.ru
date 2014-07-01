<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 13:03:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/orders_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13016067505343bb47128bc4-67066226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e16390a4f264d72dea8be3f80b0d28bf0cab2b' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/orders/components/orders_search_form.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13016067505343bb47128bc4-67066226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5343bb471b8932_75914506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5343bb471b8932_75914506')) {function content_5343bb471b8932_75914506($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('total','order_status','order_id','search','total','order_status','order_id','search'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="orders_search_form" method="get">

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input type="text" name="total_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-text input-text-short" />&nbsp;&#8211;&nbsp;<input type="text" name="total_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-text input-text-short" />
</div>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status"), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="control-group">
    <label><?php echo $_smarty_tpl->__("order_id");?>
</label>
    <input type="text" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="input-text" />
</div>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_name'=>"dispatch[orders.search]"), 0);?>

</div>
</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/orders_search_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/orders_search_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="orders_search_form" method="get">

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input type="text" name="total_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-text input-text-short" />&nbsp;&#8211;&nbsp;<input type="text" name="total_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-text input-text-short" />
</div>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status"), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
<div class="control-group">
    <label><?php echo $_smarty_tpl->__("order_id");?>
</label>
    <input type="text" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="input-text" />
</div>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_name'=>"dispatch[orders.search]"), 0);?>

</div>
</form><?php }?><?php }} ?>
