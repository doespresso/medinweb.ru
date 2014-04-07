<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:14:16
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:533532478534001a88268c0-53610149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360ddd5e6ef2c82669a995718fd63a1917cfb147' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '533532478534001a88268c0-53610149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534001a88462a1_81386496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534001a88462a1_81386496')) {function content_534001a88462a1_81386496($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name'));
?>
<?php if (!fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<div id="acc_addon_seo" class="collapsed in">
	<div class="control-group">
	    <label class="control-label" for="company_seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
	    <div class="controls">
	    	<input type="text" name="company_data[seo_name]" id="company_seo_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
	    </div>
	</div>
</div>
<?php }?><?php }} ?>
