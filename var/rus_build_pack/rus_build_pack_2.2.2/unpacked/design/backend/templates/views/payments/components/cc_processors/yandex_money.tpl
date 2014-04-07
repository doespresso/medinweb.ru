{assign var="avisio_url" value="payment_notification.payment_aviso?payment=yandex_money"|fn_url:'C':'http'}
{assign var="check_url" value="payment_notification.check_order?payment=yandex_money"|fn_url:'C':'http'}
<p>{__("text_yandex_money_urls", ["[avisio_url]" => $avisio_url, "[check_url]" => $check_url])}</p>

<div class="control-group">
    <label class="control-label" for="mode">{__("test_live_mode")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" {if $processor_params.mode == "test"}selected="selected"{/if}>{__("test")}</option>
            <option value="live" {if $processor_params.mode == "live"}selected="selected"{/if}>{__("live")}</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="shop_id">{__("shop_id")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][shop_id]" id="shop_id" value="{$processor_params.shop_id}" class="input-text-large"  size="60" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="scid">{__("scid")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][scid]" id="scid" value="{$processor_params.scid}" class="input-text-large"  size="60" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="md5_shoppassword">{__("md5_shoppassword")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][md5_shoppassword]" id="md5_shoppassword" value="{$processor_params.md5_shoppassword}" class="input-text-large"  size="60" />
    </div>
</div>

{include file="common/subheader.tpl" title=__("yandex_payment_types") target="#yandex_payment_types"}
<div id="yandex_money_payment_types" class="in collapse">

    <fieldset>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_yandex">{__("yandex_payment_yandex")}:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][pc]" id="yandex_money_payment_yandex" value="PC"{if $processor_params.payments && $processor_params.payments.pc} checked="checked"{/if}></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_card">{__("yandex_payment_card")}:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][ac]" id="yandex_money_payment_card" value="AC"{if $processor_params.payments && $processor_params.payments.ac} checked="checked"{/if}></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_terminal">{__("yandex_payment_terminal")}:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][gp]" id="yandex_money_payment_terminal" value="GP"{if $processor_params.payments && $processor_params.payments.gp} checked="checked"{/if}></div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_phone">{__("yandex_payment_phone")}:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][mc]" id="yandex_money_payment_phone" value="MC"{if $processor_params.payments && $processor_params.payments.mc} checked="checked"{/if}></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="yandex_money_payment_webmoney">{__("yandex_payment_webmoney")}:</label>
        <div class="controls"><input type="checkbox" name="payment_data[processor_params][payments][nv]" id="yandex_money_payment_webmoney" value="NV"{if $processor_params.payments && $processor_params.payments.nv} checked="checked"{/if}></div>
    </div>
    
    </fieldset>

</div>