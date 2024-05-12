jQuery(document).ready(function ($) {
    $(".simple-carousel").slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: false,
        adaptiveHeight: false,
        variableWidth: true,
        respondTo: "slider",
    });
});
