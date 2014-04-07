{* rus_build_yandex_market dbazhenov *}
{include file="common/subheader.tpl" title=__("yml") target="#yandex_market_addon"}
<div id="yandex_market_addon" class="in collapse">
    <div class="control-group">
        <label class="control-label" for="yml_export">{__("yml_disable_cat")}:</label>
        <div class="controls">
        <input type="hidden" value="N" name="category_data[yml_disable_cat]"/>
        <input type="checkbox" class="cm-toggle-checkbox" value="Y" name="category_data[yml_disable_cat]" id="yml_export" {if $category_data.yml_disable_cat == "Y"} checked="checked"{/if} />
        </div>
    </div>
</div>

{if $addons.rus_yandex_market.market_category == "Y"}
    <div class="control-group cm-no-hide-input">
        <label for="product_type_prefix" class="control-label">{__("yml_market_category")}:</label>
        <div class="controls" id="product_market_category">
            <input type="text" name="category_data[yml_market_category]" id="market_category_input" size="200" value="{$category_data.yml_market_category}" class="input-large" /></br>
            {include file="common/popupbox.tpl" id="product_market_category" href="products.market_category" link_text=__("yml_market_category_link") text=__("yml_market_category_list_title") act="link"}
        </div>
    </div>  

    <script type="text/javascript"  class="cm-ajax-force">
    //<![CDATA[

            Tygh.$("#market_category_input").autocomplete({$ldelim}
                source: function( request, response ) {$ldelim}
                    $.ceAjax('request', fn_url('products.market_category_autocomplete?q=' + request.term), {$ldelim} 
                        callback: function(data) {$ldelim}
                            response(data.autocomplete);
                        {$rdelim}
                    {$rdelim});
                {$rdelim}
            {$rdelim});

    //]]>
    </script>
        
{/if}