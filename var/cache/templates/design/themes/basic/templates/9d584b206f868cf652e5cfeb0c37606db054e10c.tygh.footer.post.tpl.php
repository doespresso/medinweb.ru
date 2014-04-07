<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:05
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/google_analytics/hooks/index/footer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62409638253416ac9c30ae6-37681047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d584b206f868cf652e5cfeb0c37606db054e10c' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/google_analytics/hooks/index/footer.post.tpl',
      1 => 1396611753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '62409638253416ac9c30ae6-37681047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53416ac9c9d147_64780279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac9c9d147_64780279')) {function content_53416ac9c9d147_64780279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><script type="text/javascript">
//<![CDATA[
(function(i,s,o,g,r,a,m)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', 'auto');
ga('send', 'pageview');
//]]>
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/google_analytics/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><script type="text/javascript">
//<![CDATA[
(function(i,s,o,g,r,a,m)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', 'auto');
ga('send', 'pageview');
//]]>
</script>
<?php }?><?php }} ?>
