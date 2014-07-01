{if $user_data.user_type == "C"}
<div id="content_message" class="cm-hide-save-button">
	<h4 class="subheader ">{__("add_message_to_unisender")}<h4>
	<div class="control-group">
		<label class="control-label" for="elm_profile_phone">{__("phone")}: </label>
		<input id="elm_profile_phone" class="cm-phone" type="text" name="text_phone" value="{$user_data['phone']}">
	</div>
	<div class="control-group">
		<label class="control-label" for="elm_profile_sms">{__("sms_message")}: </label>
		<textarea id="text_sms" rows="3" cols="32" name="text_sms"></textarea>
	</div>
	<div class="control-group">
		<input id="button_send_sms" class="btn cm-ajax" type="submit" name="dispatch[unisender.send_sms]" value="Отправить">
	</div>
</div>
{/if}
