<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:39:20
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/products_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2129059333533f1878d2c785-05114559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606b21f48ca78d9948c8f34e88cc5b27a6240c0d' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/products/components/products_search_form.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2129059333533f1878d2c785-05114559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'form_meta' => 0,
    'put_request_vars' => 0,
    'v' => 0,
    'k' => 0,
    'search_extra' => 0,
    'search' => 0,
    's_cid' => 0,
    'category_data' => 0,
    'all_categories' => 0,
    'cat' => 0,
    'simple_search_form' => 0,
    'filter_features' => 0,
    'ff' => 0,
    'have_price_filter' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'config' => 0,
    'settings' => 0,
    'dispatch' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f187921bd39_43455409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f187921bd39_43455409')) {function content_533f187921bd39_43455409($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('find_results_with','any_words','all_words','exact_phrase','search_in','product_name','short_description','full_description','keywords','search_in_category','all_categories','all_categories','search_in_subcategories','advanced_search_options','search_by_vendor','all_vendors','search_by_sku','search_by_price','search_by_weight','or','reset','search_options','find_results_with','any_words','all_words','exact_phrase','search_in','product_name','short_description','full_description','keywords','search_in_category','all_categories','all_categories','search_in_subcategories','advanced_search_options','search_by_vendor','all_vendors','search_by_sku','search_by_price','search_by_weight','or','reset','search_options'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="advanced_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="search_performed" value="Y" />

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
<?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_REQUEST; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->value&&$_smarty_tpl->tpl_vars['k']->value!="callback") {?>
<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php } ?>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['search_extra']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_query_input")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_query_input"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <label for="match"><?php echo $_smarty_tpl->__("find_results_with");?>
</label>
    <select name="match" id="match" class="valign">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="any") {?>selected="selected"<?php }?> value="any"><?php echo $_smarty_tpl->__("any_words");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="all") {?>selected="selected"<?php }?> value="all"><?php echo $_smarty_tpl->__("all_words");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="exact") {?>selected="selected"<?php }?> value="exact"><?php echo $_smarty_tpl->__("exact_phrase");?>
</option>
    </select>&nbsp;&nbsp;
    <input type="text" name="q" size="38" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large valign" />
</div>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("search_in");?>
</label>
    <div class="select-field">
        <label for="pname">
            <input type="hidden" name="pname" value="N" />
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pname']=="Y"||!$_smarty_tpl->tpl_vars['search']->value['pname']) {?>checked="checked"<?php }?> name="pname" id="pname" class="checkbox" /><?php echo $_smarty_tpl->__("product_name");?>

        </label>

        <label for="pshort">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pshort']=="Y") {?>checked="checked"<?php }?> name="pshort" id="pshort" class="checkbox" /><?php echo $_smarty_tpl->__("short_description");?>

        </label>

        <label for="pfull">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pfull']=="Y") {?>checked="checked"<?php }?> name="pfull" id="pfull" class="checkbox" /><?php echo $_smarty_tpl->__("full_description");?>

        </label>

        <label for="pkeywords">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pkeywords']=="Y") {?>checked="checked"<?php }?> name="pkeywords" id="pkeywords" class="checkbox" /><?php echo $_smarty_tpl->__("keywords");?>

        </label>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_in")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_in"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_in"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_query_input"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("search_in_category");?>
