;
(function ($) {
    $(window).load(function(){

        $('.hero-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: trueg
        });
    });

}(jQuery));