<?php /* Smarty version Smarty-3.1.15, created on 2014-04-07 22:40:47
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:605410556533e9b3b9d8070-09483622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6014365ab33d49b5288e42ff10d94c4c9b828a76' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/location.tpl',
      1 => 1396896042,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '605410556533e9b3b9d8070-09483622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9b3ba2c0a5_05625718',
  'variables' => 
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9b3ba2c0a5_05625718')) {function content_533e9b3ba2c0a5_05625718($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('choose_your_country'));
?>
<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
    <div class="tygh-top-panel clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

    </div>
<?php }?>

<?php if ($_REQUEST['dispatch']=='index.index') {?>
<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
    <div class="superslide">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

    </div>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
    <div class="tygh-content clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <script type="text/javascript">
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            </script>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }} ?>
