<?php /* Smarty version Smarty-3.1.15, created on 2014-05-04 18:15:57
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/components/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:482718679533e9afe481823-71296300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '029a82fa95ab06db35cc6612c9c0f38c2ecc2bbc' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/views/rus_upgrade/components/sidebar.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '482718679533e9afe481823-71296300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9afe4c23c0_97884294',
  'variables' => 
  array (
    'config' => 0,
    'addons' => 0,
    'next_version_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9afe4c23c0_97884294')) {function content_533e9afe4c23c0_97884294($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('information'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php if (!$_smarty_tpl->tpl_vars['config']->value['demo_mode']) {?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("rus_connect.access_id");?>
</h6>
            <p class="muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
        <hr>
    <?php }?>
    <div class="sidebar-row">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="install" class="form-horizontal form-edit" enctype="multipart/form-data">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_name'=>"dispatch[rus_upgrade.check_upgrade]",'but_text'=>__("rus_connect.check_upgrade")), 0);?>

        </form>
    </div>
    <hr>
    <?php if ($_smarty_tpl->tpl_vars['next_version_info']->value['notify']) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("information");?>
</h6>
        <p class="muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_version_info']->value['notify'], ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <hr>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }} ?>
