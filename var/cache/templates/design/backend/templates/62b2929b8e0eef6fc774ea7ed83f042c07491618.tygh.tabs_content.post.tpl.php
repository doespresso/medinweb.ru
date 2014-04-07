<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:14:16
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157551156534001a886c689-11369755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b2929b8e0eef6fc774ea7ed83f042c07491618' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157551156534001a886c689-11369755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534001a8879126_42255443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534001a8879126_42255443')) {function content_534001a8879126_42255443($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
