<?php /* Smarty version Smarty-3.1.15, created on 2014-04-09 14:20:50
         compiled from "/var/www/medinweb.ru/public/design/themes/basic/templates/addons/banners/blocks/carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1770706188534294a8cb3109-84932780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9bcaae4e08593b7f76011e949c832db5cf93cf' => 
    array (
      0 => '/var/www/medinweb.ru/public/design/themes/basic/templates/addons/banners/blocks/carousel.tpl',
      1 => 1397038843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1770706188534294a8cb3109-84932780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534294a8e8a007_70762750',
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'banner' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534294a8e8a007_70762750')) {function content_534294a8e8a007_70762750($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="swiper-container">
    <div class="swiper-wrapper">
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="swiper-slide" style="width:100%; height:600px; background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
);">

              
                
                    
                        
                    

                
                    
                        
                    
                  <div class="container-fluid slide-content">
                    <div class="row-fluid">
                      <div class="span15">
                        
                        <div class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt']!='') {?><p class="desc"><?php echo $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'];?>
</p><?php }?>
                      
                  </div>
                    </div>
                  </div>
                
            </div>
        <?php } ?>
    </div>
      <div id="presentation-slider-pagination" class="swiper-pagination hidden"></div>
    </div>
<?php }?>

<script type="text/javascript">
//<![CDATA[
//(function(_, $) {
//    $.ceEvent('on', 'ce.commoninit', function(context) {
$(document).ready(function ($) {
          console.log('ready swiper 4');
          var super_slider = new Swiper('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
', {
//                        slidesPerView:'auto',
                        watchActiveIndex:true,
//                        centeredSlides:false,
                        resizeReInit:true,
//                        followFinger:false,
//                        longSwipesRatio:0.2,
//                        touchRatio:0.5,
//                        shortSwipes:true,
//                        moveStartThreshold:60,
                        speed:1500,
                        loop:true,
                        mode:'horizontal',
            //            calculateHeight:true,
//                        mousewheelControl:true,
                        keyboardControl:true,
                        paginationClickable:true,
                        pagination:'#presentation-slider-pagination',
                        autoplay:5000,
                        autoplayDisableOnInteraction:true,
          });

});

        
        
            
                
                
                
                
                
                
                    
                
                
                    
                
                
                    
                    
                
                
                    
                    
                    
                
            
        


//    });
//}(Tygh, Tygh.$));
//]]>
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/carousel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/carousel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="swiper-container">
    <div class="swiper-wrapper">
        <?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
            <div class="swiper-slide" style="width:100%; height:600px; background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
);">

              
                
                    
                        
                    

                
                    
                        
                    
                  <div class="container-fluid slide-content">
                    <div class="row-fluid">
                      <div class="span15">
                        
                        <div class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt']!='') {?><p class="desc"><?php echo $_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'];?>
</p><?php }?>
                      
                  </div>
                    </div>
                  </div>
                
            </div>
        <?php } ?>
    </div>
      <div id="presentation-slider-pagination" class="swiper-pagination hidden"></div>
    </div>
<?php }?>

<script type="text/javascript">
//<![CDATA[
//(function(_, $) {
//    $.ceEvent('on', 'ce.commoninit', function(context) {
$(document).ready(function ($) {
          console.log('ready swiper 4');
          var super_slider = new Swiper('#banner_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
', {
//                        slidesPerView:'auto',
                        watchActiveIndex:true,
//                        centeredSlides:false,
                        resizeReInit:true,
//                        followFinger:false,
//                        longSwipesRatio:0.2,
//                        touchRatio:0.5,
//                        shortSwipes:true,
//                        moveStartThreshold:60,
                        speed:1500,
                        loop:true,
                        mode:'horizontal',
            //            calculateHeight:true,
//                        mousewheelControl:true,
                        keyboardControl:true,
                        paginationClickable:true,
                        pagination:'#presentation-slider-pagination',
                        autoplay:5000,
                        autoplayDisableOnInteraction:true,
          });

});

        
        
            
                
                
                
                
                
                
                    
                
                
                    
                
                
                    
                    
                
                
                    
                    
                    
                
            
        


//    });
//}(Tygh, Tygh.$));
//]]>
</script><?php }?><?php }} ?>
