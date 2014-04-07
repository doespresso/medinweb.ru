{* rus_build_pack dbazhenov *}
{script src="js/lib/jquery/jquery.min.js"}
{script src="js/tygh/core.js"}
<script src="http://yes-credit.su/crem/js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<link href="http://yes-credit.su/crem/css/blizter.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var title = '{__("yc_dialog_title")}';
    var data = {};
    args = '?SUMMA=' + 30 + '&MERCHANTID=' + 777777 + '&TOVAR=' + JSON.stringify(data) + '&ORDERID=' + 99;
    var page = 'https://www.yes-credit.su/crem/start.aspx' + encodeURI(args);

    function fn_yescredit_dialog () {
        var dialog = $('<div id="Divbody" style="overflow: hidden; height: 600px;background:#F2F2F2;"></div>')
            .html('<iframe style="border: 0px; " src="' + page + '" width="100%" height="100%"></iframe>')
            .dialog({
                autoOpen: false,
                modal: true,
                height: 640,
                width: 800,
                resizable:false,
                title: title
            });

        dialog.dialog('open');
    }

    Tygh.$(document).ready(function() {
        fn_yescredit_dialog();
    });

</script>

<div class="center">
    <span class="button-big button-wrap-left"><span class="button-big button-wrap-right"><a href="#" onclick="javascript:fn_yescredit_dialog();">{__("yc_place_credit")}</a></span></span>&nbsp;&nbsp;
    <span class="button-big button-wrap-left"><span class="button-big button-wrap-right"><a href="{$cancel_url}">{__("yc_refuse")}</a></span></span>
</div>

