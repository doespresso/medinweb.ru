{* rus_build_mailru dbazhenov *}
{include file="common/subheader.tpl" title=__("mailru") target="#tovary_mailru_addon"}
<div id="tovary_mailru_addon" class="in collapse">
    <div class="control-group">
        <label for="mailru_product_description_brand" class="control-label">{__("mailru_brand")}:</label>
        <div class="controls"><input type="text" name="product_data[mailru_brand]" id="mailru_product_description_brand" size="55" value="{$product_data.mailru_brand}" class="input-text-large" />
        </div>
    </div>
    
    <div class="control-group">
        <label for="mailru_product_description_mcp" class="control-label">{__("mailru_mcp")}:</label>
        <div class="controls">
            <input type="text" name="product_data[mailru_mcp]" id="mailru_product_description_mcp" size="10" value="{$product_data.mailru_mcp}" class="input-small" />
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label for="product_description_mailru_export" class="control-label">{__("mailru_export")}:</label>
        <div class="controls">
            <select name="product_data[mailru_export]" id="product_description_mailru_export">
                <option value="Y" {if $product_data.mailru_export == "Y"}selected="selected"{/if}>{__("mailru_true")}</option>
                <option value="N" {if $product_data.mailru_export == "N"}selected="selected"{/if}>{__("mailru_false")}</option>
            </select>
        </div>
    </div>
</div>
