{* rus_build_pack *}
{script src="js/lib/inputmask/jquery.inputmask.min.js"}
{script src="js/addons/rus_build_pack/jquery.inputmask-multi.js"}
{script src="js/addons/rus_build_pack/input_mask.js"}

<div class="qiwi">
    <div class="control-group">
        <label for="qiwi_phone_number" class="control-label cm-required">{__("phone")}</label>
        <div class="controls">
            <input id="qiwi_phone_number" size="35" type="text" name="payment_info[phone]" value="{$cart.user_data.phone|fn_russian_pack_normalize_phone}" class="input-big cm-mask" />
        </div>
    </div>
</div>
