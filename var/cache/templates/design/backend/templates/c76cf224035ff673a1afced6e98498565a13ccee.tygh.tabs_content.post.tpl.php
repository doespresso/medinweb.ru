<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:04:17
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1865239145533ebbe11d3511-51706068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76cf224035ff673a1afced6e98498565a13ccee' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1865239145533ebbe11d3511-51706068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebbe11e4de8_33064365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebbe11e4de8_33064365')) {function content_533ebbe11e4de8_33064365($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
