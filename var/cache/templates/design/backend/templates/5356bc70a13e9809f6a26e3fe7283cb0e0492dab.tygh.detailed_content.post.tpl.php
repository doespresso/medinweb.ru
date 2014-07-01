<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:59:34
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/news_and_emails/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152224597153424cd6083177-21229856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5356bc70a13e9809f6a26e3fe7283cb0e0492dab' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/news_and_emails/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152224597153424cd6083177-21229856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'news_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53424cd60af200_53967188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53424cd60af200_53967188')) {function content_53424cd60af200_53967188($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_news'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"news_data",'object_id'=>$_smarty_tpl->tpl_vars['news_data']->value['news_id'],'object_type'=>"N",'title'=>__("discussion_title_news"),'non_editable'=>true), 0);?>

<?php }?><?php }} ?>
