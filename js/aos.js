jQuery(function($) {
	
	AOS.init({
		offset: 300,
		once: false,
		duration: 600,
		easing: 'ease-in-out',
		delay: 150
	})

	//refresh animations
	 $(window).on('load', function() {
	    AOS.refresh();
	 });

});