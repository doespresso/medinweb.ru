{** block-description:carousel **}

{if $items}
    <div id="banner_slider_{$block.snapping_id}" class="swiper-container">
    <div class="swiper-wrapper">
        {foreach from=$items item="banner" key="key"}
            <div class="swiper-slide" style="width:100%; height:600px; background-image:url({$banner.main_pair.icon.image_path});">

              {*{if $banner.type == "G" && $banner.main_pair.image_id}*}
                {*{var_dump($banner.main_pair.icon.alt)}*}
                    {*{if $banner.url != ""}<a class="banner-link" href="{$banner.url|fn_url}" {if $banner.target == "B"}target="_blank"{/if}>{/if}*}
                        {*{include file="common/image.tpl" images=$banner.main_pair}*}
                    {*{if $banner.url != ""}</a>{/if}*}

                {*{else}*}
                    {*<div class="wysiwyg-content">*}
                        {*{$banner.description nofilter}*}
                    {*</div>*}
                  <div class="container-fluid slide-content">
                    <div class="row-fluid">
                      <div class="span15">
                        {*<div class="vmp"><div class="vmc">*}
                        <div class="title">{$banner.banner}</div>
                        {if $banner.main_pair.icon.alt != ""}<p class="desc">{$banner.main_pair.icon.alt nofilter}</p>{/if}
                      {*</div></div>*}
                  </div>
                    </div>
                  </div>
                {*{/if}*}
            </div>
        {/foreach}
    </div>
      <div id="presentation-slider-pagination" class="swiper-pagination hidden"></div>
    </div>
{/if}

<script type="text/javascript">
//<![CDATA[
//(function(_, $) {
//    $.ceEvent('on', 'ce.commoninit', function(context) {
$(document).ready(function ($) {
          console.log('ready swiper 4');
          var super_slider = new Swiper('#banner_slider_{$block.snapping_id}', {
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

        {*var slider = context.find('#banner_slider_{$block.snapping_id}');*}
        {*if (slider.length) {*}
            {*slider.owlCarousel({*}
                {*items: 1,*}
                {*singleItem : true,*}
                {*slideSpeed: {$block.properties.speed|default:400},*}
                {*autoPlay: '{$block.properties.delay * 1000|default:false}',*}
                {*stopOnHover: true,*}
                {*{if $block.properties.navigation == "N"}*}
                    {*pagination: false*}
                {*{/if}*}
                {*{if $block.properties.navigation == "D"}*}
                    {*pagination: true*}
                {*{/if}*}
                {*{if $block.properties.navigation == "P"}*}
                    {*pagination: true,*}
                    {*paginationNumbers: true*}
                {*{/if}*}
                {*{if $block.properties.navigation == "A"}*}
                    {*pagination: false,*}
                    {*navigation: true,*}
                    {*navigationText: ['{__("prev_page")}', '{__("next")}']*}
                {*{/if}*}
            {*});*}
        {*}*}


//    });
//}(Tygh, Tygh.$));
//]]>
</script>