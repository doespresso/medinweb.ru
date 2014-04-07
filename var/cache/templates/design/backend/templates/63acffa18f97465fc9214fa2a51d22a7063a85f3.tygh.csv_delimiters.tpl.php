<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:56:05
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478729058533e9dd5863b66-84647762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63acffa18f97465fc9214fa2a51d22a7063a85f3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1478729058533e9dd5863b66-84647762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9dd5899d09_73070585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9dd5899d09_73070585')) {function content_533e9dd5899d09_73070585($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
<option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
<option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select><?php }} ?>
