<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 17:45:19
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/export_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1418895505342abefc9a537-80062095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26a8f9580741cfc0395e435ade2aee3d3853af1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/export_layout.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1418895505342abefc9a537-80062095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342abefd08717_46367982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342abefd08717_46367982')) {function content_5342abefd08717_46367982($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('general','locations','output','direct_download','server','screen','filename','export'));
?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="export_locations">

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">

<div class="control-group cm-no-hide-input">
    <label for="locations_ids" class="control-label"><?php echo $_smarty_tpl->__("locations");?>
</label>
    <div class="controls">
        <div class="scroll-y">
            <?php  $_smarty_tpl->tpl_vars["location"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["location"]->_loop = false;
 $_smarty_tpl->tpl_vars["location_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["location"]->key => $_smarty_tpl->tpl_vars["location"]->value) {
$_smarty_tpl->tpl_vars["location"]->_loop = true;
 $_smarty_tpl->tpl_vars["location_id"]->value = $_smarty_tpl->tpl_vars["location"]->key;
?>
                    <label for="location_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox"><input id="location_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="location_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" checked="checked" class="cm-item" />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
)</label>
            <?php } ?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"links"), 0);?>

    </div>
</div>

<div class="control-group">
    <label for="output" class="control-label"><?php echo $_smarty_tpl->__("output");?>
</label>
    <div class="controls">
    <select name="output" id="output">
        <option value="D"><?php echo $_smarty_tpl->__("direct_download");?>
</option>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <option value="S"><?php echo $_smarty_tpl->__("server");?>
</option>
        <?php }?>
        <option value="C"><?php echo $_smarty_tpl->__("screen");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="filename"><?php echo $_smarty_tpl->__("filename");?>
</label>
    <div class="controls">
        <input type="text" name="filename" id="filename" size="50" value="layouts_<?php echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%m%d%Y"), ENT_QUOTES, 'UTF-8');?>
.xml" />
    </div>
</div>

</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("export"),'but_name'=>"dispatch[block_manager.export_layout]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer"), 0);?>

</div>
</form><?php }} ?>
