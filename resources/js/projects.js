$(document).ready(function () {
    $("#projects-worked-on-slider").slick({
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        pauseOnHover: false,
        pauseOnFocus: false,
        cssEase: "linear",
        arrows: false,
        dots: false,
        variableWidth: true,
        draggable: false,
    });
});
