<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:59:34
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/news/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79239056453424cd611d363-86401580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88cac0beb63b608b8c6b53433120ad811892c238' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/news/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79239056453424cd611d363-86401580',
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
  'unifunc' => 'content_53424cd6159642_13544898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53424cd6159642_13544898')) {function content_53424cd6159642_13544898($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<div id="acc_addon_seo" class="collapsed in">
<div class="control-group">
    <label class="control-label" for="seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">
     	<input type="text" name="news_data[seo_name]" id="seo_name" size="55" maxlength="255" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>
</div>
<?php }?><?php }} ?>
