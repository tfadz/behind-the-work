var behindFunctions = (function($) {

  var init = function() {
    navtabs();
    sliders();
    mobileMenu();
    tabs();
    swapSvg();
  },
  
  navtabs = function() {
    window.setTimeout(function() { 
        $('.main-navigation').addClass('show');
    }, 200);
    
    $('.nav-tab').each(function(event) {
        // $(this).find(".nav-tab-highlight").clone().appendTo(".nav-tab-wrapper");
        var $wrap = $(this).find('.nav-tab-wrapper');
        var $high = $(this).find('.nav-tab-highlight');
        $(this).find($high).appendTo($wrap);
      });
      
      // $('.menu-item').each(function(event) {
      //     // $(this).find(".nav-tab-highlight").clone().appendTo(".nav-tab-wrapper");
      //     var $marvin = $(this).find('.nav-tab-wrapper');
      //     var $hektor = $marvin.find('.menu-item-description');
      //     var $leo = $(this);
      //     $hektor.clone().appendTo('.menu-item')
      //   });
      
    },
    
    swapSvg = function() {
      // Check for page that has the svg
      $checksvg = $('.horizontal-tabs');

      if($checksvg[0]) {
       // This swaps img tag and turns into svg file. Must add svg class to img.
       $('.horizontal-tabs .nav-pills img').addClass('svg');
       $('.horizontal-tabs .nav-pills img[src$=".svg"] ').each(function() {
         var $img = jQuery(this);
         var imgURL = $img.attr('src');
         var attributes = $img.prop("attributes");

         $.get(imgURL, function(data) {
           // Get the SVG tag, ignore the rest
           var $svg = jQuery(data).find('svg');

           // Remove any invalid XML tags
           $svg = $svg.removeAttr('xmlns:a');

           // Loop through IMG attributes and apply on SVG
           $.each(attributes, function() {
             $svg.attr(this.name, this.value);
           });

           // Replace IMG with SVG
           $img.replaceWith($svg);
           }, 'xml');
       });
     }
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
    $('.horizontal-tabs .nav-pills li:first-child a').addClass('active');
    $('.checklist-tabs .nav-pills li:first-child a').addClass('active');
  },
  
  mobileMenu = function() {
    $('.hamburger-box').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('active');
      $(this).find('.hamburger').toggleClass('active');
      $('.nav-modal').toggleClass('active');
      $('.menu-mobile').toggleClass('show');
    });

    // $('li.menu-item-has-children').click(function (e) {
    //   $(this).find('.sub-menu').toggle();
    // });
  }


return {
  init:init
};

})(jQuery);

jQuery(document).ready(behindFunctions.init );

