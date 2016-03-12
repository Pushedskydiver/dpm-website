(function($) {

    'use strict';


    var WSD = function() {
        this.VERSION = "1.1.0";
        this.AUTHOR = "Alex Clapperton";
        this.SUPPORT = "alex.clapperton@stu.mmu.ac.uk";

        this.pageScrollElement = 'html, body';
        this.$body = $('body');

        this.setUserOS();
        this.setUserAgent();
    }

    // Set environment vars
    WSD.prototype.setUserOS = function() {
        var OSName = "";
        if (navigator.appVersion.indexOf("Win") != -1) OSName = "windows";
        if (navigator.appVersion.indexOf("Mac") != -1) OSName = "mac";
        if (navigator.appVersion.indexOf("X11") != -1) OSName = "unix";
        if (navigator.appVersion.indexOf("Linux") != -1) OSName = "linux";

        this.$body.addClass(OSName);
    }

    WSD.prototype.setUserAgent = function() {
        if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
            this.$body.addClass('mobile');
        } else {
            this.$body.addClass('desktop');
            if (navigator.userAgent.match(/MSIE 9.0/)) {
                this.$body.addClass('ie9');
            }
        }
    }

    // WSD util functions
    WSD.prototype.getUserAgent = function() {
        return $('body').hasClass('mobile') ? "mobile" : "desktop";
    }

    WSD.prototype.setFullScreen = function(element) {
        // Supports most browsers and their versions.
        var requestMethod = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen || element.msRequestFullscreen;

        if (requestMethod) { // Native full screen.
            requestMethod.call(element);
        } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
    }

    WSD.prototype.setBackgroundImage = function() {
        $('[data-pages-bg-image]').each(function() {
            var _elem = $(this)
            var defaults = {
                pagesBgImage: "",
                lazyLoad: 'true',
                progressType: '',
                progressColor:'',
                bgOverlay:'',
                bgOverlayClass:'',
                overlayOpacity:0,
            }
            var data = _elem.data();
            $.extend( defaults, data );
            var url = defaults.pagesBgImage;
            var color = defaults.bgOverlay;
            var opacity = defaults.overlayOpacity;

            var overlay = $('<div class="bg-overlay"></div>');
            overlay.addClass(defaults.bgOverlayClass);
            overlay.css({
                'background-color': color,
                'opacity': 1
            });
            _elem.append(overlay);

            var img = new Image();
            img.src = url;
            img.onload = function(){
                _elem.css({
                    'background-image': 'url(' + url + ')'
                });
            }

        })
    }

    // Call initializers
    WSD.prototype.init = function() {
        this.setBackgroundImage();
    }

    $.WSD = new WSD();
    $.WSD.Constructor = WSD;

})(window.jQuery);

/* ============================================================
 * Header Plugin
 * ============================================================ */

