var app = {
    offCanvas: true,
    offCanvasMenu: '#navbar .menu',
    init: function() {
        app.homeCycleInit();
        app.homeBlogCarouselInit();
        app.homeSpecialCarouselInit();
        app.offCanvasInit();
        app.offCanvasTrigger();
        app.handleMobileNav();
        app.accordionHandler();
        app.detailsCycleInit();
        app.detailsInitMaps();
    },
    onResize: function() {

    },
    accordionHandler: function() {
        jQuery('.accordion .head').click(function() {
            var $accordion = jQuery(this).parents('.accordion');
            if (!$accordion.hasClass('opened')) {
                jQuery('.accordion').removeClass('opened');
                jQuery('.accordion .content').slideUp();

                $accordion.addClass('opened');
                $accordion.find('.content').slideDown();
            } else {
                $accordion.removeClass('opened');
                $accordion.find('.content').slideUp();
            }
        });
    },
    handleMobileNav: function() {
        if (app.isPhone === true) {
            // jQuery('.sub-menu').hide();
        }

        jQuery(document).on('click', '#offcanvas .menu-item-has-children > a', function() {
            if (!jQuery(this).parent().hasClass('opened')) {
                jQuery(this).parent().addClass('opened');
                return false;
            } else {
                jQuery(this).parent().removeClass('opened');
            }
        });
    },
    detailsInitMaps: function() {
        if(!jQuery('#content').hasClass('details')) {
            return false;
        }

        function initialize() {
            var lang = new google.maps.LatLng(5.962528, 80.706668);
            var mapOptions = {
                center: lang,
                zoom: 16,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            }
            var map = new google.maps.Map(document.getElementById('maps'),
                mapOptions);

            var marker = new google.maps.Marker({
                position: lang,
                map: map,
                icon: '../images/map-marker.png'
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    },
    homeCycleInit: function() {
        jQuery('.home .slideshow').cycle({
            timeout: 4000,
            manualSpeed: 800,
            slides: '.slide'
        });
    },
    detailsCycleInit: function() {
        jQuery('.details #slideshow').cycle({
            timeout: 0,
            manualSpeed: 800,
            slides: '.slide',
            fx: 'carousel',
            carouselVisible: 3,
            // carouselSlideDimension: 980,
            carouselFluid: true,
            next: '.browse.right',
            prev: '.browse.left',
        });
    },
    homeBlogCarouselInit: function() {
        // browse
        var owl = jQuery('.home .blog-preview .row');

        owl.owlCarousel({
            margin: 40
        });

        // Go to the next item
        jQuery('.blog-preview .browse .right').click(function() {
            owl.trigger('next.owl.carousel');
        })

        // Go to the previous item
        jQuery('.blog-preview .browse .left').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        })

    },
    homeSpecialCarouselInit: function() {
        // browse
        var owl = jQuery('.special-gift .row');

        owl.owlCarousel({
            margin: 40
        });

        // Go to the next item
        jQuery('.special-gift .browse .right').click(function() {
            owl.trigger('next.owl.carousel');
        })

        // Go to the previous item
        jQuery('.special-gift .browse .left').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        })

    },
    offCanvasInit: function() {
        if (!app.offCanvas || !jQuery(app.offCanvasMenu).length) {
            return false;
        }

        var offCanvasButtonHTML = "<span class='offcanvas-hamburger'></span>";
        jQuery(offCanvasButtonHTML).insertAfter(app.offCanvasMenu);

        var $offCanvasHTML = jQuery(app.offCanvasMenu)[0].outerHTML;
        $offCanvasHTML = '<div id="offcanvas"><span class="close-btn"></span>' + $offCanvasHTML + '</div><div class="overlay"></div>';
        jQuery($offCanvasHTML).insertBefore('footer');

        // Add class
        jQuery(app.offCanvasMenu).parent().addClass('offcanvas-menu');
        jQuery('body').addClass('offcanvas-active');
    },
    offCanvasTrigger: function() {
        jQuery('.offcanvas-hamburger').on('click', function() {
            if (!jQuery('body').hasClass('offcanvas-opened')) {
                jQuery('body').addClass('offcanvas-opened')
            }
        });

        jQuery('#offcanvas .close-btn, .offcanvas-opened .overlay').on('click', function() {
            if (jQuery('body').hasClass('offcanvas-opened')) {
                jQuery('body').removeClass('offcanvas-opened')
            }
        });
    },
};

jQuery(document).ready(function($) {
    app.init();
    jQuery(window).resize(function() {
        app.onResize();
    });
});
