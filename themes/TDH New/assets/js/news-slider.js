// News page slider 

$(document).ready(function () {



    $('.slider__big').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.slider__mini',

    });
    $('.slider__mini').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider__big',
        dots: false,
        vertical: true,
        centerMode: true,
        focusOnSelect: true,
        verticalSwiping: true,
        adaptiveHeight: true,
        arrows: false,
        prevArrow: false,
        nextArrow: false
    });

        // slide show

        $(".slide_inner").slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
    
            infinite: true,
            speed: 2000,
            fade: false,
            slidesToShow: 1,
            adaptiveHeight: true,
        });
    

});