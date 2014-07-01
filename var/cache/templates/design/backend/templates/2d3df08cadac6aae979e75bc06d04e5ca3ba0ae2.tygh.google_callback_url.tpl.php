<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 18:15:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/hybrid_auth/components/google_callback_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206975341353664b884b7683-20668192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3df08cadac6aae979e75bc06d04e5ca3ba0ae2' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/hybrid_auth/components/google_callback_url.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '206975341353664b884b7683-20668192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53664b8858bd52_57283876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53664b8858bd52_57283876')) {function content_53664b8858bd52_57283876($_smarty_tpl) {?><div class="control-group setting-wide">
	<label class="control-label"><?php echo $_smarty_tpl->__('google_callback_url');?>
: </label>
	<div class="controls">
		<input type="text" readonly="readonly" value="<?php echo htmlspecialchars(fn_url("auth.process?hauth.done=Google","C"), ENT_QUOTES, 'UTF-8');?>
" onclick="this.select()">
	</div>
</div><?php }} ?>
