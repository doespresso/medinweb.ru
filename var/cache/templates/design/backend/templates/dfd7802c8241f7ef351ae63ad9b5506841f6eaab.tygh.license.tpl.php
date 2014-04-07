<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 17:31:53
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/settings/components/connect/license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200538963534005c95fef88-71920778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd7802c8241f7ef351ae63ad9b5506841f6eaab' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/addons/twigmo/settings/components/connect/license.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200538963534005c95fef88-71920778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534005c96181e9_81574020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534005c96181e9_81574020')) {function content_534005c96181e9_81574020($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('twgadmin_terms','twgadmin_accept_terms_n_conditions','checkout_terms_n_conditions_alert'));
?>
<div class="control-group">
    <label><?php echo $_smarty_tpl->__("twgadmin_terms");?>
:</label>
    <div class="controls">
        <input type="checkbox" id="id_accept_terms" name="accept_terms" value="Y" class="cm-agreement checkbox" />
        <label for="id_accept_terms" class="cm-check-agreement"><?php echo $_smarty_tpl->__("twgadmin_accept_terms_n_conditions");?>
</label>
    </div>
</div>


<script>
//<![CDATA[
Tygh.lang.checkout_terms_n_conditions_alert = '<?php echo strtr($_smarty_tpl->__("checkout_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

Tygh.$.ceFormValidator('registerValidator', {
    class_name: 'cm-check-agreement',
    message: Tygh.lang.checkout_terms_n_conditions_alert,
    func: function(id) {
        return $('#' + id).prop('checked');
    }
});

//]]>
</script>
<?php }} ?>
