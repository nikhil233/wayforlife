(function ($) {
  "use strict";

  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $(document).ready(function() {
    $('select').niceSelect();
  });
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });

$(document).ready(function() {
  $('select').niceSelect();
});

var review = $('.client_review_part');
if (review.length) {
  review.owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000,
  });
}
var client = $('.client_logo');
if (client.length) {
  client.owlCarousel({
    items: 6,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    
    smartSpeed: 2000,
    margin: 20,
    responsive: {
      0: {
        items: 3
      },
      577: {
        items:3,
      },
      991: {
        items:5,
      },
      1200: {
        items: 6,
      }
    },
  });
}
var carousel = function() {
  $('.carousel-testimony').owlCarousel({
    autoplay: true,
    autoHeight: true,
    center: true,
    loop: true,
    items:1,
    margin: 30,
    stagePadding: 0,
    autoplayHoverPause:true,
    nav: false,
    dots: true,
    navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 1
      },
      1000:{
        items: 1
      }
    }
  });
  
};
carousel();
//counter up
$('.count').counterUp({
  delay: 10,
  time: 2000
});

//------- Mailchimp js --------//  
function mailChimp() {
  $('#mc_embed_signup').find('form').ajaxChimp();
}
mailChimp();






}(jQuery));