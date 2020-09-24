'use strict';

const product = {
    imgCount: 0,

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
};

(function($) {
    $(document).ready(
        function() {

// ********* С Т Р А Н И Ц А  П Р О Д У К Т А  ======================

            //$.each($(".product__section img"), function () {
            $.each($(".product__main img"), function () {

                let img = $(this);

/*                if ( img.parent().is( "p" ) ) {
                    img.unwrap();
                }*/
                if (img.attr('title') === '' || img.attr('title') === undefined) {
                    img.attr('title', 'image');
                }
                if (img.attr('alt') === '' || img.attr('alt') === undefined) {
                    img.attr('alt', img.attr('title'));
                }
                img.wrap("<a></a>")

                img.parent('a')
                    .attr('href', img.attr('src'))
                    .attr("data-fancybox", "images")
                    .attr("data-caption", img.attr('title'))
                    .attr('class', 'fancy-img');
            });

            $('[data-fancybox="images"]').fancybox({
                buttons : [
                    //'slideShow',
                    'share',
                    'zoom',
                    'fullScreen',
                    'close'
                ],
                thumbs : {
                    autoStart : false
                }
            });

            $.each($('.gallery__img'), function (){
                product.imgCount += 1;
                if(product.imgCount < 5){
                    $(this).removeClass('hide-element');
                }
            });

            if(product.imgCount > 4){
                $('.gallery__nav .right-arrow').css('display', 'block');
            }
        });
})
(jQuery);