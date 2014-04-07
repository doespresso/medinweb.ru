<?php /* Smarty version Smarty-3.1.15, created on 2014-04-06 18:55:05
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_yandex_metrika/hooks/index/footer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108037035053416ac9ca2594-14274349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e7e05bfdc29d656ea7a123cd7ffde5ec415ac2e' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/rus_yandex_metrika/hooks/index/footer.post.tpl',
      1 => 1396612054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108037035053416ac9ca2594-14274349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53416ac9d8fbe2_08111781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416ac9d8fbe2_08111781')) {function content_53416ac9d8fbe2_08111781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<script type="text/javascript">(function (d, w, c) {(w[c] = w[c] || []).push(function() {try {w.yaCounter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
 = new Ya.Metrika({id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'])===null||$tmp==='' ? "''" : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['clickmap']=='Y') {?>, clickmap: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['external_links']=='Y') {?>, trackLinks: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['denial']=='Y') {?>, accurateTrackBounce: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['track_hash']=='Y') {?>, trackHash: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['visor']=='Y') {?>, webvisor: true<?php }?>});} catch(e) { };});var n = d.getElementsByTagName("script")[0],s = d.createElement("script"),f = function () { n.parentNode.insertBefore(s, n); };s.type = "text/javascript";s.async = true;s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";if (w.opera == "[object Opera]") {d.addEventListener("DOMContentLoaded", f);} else {f();}})(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_yandex_metrika/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_yandex_metrika/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<script type="text/javascript">(function (d, w, c) {(w[c] = w[c] || []).push(function() {try {w.yaCounter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
 = new Ya.Metrika({id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'])===null||$tmp==='' ? "''" : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['clickmap']=='Y') {?>, clickmap: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['external_links']=='Y') {?>, trackLinks: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['denial']=='Y') {?>, accurateTrackBounce: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['track_hash']=='Y') {?>, trackHash: true<?php }?><?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['visor']=='Y') {?>, webvisor: true<?php }?>});} catch(e) { };});var n = d.getElementsByTagName("script")[0],s = d.createElement("script"),f = function () { n.parentNode.insertBefore(s, n); };s.type = "text/javascript";s.async = true;s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";if (w.opera == "[object Opera]") {d.addEventListener("DOMContentLoaded", f);} else {f();}})(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'], ENT_QUOTES, 'UTF-8');?>
" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php }?><?php }} ?>
