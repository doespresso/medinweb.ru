<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:35
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250825509533e9c8be61821-66247773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de1adf08e894bee580e1f7080b3ea9bdc722a94' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/buttons/clone_item.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '250825509533e9c8be61821-66247773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c8be6ae05_85257576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c8be6ae05_85257576')) {function content_533e9c8be6ae05_85257576($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="exicon-clone cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
