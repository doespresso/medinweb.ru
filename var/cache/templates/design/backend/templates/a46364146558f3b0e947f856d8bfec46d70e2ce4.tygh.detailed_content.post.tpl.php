<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 01:46:52
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/catalog_mode/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12714404365341cb4caed6b4-41456808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46364146558f3b0e947f856d8bfec46d70e2ce4' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/catalog_mode/hooks/products/detailed_content.post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12714404365341cb4caed6b4-41456808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5341cb4cb4bd58_62686903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341cb4cb4bd58_62686903')) {function content_5341cb4cb4bd58_62686903($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('catalog_mode','buy_now_url'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("catalog_mode"),'target'=>"#catalog_mode_product"), 0);?>


<div id="catalog_mode_product" class="in collapse">
	<fieldset>
	    <div class="control-group">
	        <label class="control-label" for="buy_now_url"><?php echo $_smarty_tpl->__("buy_now_url");?>
:</label>
	        <div class="controls">
	        	<input type="text" id="buy_now_url" name="product_data[buy_now_url]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['buy_now_url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="40">
	        </div>
	    </div>
	</fieldset>
</div><?php }} ?>
