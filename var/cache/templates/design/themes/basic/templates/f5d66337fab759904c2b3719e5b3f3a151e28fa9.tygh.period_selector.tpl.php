<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 13:03:03
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/period_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20267642745343bb4726c4a5-87159173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d66337fab759904c2b3719e5b3f3a151e28fa9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/period_selector.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20267642745343bb4726c4a5-87159173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'period' => 0,
    'search' => 0,
    'settings' => 0,
    'ldelim' => 0,
    'prefix' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5343bb473e0a65_34475608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5343bb473e0a65_34475608')) {function content_5343bb473e0a65_34475608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates','period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="period">
<div class="control-group period-select">
    <label><?php echo $_smarty_tpl->__("period");?>
</label>
    <select name="period" id="period_selects">
        <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value=="A"||!$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
        <optgroup label="=============">
            <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
            <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value=="W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
            <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value=="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
            <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
            <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
            <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
            <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
            <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
        </optgroup>
    </select>
</div>


<div class="control-group period-select-date calendar" >
    <label><?php echo $_smarty_tpl->__("select_dates");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_from'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0);?>

    <span class="period-dash">&#8211;</span>
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_to'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0);?>

</div>

<?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
//]]>
</script>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/period_selector.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/period_selector.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="period">
<div class="control-group period-select">
    <label><?php echo $_smarty_tpl->__("period");?>
</label>
    <select name="period" id="period_selects">
        <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value=="A"||!$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
        <optgroup label="=============">
            <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
            <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value=="W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
            <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value=="M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
            <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
            <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
            <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value=="LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
            <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
            <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value=="HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
        </optgroup>
        <optgroup label="=============">
            <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
        </optgroup>
    </select>
</div>


<div class="control-group period-select-date calendar" >
    <label><?php echo $_smarty_tpl->__("select_dates");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_from'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0);?>

    <span class="period-dash">&#8211;</span>
    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['time_to'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), 0);?>

</div>

<?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
//]]>
</script>
</div><?php }?><?php }} ?>
