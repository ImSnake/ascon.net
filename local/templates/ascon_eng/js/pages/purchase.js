'use strict';

(function($) {
    $(document).ready(
        function() {

// ********* С Т Р А Н И Ц А  P U R C H A S E

            $.each($('#form-partner .select-cover select'), function () {
                let option = ($(this).parent().attr('data-attr'));
                $(this).prepend('<option value="" disabled selected>BY ' + option + '</option>')
            });

            $('#form-partner select').attr('multiple', false).attr('size', 1).parent().parent().css('display', 'block');


            $('.content__block div:first-child').on('click', function () {

                let el = $(this);
                let name = el.attr('class');

                $.each(el.parent().parent().find('.content__block div:first-child'), function (){
                    let i = $(this).attr('class');
                    if (i.includes('-hover') && i !== name) {
                        $(this).removeClass(i).addClass(i.slice(0, -6));
                        $(this).siblings('.partner__text').addClass('hide-element');
                    }
                });

                (name.includes('-hover'))
                    ? el.removeClass(name).addClass(name.slice(0, -6)).siblings('.partner__text').addClass('hide-element')
                    : el.removeClass(name).addClass(name + '-hover').siblings('.partner__text').removeClass('hide-element');
            });

        });
})
(jQuery);