<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:14
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/select_vendor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:594613284533e9cee295f86-90723980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d00e9f34c9a1d090b7a09ba3fa39fd667767fa' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/select_vendor.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '594613284533e9cee295f86-90723980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'runtime' => 0,
    'class' => 0,
    'search' => 0,
    'lang_search_by_vendor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cee2e9b66_69313334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cee2e9b66_69313334')) {function content_533e9cee2e9b66_69313334($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search_by_vendor','search_by_owner','all_vendors'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "company_id" : $tmp), null, 0);?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars["lang_search_by_vendor"] = new Smarty_variable($_smarty_tpl->__("search_by_vendor"), null, 0);?>
<?php } elseif (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["lang_search_by_vendor"] = new Smarty_variable($_smarty_tpl->__("search_by_owner"), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "control-group" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['company_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <label class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_search_by_vendor']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
    <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?show_all=Y&search=Y",'text'=>(($tmp = @fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['company_id']))===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") : $tmp),'result_elm'=>$_smarty_tpl->tpl_vars['id']->value,'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector"), 0);?>

    </div>
</div>

<?php }?><?php }} ?>
