<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:22
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/localizations/components/select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1313435487533e9cf69394f3-36937874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc9dcadb429e3c01d14ccb3490a70f0f61e35' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/localizations/components/select.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1313435487533e9cf69394f3-36937874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_from' => 0,
    'localizations' => 0,
    'no_div' => 0,
    'id' => 0,
    'disabled' => 0,
    'data_name' => 0,
    'loc' => 0,
    'data' => 0,
    'p_loc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf698cd39_38241835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf698cd39_38241835')) {function content_533e9cf698cd39_38241835($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('localization','multiple_selectbox_notice'));
?>
<?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
	<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable(fn_explode_localizations($_smarty_tpl->tpl_vars['data_from']->value), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['localizations']->value) {?>
		<?php if (!$_smarty_tpl->tpl_vars['no_div']->value) {?>
			<div class="control-group">
		    <label class="control-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("localization");?>
:</label>
            <div class="controls">
		<?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" /><?php }?>
            <select    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" size="3" id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>elm-disabled<?php } else { ?>span6<?php }?>" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars["loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["loc"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['localizations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["loc"]->key => $_smarty_tpl->tpl_vars["loc"]->value) {
$_smarty_tpl->tpl_vars["loc"]->_loop = true;
?>
                <option    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['localization_id'], ENT_QUOTES, 'UTF-8');?>
" <?php  $_smarty_tpl->tpl_vars["p_loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p_loc"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p_loc"]->key => $_smarty_tpl->tpl_vars["p_loc"]->value) {
$_smarty_tpl->tpl_vars["p_loc"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['p_loc']->value==$_smarty_tpl->tpl_vars['loc']->value['localization_id']) {?>selected="selected"<?php }?><?php } ?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['localization'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
		<?php if (!$_smarty_tpl->tpl_vars['no_div']->value) {?>
			<?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>

			</div>
			</div>
		<?php }?>
	<?php }?>
<?php }?><?php }} ?>
