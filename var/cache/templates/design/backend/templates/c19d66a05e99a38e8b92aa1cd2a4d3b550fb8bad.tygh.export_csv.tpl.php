<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:18:25
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618197415533ebf317e5af5-71952041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19d66a05e99a38e8b92aa1cd2a4d3b550fb8bad' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '618197415533ebf317e5af5-71952041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebf31813a48_19368717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebf31813a48_19368717')) {function content_533ebf31813a48_19368717($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value) {?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php } ?><?php }} ?>
