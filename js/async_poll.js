(function ($) {
    Drupal.behaviors.asyncPollLoad = {
        attach: function (context, settings) {
            if($('#ajax-poll-recent-wrapper', context).length > 0){
                var ajax_settings = {
                    url: '/async/poll-recent',
                    base: 'ajax-poll-recent-wrapper',
                    event: 'load'
                };
                Drupal.ajax(ajax_settings).execute();
            }
        }
    };
})(jQuery);