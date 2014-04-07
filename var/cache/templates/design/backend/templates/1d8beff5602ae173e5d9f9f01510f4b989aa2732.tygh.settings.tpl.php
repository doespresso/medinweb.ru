<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:47:37
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/settings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842182972533e9bd9715ad1-81244805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8beff5602ae173e5d9f9f01510f4b989aa2732' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/rus_build_pack/settings/settings.tpl',
      1 => 1396612049,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1842182972533e9bd9715ad1-81244805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'magic_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9bd97a9302_75986500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9bd97a9302_75986500')) {function content_533e9bd97a9302_75986500($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('rub_info_title','rub_info_symbol_update_button','rub_info_currency_sync_button'));
?>

<fieldset>
    
<?php if (!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['license_key']) {?>

        <script type="text/javascript">
            Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                    Tygh.$('#rus_activate').trigger('click');

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
        </script>

        <p><?php echo $_smarty_tpl->__("rus_connect.activate_text");?>
</p>

        <a id="rus_activate" class="cm-dialog-opener cm-ajax btn btn-primary" data-ca-target-id="rus_activate_form" title="<?php echo $_smarty_tpl->__("rus_connect.activate_title");?>
" href="<?php echo htmlspecialchars(fn_url("rus_upgrade.activate"), ENT_QUOTES, 'UTF-8');?>
">Выполнить активацию</a>

<?php } else { ?>

    <?php if (!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['check_install']||!$_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['cron_key']) {?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rus_build_pack.install.function_title")), 0);?>

            <?php echo $_smarty_tpl->__("rus_build_pack.install.function_text");?>


            <div class="control-group">
                    <div class="controls">
                        <label for="currencies" class="checkbox">
                            <input type="hidden" name="rus_function[currencies]" value="N" />
                            <input type="checkbox" id="currencies" name="rus_function[currencies]" value="Y" checked="checked"/><?php echo $_smarty_tpl->__("rus_build_pack.install.currencies");?>
<br />
                            <span class="muted annotate"><?php echo $_smarty_tpl->__("rus_build_pack.install.currencies_tooltip");?>
</span>
                        </label>
                    </div>
             </div>
             <div class="control-group">
                    <div class="controls">
                        <label for="payments" class="checkbox">
                            <input type="hidden" name="rus_function[payments]" value="N" />
                            <input type="checkbox" id="payments" name="rus_function[payments]" value="Y" checked="checked" /><?php echo $_smarty_tpl->__("rus_build_pack.install.payments");?>
<br />
                            <span class="muted annotate"><?php echo $_smarty_tpl->__("rus_build_pack.install.payments_tooltip");?>
</span>
                        </label>
                    </div>
             </div>
             <div class="control-group">
                <div class="controls">
                    <label for="shippings" class="checkbox">
                        <input type="hidden" name="rus_function[shippings]" value="N" />
                        <input type="checkbox" id="shippings" name="rus_function[shippings]" value="Y" checked="checked"/><?php echo $_smarty_tpl->__("rus_build_pack.install.shippings");?>
<br />
                        <span class="muted annotate"><?php echo $_smarty_tpl->__("rus_build_pack.install.shippings_tooltip");?>
</span>
                    </label>
                </div>     
            </div>

            <div class="buttons-container">
                <input type="hidden" name="result_ids" value="activate_install"/> 
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_meta'=>"btn-primary cm-skip-avail-switch",'but_name'=>"dispatch[rus_install.function]",'but_text'=>__("rus_build_pack.buttons.function_button")), 0);?>

            </div>

    <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["magic_key"] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['addons']->value['rus_build_pack']['cron_key']), null, 0);?>
            <input type="hidden" name="magic_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['magic_key']->value, ENT_QUOTES, 'UTF-8');?>
"/>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("rub_info_title"),'target'=>"#collapsable_currency"), 0);?>

            <div id="collapsable_currency" class="in collapse">

                <div class="control-group">
                    <label class="control-label" for="symbol_update"><?php echo $_smarty_tpl->__('rub_info_symbol_update');?>
:</label>
                    <div class="controls" id="symbol_update">
                        <br />
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_name'=>"dispatch[currencies_sync.symbol_update]",'but_text'=>__("rub_info_symbol_update_button")), 0);?>

                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="symbol_update"><?php echo $_smarty_tpl->__('rub_info_currency_sync');?>
:</label>
                    <div class="controls" id="symbol_update">
                        <p><?php echo $_smarty_tpl->__('currencies_sync_info');?>
</p>
                        <br />
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_name'=>"dispatch[currencies_sync.sync]",'but_text'=>__("rub_info_currency_sync_button")), 0);?>


                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="symbol_update"><?php echo $_smarty_tpl->__('rub_info_currency_sync_auto');?>
:</label>
                    <div class="controls" id="symbol_update">
                        <?php echo $_smarty_tpl->__('auto_info');?>

                        <br />
                        <?php echo htmlspecialchars(fn_url("currencies_sync.sync?magic_key=".((string)$_smarty_tpl->tpl_vars['magic_key']->value)), ENT_QUOTES, 'UTF-8');?>

                        <br />
                        <?php echo $_smarty_tpl->__('auto_instruction_data');?>

                        <br />
                        <?php echo $_smarty_tpl->__('auto_instruction_data_end');?>

                    </div>
                </div>

            </div>   
    <?php }?>
<?php }?>
</fieldset>

<?php }} ?>
