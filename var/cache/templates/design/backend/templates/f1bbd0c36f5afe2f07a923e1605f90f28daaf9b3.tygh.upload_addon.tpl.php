<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:43:27
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/addons/components/upload_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1391067867533e9adfe78290-18808412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1bbd0c36f5afe2f07a923e1605f90f28daaf9b3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/addons/components/upload_addon.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1391067867533e9adfe78290-18808412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9adfe93d26_33523683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9adfe93d26_33523683')) {function content_533e9adfe93d26_33523683($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install_addon_text','upload_install'));
?>
<div id="addon_upload_container" class="install-addon">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="addon_upload_container" />
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_addon_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"addon_pack[0]"), 0);?>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.upload]",'cancel_action'=>"close",'but_text'=>__("upload_install")), 0);?>


        </div>
    </form>
<!--addon_upload_container--></div>
<?php }} ?>
