<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:22
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/products/components/product_assign_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253426539533e9cf6bff753-09325930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db463c281c430a1b1fadc745caa5733e75d76fe5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/products/components/product_assign_features.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '253426539533e9cf6bff753-09325930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'feature' => 0,
    'feature_id' => 0,
    'selected' => 0,
    'selected_variant' => 0,
    'var' => 0,
    'allow_enter_variant' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf6d88369_08942544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf6d88369_08942544')) {function content_533e9cf6d88369_08942544($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('none','enter_other','none','enter_other','enter_other','enter_other'));
?>
<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php $_smarty_tpl->tpl_vars['allow_enter_variant'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!="G") {?>
        <div class="control-group">
            <label class="control-label" for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N"||$_smarty_tpl->tpl_vars['feature']->value['feature_type']=="E") {?>
                <?php $_smarty_tpl->tpl_vars["value_selected"] = new Smarty_variable(false, null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['feature']->value['use_variant_picker']) {?>
                    <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['variant_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['variant']) {?>
                        <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['variant'], null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>
                        <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable(fn_get_product_feature_variant($_smarty_tpl->tpl_vars['feature']->value['variant_id']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->tpl_vars['selected_variant']->value['variant'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["selected_variant"] = new Smarty_variable($_smarty_tpl->__("none"), null, 0);?>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"product_features.get_feature_variants_list?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'text'=>$_smarty_tpl->tpl_vars['selected_variant']->value,'result_elm'=>"feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'id'=>((string)$_smarty_tpl->tpl_vars['feature_id']->value)."_selector",'js_action'=>"Tygh."."$"."('#input_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."').toggleBy((Tygh."."$"."('#feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."').val() != 'disable_select'));"), 0);?>

                    <input type="text" class="hidden-input<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N") {?> cm-value-decimal<?php }?>" name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][variant]" id="input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_other");?>
" />                    
                <?php } else { ?>
                    <select name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.$('#input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
').toggleBy((this.value != 'disable_select'));">
                        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                        <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['var']->value['variant_id']==$_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?><?php $_smarty_tpl->tpl_vars["value_selected"] = new Smarty_variable(true, null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_enter_variant']->value) {?>
                        <option value="disable_select">-<?php echo $_smarty_tpl->__("enter_other");?>
-</option>
                        <?php }?>
                    </select>
                    <input type="text" class="hidden-input<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="N") {?> cm-value-decimal<?php }?>" name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][variant]" id="input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_other");?>
" />
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="M") {?>
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="" />
                <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
?>
                    <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input type="checkbox" id="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['allow_enter_variant']->value) {?>
                <input type="text" name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][variant]" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_other");?>
" />
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="C") {?>
                <label class="checkbox">
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input type="checkbox" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?>checked="checked"<?php }?> /></label>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="D") {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'date_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value_int'])===null||$tmp==='' ? '' : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

            <?php } else { ?>
                <input type="text" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="O") {?><?php if ($_smarty_tpl->tpl_vars['feature']->value['value_int']!='') {?><?php echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="O") {?> cm-value-decimal<?php }?>" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            </div>
        </div>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']=="G"&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

    <?php }?>
<?php } ?>
<?php }} ?>
