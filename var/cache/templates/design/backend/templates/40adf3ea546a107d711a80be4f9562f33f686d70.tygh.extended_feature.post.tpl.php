<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:10:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171278664533ebd53dd80c6-73285186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40adf3ea546a107d711a80be4f9562f33f686d70' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1171278664533ebd53dd80c6-73285186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'id' => 0,
    'num' => 0,
    'empty_string' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ebd53e159f9_05620782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ebd53e159f9_05620782')) {function content_533ebd53e159f9_05620782($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_seo_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">
    	<input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][seo_name]" id="elm_seo_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="<?php if (!$_smarty_tpl->tpl_vars['empty_string']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="span9" />
    </div>
</div>
<?php }?><?php }} ?>
