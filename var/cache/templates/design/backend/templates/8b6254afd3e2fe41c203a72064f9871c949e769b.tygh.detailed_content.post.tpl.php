<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:06:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1726611237533ebc6cac5f40-45473228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6254afd3e2fe41c203a72064f9871c949e769b' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/products/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1726611237533ebc6cac5f40-45473228',
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
  'unifunc' => 'content_533ebc6caf74f3_08250825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebc6caf74f3_08250825')) {function content_533ebc6caf74f3_08250825($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<div id="acc_addon_seo" class="collapsed in">
<div class="control-group cm-no-hide-input">
    <label class="control-label" for="product_seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">
    	<input type="text" name="product_data[seo_name]" id="product_seo_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>
</div>

<?php }?><?php }} ?>
