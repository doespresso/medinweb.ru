<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:14
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153264693533e9cee314968-80878814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8210e423a7f9a0dfecc048a139ab9875019472e1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153264693533e9cee314968-80878814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cee327a93_58551683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cee327a93_58551683')) {function content_533e9cee327a93_58551683($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />&nbsp;&ndash;&nbsp;<input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
