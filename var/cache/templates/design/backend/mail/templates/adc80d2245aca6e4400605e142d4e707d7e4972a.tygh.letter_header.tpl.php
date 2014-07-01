<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 22:43:05
         compiled from "/var/www/medinweb.ru/public/design/backend/mail/templates/common/letter_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97686004153668a39c40b13-09042859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc80d2245aca6e4400605e142d4e707d7e4972a' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/mail/templates/common/letter_header.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97686004153668a39c40b13-09042859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53668a39c9cd48_07138466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53668a39c9cd48_07138466')) {function content_53668a39c9cd48_07138466($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/letter_header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/letter_header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php }?><?php }} ?>
