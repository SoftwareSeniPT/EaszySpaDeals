var app = {
	offCanvas: true,
    offCanvasMenu: '#navbar .menu',
    init: function() {
        app.homeCycleInit();
        app.homeCarouselInit();
        app.offCanvasInit();
        app.offCanvasTrigger();
        app.handleMobileNav();
    },
    onResize: function() {

    },
    handleMobileNav: function() {
      if (app.isPhone === true) {
        // jQuery('.sub-menu').hide();
      }

      jQuery(document).on('click', '#offcanvas .menu-item-has-children > a', function(){
            if(!jQuery(this).parent().hasClass('opened')) {
                jQuery(this).parent().addClass('opened');
                return false;
            } else {
                jQuery(this).parent().removeClass('opened');
            }
      });
    },
    homeCycleInit: function() {
        jQuery('.home .slideshow').cycle({
            timeout: 4000,
            manualSpeed: 800,
            slides: '.slide'
        });
    },
    homeCarouselInit: function() {
        

        // browse
        var owl = jQuery('.blog-preview .row');

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
