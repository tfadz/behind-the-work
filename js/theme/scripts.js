var premierFunctions = (function($) {

  var init = function() {
    sliders();
    mobileMenu();
  },

  sliders = function() {
    if($('.home')[0]) {
      $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: false,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0',
        cssEase: 'ease-in-out',
        speed: 1000,
        fade: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false
      });
      
      $('.testimonials').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0',
        cssEase: 'ease-in-out',
        speed: 800,
        fade: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false
      });
    }
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
  
  
  AOS.init({
  	  offset: 300,
  	  once: false,
  	  duration: 600,
  	  easing: 'ease-in-out',
  	  delay: 150,
  	  disable: 'mobile'
  	})

return {
  init:init
};

})(jQuery);

jQuery(document).ready(premierFunctions.init );

