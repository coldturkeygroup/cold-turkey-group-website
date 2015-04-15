$(document).ready(function() {

  /* ======= Fixed header when scrolled ======= */
  $(window).bind('scroll', function() {
    if ($(window).scrollTop() > 200) {
      $('#header').addClass('navbar-fixed-top');
      $('#ctg-logo').attr('src', '/assets/img/logo.png');
    } else {
      $('#header').removeClass('navbar-fixed-top');
      $('#ctg-logo').attr('src', '/assets/img/logo-white.png');
    }
  });

  /* ======= Header Background Slideshow - Flexslider ======= */
  $('.bg-slider').flexslider({
    animation: "fade",
    directionNav: false,
    controlNav: false,
    slideshowSpeed: 8000
  });

});