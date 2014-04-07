<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 18:56:16
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/pickers/categories/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210580220533ec810bda1c1-49197447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e7ba1b3a1de77627f895ae9c583b76e9e9adfa' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/pickers/categories/picker_contents.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210580220533ec810bda1c1-49197447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_tree' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533ec810cf8780_64244005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ec810cf8780_64244005')) {function content_533ec810cf8780_64244005($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_items_added','no_categories_available','manage_categories','choose','add_categories_and_close','add_categories'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                categories[id] = $('#category_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                '{category_id}': '%id',
                '{category}': '%item'
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

<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_form">

<div class="items-container multi-level">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'checkbox_name'=>(($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "categories_ids" : $tmp),'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'display'=>$_REQUEST['display']), 0);?>
    
    <?php } else { ?>
        <p class="no-items center">
            <?php echo $_smarty_tpl->__("no_categories_available");?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_categories");?>
.</a>
            <?php }?>
        </p>
    <?php }?>
</div>

<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_categories_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_categories"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
