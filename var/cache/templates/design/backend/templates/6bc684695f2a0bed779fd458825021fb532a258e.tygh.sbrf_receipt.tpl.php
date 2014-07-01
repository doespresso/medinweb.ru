<?php /* Smarty version Smarty-3.1.15, created on 2014-04-24 16:35:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/payments/components/cc_processors/sbrf_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197173433653590518c067b6-66687311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc684695f2a0bed779fd458825021fb532a258e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/payments/components/cc_processors/sbrf_receipt.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197173433653590518c067b6-66687311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53590518c6afe2_49904883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53590518c6afe2_49904883')) {function content_53590518c6afe2_49904883($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sbrf_recepient_name','sbrf_kpp','sbrf_inn','sbrf_okato_code','sbrf_settlement_account','sbrf_account_id','sbrf_bank','sbrf_bik','sbrf_cor_account','sbrf_kbk'));
?>


<div class="control-group">
	<label class="control-label" for="sbrf_recepient_name"><?php echo $_smarty_tpl->__("sbrf_recepient_name");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_recepient_name]" id="sbrf_recepient_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_recepient_name'], ENT_QUOTES, 'UTF-8');?>
"  size="80">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_kpp"><?php echo $_smarty_tpl->__("sbrf_kpp");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_kpp]" id="sbrf_kpp" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_kpp'], ENT_QUOTES, 'UTF-8');?>
"  size="9" maxlength="9">
	</div>
</div>
	
<div class="control-group">
	<label class="control-label" for="sbrf_inn"><?php echo $_smarty_tpl->__("sbrf_inn");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_inn]" id="sbrf_inn" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_inn'], ENT_QUOTES, 'UTF-8');?>
"  size="12" maxlength="12">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_okato_code"><?php echo $_smarty_tpl->__("sbrf_okato_code");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_okato_code]" id="sbrf_okato_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_okato_code'], ENT_QUOTES, 'UTF-8');?>
"  size="11" maxlength="11">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_settlement_account"><?php echo $_smarty_tpl->__("sbrf_settlement_account");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_settlement_account]" id="sbrf_settlement_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_settlement_account'], ENT_QUOTES, 'UTF-8');?>
"  size="20" maxlength="20">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_account_id"><?php echo $_smarty_tpl->__("sbrf_account_id");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_account_id]" id="sbrf_account_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_account_id'], ENT_QUOTES, 'UTF-8');?>
"  size="80">
	</div>
</div>
	
<div class="control-group">
	<label class="control-label" for="sbrf_bank"><?php echo $_smarty_tpl->__("sbrf_bank");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_bank]" id="sbrf_bank" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_bank'], ENT_QUOTES, 'UTF-8');?>
"  size="80">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_bik"><?php echo $_smarty_tpl->__("sbrf_bik");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_bik]" id="sbrf_bik" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_bik'], ENT_QUOTES, 'UTF-8');?>
"  size="9" maxlength="9">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_cor_account"><?php echo $_smarty_tpl->__("sbrf_cor_account");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_cor_account]" id="sbrf_cor_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_cor_account'], ENT_QUOTES, 'UTF-8');?>
"  size="20" maxlength="20">
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="sbrf_kbk"><?php echo $_smarty_tpl->__("sbrf_kbk");?>
:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][sbrf_kbk]" id="sbrf_kbk" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sbrf_kbk'], ENT_QUOTES, 'UTF-8');?>
"  size="29" maxlength="29">
	</div>
</div>
<div class="control-group hidden">
    <input type="hidden" name="payment_data[processor_params][sbrf_enabled]" value="Y">
</div>
<?php }} ?>
