<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:43:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638965008533e9adfe63908-86738668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c347a58e7ee6ed1364c4efbe8d25507b4bea99' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/buttons/search.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '638965008533e9adfe63908-86738668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9adfe708a5_82212829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9adfe708a5_82212829')) {function content_533e9adfe708a5_82212829($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
