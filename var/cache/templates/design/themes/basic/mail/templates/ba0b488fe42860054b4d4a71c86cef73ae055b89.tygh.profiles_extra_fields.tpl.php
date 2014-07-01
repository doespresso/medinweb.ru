<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 14:46:28
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/mail/templates/profiles/profiles_extra_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1445221758535e31840fcf49-12879867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0b488fe42860054b4d4a71c86cef73ae055b89' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/mail/templates/profiles/profiles_extra_fields.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1445221758535e31840fcf49-12879867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'fields' => 0,
    'field' => 0,
    'order_info' => 0,
    'title' => 0,
    'user_data' => 0,
    'value' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535e3184220691_36139964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e3184220691_36139964')) {function content_535e3184220691_36139964($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('yes','no','yes','no'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name']) {?>
<?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_info']->value['fields'][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
<p>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
    <?php if (strpos("AOL",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?> 
        <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."_descr", null, 0);?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['title']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>  
        <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {?><?php echo $_smarty_tpl->__("yes");?>
<?php } else { ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>  
        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

    <?php } elseif (strpos("RS",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?>  
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values'][$_smarty_tpl->tpl_vars['value']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>  
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
</p>
<?php }?>
<?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="profiles/profiles_extra_fields.tpl" id="<?php echo smarty_function_set_id(array('name'=>"profiles/profiles_extra_fields.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name']) {?>
<?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_info']->value['fields'][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
<p>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
    <?php if (strpos("AOL",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?> 
        <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."_descr", null, 0);?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['title']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>  
        <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {?><?php echo $_smarty_tpl->__("yes");?>
<?php } else { ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>  
        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

    <?php } elseif (strpos("RS",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?>  
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values'][$_smarty_tpl->tpl_vars['value']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>  
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
</p>
<?php }?>
<?php } ?><?php }?><?php }} ?>
