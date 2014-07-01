<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:45:15
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16558140215342497b0c5e69-50719865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee535f40300d020ff8168ada592a9c9c275026e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16558140215342497b0c5e69-50719865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342497b0e4b18_75127063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342497b0e4b18_75127063')) {function content_5342497b0e4b18_75127063($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<div id="acc_addon_seo" class="collapsed in">
	<div class="control-group">
        <label class="control-label" for="seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
        <div class="controls">
        	<input type="text" name="page_data[seo_name]" id="seo_name" size="55" maxlength="255" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        </div>
    </div>
</div>
<?php }?><?php }} ?>
