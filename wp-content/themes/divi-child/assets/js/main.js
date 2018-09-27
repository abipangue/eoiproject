(function($) {
    var $animation_elements = $('.et-waypoint'),
        $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height(),
            window_top_position = $window.scrollTop(),
            window_bottom_position = (window_top_position + window_height);

        $animation_elements.each(function() {
            var $element = $(this),
                element_height = $element.outerHeight(),
                element_top_position = $element.offset().top,
                element_bottom_position = (element_top_position + element_height);

            //check to see if this element is within viewport
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('et-animated');
            } else {
                $element.removeClass('et-animated');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);

    $(window).load(function(){

        $('.eoi-image-carousel').each(function() {
            $(this).slick({
                autoplay: true,
                autoplaySpeed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1204,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    });

})(jQuery);
