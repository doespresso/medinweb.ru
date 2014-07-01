<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 13:03:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3750131705343bb471c3798-57404336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50d8e2aeca8914018d8537c1df15296efd32929' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/status.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3750131705343bb471c3798-57404336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_status_descr' => 0,
    'status_type' => 0,
    'display' => 0,
    'status' => 0,
    'name' => 0,
    'select_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5343bb472618a8_20930789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5343bb472618a8_20930789')) {function content_5343bb472618a8_20930789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {?><?php $_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?><?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {?><div class="status"><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>4),$_smarty_tpl);?>
</div><?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/status.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/status.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {?><?php $_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?><?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {?><div class="status"><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>4),$_smarty_tpl);?>
</div><?php }?>
<?php }?><?php }} ?>