(function($) {
    'use strict';

    var Header = function(element, options) {
        this.$body = $('body');
        this.$element = $(element);
        this.options = $.extend(true, {}, $.fn.header.defaults, options);
        if (this.$element.attr('data-pages-header') == "autoresize")
            this.options.autoresize = true

        if (this.$element.attr('data-pages-header') != null)
            this.options.minimizedClass = this.options.minimizedClass + ' ' + this.$element.attr('data-pages-resize-class');

        this.initAffix();
    }
    Header.prototype.initAffix = function() {
        if (this.$element.attr('data-pages-autofixed') == "true") {
            this.$element.affix({
                offset: {
                    top: this.$element.offset().top,
                }
            });
        }
    };
    Header.prototype.updateAffix = function() {
        if (this.$element.attr('data-pages-autofixed') == "true") {
            console.log(this.$element.offset().top)
            this.$element.removeData('affix').removeClass('affix affix-top affix-bottom');
            this.$element.affix({
                offset: this.$element.offset().top
            })
        }
    };
    Header.prototype.addMinimized = function() {
        if (this.options.autoresize && !this.$element.hasClass('affix-top'))
            if (!this.$element.hasClass(this.options.minimizedClass))
                this.$element.addClass(this.options.minimizedClass);
    };
    Header.prototype.removeMinized = function() {
        if (this.options.autoresize || this.$element.hasClass('affix-top'))
            this.$element.removeClass(this.options.minimizedClass);
    };

    function Plugin(option) {
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('pg.header');
            var options = typeof option == 'object' && option;

            if (!data) $this.data('pg.header', (data = new Header(this, options)));
            if (typeof option == 'string') data[option]();
        })
    }

    var old = $.fn.header

    $.fn.header = Plugin
    $.fn.header.Constructor = Header


    $.fn.header.defaults = {
        duration: 350,
        autoresize: false,
        minimizedClass: 'minimized'
    }

    // HEADER NO CONFLICT
    // ====================

    $.fn.header.noConflict = function() {
        $.fn.header = old;
        return this;
    }

    // HEADER DATA API
    //===================
    $(document).ready(function() {
        $('.menu > li > a').on('mouseenter click', function(e) {
            if ($(this).parent().hasClass('mega')) {
                if ($(this).parent().hasClass('open')) {
                    $(this).parents('.container').removeClass('clip-mega-menu');
                } else {
                    $(this).parents('.container').addClass('clip-mega-menu');
                }

            } else {
                $(this).parents('.container').removeClass('clip-mega-menu');


            }
            $(this).parent().toggleClass('open').siblings().removeClass('open');

        });
        // $('.menu > li > nav').on('mouseenter mouseleave click', function () {
        //     var el = $(this).parent();
        //     if(!el.hasClass('open'))
        //         el.addClass('open');
        //     else
        //         el.removeClass('open');
        // })

        $('.desktop .menu > li > nav').on('mouseleave', function(e) {
             $('.menu > li').removeClass('open');

        });
    })

    $(window).on('load', function() {
        $('[data-pages="header"]').each(function() {
            var $header = $(this)
            $header.header($header.data())
        })
    });

    $('[data-pages="header-toggle"]').on('click touchstart', function(e) {
        e.preventDefault();
        var el = $(this)

        var header = el.attr('data-pages-element');
        $('body').toggleClass('menu-opened');
        $('[data-pages="header-toggle"]').toggleClass('on');

    });
    $(window).on("resize", function() {
        $('[data-pages="header"]').header('updateAffix');
    })
    $(window).on("scroll", function() {
        var ScrollTop = parseInt($(window).scrollTop());
        if (ScrollTop > 1) {
            $('[data-pages="header"]').header('addMinimized');
        } else {
            if (ScrollTop < 10) {
                $('[data-pages="header"]').header('removeMinized');
            }
        }
    });

})(window.jQuery);

/* ============================================================
 * WSD Parallax Plugin
 * ============================================================ */

$(document).ready(function() {
    'use strict';
    //Intialize Slider
    var slider = new Swiper('#hero', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        parallax: true,
        speed: 1000,
    });
});


