'use strict';

(function($) {
    $(document).ready(
        function() {

// ********* ПЛАВНАЯ НАВИГАЦИЯ
            $('.page__nav a').on('click', function (event) {
                event.preventDefault();
                let id = $(this).attr('href');
                commonMethods.scrollToBottom($(id), 50);
            });
        });
})
(jQuery);