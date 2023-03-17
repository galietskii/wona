$(function() {
$(".menu").on("click", "li", function(){
    let is_active = false;

    if( $(this).hasClass('active') ){ is_active = true; }

    $(".menu-item").removeClass('active');

    if(!is_active){  $(this).addClass('active');  }


});
    /* Hamburger menu*/

    $('.hamburger').on('click', function () {
        $(this).toggleClass('is-active');
        $('.mobile-nav').toggleClass('is-active');
    })

    $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
    });
    $('.collapse').collapse({
        toggle: true,
    });
    $('#slick-slide-control00').html("01<span>INTRO</span>");
    $('#slick-slide-control01').html("02<span>WORK</span>");
    $('#slick-slide-control02').html("03<span>ABOUT</span>");
    $('#slick-slide-control03').html("04<span>CONTACTS</span>");


});

