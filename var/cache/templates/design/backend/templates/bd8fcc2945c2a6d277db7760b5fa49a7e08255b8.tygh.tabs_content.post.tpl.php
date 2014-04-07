<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:23
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1272267988533e9cf71f99c6-41566469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8fcc2945c2a6d277db7760b5fa49a7e08255b8' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/products/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1272267988533e9cf71f99c6-41566469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf7209a45_35993237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf7209a45_35993237')) {function content_533e9cf7209a45_35993237($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