(function($) {
    'use strict';
    // PARALLAX CLASS DEFINITION
    // ======================

    var Parallax = function(element, options) {
        this.$element = $(element);
        this.$body = $('body');
        this.options = $.extend(true, {}, $.fn.parallax.defaults, options);
        this.$coverPhoto = this.$element.find('.cover-photo');
        // TODO: rename .inner to .page-cover-content
        this.$content = this.$element.find('.inner');

        // if cover photo img is found make it a background-image
        if (this.$coverPhoto.find('> img').length) {
            var img = this.$coverPhoto.find('> img');
            this.$coverPhoto.css('background-image', 'url(' + img.attr('src') + ')');
            img.remove();
        }
        this.translateBgImage();
    }
    Parallax.VERSION = "1.0.0";

    Parallax.prototype.animate = function(translate) {

        var scrollPos;
        var pagecoverHeight = this.$element.height();
        //opactiy to text starts at 50% scroll length
        var opacityKeyFrame = pagecoverHeight * 50 / 100;
        var direction = 'translateX';

        scrollPos = $(window).scrollTop();
        if (this.$body.hasClass('mobile')) {
            scrollPos = -(translate);
        }
        direction = 'translateY';

        this.$coverPhoto.css({
            'transform': direction + '(' + scrollPos * this.options.speed.coverPhoto + 'px)'
        });

        this.$content.css({
            'transform': direction + '(' + scrollPos * this.options.speed.content + 'px)',
        });


        this.translateBgImage();


    }

    Parallax.prototype.translateBgImage = function() {
            var scrollPos = $(window).scrollTop();
            var pagecoverHeight = this.$element.height();
            if (this.$element.attr('data-pages-bg-image')) {
                var relativePos = this.$element.offset().top - scrollPos;

                // if element is in visible window's frame
                if (relativePos > -pagecoverHeight && relativePos <= $(window).height()) {
                    var displacePerc = 100 - ($(window).height() - relativePos) / ($(window).height() + pagecoverHeight) * 100;
                    this.$element.css({
                        'background-position': 'center ' + displacePerc + '%'
                    });
                }
            }
        }
        // PARALLAX PLUGIN DEFINITION
        // =======================
    function Plugin(option) {
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('pg.parallax');
            var options = typeof option == 'object' && option;

            if (!data) $this.data('pg.parallax', (data = new Parallax(this, options)));
            if (typeof option == 'string') data[option]();
        })
    }

    var old = $.fn.parallax

    $.fn.parallax = Plugin
    $.fn.parallax.Constructor = Parallax


    $.fn.parallax.defaults = {
        speed: {
            coverPhoto: 0.3,
            content: 0.17
        }
    }

    // PARALLAX NO CONFLICT
    // ====================

    $.fn.parallax.noConflict = function() {
        $.fn.parallax = old;
        return this;
    }

    // PARALLAX DATA API
    //===================

    $(window).on('load', function() {

        $('[data-pages="parallax"]').each(function() {
            var $parallax = $(this)
            $parallax.parallax($parallax.data())
        })
    });

    $(window).on('scroll', function() {
        // Disable parallax for Touch devices

        $('[data-pages="parallax"]').parallax('animate');
    });

})(window.jQuery);

/* ============================================================
 * WSD Float Plugin
 * ============================================================ */

(function($) {
    'use strict';
    // FLOAT CLASS DEFINITION
    // ======================

    var Float = function(element, options) {
        this.$element = $(element);
        this.options = $.extend(true, {}, $.fn.pgFloat.defaults, options);

        var _this = this;
        var _prevY;

        function update() {
            var element = _this.$element;
            var w = $(window).scrollTop();
            var translateY = (w - element.offset().top) * _this.options.speed;
            var delay = _this.options.delay / 1000; //in seconds
            var curve = _this.options.curve;
            var maxTopTranslate = _this.options.maxTopTranslate;
            var maxBottomTranslate = _this.options.maxBottomTranslate;

            if (maxTopTranslate == 0) {
                if (element.offset().top + element.outerHeight() < w) return;
            }

            if (maxBottomTranslate == 0) {
                if (element.offset().top > w + $(window).height()) return;
            }

            if (_prevY < translateY) { // scroll down, element will hide from top
                if (maxTopTranslate != 0 && Math.abs(translateY) > maxTopTranslate) return;
            } else {
                if (maxBottomTranslate != 0 && Math.abs(translateY) > maxBottomTranslate) return;
            }


            element.css({
                'transition': 'transform ' + delay + 's ' + curve,
                'transform': 'translateY(' + translateY + 'px)',
            });

            _prevY = translateY;
        }

        $(window).bind('scroll', function() {
            update()
        });
        $(window).bind('load', function() {
            update()
        });
    }
    Float.VERSION = "1.0.0";



    // FLOAT PLUGIN DEFINITION
    // =======================
    function Plugin(option) {
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('pgFloat');
            var options = typeof option == 'object' && option;

            if (!data) $this.data('pgFloat', (data = new Float(this, options)));
            if (typeof option == 'string') data[option]();
        })
    }

    var old = $.fn.pgFloat;

    $.fn.pgFloat = Plugin;
    $.fn.pgFloat.Constructor = Float;


    $.fn.pgFloat.defaults = {
        topMargin: 0,
        bottomMargin: 0,
        speed: 0.1,
        delay: 1000,
        curve: 'ease'
    }

    // FLOAT NO CONFLICT
    // ====================

    $.fn.pgFloat.noConflict = function() {
        $.fn.pgFloat = old;
        return this;
    }

    // FLOAT DATA API
    //===================

    $(window).on('load', function() {

        $('[data-pages="float"]').each(function() {
            var $pgFloat = $(this)
            $pgFloat.pgFloat($pgFloat.data())
        })
    });

})(window.jQuery);

