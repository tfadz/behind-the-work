<?php 

/**
 * Enqueue scripts and styles.
 */
function pensacola_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'pensacola-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

	wp_style_add_data( 'pensacola-style', 'rtl', 'replace' );
  
  wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/317f08a783.js', false );


	wp_enqueue_script( 'pensacola-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
  wp_enqueue_script( 'pensacola-scripts', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), '2', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pensacola_scripts' );


// Google Fonts
// function add_google_fonts() {
//   wp_enqueue_style( 'pensacola-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;700&family=DM+Serif+Display&display=swap', false );
// }
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// Add logo to Login Screen

function my_login_logo() { ?>
<?php 
  $logo = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $logo , 'full' );
  $image_url = $image[0];
 ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo $image_url ?>);
          background-position: center;
          background-repeat: no-repeat;
          background-size: contain;
          height: 150px;
          max-width: 100%;
          padding-bottom: 1rem;
          width: auto;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
 ?>