<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:59:34
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/news_and_emails/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137447088853424cd61aaa98-02217645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c681347344ccafcdcab49574244ac8952bffcf6e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/news_and_emails/tabs_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '137447088853424cd61aaa98-02217645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53424cd61b6528_24002256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53424cd61b6528_24002256')) {function content_53424cd61b6528_24002256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['news_data']->value['company_id']), 0);?>
<?php }} ?>
