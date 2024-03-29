{* rus_build_yandex_market dbazhenov *}
{include file="common/subheader.tpl" title=__("yml") target="#yandex_market_addon"}
<div id="yandex_market_addon" class="in collapse">
    <div class="control-group cm-no-hide-input">
        <label for="product_description_brand" class="control-label">{__("yml_brand")}:</label>
        <div class="controls"><input type="text" name="product_data[yml_brand]" id="product_description_brand" size="55" value="{$product_data.yml_brand}" class="input-text-large" />
            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_model" class="control-label">{__("yml_model")}:</label>
        <div class="controls"><input type="text" name="product_data[yml_model]" id="product_description_model" size="55" value="{$product_data.yml_model}" class="input-text-large" />
            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}
        </div>
    </div>

    {if $addons.rus_yandex_market.type_prefix == "Y"}
        <div class="control-group cm-no-hide-input">
            <label for="product_type_prefix" class="control-label">{__("yml_type_prefix")}:</label>
            <div class="controls"><input type="text" name="product_data[yml_type_prefix]" id="product_type_prefix" size="55" value="{$product_data.yml_type_prefix}" class="input-text-large" />
                {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}
            </div>
        </div>  
    {/if}
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_sales_notes" class="control-label">{__("yml_sales_notes")}:</label>
        <div class="controls"><input type="text" name="product_data[yml_sales_notes]" id="product_description_yml_sales_notes" size="50" value="{$product_data.yml_sales_notes}" class="input-text-large" />
            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}</div>
    </div>

    {if $addons.rus_yandex_market.market_category == "Y"}
        <div class="control-group cm-no-hide-input">
            <label for="product_type_prefix" class="control-label">{__("yml_market_category")}:</label>
            <div class="controls" id="product_market_category">
                <input type="text" name="product_data[yml_market_category]" id="market_category_input" size="200" value="{$product_data.yml_market_category}" class="input-large" /></br>
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

    <div class="control-group cm-no-hide-input">
        <label for="product_description_origin_country" class="control-label">{__("yml_country")}:</label>
        <div class="controls"><input type="text" name="product_data[yml_origin_country]" id="product_description_origin_country" size="55" value="{$product_data.yml_origin_country}" class="input-text-large" />
            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}</div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_yml_export_yes" class="control-label">{__("yml_export_yes")}:</label>
        <div class="controls">
            <select name="product_data[yml_export_yes]" id="product_description_yml_export_yes">
                <option value="Y" {if $product_data.yml_export_yes == "Y"}selected="selected"{/if}>{__("yml_true")}</option>
                <option value="N" {if $product_data.yml_export_yes == "N"}selected="selected"{/if}>{__("yml_false")}</option>
            </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_delivery" class="control-label">{__("yml_delivery")}:</label>
        <div class="controls">
            <select name="product_data[yml_delivery]" id="product_description_delivery">
                <option value="Y" {if $product_data.yml_delivery == "Y"}selected="selected"{/if}>{__("yml_true")}</option>
                <option value="N" {if $product_data.yml_delivery == "N"}selected="selected"{/if}>{__("yml_false")}</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_store" class="control-label">{__("yml_store")}:</label>
        <div class="controls">
            <select name="product_data[yml_store]" id="product_description_store">
                <option value="Y" {if $product_data.yml_store == "Y"}selected="selected"{/if}>{__("yml_true")}</option>
                <option value="N" {if $product_data.yml_store == "N"}selected="selected"{/if}>{__("yml_false")}</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_pickup" class="control-label">{__("yml_pickup")}:</label>
        <div class="controls">
            <select name="product_data[yml_pickup]" id="product_description_pickup">
                <option value="Y" {if $product_data.yml_pickup == "Y"}selected="selected"{/if}>{__("yml_true")}</option>
                <option value="N" {if $product_data.yml_pickup == "N"}selected="selected"{/if}>{__("yml_false")}</option>
            </select>
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_bid" class="control-label">{__("yml_bid")}:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_bid]" id="product_description_bid" size="10" value="{$product_data.yml_bid}" class="input-small" />
        </div>
    </div>
    
    <div class="control-group cm-no-hide-input">
        <label for="product_description_cbid" class="control-label">{__("yml_cbid")}:</label>
        <div class="controls">
            <input type="text" name="product_data[yml_cbid]" id="product_description_cbid" size="10" value="{$product_data.yml_cbid}" class="input-small" />
        </div>
    </div>

</div>
