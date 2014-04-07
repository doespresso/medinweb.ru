<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:37:32
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54836580533f180c02b302-06591177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4cce9a91db59cbd731cae29da8086dc5c5e0e9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54836580533f180c02b302-06591177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rate_id' => 0,
    'val' => 0,
    'item_rate_id' => 0,
    'rate_name' => 0,
    'rate_value' => 0,
    'disabled' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f180c05c0e9_31863491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f180c05c0e9_31863491')) {function content_533f180c05c0e9_31863491($_smarty_tpl) {?><fieldset class="rating" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars["title"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["title"]->_loop = false;
 $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable;
 $_from = fn_get_discussion_ratings(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["title"]->key => $_smarty_tpl->tpl_vars["title"]->value) {
$_smarty_tpl->tpl_vars["title"]->_loop = true;
 $_smarty_tpl->tpl_vars["val"]->value = $_smarty_tpl->tpl_vars["title"]->key;
?>
    <?php $_smarty_tpl->tpl_vars['item_rate_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
    <input type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['rate_value']->value==$_smarty_tpl->tpl_vars['val']->value) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>/><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <?php } ?>
</fieldset><?php }} ?>
