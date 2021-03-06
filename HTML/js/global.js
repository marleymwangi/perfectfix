// Global Javascript Initialization
var Global = function() {
  'use strict';

  // Bootstra Components
  var handleBootstrapComponents = function() {
    // Bootstrap Carousel
    $('.carousel').carousel({
      interval: 5000,
      pause: 'hover'
    });

  }

  // Scroll To Section
  var handleScrollToSection = function() {
    $(function() {
      $('a[href*=#js__scroll-to-]:not([href=#js__scroll-to-])').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 90
            }, 1000);
            return false;
          }
        }
      });
    });
  }

  // Handle Overlay
  var handleOverlay = function() {
    var overlay = $('.js__bg-overlay'),
      headerOverlay = $('.js__header-overlay'),
      trigger = $('.js__trigger');

    var overlay = $('.js__bg-overlay'),
      headerOverlay = $('.js__header-overlay'),
      triggeruser = $('.js__trigger-user');

      var button = $('.s-header__nav-menu-item');


    trigger.on('click', function() {
      if (!(overlay.hasClass('-is-open'))){
        overlay.toggleClass('-is-open');
      }

      if (!(headerOverlay.hasClass('-is-open'))) {
        headerOverlay.toggleClass('-is-open');
      }

      if ((trigger.hasClass('-is-active'))){ 
          overlay.toggleClass('-is-open');
          headerOverlay.toggleClass('-is-open');
      }

      trigger.toggleClass('-is-active');
      triggeruser.removeClass('-is-active');
      $('#menumain').toggleClass('g-display-none--xs');
      $('#menuuser').addClass('g-display-none--xs');

    });

      triggeruser.on('click', function() {
      if (!(overlay.hasClass('-is-open'))){
        overlay.toggleClass('-is-open');
      }

      if (!(headerOverlay.hasClass('-is-open'))) {
        headerOverlay.toggleClass('-is-open');
      }

      if ((triggeruser.hasClass('-is-active'))){ 
          overlay.toggleClass('-is-open');
          headerOverlay.toggleClass('-is-open');
      }

      triggeruser.toggleClass('-is-active');
      trigger.removeClass('-is-active');
      $('#menumain').addClass('g-display-none--xs');
      $('#menuuser').toggleClass('g-display-none--xs');
    });

  }

  // Vertical Center Aligned
  // Note! This works only with promo block and background image via CSS.
  var handleVerticalCenterAligned = function() {
    $('.js__ver-center-aligned').each(function() {
      $(this).css('padding-top', $(this).parent().height() / 2 - $(this).height() / 2);
    });
    $(window).resize(function() {
      $('.js__ver-center-aligned').each(function() {
        $(this).css('padding-top', $(this).parent().height() / 2 - $(this).height() / 2);
      });
    });
  }

  // handle group element heights
  var handleEqualHeight = function() {
   $('[data-auto-height]').each(function() {
      var parent = $(this);
      var items = $('[data-height]', parent);
      var height = 0;
      var mode = parent.attr('data-mode');
      var offset = parseInt(parent.attr('data-offset') ? parent.attr('data-offset') : 0);

      items.each(function() {
        if ($(this).attr('data-height') == "height") {
          $(this).css('height', '');
        } else {
          $(this).css('min-height', '');
        }

        var height_ = (mode == 'base-height' ? $(this).outerHeight() : $(this).outerHeight(true));
        if (height_ > height) {
          height = height_;
        }
      });

      height = height + offset;

      items.each(function() {
        if ($(this).attr('data-height') == "height") {
          $(this).css('height', height);
        } else {
          $(this).css('min-height', height);
        }
      });

      if(parent.attr('data-related')) {
        $(parent.attr('data-related')).css('height', parent.height());
      }
   });       
  }

  return {
    init: function() {
      handleBootstrapComponents(); // initial setup for Bootstrap Components
      handleScrollToSection(); // initial setup for Scroll To Section
      handleOverlay(); // initial setup for Overlay
      handleVerticalCenterAligned(); // initial setup for Vertical Center Aligned
      handleEqualHeight(); // initial setup for Equal Height
    }
  }
}();

$(document).ready(function() {
  Global.init();
});
