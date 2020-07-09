'use strict';


const commonMethods = {
    // блокировка экрана при всплытии поп-ап
    bodyFix(body) {
        (window.matchMedia('all and (min-width: 630px').matches)
            ? body.css({'overflow': 'hidden', 'padding-right': '0px'})
            : body.css('overflow', 'hidden');
    },

    // снятие блокировки с экрана при закрытии поп-ап
    bodyScroll(body) {
        (window.matchMedia('all and (min-width: 630px').matches)
            ? body.css({'overflow': 'unset', 'padding-right': '0px'})
            : body.css('overflow', 'unset');
    },

    // плавная прокрутка вверх к началу элемента
    scrollToTop(elem) {
        elem.animate({scrollTop: 0}, 'slow');
        //$('html,body').animate({ scrollTop: document.body.scrollHeight }, "slow");
    },

    // плавная прокрутка к вниз до заданного элемента
    scrollToBottom(elem, height) {
        $('html,body').animate({scrollTop: elem.offset().top - height}, 'slow');
    },
};

(function($) {
    $(document).ready(
        function() {

// ********* Н А В И Г А Ц И Я
            $('#mobile-open').on('click', function () {
                $(this).addClass('hide-element');
                $('#mobile-close').removeClass('hide-element');
                $('#menu-1').css('display', 'flex');
                //$('#menu-1').addClass('flex-element');
            });

            $('#mobile-close').on('click',function () {
                $(this).addClass('hide-element');
                $('#mobile-open').removeClass('hide-element');
                $('#menu-1').css('display', '');
                $('.drop-down__item span').removeClass('close-elem').addClass('down-arrow');
                $('.item__list, .drop-down__sub-menu').addClass('hide-element')
            });

            $('.drop-down__item').on('click', function () {
                $(this).children('.item__list').toggleClass('hide-element');
                $(this).children('span').toggleClass('down-arrow close-elem');
            });

            $('.menu-item').on('click', function (e) {
                if (window.matchMedia('all and (max-width: 600px)').matches) {
                    //e.preventDefault();
                    e.stopPropagation();
                }
            });

            $('.drop-down__sub-item').on('click', function (e) {
                if (window.matchMedia('all and (max-width: 600px)').matches) {
                    $(this).children('.drop-down__sub-menu').toggleClass('hide-element');
                    e.preventDefault();
                    e.stopPropagation();
                }
            });


// ********* С К А Ч А Т Ь   П Р О Б Н У Ю   В Е Р С И Ю
            $('#try-now-btn').on('click', function () {
                $('#try-now-form').removeClass('hide-element');
                commonMethods.bodyFix($('body'));
            });

            $('#try-now-form .close-elem').on('click', function () {
                $('#try-now-form').addClass('hide-element').children().val('');
                commonMethods.bodyScroll($('body'));
            });

// ********* ПЛАВНАЯ НАВИГАЦИЯ
            $('.product__nav a').on('click', function (event) {
                event.preventDefault();
                let id = $(this).attr('href');
                commonMethods.scrollToBottom($(id), 50);
            });


        });


})
(jQuery);