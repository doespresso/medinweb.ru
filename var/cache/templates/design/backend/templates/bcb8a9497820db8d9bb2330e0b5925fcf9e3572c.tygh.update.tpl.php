<?php /* Smarty version Smarty-3.1.15, created on 2014-04-09 18:19:58
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/tabs/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17463217845345570e535ce6-88684141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb8a9497820db8d9bb2330e0b5925fcf9e3572c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/tabs/update.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17463217845345570e535ce6-88684141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_data' => 0,
    'id' => 0,
    'html_id' => 0,
    'active_tab' => 0,
    'dynamic_object_scheme' => 0,
    'block_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5345570e664b99_70397854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5345570e664b99_70397854')) {function content_5345570e664b99_70397854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_include_ext')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.include_ext.php';
?><?php
fn_preload_lang_vars(array('general','status','name','show_tab_in_popup','block','select_block','select_block','global_status','active','disabled','disable_for','enable_for'));
?>
<?php if ($_smarty_tpl->tpl_vars['tab_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['tab_data']->value['tab_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>


<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['html_id'] = new Smarty_variable("tab_".((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>

<script type="text/javascript">
//<![CDATA[
    var html_id = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
";

(function(_, $) {
    $(document).ready(function() {
        $(_.doc).on('click', '.cm-remove-block', function(e) {
            if (confirm(_.tr('text_are_you_sure_to_proceed')) != false) {
                var parent = $(this).parent();
                var block_id = parent.find('input[name="block_id"]').val();

                $.ceAjax('request', fn_url('block_manager.block.delete'), {
                    data: {block_id: block_id},
                    callback: function() {
                        parent.remove();
                    },
                    method: 'post'
                });
            }

            return false;
        });

        $(_.doc).on('click', '.cm-add-block', function(e) {
            /*
                Adding new block functionality
            */
            var action = $(this).prop('class').match(/bm-action-([a-zA-Z0-9-_]+)/)[1];
            
            if (action == 'new-block') {                
                var block_type = $(this).find('input[name="block_data[type]"]').val();

                var href = 'block_manager.update_block?';
                    href += 'block_data[type]=' + block_type;
                    href += '&ajax_update=1';
                    href += '&html_id=' + html_id;
                    href += '&force_close=' + 1;
                    href += '&assign_to=' + 'ajax_update_block_' + html_id;

                var prop_container = 'new_block_' + block_type;

                // Remove properties container if it exist
                if ($('#' + prop_container).length != 0) {
                    $('#' + prop_container).remove();
                }

                // Create properties container
                var container = $('<div id="' + prop_container + '"></div>').appendTo(_.body);

                $('#' + prop_container).ceDialog('open', {href: fn_url(href), title: Tygh.tr('add_block') + ': ' + $(this).find('strong').text()});
            } else if (action == 'existing-block') {
                var block_id = $(this).find('input[name="block_id"]').val();
                var block_title = $(this).find('.select-block-title').text();

                data = {
                    block_data: {
                        block_id: $(this).find('input[name="block_id"]').val()
                    },
                    assign_to: 'ajax_update_block_' + html_id,
                    force_close: '1'
                };

                $.ceAjax('request', fn_url('block_manager.update_block'), {
                    data: data,
                    method: 'post'
                });
            }

            $.ceDialog('get_last').ceDialog('close');
        });
    });

}(Tygh, Tygh.$));

//]]>
</script>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="update_product_tab_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class=" form-horizontal">
<div id="content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="tab_data[tab_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_group_tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value=="block_general_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>">
                <a><?php echo $_smarty_tpl->__("general");?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value&&$_smarty_tpl->tpl_vars['id']->value>0) {?>
                <li id="tab_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value=="block_status_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>">
                    <a><?php echo $_smarty_tpl->__("status");?>
</a>
                </li>
            <?php }?>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div class="control-group">
                    <label class="cm-required control-label" for="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" name="tab_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="18" />
                    </div>
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"tab_data[status]",'id'=>"elm_tab_data_".((string)$_smarty_tpl->tpl_vars['html_id']->value),'obj'=>$_smarty_tpl->tpl_vars['tab_data']->value), 0);?>

                <?php }?>

                <div class="control-group">
                    <label for="elm_show_in_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("show_tab_in_popup");?>
:</label>
                    <div class="controls">
                        <input type="hidden" name="tab_data[show_in_popup]" value="N" />
                        <input type="checkbox" name="tab_data[show_in_popup]" id="elm_show_in_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['show_in_popup']=="Y") {?>checked="checked"<?php }?> value="Y">
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['is_primary']!=='Y'&&fn_check_view_permissions("block_manager.update_block")) {?>
                    <div class="control-group">
                        <label for="ajax_update_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("block");?>
:</label>
                        <div class="controls clearfix help-inline-wrap">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"general",'id'=>"select_block_".((string)$_smarty_tpl->tpl_vars['html_id']->value),'text'=>__("select_block"),'link_text'=>__("select_block"),'href'=>"block_manager.block_selection?extra_id=".((string)$_smarty_tpl->tpl_vars['tab_data']->value['tab_id'])."&on_product_tabs=1",'action'=>"block_manager.block_selection",'opener_ajax_class'=>"cm-ajax cm-ajax-force",'content'=>'','meta'=>"pull-left"), 0);?>

                            <br><br>
                            <div id="ajax_update_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="block_data[block_id]" id="ajax_update_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['tab_data']->value['block_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['tab_data']->value['block_id']>0) {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block_data'=>$_smarty_tpl->tpl_vars['block_data']->value,'external_render'=>true,'external_id'=>$_smarty_tpl->tpl_vars['html_id']->value), 0);?>
        
                                <?php }?>
                            <!--ajax_update_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        </div>
                    </div>
                <?php }?>
            </fieldset>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value&&$_smarty_tpl->tpl_vars['id']->value>0) {?>
            <div id="content_tab_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("global_status");?>
:</label>
                        <div class="controls">
                            <label class="radio text-value"><?php if ($_smarty_tpl->tpl_vars['tab_data']->value['status']=='A') {?><?php echo $_smarty_tpl->__("active");?>
<?php } else { ?><?php echo $_smarty_tpl->__("disabled");?>
<?php }?></label>
                        </div>
                    </div>
                    <input type="hidden" class="cm-no-hide-input" name="snapping_data[object_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <div class="control-group">
                        <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['tab_data']->value['status']=='A') {?><?php echo $_smarty_tpl->__("disable_for");?>
<?php } else { ?><?php echo $_smarty_tpl->__("enable_for");?>
<?php }?>:</label>
                        <div class="controls">
                            <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker'],'data_id'=>"tab_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_product_ids",'input_name'=>"tab_data[product_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['tab_data']->value['product_ids'],'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']),$_smarty_tpl);?>

                        </div>
                    </div>
                </fieldset>
            <!--content_tab_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    </div>

<!--content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[tabs.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form><?php }} ?>
