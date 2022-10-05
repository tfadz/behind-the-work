<?php
/**

* Template Name: Resources

*/

get_header(); ?>

<main id="primary" class="site-main">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                while ( have_posts() ) :
                    the_post();
                    
                    get_template_part( 'template-parts/content', 'page' );
                    
                endwhile; 
                ?>
            </div>
        </div>
    </div>
    
    <?php global $post; ?>
    <section class="resources-gallery">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php get_template_part('template-parts/blocks/featured-post') ?>
                </div>
            </div>
            <div class="row pt1">
                <div class="col">
                    <div class="resources-gallery-pager">
                        <div>
                            <div class="show-me">SHOW ME:</div><?php echo do_shortcode('[facetwp facet="resources"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
                <?php echo do_shortcode('[facetwp template="resources"]'); ?>
        </div>
    </div>
</section>
</main>

<?php
get_footer();
