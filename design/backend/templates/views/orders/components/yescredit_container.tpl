{* rus_build_pack dbazhenov *}
{script src="js/lib/jquery/jquery.min.js"}
{script src="js/lib/jqueryui/jquery-ui.custom.min.js"}
<script type="text/javascript">
var page = '{$page_url}';
var title = '{__("yc_dialog_title")}';
{literal}
function fn_yescredit_dialog () {
    var $dialog = $('<div title="'+ title +'" id="Divbody"></div>')
    .html('<iframe style="border: 0px; " src="' + page + '" width="100%" height="100%"></iframe>')
    .dialog({
        autoOpen: false,
        modal: true,
        height: 800,
        width: 500,
    });
    $dialog.dialog('open');
}
{/literal}

fn_yescredit_dialog();
</script>

<div class="center">
	<span class="button-big button-wrap-left">
		<span class="button-big button-wrap-right">
			<a href="#" onclick="javascript:fn_yescredit_dialog();">{__("yc_place_credit")}</a>
		</span>
	</span>
	<span class="button-big button-wrap-left">
		<span class="button-big button-wrap-right">
			<a href="{$cancel_url}">{__("yc_refuse")}</a>
		</span>
	</span>
</div>

