<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:45:15
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6296138455342497b0b4c60-61840063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0abd25889bb36c0a704bb92fe2a8b58cca263ff8' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6296138455342497b0b4c60-61840063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342497b0c3542_93702100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342497b0c3542_93702100')) {function content_5342497b0c3542_93702100($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
