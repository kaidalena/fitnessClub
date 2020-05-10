(function($) {
  'use strict';

  var browserWindow = $(window);

  // :: 1.0 Preloader Active Code
  browserWindow.on('load', function() {
    $('#preloader').fadeOut('slow', function() {
      $(this).remove();
    });
  });

  // :: 2.0 Nav Active Code
  if ($.fn.classyNav) {
    $('#fitnessNav').classyNav();
  }

  // :: 3.0 Sliders Active Code
  if ($.fn.owlCarousel) {
    var welcomeSlide = $('.hero-slides');
    var testiSlide = $('.testimonials-slides');

    welcomeSlide.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: true,
      navText: ['&#9664', '&#9654'],
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1500
    });

    welcomeSlide.on('translate.owl.carousel', function() {
      var slideLayer = $("[data-animation]");
      slideLayer.each(function() {
        var anim_name = $(this).data('animation');
        $(this).removeClass('animated ' + anim_name).css('opacity', '0');
      });
    });

    welcomeSlide.on('translated.owl.carousel', function() {
      var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
      slideLayer.each(function() {
        var anim_name = $(this).data('animation');
        $(this).addClass('animated ' + anim_name).css('opacity', '1');
      });
    });

    $("[data-delay]").each(function() {
      var anim_del = $(this).data('delay');
      $(this).css('animation-delay', anim_del);
    });

    $("[data-duration]").each(function() {
      var anim_dur = $(this).data('duration');
      $(this).css('animation-duration', anim_dur);
    });

    var dot = $('.hero-slides .owl-dot');
    dot.each(function() {
      var index = $(this).index() + 1 + '.';
      if (index < 10) {
        $(this).html('0').append(index);
      } else {
        $(this).html(index);
      }
    });

    testiSlide.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 600
    });
  }

  // :: 4.0 ScrollUp Active Code


})(jQuery);
