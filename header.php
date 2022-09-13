<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pensacola
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
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;400;700&family=DM+Serif+Display&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pensacola' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">
		<div class="row site-header-row">
			<div class="col-sm-6 col-md-3">
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
      <div class="col-sm-6 col-md-9">

      <nav id="site-navigation" class="main-navigation">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
        ?>
        <?php get_template_part('template-parts/nav/hamburger') ?>

        </nav>

    	</div>
		</div>

	</div>
	</header>
  <?php get_template_part('template-parts/nav/mobile-menu') ?>

