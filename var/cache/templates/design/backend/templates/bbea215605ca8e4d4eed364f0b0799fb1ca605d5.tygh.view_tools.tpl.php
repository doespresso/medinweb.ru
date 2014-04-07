<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031170866533e9cf76a2953-85289297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbea215605ca8e4d4eed364f0b0799fb1ca605d5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/view_tools.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1031170866533e9cf76a2953-85289297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_tools' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf76e8e12_52768080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf76e8e12_52768080')) {function content_533e9cf76e8e12_52768080($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('prev_page','next'));
?>
<div class="btn-group prev-next">
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['prev_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("prev_page");?>
<?php }?>"<?php }?>><i class="icon-chevron-left"></i></a>
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['next_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("next");?>
<?php }?>"<?php }?>> <i class="icon-chevron-right"></i> </a>
</div><?php }} ?>
