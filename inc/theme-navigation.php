<?php 

function register_my_menus() {
	register_nav_menus(
		array(
            'hubspot' => __( 'Hubspot' ),
            'services' => __( 'Services' ),
            'industries' => __( 'Industries' ),
            'btw' => __( 'BTW' ),
            'resources' => __( 'Resources' ),
			'footer-menu' => __( 'Footer Menu' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );

?>