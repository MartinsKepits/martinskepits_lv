$(document).ready(function () {
    const screenWidth = $(window).width();
    const aboutCards = $(".about-me-cards .about-card");
    const aboutCardsTitles = $(".about-me-cards .card-title");

    const getMaxHeight = (elements) => {
        return Math.max(
            ...elements
                .map(function () {
                    return $(this).height();
                })
                .get()
        );
    };

    if (screenWidth >= 991) {
        const tallestCardTitle = getMaxHeight(aboutCardsTitles);
        aboutCardsTitles.height(tallestCardTitle);
    } else {
        const tallestCard = getMaxHeight(aboutCards);
        aboutCards.height(tallestCard);
    }
});
