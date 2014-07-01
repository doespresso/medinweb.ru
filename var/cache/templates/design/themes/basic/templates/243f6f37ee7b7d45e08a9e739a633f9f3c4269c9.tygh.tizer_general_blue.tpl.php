<?php /* Smarty version Smarty-3.1.15, created on 2014-04-08 18:58:48
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/wrappers/tizer_general_blue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24650039153440be2e883f1-39236869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243f6f37ee7b7d45e08a9e739a633f9f3c4269c9' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/blocks/wrappers/tizer_general_blue.tpl',
      1 => 1396969122,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24650039153440be2e883f1-39236869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53440be3013a40_05734377',
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'anchor' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53440be3013a40_05734377')) {function content_53440be3013a40_05734377($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
    <?php }?>
    <div class="tizer blue">
        <?php if ($_smarty_tpl->tpl_vars['title']->value||trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <figure class="tizer-title">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_general_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </figure>
        <?php }?>
        <figure class="tizer-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</figure>
    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/tizer_general_blue.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/tizer_general_blue.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
    <?php }?>
    <div class="tizer blue">
        <?php if ($_smarty_tpl->tpl_vars['title']->value||trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <figure class="tizer-title">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_general_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_general_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </figure>
        <?php }?>
        <figure class="tizer-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</figure>
    </div>
<?php }?><?php }?><?php }} ?>
