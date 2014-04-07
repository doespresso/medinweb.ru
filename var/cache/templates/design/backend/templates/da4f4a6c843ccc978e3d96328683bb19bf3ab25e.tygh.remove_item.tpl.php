<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:35
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/buttons/remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054729324533e9c8be71734-49361065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4f4a6c843ccc978e3d96328683bb19bf3ab25e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/buttons/remove_item.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1054729324533e9c8be71734-49361065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c8be9d0b6_36643072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c8be9d0b6_36643072')) {function content_533e9c8be9d0b6_36643072($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
	<a class="icon-remove cm-opacity cm-tooltip <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
<?php }?>
<a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-remove cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>></a><?php }} ?>
