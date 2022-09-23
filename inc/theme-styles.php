<?php 

/**
 * Enqueue scripts and styles.
 */
 function behind_scripts() {
     wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' );
     wp_enqueue_style( 'behind-style', get_stylesheet_uri(), array(), _S_VERSION );
     wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
     
     wp_style_add_data( 'behind-style', 'rtl', 'replace' );
     
     wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/317f08a783.js', false );
     wp_enqueue_script( 'slick', get_template_directory_uri() . "/js/slick.js", array( 'jquery' ), '2', true );
     
     wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', false );

     
     wp_enqueue_script( 'behind-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
     wp_enqueue_script( 'behind-scripts', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), '2', true );
     
     
     if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
         wp_enqueue_script( 'comment-reply' );
     }
 }
 add_action( 'wp_enqueue_scripts', 'behind_scripts' );


// Google Fonts
// function add_google_fonts() {
//   wp_enqueue_style( 'behind-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;700&family=DM+Serif+Display&display=swap', false );
// }
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


// Add Gutenberg alignment options
add_theme_support( 'align-wide' );



// Button shortcode
function button_shortcode( $atts, $content = null ) {
    //set default attributes and values
    $values = shortcode_atts( array(
        'url'     => '#',
        'target'  => '_self',
        'color'   => '',
    ), $atts );
	     
    return '<a href="'. esc_attr($values['url']) .'"  target="'. esc_attr($values['target']) .'" class="button'. esc_attr($values['color']) .'">'. $content .' </a>';
 
}

add_shortcode('button', 'button_shortcode');



// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


// Menu Descriptions

function add_description_to_menu($item_output, $item, $depth, $args) {

   if (strlen($item->description) > 0 ) {
      // append description after link
      $item_output .= sprintf('<div class="menu-item-description">%s</div>', esc_html($item->description));
    
      // or.. insert description as last item inside the link ($item_output ends with "</a>{$args->after}")
      // $item_output = substr($item_output, 0, -strlen("</a>{$args->after}")) . sprintf('<span class="description">%s</span >', esc_html($item->description)) . "</a>{$args->after}";
   }   
   return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);

// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
// 
// function my_wp_nav_menu_objects( $items, $args ) {
// 
//     // loop
//     foreach( $items as &$item ) {
// 
//         // vars
//         $navHigh = get_field('nav_highlight', $item);
// 
//         // append icon
//         if( $navHigh ) {
//             $item->title .= '<div class="highlight">' . $navHigh .'</div>';
//         }
// 
//     }
// 
//     // return
//     return $items;
// }

/* EXTEND SUBNAV
******************************************/

class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='nav-tab-wrapper'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}




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