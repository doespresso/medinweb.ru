(function(_, $) {
    $(document).ready(function(){

        $(_.doc).on('click', '.cm-unisender-subscribe', function(e) {
            var elms = $(this).parents('.unisender-container').find('.cm-unisender-subscribe');
            var params = '';
            var array_lists = [];

            if (elms.length > 0) {
                elms.each(function(){
                    if ($(this).prop('name').length > 0) {
                        if ($(this).prop('checked')) {
                            array_lists.push($(this).prop('name') + '=' + $(this).val());
                        }
                    }
                });

                params = array_lists.join('&');
            }

            if (!params) {
                params = 'unisender_lists=';
            }

            $.ceAjax('request', fn_url('checkout.subscribe_unisender_customer?' + params), {method: 'post', result_ids: 'unisender*'});
        });
    });
}(Tygh, Tygh.$));