</label>
    <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
        <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']) {?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['cid'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"cid",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("all_categories"),'extra'=>''), 0);?>

    <?php } else { ?>
    <div class="float-left">
        <?php $_smarty_tpl->tpl_vars["all_categories"] = new Smarty_variable(fn_get_plain_categories_tree(0,false), null, 0);?>
        <select name="cid" class="valign">
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id']=="0") {?>selected<?php }?>>- <?php echo $_smarty_tpl->__("all_categories");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cat"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cat"]->key => $_smarty_tpl->tpl_vars["cat"]->value) {
$_smarty_tpl->tpl_vars["cat"]->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['search']->value['cid']==$_smarty_tpl->tpl_vars['cat']->value['category_id']) {?> selected="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
"><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true),50,"...",true));?>
</option>
            <?php } ?>
        </select>
    </div>
    <?php }?>
    <div class="select-field subcategories-field">
        <label for="subcats">
            <input type="hidden" name="subcats" value="N" />
            <input type="checkbox" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['subcats']=="Y"||!$_smarty_tpl->tpl_vars['search']->value['subcats']) {?> checked="checked"<?php }?> name="subcats" id="subcats" class="checkbox" />
            <?php echo $_smarty_tpl->__("search_in_subcategories");?>

        </label>
    </div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['simple_search_form']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("advanced_search_options")), 0);?>

    <div class="control-group">
        <input type="hidden" name="company_id" id="company_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['company_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label'=>__("search_by_vendor"),'data_url'=>"companies.get_companies_list?show_all=Y&search=Y",'text'=>(($tmp = @fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['company_id']))===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") : $tmp),'result_elm'=>"company_id",'id'=>"company_id_selector"), 0);?>

        <?php }?>
    </div>
    
    <div class="control-group">
        <label for="pcode"><?php echo $_smarty_tpl->__("search_by_sku");?>
</label>
        <input type="text" name="pcode" id="pcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['pcode'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>

    <?php $_smarty_tpl->tpl_vars["have_price_filter"] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["ff"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ff"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ff"]->key => $_smarty_tpl->tpl_vars["ff"]->value) {
$_smarty_tpl->tpl_vars["ff"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type']=="P") {?><?php $_smarty_tpl->tpl_vars["have_price_filter"] = new Smarty_variable(1, null, 0);?><?php }?><?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['have_price_filter']->value) {?>
    <div class="control-group">
        <label for="price_from"><?php echo $_smarty_tpl->__("search_by_price");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="price_from" id="price_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />&nbsp;-&nbsp;<input type="text" name="price_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>
    <?php }?>

    <div class="control-group">
        <label for="weight_from"><?php echo $_smarty_tpl->__("search_by_weight");?>
&nbsp;(<?php if ($_smarty_tpl->tpl_vars['config']->value['localization']['weight_symbol']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['localization']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
<?php }?>)</label>
        <input type="text" name="weight_from" id="weight_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['weight_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />&nbsp;-&nbsp;<input type="text" name="weight_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['weight_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0);?>
&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;<a class="text-button nobg cm-reset-link"><?php echo $_smarty_tpl->__("reset");?>
</a>
</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'class'=>"search-form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/products_search_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/products_search_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="advanced_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="search_performed" value="Y" />

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
<?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_REQUEST; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->value&&$_smarty_tpl->tpl_vars['k']->value!="callback") {?>
<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php } ?>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['search_extra']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_query_input")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_query_input"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <label for="match"><?php echo $_smarty_tpl->__("find_results_with");?>
</label>
    <select name="match" id="match" class="valign">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="any") {?>selected="selected"<?php }?> value="any"><?php echo $_smarty_tpl->__("any_words");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="all") {?>selected="selected"<?php }?> value="all"><?php echo $_smarty_tpl->__("all_words");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['match']=="exact") {?>selected="selected"<?php }?> value="exact"><?php echo $_smarty_tpl->__("exact_phrase");?>
</option>
    </select>&nbsp;&nbsp;
    <input type="text" name="q" size="38" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large valign" />
