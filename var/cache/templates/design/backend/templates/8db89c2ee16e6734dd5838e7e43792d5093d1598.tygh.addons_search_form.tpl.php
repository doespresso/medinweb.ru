<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:43:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/addons/components/addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1458321885533e9adfd0a899-04982150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db89c2ee16e6734dd5838e7e43792d5093d1598' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/addons/components/addons_search_form.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1458321885533e9adfd0a899-04982150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'extra' => 0,
    'search' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9adfd69f70_08658330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9adfd69f70_08658330')) {function content_533e9adfd69f70_08658330($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','name','type','active','disabled','installed','not_installed'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<div class="sidebar-field">
    <label for="elm_addon"><?php echo $_smarty_tpl->__("name");?>
</label>
    <input type="text" name="q" id="elm_addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:advanced_search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:advanced_search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="elm_addon_type"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
            <select name="type" id="elm_addon_type">
                <option value="any">--</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="active") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="disabled") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="installed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="not_installed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>            
            </select>
            </div>
        </div>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:advanced_search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"addons"), 0);?>


</form>
</div>

<?php }} ?>
