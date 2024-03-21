$(document).ready(function () {
    const screenWidth = $(window).width();

    if (screenWidth >= 991) {
        const cards = $(".about-me-cards .card-title");
        const tallestCardTitle = Math.max(
            ...cards
                .map(function () {
                    return $(this).height();
                })
                .get()
        );

        cards.height(tallestCardTitle);
    }
});
