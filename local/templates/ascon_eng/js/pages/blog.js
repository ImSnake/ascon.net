'use strict';

(function($) {
    $(document).ready(
        function() {



// ********* С Т Р А Н И Ц А  Б Л О Г  ( М Е Д И А )

            // добавить оранжевый фон на ссылку "ALL" если это страница каталога Blog / Events
            if($('#form-media').length > 0){

                $('ul.page__nav li:first-child').addClass('active');

                let link = $(location).attr('href');
                let parent = $('ul.page__nav li a:first-child').attr('href');

                $.each($('ul.page__nav li a'), function () {
                    let child = $(this).attr('href');
                    let item = child.replace(parent, '');
                    if (link.indexOf(item) > 0){
                        $(this).parent().addClass('active');
                        $('ul.page__nav li:first-child').removeClass('active');
                    }
                });

            }

            // поменять атрибуты для тега select для корректного отображения + добавить выбор по умолчанию + показать форму
            $('#form-media select').attr('size', '1').attr('multiple', false)
                .prepend('<option val="" selected disabled>BY BRAND</option>').parent().css('display', 'block');

        });
})
(jQuery);