// ======================================
// Dummy link
// ======================================
function init_dummy_link() {
  // Disable default link behavior for dummy links that have href='#'
  var $emptyLink = $('a[href=#]');
  $emptyLink.on('click', function(e){
    e.preventDefault();
  });
}


// ======================================
// Smooth Scroll to element
// ======================================
var $scrollTo = $('.scroll-to');
$scrollTo.on('click', function(event){
  var $elemOffsetTop = $(this).data('offset-top');
  $('html').velocity("scroll", { offset:$(this.hash).offset().top-$elemOffsetTop, duration: 1500, easing:'easeInOutCubic', mobileHA: false});
  event.preventDefault();
});


// ======================================
// Smooth Scroll to Top button
// ======================================
function init_smooth_scroll_top() {
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 1500,
    //grab the "back to top" link
    $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function() {
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    $back_to_top.on('click', function(e){
      e.preventDefault();
      $('html').velocity("scroll", { offset: 0, duration: 1500, easing:'easeInOutCubic', mobileHA: false });
    });
}


// ======================================
// Card flip
// ======================================
function init_card_flip() {
  $('.category-item').click(function(){
   $(this).toggleClass('clicked');
   return false;
 });
}


// ======================================
// Accordion jumps
// ======================================
function init_accordion() {
  $.fn.lvAccordion = function(){

    var $this = $(this),
        isToggle = $this.hasClass( 'm-toggle' ) ? true : false,
        items = $this.find( '> div' );

    items.filter( '.m-active' ).find( '.panel-content' ).slideDown( 300 );

    $this.find( '.panel-title' ).click(function(){
      if ( ! $(this).parent().hasClass( 'm-active' ) ) {
        if ( ! isToggle ) {
          items.filter( '.m-active' ).find( '.panel-content' ).slideUp(300);
          items.filter( '.m-active' ).removeClass( 'm-active' );
        }
        $(this).parent().find( '.panel-content' ).slideDown(300);
        $(this).parent().addClass( 'm-active' );
      }
      else {
        $(this).parent().find( '.panel-content' ).slideUp(300);
        $(this).parent().removeClass( 'm-active' );
      }
    });

  };
  if ( $.fn.lvAccordion ) {
    $( '.jump-panel' ).each(function(){
      $(this).lvAccordion();
    });
  }
}


function init_accordion_sidebar() {
  $.fn.lvAccordion = function(){

    var $this = $(this),
    isToggle = $this.hasClass( 'm-toggle' ) ? true : false,
    items = $this.find( '> li' );
    items.filter( '.m-active' ).find( '.category-list' ).slideDown( 300 );

    $this.find( '.category-title' ).click(function(){
      if ( ! $(this).parent().hasClass( 'm-active' ) ) {
        if ( ! isToggle ) {
          items.filter( '.m-active' ).find( '.category-list' ).slideUp(300);
          items.filter( '.m-active' ).removeClass( 'm-active' );
        }
        $(this).parent().find( '.category-list' ).slideDown(300);
        $(this).parent().addClass( 'm-active' );
      }
      else {
        $(this).parent().find( '.category-list' ).slideUp(300);
        $(this).parent().removeClass( 'm-active' );
      }
    });

  };
  if ( $.fn.lvAccordion ) {
    $( '.categories' ).each(function(){
      $(this).lvAccordion();
    });
  }
}


// ======================================
// Google map - Bar Burrito
// ======================================
function init_map_burrito() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.482481, -2.2488879), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-burrito');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.482481, -2.2488879),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Wagamama
// ======================================
function init_map_wag() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.480346, -2.2683336), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-wag');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.480346, -2.2683336),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Archie's
// ======================================
function init_map_archies() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4742104, -2.2431605), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-archies');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4742104, -2.2431605),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Bella Italia
// ======================================
function init_map_bella() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4822145, -2.2473003), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-bella');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4822145, -2.2473003),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Manchester Art Gallery
// ======================================
function init_map_mag() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4786541, -2.2414114), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-mag');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4786541, -2.2414114),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Museum of Science & Indsutry
// ======================================
function init_map_mosi() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4773135, -2.2549624), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-mosi');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4773135, -2.2549624),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Museum of Science & Indsutry
// ======================================
function init_map_mot() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.503028, -2.2334359), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-mot');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.503028, -2.2334359),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Arndale Centre
// ======================================
function init_map_arndale() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4842467, -2.241106), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-arn');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4842467, -2.241106),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Intu Trafford Centre
// ======================================
function init_map_intu() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4661126, -2.3490164), // Manchester Art Gallery

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-intu');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4661126, -2.3490164),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Gorilla Bar
// ======================================
function init_map_gorilla() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.474155, -2.2425783), // Gorilla Bar

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-gorilla');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.474155, -2.2425783),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Sankeys
// ======================================
function init_map_sankeys() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.484919, -2.225953), // Gorilla Bar

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-sankeys');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.484919, -2.225953),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}


