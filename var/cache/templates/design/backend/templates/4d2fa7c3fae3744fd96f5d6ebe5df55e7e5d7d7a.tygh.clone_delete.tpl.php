<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 10:22:46
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/buttons/clone_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085385631533fa136bb00c9-87499938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2fa7c3fae3744fd96f5d6ebe5df55e7e5d7d7a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/buttons/clone_delete.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2085385631533fa136bb00c9-87499938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href_clone' => 0,
    'no_confirm' => 0,
    'microformats' => 0,
    'href_delete' => 0,
    'delete_target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533fa136bf1802_34642683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533fa136bf1802_34642683')) {function content_533fa136bf1802_34642683($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['href_clone']->value) {?>
<a class="clone-item cm-tooltip" title="<?php echo $_smarty_tpl->__("remove");?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_clone']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-remove"></i></a>
<?php }?>
<a class="delete-item cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }?><?php if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_delete']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="icon-remove"></i></a><?php }} ?>
