<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 10:55:52
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/pickers/pages/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100393485553424bf83d44c0-24779293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899fd2fd39e3a94c8a6fdc544da99364cc103de1' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/pickers/pages/picker_contents.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100393485553424bf83d44c0-24779293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages_tree' => 0,
    'combination_suffix' => 0,
    'random_value' => 0,
    'button_names' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53424bf847fad3_28525321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53424bf847fad3_28525321')) {function content_53424bf847fad3_28525321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('text_items_added','no_data','choose','add_pages_and_close','add_pages'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_pages_form', function(frm, elm) {
        var pages = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                pages[id] = $('#page_title_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), pages, 'a', {
                '{page_id}': '%id',
                '{page}': '%item'
            });
            

            if (display_type != 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;        
    });
}(Tygh, Tygh.$));
//]]>
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"pages.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"get_tree\" value=\"\"><input type=\"hidden\" name=\"root\" value=\"\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="pages_form">

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
        <div class="items-container multi-level">
            <?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"random_value"),$_smarty_tpl);?>

            <?php $_smarty_tpl->tpl_vars["combination_suffix"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['combination_suffix']->value)===null||$tmp==='' ? "_".((string)$_smarty_tpl->tpl_vars['random_value']->value) : $tmp), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'picker'=>true,'checkbox_name'=>$_REQUEST['checkbox_name'],'hide_delete_button'=>true,'display'=>$_REQUEST['display'],'dispatch'=>"pages.picker",'combination_suffix'=>$_smarty_tpl->tpl_vars['combination_suffix']->value), 0);?>

        </div>
    <?php } else { ?>
        <div class="items-container"><p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p></div>
    <?php }?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
    <div class="buttons-container">
        <?php if ($_REQUEST['display']=="radio") {?>
            <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['button_names']->value['but_close_text'])===null||$tmp==='' ? $_smarty_tpl->__("add_pages_and_close") : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['button_names']->value['but_text'])===null||$tmp==='' ? $_smarty_tpl->__("add_pages") : $tmp), null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

    </div>
    <?php }?>
</form>
<?php }} ?>
