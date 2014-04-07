<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:04:17
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218977715533ebbe10c4bd4-55534756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a3b7f99bf3197a9fc52831469b94ca3cf27014' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '218977715533ebbe10c4bd4-55534756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebbe10e5f61_74059399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebbe10e5f61_74059399')) {function content_533ebbe10e5f61_74059399($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
		<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>__("discussion_title_category")), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
