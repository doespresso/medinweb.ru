<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 21:32:30
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/template_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1543946852534432ae066905-99897035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7443a388e0162dea27c84555e9e88596f5b0da5' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/template_editor.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1543946852534432ae066905-99897035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534432ae0fa589_57175825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534432ae0fa589_57175825')) {function content_534432ae0fa589_57175825($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('template_editor','templates_tree','save','restore_from_repository','text_page_changed','text_restore_question','text_template_changed','template_editor','templates_tree','save','restore_from_repository','text_page_changed','text_restore_question','text_template_changed'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="template_list_menu"><div></div><ul class="float-left"><li></li></ul></div>

<div id="template_editor_content" title="<?php echo $_smarty_tpl->__("template_editor");?>
" class="hidden">

    <table class="editor-table table-width">
        <tr class="max-height valign-top">
            <td class="templates-tree max-height">
                <h4><?php echo $_smarty_tpl->__("templates_tree");?>
</h4>
                <div>
                    <ul id="template_list" class="template-list">
                        <li></li>
                    </ul>
                </div>
            </td>
            <td>
                <div id="template_text"></div>
            </td>
        </tr>
    </table>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>true,'but_close_text'=>__("save"),'but_close_onclick'=>"fn_save_template();",'but_onclick'=>"fn_restore_template();",'but_text'=>__("restore_from_repository")), 0);?>

    </div>

</div>

<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/design_mode.js"),$_smarty_tpl);?>


<script type="text/javascript">
//<![CDATA[
var current_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_page_changed', '<?php echo strtr($_smarty_tpl->__("text_page_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_restore_question', '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_template_changed', '<?php echo strtr($_smarty_tpl->__("text_template_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
//]]>
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/template_editor.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/template_editor.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div id="template_list_menu"><div></div><ul class="float-left"><li></li></ul></div>

<div id="template_editor_content" title="<?php echo $_smarty_tpl->__("template_editor");?>
" class="hidden">

    <table class="editor-table table-width">
        <tr class="max-height valign-top">
            <td class="templates-tree max-height">
                <h4><?php echo $_smarty_tpl->__("templates_tree");?>
</h4>
                <div>
                    <ul id="template_list" class="template-list">
                        <li></li>
                    </ul>
                </div>
            </td>
            <td>
                <div id="template_text"></div>
            </td>
        </tr>
    </table>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>true,'but_close_text'=>__("save"),'but_close_onclick'=>"fn_save_template();",'but_onclick'=>"fn_restore_template();",'but_text'=>__("restore_from_repository")), 0);?>

    </div>

</div>

<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/design_mode.js"),$_smarty_tpl);?>


<script type="text/javascript">
//<![CDATA[
var current_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_page_changed', '<?php echo strtr($_smarty_tpl->__("text_page_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_restore_question', '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_template_changed', '<?php echo strtr($_smarty_tpl->__("text_template_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
//]]>
</script>
<?php }?><?php }} ?>