// ======================================
// Google map - Cloud 23
// ======================================
function init_map_cloud() {
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,
          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(53.4754154, -2.2502472), // Gorilla Bar

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
      };

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map-cloud');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(53.4754154, -2.2502472),
          map: map,
          icon: "http://s15.postimg.org/9mx28u5bb/pointer.png"
      });
  }
}

init_dummy_link();
init_smooth_scroll_top();
init_accordion();
init_accordion_sidebar();

if (!$('body').hasClass('desktop')) {
  init_card_flip();
}
if(document.URL.indexOf("bar-burrito.php") >= 0){
  init_map_burrito();
}
if(document.URL.indexOf("wagamama.php") >= 0){
  init_map_wag();
}
if(document.URL.indexOf("archies.php") >= 0){
  init_map_archies();
}
if(document.URL.indexOf("bella-italia.php") >= 0){
  init_map_bella();
}
if(document.URL.indexOf("manchester-art-gallery.php") >= 0){
  init_map_mag();
}
if(document.URL.indexOf("museum-of-science-and-industry.php") >= 0){
  init_map_mosi();
}
if(document.URL.indexOf("museum-of-transport.php") >= 0){
  init_map_mot();
}
if(document.URL.indexOf("arndale.php") >= 0){
  init_map_arndale();
}
if(document.URL.indexOf("intu-trafford-centre.php") >= 0){
  init_map_intu();
}
if(document.URL.indexOf("gorilla-bar.php") >= 0){
  init_map_gorilla();
}
if(document.URL.indexOf("sankeys.php") >= 0){
  init_map_sankeys();
}
if(document.URL.indexOf("cloud23.php") >= 0){
  init_map_cloud();
}

(function($) {
    'use strict';
    // Initialize layouts and plugins
    (typeof angular === 'undefined') && $.WSD.init();
})(window.jQuery);
