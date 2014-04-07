<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:52:24
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226661746533e9cf84105b4-32941458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee6f0e173de1dab4b3531cfcde83b45fabf21902' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/section.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '226661746533e9cf84105b4-32941458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9cf8430829_50211670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9cf8430829_50211670')) {function content_533e9cf8430829_50211670($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/medinweb.ru/public/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
