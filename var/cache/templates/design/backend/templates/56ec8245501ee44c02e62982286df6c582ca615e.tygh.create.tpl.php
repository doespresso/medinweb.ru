<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 02:48:04
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/buttons/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:721377376533f36a450bac7-27848299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ec8245501ee44c02e62982286df6c582ca615e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/buttons/create.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '721377376533f36a450bac7-27848299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_text' => 0,
    '_but_text' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f36a4541946_61490208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f36a4541946_61490208')) {function content_533f36a4541946_61490208($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
