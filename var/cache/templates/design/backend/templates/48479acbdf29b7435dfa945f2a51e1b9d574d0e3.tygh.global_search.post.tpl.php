<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 17:18:46
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/hooks/index/global_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:361685426533e9ab0414db7-68949379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48479acbdf29b7435dfa945f2a51e1b9d574d0e3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/hooks/index/global_search.post.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '361685426533e9ab0414db7-68949379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9ab0430dd7_59663339',
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9ab0430dd7_59663339')) {function content_533e9ab0430dd7_59663339($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']!="rus_install"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']!="activate"&&$_smarty_tpl->tpl_vars['runtime']->value['controller']!="index") {?>

	<?php if (!fn_russian_pack_available()) {?>
		<script type="text/javascript">
	        Tygh.$(document).ready(function(){
	            Tygh.$('#rus_activate').trigger('click');
	        });
	    </script>

        <a id="rus_activate" class="hidden cm-dialog-opener cm-ajax btn btn-primary" data-ca-target-id="rus_activate_form" title="<?php echo $_smarty_tpl->__("rus_connect.activate_title");?>
" href="<?php echo htmlspecialchars(fn_url("rus_upgrade.activate"), ENT_QUOTES, 'UTF-8');?>
"></a>
	<?php }?>

<?php }?><?php }} ?>
