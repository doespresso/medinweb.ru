<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:56:04
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/csv_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128316952533e9dd4ab7317-39403049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99dd8c338ac7a946fde7e35b79fc4ba4fd81d443' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2128316952533e9dd4ab7317-39403049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9dd4adc641_70815547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9dd4adc641_70815547')) {function content_533e9dd4adc641_70815547($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['value']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||!empty($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
        <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
    <?php }?>
</select><?php }} ?>
