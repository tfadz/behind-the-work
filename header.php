<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Behind_The_Work
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&family=Raleway:wght@400;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pensacola' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row site-header-row">
                <div class="col-md-2">
                    <div class="site-branding">
                        <?php if(has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-logo"><?php echo get_bloginfo(); ?></a>
                        <?php endif; ?>
                        <?php
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php
                            else :
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                            endif;
                            $premier_description = get_bloginfo( 'description', 'display' );
                            if ( $premier_description || is_customize_preview() ) :
                                ?>
                                
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    <div class="col-sm-6 col-md-10 nav-col">
                        <nav id="site-navigation" class="main-navigation">
                            
                            <div class="nav-tab hubspot">
                                <aside class="nav-tab-highlight">
                                    <?php the_field('nav_tab_1', 'options') ?>
                                </aside>
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'hubspot',
                                    'walker' => new submenu_wrap()
                                    ));
                                ?>
                            </div>
                            
                            <div class="nav-tab services">
                                <aside class="nav-tab-highlight">
                                    <?php the_field('nav_tab_2', 'options') ?>
                                </aside>
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'services',
                                    'walker' => new submenu_wrap()
                                    ));
                                ?>
                            </div>
                            
                            <div class="nav-tab industries">
                                <aside class="nav-tab-highlight">
                                    <?php the_field('nav_tab_3', 'options') ?>
                                </aside>
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'industries',
                                    'walker' => new submenu_wrap()
                                    ));
                                ?>
                            </div>
                            <div class="nav-tab btw">
                                <aside class="nav-tab-highlight">
                                    <?php the_field('nav_tab_4', 'options') ?>
                                </aside>
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'btw',
                                    'walker' => new submenu_wrap()
                                    ));
                                ?>
                            </div>
                            <div class="nav-tab resources">
                                <aside class="nav-tab-highlight">
                                    <?php the_field('nav_tab_5', 'options') ?>
                                </aside>
                                <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'resources',
                                    'walker' => new submenu_wrap()
                                    ));
                                ?>
                            </div>
                            
                            <a href="" class="button nav-tab-button">
                                REQUEST QUOTE
                            </a>
                            
                            <?php
                            // wp_nav_menu(
                            //     array(
                            //         'theme_location' => 'menu-1',
                            //         'menu_id'        => 'primary-menu',
                            //     )
                            // );
                            ?>
                            <?php get_template_part('template-parts/nav/hamburger') ?>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </header>
  <?php get_template_part('template-parts/nav/mobile-menu') ?>

