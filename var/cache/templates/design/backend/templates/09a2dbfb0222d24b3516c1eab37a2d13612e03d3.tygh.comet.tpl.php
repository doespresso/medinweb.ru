<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 15:42:40
         compiled from "/var/www/medinweb.ru/public/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1167210588533e9ab056ee09-70032727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09a2dbfb0222d24b3516c1eab37a2d13612e03d3' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/backend/templates/common/comet.tpl',
      1 => 1396609142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1167210588533e9ab056ee09-70032727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e9ab0574f95_99266690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9ab0574f95_99266690')) {function content_533e9ab0574f95_99266690($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
