<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:21
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_cities/views/cities/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1646140660533e9c41d839e2-64300977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9daab49083fd1018cf8d40857c7c288325bb823' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_cities/views/cities/manage.tpl',
      1 => 1396612050,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1646140660533e9c41d839e2-64300977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'cities' => 0,
    'city' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'settings' => 0,
    '_country' => 0,
    'states' => 0,
    'state' => 0,
    'title' => 0,
    'country_name' => 0,
    'state_name' => 0,
    '_REQUEST' => 0,
    '_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c421cbdc4_46423321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c421cbdc4_46423321')) {function content_533e9c421cbdc4_46423321($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('code','city','country','state','status','delete','no_data','new_city','general','code','city','country','state','add_city','search','country','select_country','state','select_state','empty_state','new_city_state','select_state_instruction','cities'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cities_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="country_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['country'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="state_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['state_code'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th width="10%"><?php echo $_smarty_tpl->__("code");?>
</th>
    <th width="40%"><?php echo $_smarty_tpl->__("city");?>
</th>
    <th width="20%"><?php echo $_smarty_tpl->__("country");?>
/<?php echo $_smarty_tpl->__("state");?>
</th>
    <th width="5%">&nbsp;</th>
    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
<input type="hidden" name="cities[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_id'], ENT_QUOTES, 'UTF-8');?>
][country_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
"/>
<input type="hidden" name="cities[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_id'], ENT_QUOTES, 'UTF-8');?>
][state_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['state_code'], ENT_QUOTES, 'UTF-8');?>
"/>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['city']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    <td>
        <input type="checkbox" name="city_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
    </td>
    <td class="left nowrap">
        <input type="text" name="cities[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_id'], ENT_QUOTES, 'UTF-8');?>
][city_code]" size="8" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-text input-mini" />
    </td>
    <td>
        <input type="text" name="cities[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city_id'], ENT_QUOTES, 'UTF-8');?>
][city]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden"/>
    </td>
    <td>
            <?php if ($_smarty_tpl->tpl_vars['city']->value['country_code']!=$_smarty_tpl->tpl_vars['search']->value['country_code']) {?>
                <span class="muted"><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['country_name'], ENT_QUOTES, 'UTF-8');?>
</small></span>
                </br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['city']->value['state_code']!=$_smarty_tpl->tpl_vars['search']->value['state_code']) {?>
                <span class="muted"><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['state_name'], ENT_QUOTES, 'UTF-8');?>
