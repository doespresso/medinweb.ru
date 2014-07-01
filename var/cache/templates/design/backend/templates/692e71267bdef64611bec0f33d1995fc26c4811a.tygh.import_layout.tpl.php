<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 18:24:47
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/import_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5126127145342b52f673a53-33793309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692e71267bdef64611bec0f33d1995fc26c4811a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/block_manager/import_layout.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5126127145342b52f673a53-33793309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'location_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5342b52f6d1f15_72370000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342b52f6d1f15_72370000')) {function content_5342b52f6d1f15_72370000($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','select_file','create_new_layout','update_current_layout','clean_up_all_locations_on_import','override_by_dispatch','import'));
?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="import_locations" enctype="multipart/form-data">

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("select_file");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"filename[0]"), 0);?>

        </div>
    </div>

    <div class="control-group" id="create_new_or_update">
        <div class="controls">
            <label class="radio inline" for="import_style_create_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="radio" id="import_style_create_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" name="import_style" value="create" checked="checked" />
            <?php echo $_smarty_tpl->__("create_new_layout");?>
</label>

            <label class="radio inline" for="import_style_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="radio" id="import_style_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" name="import_style" value="update" />
            <?php echo $_smarty_tpl->__("update_current_layout");?>
</label>
        </div>
    </div>

    <div class="control-group hidden" id="update_adv_options">
        <div class="controls">
            <label class="checkbox" for="clean_up_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="clean_up" value="N" />
            <input id="clean_up_export_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="clean_up" value="Y" />
            <?php echo $_smarty_tpl->__("clean_up_all_locations_on_import");?>
</label>
            <label class="checkbox" for="override_by_dispatch_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="override_by_dispatch" value="N" />
            <input id="override_by_dispatch_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['location_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="override_by_dispatch" value="Y" checked="checked" />
            <?php echo $_smarty_tpl->__("override_by_dispatch");?>
</label>
        </div>
    </div>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("import"),'but_name'=>"dispatch[block_manager.import_layout]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer"), 0);?>

</div>

<script>
    $(function() {
      $('#create_new_or_update input[type=radio]').change(function() {
        if($(this).val() == 'update') {
            $('#update_adv_options').show();
        } else {
            $('#update_adv_options').hide();
        }
      });
    });
</script>

</form><?php }} ?>
