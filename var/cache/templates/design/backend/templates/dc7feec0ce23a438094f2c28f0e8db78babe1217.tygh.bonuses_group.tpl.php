<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 01:43:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/promotions/components/bonuses_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1221833614533f277fa3f055-62295611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7feec0ce23a438094f2c28f0e8db78babe1217' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/promotions/components/bonuses_group.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1221833614533f277fa3f055-62295611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_add_buttons' => 0,
    'group' => 0,
    'k' => 0,
    'bonus_data' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'schema' => 0,
    'zone' => 0,
    'b' => 0,
    '_k' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f277faa1f32_42510671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f277faa1f32_42510671')) {function content_533f277faa1f32_42510671($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
fn_preload_lang_vars(array('add_bonus','no_items'));
?>
<?php if (!$_smarty_tpl->tpl_vars['hide_add_buttons']->value) {?>
    <div class="buttons-container pull-right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add(this.id, false, 'bonus');",'tool_id'=>"add_bonus",'link_text'=>__("add_bonus"),'prefix'=>"bottom"), 0);?>

    </div>
<?php }?>
<ul class="promotion-group clear">
    <li class="no-node no-items <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>hidden<?php }?>">
        <?php echo $_smarty_tpl->__("no_items");?>

    </li>

    <?php  $_smarty_tpl->tpl_vars["bonus_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bonus_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["bonus_data"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["bonus_data"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["bonus_data"]->key => $_smarty_tpl->tpl_vars["bonus_data"]->value) {
$_smarty_tpl->tpl_vars["bonus_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["bonus_data"]->key;
 $_smarty_tpl->tpl_vars["bonus_data"]->iteration++;
 $_smarty_tpl->tpl_vars["bonus_data"]->last = $_smarty_tpl->tpl_vars["bonus_data"]->iteration === $_smarty_tpl->tpl_vars["bonus_data"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["bonuses"]['last'] = $_smarty_tpl->tpl_vars["bonus_data"]->last;
?>
    <li id="container_bonus_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-row-item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['bonuses']['last']) {?> cm-last-item<?php }?>">
        <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bonus_data'=>$_smarty_tpl->tpl_vars['bonus_data']->value,'elm_id'=>"bonus_".((string)$_smarty_tpl->tpl_vars['k']->value),'prefix'=>"promotion_data[bonuses][".((string)$_smarty_tpl->tpl_vars['k']->value)."]"), 0);?>

    </li>
    <?php } ?>
    
    <li id="container_add_bonus" class="clear hidden cm-row-item">
        <div class="option">
            <select onchange="Tygh.$.ceAjax('request', '<?php echo fn_url("promotions.dynamic?prefix=",'A','rel');?>
' + escape(this.name) + '&bonus=' + this.value + '&elm_id=' + this.id, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'container_' + this.id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)">
                <option value=""> -- </option>
                <?php  $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["b"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["b"]->key => $_smarty_tpl->tpl_vars["b"]->value) {
$_smarty_tpl->tpl_vars["b"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["b"]->key;
?>
                    <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['zone']->value,$_smarty_tpl->tpl_vars['b']->value['zones'])) {?>
                        <?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_bonus_".((string)$_smarty_tpl->tpl_vars['_k']->value), null, 0);?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
</option>
                    <?php }?>
                <?php } ?>
            </select>
        </div>
    </li>
</ul><?php }} ?>
