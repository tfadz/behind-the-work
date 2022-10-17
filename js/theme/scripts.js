  var behindFunctions = (function($) {

  	var init = function() {
  			navtabs();
  			accordion();
  			sliders();
  			mobileMenu();
  			tabs();
  			swapSvg();
  			teamCards();
  			resources();
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

  		accordion = function() {
  			$accord = $('.accordion-question');
  			if ($accord[0]) {
  				$accord.click(function(event) {
  					$(this).toggleClass('active');
  					$(this).next().toggleClass('active');
  				});
  			}
  		},

  		swapSvg = function() {
  			// Check for page that has the svg
  			$checksvg = $('.horizontal-tabs');

  			if ($checksvg[0]) {
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
  				responsive: [

  					{
  						breakpoint: 767,
  						settings: {
  							slidesToShow: 1,
  							slidesToScroll: 1,
  							infinite: true,
  							dots: true
  						}
  					},
  				]
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

  			var $slider2 = $('.slider2');
  			var $slider2Nav = $('.slider2-nav');

  			$slider2.slick({
  				slidesToScroll: 1,
  				slidesToShow: 1,
  				adaptiveHeight: true,
  				fade: true,
  				dots: false,
  				arrows: true,
  				infinite: true,
  				speed: 300,
  				asNavFor: '.slider2-nav',
  				prevArrow: $(".prev"),
  				nextArrow: $(".next"),
  				cssEase: 'ease-out',
  				variableWidth: false,
  				centerMode: false,
  			});

  			$slider2Nav.slick({
  				slidesToShow: 4,
  				slidesToScroll: 1,
  				dots: false,
  				infinite: true,
  				speed: 300,
  				fade: true,
  				centerMode: false,
  				asNavFor: '.slider2',
  				arrows: false,
  				cssEase: 'ease-out',
  				variableWidth: true,
  				focusOnSelect: true,
  			});

  			var $slider3 = $('.slider3');

  			$slider3.slick({
  				slidesToShow: 2,
  				slidesToScroll: 1,
  				autoplay: false,
  				arrows: true,
  				dots: false,
  				cssEase: 'ease-in-out',
  				speed: 350,
  				infinite: true,
  				prevArrow: $(".prev"),
  				nextArrow: $(".next"),
  				responsive: [

  					{
  						breakpoint: 767,
  						settings: {
  							slidesToShow: 1,
  							slidesToScroll: 1,
  							infinite: true,
  						}
  					},
  				]
  			});
  		},

  		tabs = function() {
  			$('.vertical-tabs__tabs li:first-child a, .timeline-tabs__tabs li:first-child a').trigger("click");
  			$('.horizontal-tabs .nav-pills li:first-child a').addClass('active');
  			$('.checklist-tabs .nav-pills li:first-child a').addClass('active');

  		},

  		mobileMenu = function() {
  			$('.hamburger-box').click(function(e) {
  				e.preventDefault();
  				$(this).toggleClass('active');
  				$(this).find('.hamburger').toggleClass('active');
  				$('.nav-modal').toggleClass('active');
  				$('.menu-mobile').toggleClass('show');
  				$('.custom-logo-link').toggleClass('hide');
  				$('.site-branding-mobile-logo').toggleClass('show');
  			});

  			$('.menu-mobile #primary-menu li .sub-menu').prepend('<li class="menu-item sub-close"><i class="fas fa-chevron-left"></i> Back</li>');

  			// Close out sub menu
  			$('.menu-item.sub-close').click(function(e) {
  				e.preventDefault();
  				e.stopPropagation();
  				$(this).parent().removeClass('is-active');
  				$(this).parent().addClass('marvin');
  			});

  			// Trigger sub menu
  			$('.menu-mobile #primary-menu > li').click(function(e) {
  				e.stopPropagation();

  				$(this).children().addClass('is-active');
  			});

  			$('.menu-mobile #primary-menu > li > a').click(function(e) {
  				$(this).next().removeClass('is-active');
  				e.stopPropagation();

  			});

  			// $('li.menu-item-has-children').click(function (e) {
  			//   $(this).find('.sub-menu').toggle();
  			// });
  		},

  		teamCards = function() {
  			$('.team-cards-card').click(function(event) {
  				$(this).next().addClass('show');
  				event.stopPropagation();
  			});

  			$(document).on("click", function(e) {
  				var $teamCard = $('.team-cards-card__modal-wrapper');
  				if ($(e.target).is($teamCard) === false) {
  					$teamCard.removeClass("show");
  				}
  			});
  		},

  		resources = function() {
  			var $blog = $('.page-template-page-blog');
  			var $tut = $('.page-template-page-tutorial');
  			var $video = $('.page-template-page-video');
  			var $ebook = $('.page-template-page-ebook');
  			var $case = $('.page-template-page-case-study');
  			var $podcast = $('.page-template-page-podcast');

  			window.setTimeout(function() {
  				// $('.facetwp-checkbox[data-value="blog"] .facetwp-display-value').text('Blogs');
  				// $('.facetwp-checkbox[data-value="tutorial"] .facetwp-display-value').text('Tutorials');
  				// $('.facetwp-checkbox[data-value="podcast"] .facetwp-display-value').text('Podcasts');
  				// $('.facetwp-checkbox[data-value="video"] .facetwp-display-value').text('Videos');

  				if ($blog[0]) {
  					$('.facetwp-checkbox[data-value="blog"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  				if ($tut[0]) {
  					$('.facetwp-checkbox[data-value="tutorial"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  				if ($video[0]) {
  					$('.facetwp-checkbox[data-value="video"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  				if ($ebook[0]) {
  					$('.facetwp-checkbox[data-value="ebook"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  				if ($case[0]) {
  					$('.facetwp-checkbox[data-value="case-study"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  				if ($podcast[0]) {
  					$('.facetwp-checkbox[data-value="podcast"]').trigger('click');
  					$('.facet-reset').addClass('inactive');
  				}
  			}, 250);

  			$('button.facet-reset').click(function(event) {
  				$(this).removeClass('inactive');
  				event.stopPropagation();

  			});

  			$(document).on('facetwp-loaded', function() {
  				if ($('.facetwp-checkbox').hasClass("checked")) {
  					$('button.facet-reset').addClass('inactive');
  				}
  			});
  		}


  	return {
  		init: init
  	};

  })(jQuery);

  jQuery(document).ready(behindFunctions.init);