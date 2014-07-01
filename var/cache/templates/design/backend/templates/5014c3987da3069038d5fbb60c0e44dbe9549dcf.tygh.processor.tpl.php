<?php /* Smarty version Smarty-3.1.15, created on 2014-04-24 16:35:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/payments/processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124658489153590518bd8a17-07471782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5014c3987da3069038d5fbb60c0e44dbe9549dcf' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/payments/processor.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124658489153590518bd8a17-07471782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'curl_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53590518c00181_06049826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53590518c00181_06049826')) {function content_53590518c00181_06049826($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("views/payments/components/cc_processors/".((string)$_smarty_tpl->tpl_vars['processor_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
