<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Behind_The_Work
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        
        get_template_part( 'template-parts/content-page', get_post_type() );
        
        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'behind-the-work' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'behind-the-work' ) . '</span> <span class="nav-title">%title</span>',
            )
        );
        
    endwhile; // End of the loop.
    ?>
</main>

<?php
get_footer();
