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



        });
})
(jQuery);