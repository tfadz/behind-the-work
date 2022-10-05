<?php 

/**
 * Enqueue scripts and styles.
 */
 function behind_scripts() {
     wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' );
     
     wp_enqueue_style( 'behind-style', get_stylesheet_uri(), array(), _S_VERSION );
     wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
     wp_enqueue_style( 'lity-css', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css' );
     
     wp_style_add_data( 'behind-style', 'rtl', 'replace' );
     
     wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/317f08a783.js', false );
     wp_enqueue_script( 'slick', get_template_directory_uri() . "/js/slick.js", array( 'jquery' ), '2', true );
     
     
     wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', false );
     wp_enqueue_script( 'behind-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
     wp_enqueue_script( 'aos-theme', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false );
     wp_enqueue_script( 'aos', get_template_directory_uri() . "/js/aos.js", array( 'jquery' ), '2', true );
     wp_enqueue_script( 'lity-js', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js', false );
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

// Excerpt
function my_excerpt_length($length){
return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


// Remove WP admin toolbar CSS
add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }


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

// Shortcode custom post resources

add_shortcode( 'list-posts-basic', 'rmcc_post_listing_shortcode1' );
function rmcc_post_listing_shortcode1( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'resource',
        'posts_per_page' => 2,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
        <ul class="posts-list">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <div class="posts-list-row">
                    <div class="posts-list-col">
                        <figure class="posts-list-img"><img src="<?php echo $featured_img_url ?>" alt=""></figure>
                    </div>
                    <div class="posts-list-col">
                    <a href="<?php the_permalink(); ?>">
                        <?php $terms = get_the_terms(get_the_ID(),'resource_type' ); 
                        foreach($terms as $term) {
                            $term_link = get_term_link( $term );
                            echo '<h5 class="term">' . $term->name . '</h5>';
                        } ?>
                        <h4 class="title"><?php the_title(); ?></h4>
                        <?php $terms = get_the_terms(get_the_ID(),'resource_type' ); 
                        foreach($terms as $term) {
                            $term_link = get_term_link( $term );
                            echo '<h5 class="sm cta">' . 'Go to ' . $term->name . '</h5>';
                        } ?>
                    </a>
                </div>
                </div>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
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