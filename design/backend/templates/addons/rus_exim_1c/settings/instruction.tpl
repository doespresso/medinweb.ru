{* rus_build_exim_1c dbazhenov *}

<div id="instruction_div">
{assign var="good" value="{$addons.rus_build_pack.license_key}"|md5}
<script type="text/javascript">

//<![CDATA[
(function(_, $) {
    $(document).ready(function() {
        fn_get_instruction_json();    
    });

    function fn_get_instruction_json() {
        $.ceAjax('request', 'http://updates.simtechdev.com/index.php?dispatch=rus_upgrade.get_instruction', {
            data: {
                addon: '{$smarty.request.addon}',
                addon_version: '{$addon_version}',
                good: '{$good}',
                result_ids: 'instruction_div',
            },
        });
    }
}(Tygh, Tygh.$));
//]]>
</script>

<!--instruction_div--></div>



