$(document).ready(function () {
    $(".navbar-toggle").click(function () {
        $(".navbar.navbar-expand-xxl").toggleClass("menu-active");
        $(document.body).toggleClass("disable-scroll");
    });

    $(".navbar-menu-bg, .navbar .menu-link").click(function () {
        $(".navbar.navbar-expand-xxl.menu-active").removeClass("menu-active");
        $(document.body).removeClass("disable-scroll");
    });
});
