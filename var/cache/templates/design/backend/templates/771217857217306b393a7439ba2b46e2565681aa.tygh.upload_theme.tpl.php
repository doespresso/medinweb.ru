<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 16:35:26
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/views/themes/components/upload_theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59466578653429b8ed1ffb1-60485957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771217857217306b393a7439ba2b46e2565681aa' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/views/themes/components/upload_theme.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59466578653429b8ed1ffb1-60485957',
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
  'unifunc' => 'content_53429b8ed3c714_90317243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53429b8ed3c714_90317243')) {function content_53429b8ed3c714_90317243($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install_theme_text','upload'));
?>
<div class="install-addon" id="theme_upload_container">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="theme_upload_container" />
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_theme_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"theme_pack[0]"), 0);?>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[themes.upload]",'cancel_action'=>"close",'but_text'=>__("upload")), 0);?>


        </div>
    </form>
<!--theme_upload_container--></div>
<?php }} ?>
