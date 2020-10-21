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

    // поведение выпадающих по клику элементов
    // показать\скрыть элементы "help" и по-ап скрытых меню, содержащие класс "hover";
    //openClickedElem(event, elem) {

        //if (event.target.classList.contains('hover')) {
        //    $(elem).children('.fade').removeClass('hide-element');
        //}
        // запуск функции контроля закрытия элемента
        //this.onClickClose(elem);
    //},

    // закрытие всплывающих элементов (меню, pop-up) при клике вне открытого окна
    onClickClose(elem) { // вызвать в момент показа окна, где elem - окно

        function outsideClickListener(event) {
            console.log('сработало');
            if (!elem[0].contains(event.target) && commonMethods.isVisible(elem[0])   // клик не по элементу и элемент виден
                || event.target.classList.contains('close-elem')    // клик по "закрыть" внутри открытого блока
                || event.target.tagName === 'A')                     // клик по ссылке внутри открытого блока
            {
                elem.addClass('hide-element'); //скрыть
                document.removeEventListener('click', outsideClickListener); //удалить слушатель события
            } else {
                elem.removeClass('hide-element');
            }
        }
        document.addEventListener('click', outsideClickListener);
    },

    //проверяет открыт ли элемент в момент клика
    isVisible(elem) { //открыто ли условное окно
        return !!elem && !!(elem.offsetWidth || elem.offsetHeight ||
            elem.getClientRects().length);
    },
};

(function($) {
    $(document).ready(
        function() {

            if($('#dlay-cookienotice-modal').length > 0) {
                console.log('cookie!');
                $('.dlay-cookienotice-text').addClass('container');
                $('.dlay-cookienotice-button').addClass('cookie-btn');
            }

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

            $('.language__icon').on('click',function () {
                commonMethods.onClickClose($('.language__change'));
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


            $('.page__nav li').on('mouseenter', function () {

                if(!$(this).hasClass('active')) {

                    var el = $('.page__nav li.active');
                    el.removeClass('active');

                    $(this).on('mouseleave', el, function (){
                        el.addClass('active');
                    });

                }
                console.log('done');
            });

// ********* ПЛАВНАЯ НАВИГАЦИЯ
            $('.product__nav a').on('click', function (event) {
                event.preventDefault();
                let id = $(this).attr('href');
                commonMethods.scrollToBottom($(id), 50);

                if($('#description').length > 0){
                    product.navElemCheck($(this).parent());
                }
            });
        });


    /*            $(".article__content img").on('click', function() {

                    $.fancybox.open('<div class="message"><h2>Hello!</h2><p>You are awesome!</p></div>');

                });*/
})
(jQuery);