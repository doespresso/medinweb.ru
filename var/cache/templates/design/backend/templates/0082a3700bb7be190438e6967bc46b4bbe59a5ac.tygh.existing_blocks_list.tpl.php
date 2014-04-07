<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:19:24
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404230086534002dc079496-22704578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0082a3700bb7be190438e6967bc46b4bbe59a5ac' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1404230086534002dc079496-22704578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unique_blocks' => 0,
    'block' => 0,
    'block_types' => 0,
    'manage' => 0,
    'grid_id' => 0,
    'block_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534002dc0c1bf6_31874015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534002dc0c1bf6_31874015')) {function content_534002dc0c1bf6_31874015($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('delete_block'));
?>
<?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unique_blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]) {?>
        <div class="select-block cm-add-block bm-action-existing-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>">
            <input type="hidden" name="block_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="grid_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['grid_id']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
" />
            <a class="icon-remove-circle cm-tooltip cm-remove-block" title="<?php echo $_smarty_tpl->__("delete_block");?>
"></a>
            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],25,"&hellip;",true);?>
</strong>
                <?php $_smarty_tpl->tpl_vars["block_description"] = new Smarty_variable("block_".((string)$_smarty_tpl->tpl_vars['block']->value['type'])."_description", null, 0);?>
                <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['block_description']->value);?>
</p>
            </div>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
