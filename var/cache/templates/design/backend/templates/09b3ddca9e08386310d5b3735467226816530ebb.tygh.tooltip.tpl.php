<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:42:52
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:479792073533e9abc8674c8-36842010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b3ddca9e08386310d5b3735467226816530ebb' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/tooltip.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '479792073533e9abc8674c8-36842010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9abc875da1_61639601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9abc875da1_61639601')) {function content_533e9abc875da1_61639601($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
