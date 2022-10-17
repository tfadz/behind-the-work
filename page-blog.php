<?php
/**

* Template Name: Blog

*/

get_header(); ?>

<main id="primary" class="site-main">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                while (have_posts()) :
                    the_post();
                    
                    get_template_part('template-parts/content', 'page');
                    
                endwhile;
                ?>
            </div>
        </div>
    </div>
    
    <?php global $post; ?>
    <?php get_template_part('template-parts/facets/resources') ?>

</main>

<?php
get_footer();
