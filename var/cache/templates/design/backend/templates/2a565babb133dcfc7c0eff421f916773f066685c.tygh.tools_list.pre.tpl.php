<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:45:15
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21048554835342497b4c45c1-22994003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a565babb133dcfc7c0eff421f916773f066685c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21048554835342497b4c45c1-22994003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342497b4ce2b3_18713924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342497b4ce2b3_18713924')) {function content_5342497b4ce2b3_18713924($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>
