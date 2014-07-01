<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:02:53
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/banners/pickers/banners/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1220926524534293ed986344-93554831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddd4e40280cd2755439e64727f38e6f6a42faa95' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/banners/pickers/banners/picker_contents.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1220926524534293ed986344-93554831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534293ed9ede36_39375397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534293ed9ede36_39375397')) {function content_534293ed9ede36_39375397($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_items_added','banner','no_data','add_banners','add_banners_and_close'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_banners_form', function(frm, elm) {

        var banners = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                banners[id] = $('#banner_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), banners, 'b', {
                '{banner_id}': '%id',
                '{banner}': '%item'
            });
            

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }

        return false;
    });

}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>
</head>
<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="banners_form">
<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("banner");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
<tr>
    <td>
        <input type="checkbox" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "banners_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td id="banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
" width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("add_banners"),'but_close_text'=>__("add_banners_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>
<?php }?>

</form>
<?php }} ?>
