<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 00:37:31
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/views/discussion_manager/components/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341640386533f180be62871-90921057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b5d69044839374441bc26a3d631182ca7e9ee6' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/discussion/views/discussion_manager/components/post.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1341640386533f180be62871-90921057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'post' => 0,
    'type' => 0,
    'current_redirect_url' => 0,
    'settings' => 0,
    'allow_save' => 0,
    'show_object_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f180bf309a0_20565367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f180bf309a0_20565367')) {function content_533f180bf309a0_20565367($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('approved','disapprove','not_approved','approve','approved','not_approved','delete','ip_address'));
?>
<?php $_smarty_tpl->tpl_vars["current_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<div class="summary">
    <input type="text" name="posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="40" class="input-hidden">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:update_post")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:update_post"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value=="C"||$_smarty_tpl->tpl_vars['type']->value=="B") {?>
            <textarea name="posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][message]" cols="80" rows="5" class="input-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:update_post"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<div class="tools">
    <div class="pull-left">
        <?php if (fn_check_view_permissions("discussion.m_delete")) {?>
            <input type="checkbox" name="delete_posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
]" id="delete_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
"  class="pull-left cm-item" value="Y">
        <?php }?>
        <div class="hidden-tools pull-left cm-statuses">
            <?php if (fn_check_view_permissions("discussion.update")) {?>
                <span class="cm-status-a <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="D") {?>hidden<?php }?>">
                    <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <a class="cm-status-switch icon-thumbs-down cm-tooltip" title="<?php echo $_smarty_tpl->__("disapprove");?>
" data-ca-status="D" data-ca-post-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
"></a>
                </span>
                <span class="cm-status-d <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="A") {?>hidden<?php }?>">
                    <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <a class="cm-status-switch icon-thumbs-up cm-tooltip" title="<?php echo $_smarty_tpl->__("approve");?>
" data-ca-status="A" data-ca-post-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
"></a>
                </span>
            <?php } else { ?>
                <span class="cm-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['post']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="A") {?>
                        <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <?php } else { ?>
                        <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <?php }?>
                </span>
            <?php }?>
            <?php if (fn_check_view_permissions("discussion.delete")) {?>
                <a class="icon-trash cm-tooltip cm-confirm" href="<?php echo htmlspecialchars(fn_url("discussion.delete?post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
"></a>
            <?php }?>
        </div>
    </div>


    <div class="pull-right">
        <span class="muted"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
 / <?php echo $_smarty_tpl->__("ip_address");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
</span>

        <?php if (($_smarty_tpl->tpl_vars['type']->value=="R"||$_smarty_tpl->tpl_vars['type']->value=="B")&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>"rating_".((string)$_smarty_tpl->tpl_vars['post']->value['post_id']),'rate_value'=>$_smarty_tpl->tpl_vars['post']->value['rating_value'],'rate_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][rating_value]"), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>$_smarty_tpl->tpl_vars['post']->value['rating_value']), 0);?>

            <?php }?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['show_object_link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['post']->value['object_data']['url']), ENT_QUOTES, 'UTF-8');?>
" class="post-object" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
</a>
    <?php }?>
</div>
<?php }} ?>
