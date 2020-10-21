'use strict';

const product = {
    imgCount: 0,
    imgFirst: undefined,
    imgLast: undefined,
    navLeft: undefined,
    navRight: undefined,

    navElemCheck(elem){
        $('.product__nav li').removeClass('active');
        elem.addClass('active');

        $(window).on('scroll', product.navScroll);
    },

    navScroll(){
        if(window.pageYOffset <= $('#description').offset().top){
            $('.product__nav li').removeClass('active');
            $('.product__nav li:first-child').addClass('active');
            $(window).off('scroll', product.navScroll);
        }
    },

    fancyboxInit(){
        // обернуть все картинки в теги a и назначить атрибуты для показа галереи
        $.each($(".product__main img"), function () {
            let img = $(this);
            if (img.attr('alt') === '' || img.attr('alt') === undefined) {
                img.attr('alt', 'image');
            }
            if (img.attr('title') === '' || img.attr('title') === undefined) {
                img.attr('title', img.attr('alt'));
            }
            img.wrap("<a></a>")
            img.parent('a')
                .attr('href', img.attr('src'))
                .attr("data-fancybox", "images")
                .attr("data-caption", img.attr('title'))
                .attr('class', 'fancy-img');
        });

        // инициировать работу галереи
        $('[data-fancybox="images"]').fancybox({
            buttons : [
                'slideShow',
                'share',
                'zoom',
                'fullScreen',
                'close'
            ],
            thumbs : {
                autoStart : false
            }
        });
    },

    galleryInint(){
        let  qty = 0;
        if (window.matchMedia('all and (min-width: 1200px').matches){
            qty = 4;
        } else if (window.matchMedia('all and (min-width: 870px').matches){
            qty = 3;
        } else {
            qty = 2;
        }
        console.log(qty);
        this.imageGalleryCheck(qty);
        this.imageGallerySet(qty);
    },

    imageGalleryCheck(qty){
        this.imgCount = 0;
        this.imgFirst = undefined;
        this.imgLast = undefined;

        $.each($('.gallery__img'), function (){
            product.imgCount += 1;
            $(this).attr('data-image-count', product.imgCount);
            // сохранить первое видимое изображение слева
            if(parseInt(product.imgCount) === 1) {
                product.imgFirst = $(this);
            }
            // сохранить последнее видимое изображение справа
            if(parseInt(product.imgCount) === qty){
                product.imgLast = $(this);
            }
            // показать картинки галереи в рамке
            if(product.imgCount <= qty){
                $(this).removeClass('hide-element');
            }
            // скрыть картинки галереи за рамкой
            if(product.imgCount > qty){
                $(this).addClass('hide-element');
            }
        });
    },

    imageGallerySet(qty){
        // показать стрелку вправо, если картинок более 4-х и сохранить в переменную 5-ю картинку
        if(this.imgCount > qty){

            this.navRight.css('display', 'block');
            this.navLeft.css('display', 'none');

            this.navRight.on('click', function (){
                product.galleryRightNav();});

            this.navLeft.on('click', function (){
                product.galleryLeftNav();
            });

            //window.on('resize', function (){
            //    product.galleryInint();
            //});
        } else {
            this.navRight.css('display', 'none');
            this.navLeft.css('display', 'none');
        }

        console.log(this.imgFirst);
        console.log(this.imgLast);
        console.log(this.imgCount);
    },

    galleryRightNav(){
        console.log('right-click');

        this.imgFirst.addClass('hide-element');
        this.imgFirst = this.imgFirst.next('.gallery__img');

        this.imgLast = this.imgLast.next('.gallery__img');
        this.imgLast.removeClass('hide-element');

        if (parseInt(this.imgLast.attr('data-image-count')) === this.imgCount) {
            this.navRight.css('display', 'none');
        }
        this.navLeft.css('display', 'block');
    },

    galleryLeftNav(){
        console.log('left-click');

        this.imgLast.addClass('hide-element');
        this.imgLast = this.imgLast.prev('.gallery__img');

        this.imgFirst = this.imgFirst.prev('.gallery__img');
        this.imgFirst.removeClass('hide-element');
        if (parseInt(this.imgFirst.attr('data-image-count')) === 1) {
            this.navLeft.css('display', 'none');
        }
        this.navRight.css('display', 'block');
    },
};

(function($) {
    $(document).ready(
        function() {

            product.navLeft = $('.gallery__nav .left-arrow');
            product.navRight = $('.gallery__nav .right-arrow');
// ********* С Т Р А Н И Ц А  П Р О Д У К Т А  ======================

            product.fancyboxInit();
            product.galleryInint();

            //$(window).on('resize', function () {
            //    product.galleryInint();
            //});



            // добавить скрипт на ресайз ширины окна

        });


})
(jQuery);