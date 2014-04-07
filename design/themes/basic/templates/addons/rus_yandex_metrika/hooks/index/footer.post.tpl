{* rus_build_yandex_metrika dbazhenov *}
{strip}
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter{$addons.rus_yandex_metrika.counter_number} = new Ya.Metrika({
                id: {$addons.rus_yandex_metrika.counter_number|default:"''" nofilter}
                {if $addons.rus_yandex_metrika.clickmap == 'Y'}, clickmap: true{/if}
                {if $addons.rus_yandex_metrika.external_links == 'Y'}, trackLinks: true{/if}
                {if $addons.rus_yandex_metrika.denial == 'Y'}, accurateTrackBounce: true{/if}
                {if $addons.rus_yandex_metrika.track_hash == 'Y'}, trackHash: true{/if}
                {if $addons.rus_yandex_metrika.visor == 'Y'}, webvisor: true{/if}
            });
        } catch(e) { };
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { 
        f(); 
    }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/{$addons.rus_yandex_metrika.counter_number}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
{/strip}
