var behindFunctions = (function($) {

  var init = function() {
    sliders();
    mobileMenu();
    tabs();
  },

  sliders = function() {
  	$('.resources-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: false,
      arrows: true,
      dots: false,
      cssEase: 'ease-in-out',
      speed: 350,
      infinite: true,
      prevArrow: $(".prev-slide"),
      nextArrow: $(".next-slide"),
  	});
    
    var $test = $('.testimonials-slider');
    $test.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      cssEase: 'ease-in-out',
      speed: 800,
      fade: true,
      infinite: true,
  });
  
    var $slickElement = $('.slick-overlay');
    var $slickElementNav = $('.slick-overlay-nav');

    $slickElement.slick({
    dots: false,
    arrows: true,
    infinite: true,
    fade: true,
    speed: 300,
    slidesToScroll: 1,
    slidesToShow: 1,
    adaptiveHeight: true,
    asNavFor: '.slick-overlay-nav',
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    cssEase: 'ease-out',
   
    });
    
    $slickElementNav.slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.slick-overlay',
    arrows: false,
    cssEase: 'ease-out',
    variableWidth: true
   
    });

  },
  
  tabs = function() {
    $('.vertical-tabs__tabs li:first-child a').trigger("click");
  },
  
  mobileMenu = function() {
    $('.hamburger-box').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('active');
      $(this).find('.hamburger').toggleClass('active');
      $('.nav-modal').toggleClass('active');
      $('.menu-mobile').toggleClass('show');
    });

    $('li.menu-item-has-children').click(function (e) {
      $(this).find('.sub-menu').toggle();
    });
  }
  
  
  // AOS.init({
  // 	  offset: 300,
  // 	  once: false,
  // 	  duration: 600,
  // 	  easing: 'ease-in-out',
  // 	  delay: 150,
  // 	  disable: 'mobile'
  // 	})

return {
  init:init
};

})(jQuery);

jQuery(document).ready(behindFunctions.init );

