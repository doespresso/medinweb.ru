<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:49:51
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/common/tabsbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368149497533e9c5f01a407-04628642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a209b521039bbf6e892d68b9a173ffa8a657423' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/common/tabsbox.tpl',
      1 => 1396611751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '368149497533e9c5f01a407-04628642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'active_tab' => 0,
    'navigation' => 0,
    'content' => 0,
    'top_order_actions' => 0,
    'track' => 0,
    'tabs_section' => 0,
    'tab' => 0,
    'key' => 0,
    'empty_tab_ids' => 0,
    '_tabs' => 0,
    'onclick' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9c5f178443_09796668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9c5f178443_09796668')) {function content_533e9c5f178443_09796668($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_empty_tabs')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.empty_tabs.php';
if (!is_callable('smarty_function_script')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_REQUEST['selected_section'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>

<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {?><?php echo $_smarty_tpl->tpl_vars['top_order_actions']->value;?>
<?php }?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<div class="tabs cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> clearfix">
    <ul <?php if ($_smarty_tpl->tpl_vars['tabs_section']->value) {?>id="tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
        <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
        <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
            <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
        <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php }?>
    <?php } ?>
    </ul>
</div>

<?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
<div class="cm-tabs-content tabs-content clearfix" id="tabs_content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
<script type="text/javascript">
//<![CDATA[
    var hndl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        'tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'UTF-8');?>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

//]]>
</script>
<?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/tabsbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/tabsbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_REQUEST['selected_section'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {?>

<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {?><?php echo $_smarty_tpl->tpl_vars['top_order_actions']->value;?>
<?php }?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<div class="tabs cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> clearfix">
    <ul <?php if ($_smarty_tpl->tpl_vars['tabs_section']->value) {?>id="tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
        <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
        <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
            <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
        <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php }?>
    <?php } ?>
    </ul>
</div>

<?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
<div class="cm-tabs-content tabs-content clearfix" id="tabs_content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
<script type="text/javascript">
//<![CDATA[
    var hndl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        'tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'UTF-8');?>
': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'UTF-8');?>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

//]]>
</script>
<?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?><?php }?><?php }} ?>