</small></span>
            <?php }?>
    </td>
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"cities.delete?city_id=".((string)$_smarty_tpl->tpl_vars['city']->value['city_id'])."&state_code=".((string)$_smarty_tpl->tpl_vars['search']->value['state_code'])."&country_code=".((string)$_smarty_tpl->tpl_vars['search']->value['country_code'])));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['city']->value['city_id'],'status'=>$_smarty_tpl->tpl_vars['city']->value['status'],'hidden'=>'','object_id_name'=>"city_id",'table'=>"rus_cities"), 0);?>

    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("tools", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_cities_form" class="form-horizontal form-edit">
    <input type="hidden" name="city_data[state_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['state_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="city_data[country_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['country_code'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="city_id" value="0" />

    <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['search']->value['country_code']) {?>
            <?php ob_start();?><?php echo $_smarty_tpl->__("new_city");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1." (".((string)$_smarty_tpl->tpl_vars['country']->value).")", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["country_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['country']->value, null, 0);?>
        <?php }?>
    <?php } ?>

    <?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['country_code'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["state"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["state"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["state"]->key => $_smarty_tpl->tpl_vars["state"]->value) {
$_smarty_tpl->tpl_vars["state"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['state']->value['code']==$_smarty_tpl->tpl_vars['search']->value['state_code']) {?>
            <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['title']->value)." (".((string)$_smarty_tpl->tpl_vars['state']->value['state']).")", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["state_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['state']->value['state'], null, 0);?>
        <?php }?>
    <?php } ?>


    <div class="cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_new_cities" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content">
    <fieldset>
        <div class="control-group">
            <label class="cm-required control-label" for="elm_city_code"><?php echo $_smarty_tpl->__("code");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_city_code" name="city_data[city_code]" size="8" value="" />
            </div>
        </div>

        <div class="control-group">
            <label class="cm-required control-label" for="elm_city_name"><?php echo $_smarty_tpl->__("city");?>
:</label>
            <div class="controls">
            <input type="text" id="elm_city_name" name="city_data[city]" size="55" value="" />
            </div>
        </div>
        <?php $_smarty_tpl->tpl_vars["for_name_country"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['country_code'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["for_name_state"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['state_code'], null, 0);?>
        <div class="control-group">
            <label class="cm-required control-label" for="elm_countries_new"><?php echo $_smarty_tpl->__("country");?>
:</label>
            <div class="controls">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_name']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        </div>      

        <div class="control-group">
            <label id="elm_states" class="cm-required control-label" for="elm_states_new"><?php echo $_smarty_tpl->__("state");?>
:</label>
            <div class="controls">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state_name']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"city_data[status]",'id'=>"elm_city_status"), 0);?>

    </fieldset>
    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('create'=>true,'but_name'=>"dispatch[cities.update]",'cancel_action'=>"close"), 0);?>

    </div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[cities.m_delete]",'form'=>"cities_form"));?>
</li>
            <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[cities.m_update]",'but_role'=>"submit-link",'but_target_form'=>"cities_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (($_smarty_tpl->tpl_vars['_REQUEST']->value['state_code'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
		<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"new_city",'action'=>"cities.add",'text'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_city"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="cities_filter_form" method="get">
<div class="sidebar-field">

	<?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['country_code'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
    <label><?php echo $_smarty_tpl->__("country");?>
:</label>
		<select name="country_code" class="cm-country cm-location-states" id="elm_countries">
			<option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
			<?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
				<option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['_country']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
			<?php } ?>
		</select>

    <?php $_smarty_tpl->tpl_vars["_state"] = new Smarty_variable($_smarty_tpl->tpl_vars['_REQUEST']->value['state_code'], null, 0);?>
    <label id="elm_states_lbl" <?php if (empty($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value])) {?>class="hidden"<?php }?>><?php echo $_smarty_tpl->__("state");?>
:</label>
		<select name="state_code" class="cm-state cm-location-states" id="elm_states">
			<option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
			<?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
				<?php  $_smarty_tpl->tpl_vars["state"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["state"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["state"]->key => $_smarty_tpl->tpl_vars["state"]->value) {
$_smarty_tpl->tpl_vars["state"]->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
				<?php } ?>
			<?php }?>
		</select>
		<div class="hidden"><input type="text" id="elm_states_d" name="state_code" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" readonly="readonly" class="cm-state cm-location-states input-large hidden cm-skip-avail-switch" style="border:0px; background-color: transparent;"/></div>
        <span id="elm_states_empty" <?php if (!empty($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value])) {?>class="hidden"<?php }?>><?php echo $_smarty_tpl->__("empty_state");?>
</br><a href="admin.php?dispatch=states.manage&country_code=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_country']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("new_city_state");?>
</a></span>
</div>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[cities.manage]"), 0);?>

    <hr/>
    <?php echo $_smarty_tpl->__("select_state_instruction");?>
    

</form>
</div>

<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    $(document).ready(function() {
        $(_.doc).on('change', 'select.cm-country', function() {
            var inp = $('input.cm-state');
            if (!inp.hasClass('hidden')) {
                $('#elm_states_lbl').addClass('hidden');
                $('input.cm-state').val('');
                $('#elm_states_empty').removeClass('hidden');
            } else {
                $('#elm_states_lbl').removeClass('hidden');
                $('#elm_states_empty').addClass('hidden');
            }
        });
    });

}(Tygh, Tygh.$));
//]]>
</script>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("cities"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>
<?php }} ?>
