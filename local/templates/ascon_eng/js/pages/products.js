'use strict';

const gallery = {
    imgCount: 0,
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
                gallery.imgCount += 1;
                if(gallery.imgCount < 5){
                    $(this).removeClass('hide-element');
                }
            });

            if(gallery.imgCount > 4){
                $('.gallery__nav .right-arrow').css('display', 'block');
            }
        });
})
(jQuery);