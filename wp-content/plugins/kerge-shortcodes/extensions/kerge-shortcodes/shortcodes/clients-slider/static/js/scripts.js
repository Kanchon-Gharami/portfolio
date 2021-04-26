(function($) { 
"use strict";
    $(document).ready(function ($) {
        // Clients Slider
        var mobile_mode_items = "",
            tablet_mode_items = "",
            items = "";
        
        $( '.clients' ).each( function() {
            var mobile_mode_items = $(this).attr('data-mobile-items'),
                tablet_mode_items = $(this).attr('data-tablet-items'),
                items = $(this).attr('data-items'),
                id = $(this).attr('id'),
                loop = false,
                windowWidth = $(window).width(),
                autoplayTablet = '',
                autoplayValue = '',
                autoplayTime = '';
            if ($(this).hasClass('autoplay-on')) {
                autoplayValue = true;
                autoplayTime = $(this).attr('data-autotime');
                if ($(this).hasClass('autoplay-mobile')) {
                    if (windowWidth > 768) {
                        autoplayValue = false;
                    } else {
                        autoplayValue = true;
                    }
                }
            } else {
                autoplayValue = false;
            }

            if ($(this).hasClass('clients-loop-on')) {
                loop = true;
            } else {
                loop = false;
            }

            $("#" + id + ".clients.owl-carousel").imagesLoaded().owlCarousel({
                nav: true, // Show next/prev buttons.
                items: 2, // The number of items you want to see on the screen.
                loop: loop,
                dots: false,
                autoplay: autoplayValue,
                autoplayTimeout: autoplayTime,
                navText: false,
                margin: 10,
                autoHeight: false,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: mobile_mode_items,
                    },
                    // breakpoint from 768 up
                    768 : {
                        items: tablet_mode_items,
                    },
                    1200 : {
                        items: items,
                    }
                }
            });
        });
    });
})(jQuery);