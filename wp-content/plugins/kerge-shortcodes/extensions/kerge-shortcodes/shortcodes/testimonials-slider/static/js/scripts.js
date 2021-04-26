(function($) { 
"use strict";
    $(document).ready(function ($) {
        var mobile_mode_items = "",
            tablet_mode_items = "",
            items = "";
        
        $( '.testimonials' ).each( function() {
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

            if ($(this).hasClass('testimonials-loop-on')) {
                loop = true;
            } else {
                loop = false;
            }

            $(this).imagesLoaded(function () {
                $("#" + id + ".testimonials.owl-carousel").owlCarousel({
                    nav: true,
                    dots: false,
                    items: 1,
                    loop: loop,
                    autoplay: autoplayValue,
                    autoplayTimeout: autoplayTime,
                    navText: false,
                    autoHeight: true,
                    margin: 10,
                    responsive : {
                        0 : {
                            items: mobile_mode_items,
                        },
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
    });
})(jQuery);