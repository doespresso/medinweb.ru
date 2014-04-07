{* rus_build_pack dbazhenov *}

<div class="control-group">
    <label class="control-label" for="shop_id">{__("avangard_shop_id")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][shop_id]" id="shop_id" value="{$processor_params.shop_id}"  size="60">
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="password">{__("avangard_password")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="password" value="{$processor_params.password}"  size="60">
    </div>
</div>
