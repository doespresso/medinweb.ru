<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:31:53
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/settings/upgrade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766120888534005c977f516-70685053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d0f20db9321100e080b634eae67a019708f727' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/settings/upgrade.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1766120888534005c977f516-70685053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_on_saas' => 0,
    'next_version_info' => 0,
    'twg_is_connected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534005c97b4ac0_56502535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534005c97b4ac0_56502535')) {function content_534005c97b4ac0_56502535($_smarty_tpl) {?><div id="addon_upgrade">
<?php if (!$_smarty_tpl->tpl_vars['is_on_saas']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/twigmo/settings/components/contact_twigmo_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__('upgrade')), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['next_version_info']->value['next_version']&&$_smarty_tpl->tpl_vars['next_version_info']->value['next_version']!=@constant('TWIGMO_VERSION')) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['next_version_info']->value['description'];?>
</p>

        <input type="submit" name="dispatch[upgrade_center.upgrade_twigmo]" value="<?php echo $_smarty_tpl->__('upgrade');?>
" class="cm-skip-validation btn btn-primary">

        <script type="text/javascript">
        //<![CDATA[
        
        $(document).ready(function () {
            var upgradeIndicator = ' *';
            var $link = $('#twigmo_addon a');
            var oldHtml = $link.html().replace(upgradeIndicator, '');
            $link.html(oldHtml + upgradeIndicator);
        });
        
        //]]>
        </script>
    <?php } else { ?>
        <p><?php echo $_smarty_tpl->__('text_no_upgrades_available');?>
</p>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[twigmo_updates.check]",'but_text'=>__('twgadmin_check_for_updates'),'but_role'=>"submit",'but_meta'=>"cm-ajax cm-skip-avail-switch"), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['twg_is_connected']->value) {?>
                <input type="hidden" name="result_ids" value="addon_upgrade" />
            <?php }?>
        </div>
    <?php }?>
<?php } else { ?>
    <script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {
        $('#twigmo_addon').hide();
    });
    //]]>
    </script>
<?php }?>
<!--addon_upgrade--></div>
<?php }} ?>
