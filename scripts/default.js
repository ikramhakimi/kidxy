/**
 *  Plugin: Carousel from Owl Carousel
 *
 *  Open specific tab inside a modal from outside content using hash
 *  Usage :
 *      1. Header's Sign In or Register
 */

$(document).ready(function() {
    var carousel_default  =  $('.js-carousel');
    var carousel_banners  =  $('.js-carousel-banners');
    var carousel_cards_4  =  $('.js-carousel-cards-4');
    var carousel_cards_5  =  $('.js-carousel-cards-5');
    var carousel_cards_6  =  $('.js-carousel-cards-6');


    carousel_default.owlCarousel({
        autoHeight:true,
        loop: true,
        margin: 0,
        nav: true,

        responsive: {
            0: {
                items: 1
            }
        }
    });


    carousel_banners.owlCarousel({
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        dots: false,
        loop: true,
        margin: 0,
        nav: true,

        responsive: {
            0: {
                items: 1
            }
        }
    });


    carousel_cards_4.owlCarousel({
        autoHeight: false,
        dots: false,
        loop: false,
        margin: 16,
        nav: true,

        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 12,
                stagePadding: 40,
            },
            321: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 64,
            },
            1025: {
                items: 4,
                slideBy: 4,
            }
        }
    });


    carousel_cards_5.owlCarousel({
        autoHeight: false,
        dots: false,
        loop: false,
        margin: 16,
        nav: true,

        responsive: {
            0: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 40,
            },
            321: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 64,
            },
            1025: {
                items: 5,
                slideBy: 5,
            }
        }
    });

    carousel_cards_5.owlCarousel({
        autoHeight: false,
        dots: false,
        loop: false,
        margin: 16,
        nav: true,

        responsive: {
            0: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 40,
            },
            321: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 64,
            },
            1025: {
                items: 5,
                slideBy: 5,
            }
        }
    });


    carousel_cards_6.owlCarousel({
        autoHeight: false,
        dots: false,
        loop: false,
        margin: 16,
        nav: true,

        responsive: {
            0: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 40,
            },
            321: {
                items: 1,
                margin: 12,
                nav: false,
                stagePadding: 80,
            },
            1025: {
                items: 6,
                slideBy: 6,
            }
        }
    });
})