</div>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("search_in");?>
</label>
    <div class="select-field">
        <label for="pname">
            <input type="hidden" name="pname" value="N" />
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pname']=="Y"||!$_smarty_tpl->tpl_vars['search']->value['pname']) {?>checked="checked"<?php }?> name="pname" id="pname" class="checkbox" /><?php echo $_smarty_tpl->__("product_name");?>

        </label>

        <label for="pshort">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pshort']=="Y") {?>checked="checked"<?php }?> name="pshort" id="pshort" class="checkbox" /><?php echo $_smarty_tpl->__("short_description");?>

        </label>

        <label for="pfull">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pfull']=="Y") {?>checked="checked"<?php }?> name="pfull" id="pfull" class="checkbox" /><?php echo $_smarty_tpl->__("full_description");?>

        </label>

        <label for="pkeywords">
            <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pkeywords']=="Y") {?>checked="checked"<?php }?> name="pkeywords" id="pkeywords" class="checkbox" /><?php echo $_smarty_tpl->__("keywords");?>

        </label>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_in")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_in"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_in"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_query_input"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="control-group">
    <label><?php echo $_smarty_tpl->__("search_in_category");?>
</label>
    <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
        <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']) {?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['cid'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"cid",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("all_categories"),'extra'=>''), 0);?>

    <?php } else { ?>
    <div class="float-left">
        <?php $_smarty_tpl->tpl_vars["all_categories"] = new Smarty_variable(fn_get_plain_categories_tree(0,false), null, 0);?>
        <select name="cid" class="valign">
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id']=="0") {?>selected<?php }?>>- <?php echo $_smarty_tpl->__("all_categories");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cat"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cat"]->key => $_smarty_tpl->tpl_vars["cat"]->value) {
$_smarty_tpl->tpl_vars["cat"]->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['search']->value['cid']==$_smarty_tpl->tpl_vars['cat']->value['category_id']) {?> selected="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
"><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true),50,"...",true));?>
</option>
            <?php } ?>
        </select>
    </div>
    <?php }?>
    <div class="select-field subcategories-field">
        <label for="subcats">
            <input type="hidden" name="subcats" value="N" />
            <input type="checkbox" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['subcats']=="Y"||!$_smarty_tpl->tpl_vars['search']->value['subcats']) {?> checked="checked"<?php }?> name="subcats" id="subcats" class="checkbox" />
            <?php echo $_smarty_tpl->__("search_in_subcategories");?>

        </label>
    </div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['simple_search_form']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("advanced_search_options")), 0);?>

    <div class="control-group">
        <input type="hidden" name="company_id" id="company_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['company_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label'=>__("search_by_vendor"),'data_url'=>"companies.get_companies_list?show_all=Y&search=Y",'text'=>(($tmp = @fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['company_id']))===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") : $tmp),'result_elm'=>"company_id",'id'=>"company_id_selector"), 0);?>

        <?php }?>
    </div>
    
    <div class="control-group">
        <label for="pcode"><?php echo $_smarty_tpl->__("search_by_sku");?>
</label>
        <input type="text" name="pcode" id="pcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['pcode'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>

    <?php $_smarty_tpl->tpl_vars["have_price_filter"] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["ff"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ff"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ff"]->key => $_smarty_tpl->tpl_vars["ff"]->value) {
$_smarty_tpl->tpl_vars["ff"]->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type']=="P") {?><?php $_smarty_tpl->tpl_vars["have_price_filter"] = new Smarty_variable(1, null, 0);?><?php }?><?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['have_price_filter']->value) {?>
    <div class="control-group">
        <label for="price_from"><?php echo $_smarty_tpl->__("search_by_price");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="price_from" id="price_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />&nbsp;-&nbsp;<input type="text" name="price_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>
    <?php }?>

    <div class="control-group">
        <label for="weight_from"><?php echo $_smarty_tpl->__("search_by_weight");?>
&nbsp;(<?php if ($_smarty_tpl->tpl_vars['config']->value['localization']['weight_symbol']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['localization']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
<?php }?>)</label>
        <input type="text" name="weight_from" id="weight_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['weight_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />&nbsp;-&nbsp;<input type="text" name="weight_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['weight_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" size="30" />
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_filters_advanced_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0);?>
&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;<a class="text-button nobg cm-reset-link"><?php echo $_smarty_tpl->__("reset");?>
</a>
</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'class'=>"search-form"), 0);?>

<?php }?><?php }} ?>
