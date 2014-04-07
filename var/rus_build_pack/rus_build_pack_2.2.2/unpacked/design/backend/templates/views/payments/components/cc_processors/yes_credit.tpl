{* rus_build_pack dbazhenov *}
<p>{__("text_yes_credit_notice")}</p>
<hr>

<div class="control-group">
    <label class="control-label" for="yc_merchant_id">{__("merchant_id")}:</label>
    <div class="controls">
    	<input type="text" name="payment_data[processor_params][merchant_id]" id="yc_merchant_id" value="{$processor_params.merchant_id}"  size="60">
    </div>
</div>
