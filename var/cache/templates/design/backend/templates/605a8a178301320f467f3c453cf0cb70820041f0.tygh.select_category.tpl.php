<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:50:36
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/select_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1731347235533e9c8c702925-34332151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605a8a178301320f467f3c453cf0cb70820041f0' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/select_category.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1731347235533e9c8c702925-34332151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'select_class' => 0,
    'hide_root' => 0,
    'id' => 0,
    'root_text' => 0,
    'cat' => 0,
    'close_optgroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c8c760ff3_97203594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c8c760ff3_97203594')) {function content_533e9c8c760ff3_97203594($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('all_categories'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_class']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if (!$_smarty_tpl->tpl_vars['hide_root']->value) {?>
    <option value="0" <?php if ($_smarty_tpl->tpl_vars['id']->value==0) {?>selected="selected"<?php }?>>- <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['root_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("all_categories") : $tmp), ENT_QUOTES, 'UTF-8');?>
 -</option>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cat"]->_loop = false;
 $_from = fn_get_plain_categories_tree(0,false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["cat"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["cat"]->key => $_smarty_tpl->tpl_vars["cat"]->value) {
$_smarty_tpl->tpl_vars["cat"]->_loop = true;
 $_smarty_tpl->tpl_vars["cat"]->index++;
 $_smarty_tpl->tpl_vars["cat"]->first = $_smarty_tpl->tpl_vars["cat"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cat"]['first'] = $_smarty_tpl->tpl_vars["cat"]->first;
?>
        <?php if ($_smarty_tpl->tpl_vars['cat']->value['store']) {?>
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['cat']['first']) {?>
                </optgroup>
            <?php }?>
            <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars["close_optgroup"] = new Smarty_variable(true, null, 0);?>
        <?php } else { ?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['cat']->value['category_id']) {?>selected="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
"><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true));?>
</option>
        <?php }?>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['close_optgroup']->value) {?>
        </optgroup>
    <?php }?>
</select><?php }} ?>
