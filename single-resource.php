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
        get_template_part( 'template-parts/content-resource', get_post_type() );
    endwhile; // End of the loop.
    ?>
    
    <section class="section-padding pt3">
        <div class="container">
        
            <div class="row">
                <div class="col">
                    <h6 class="section-heading"><?php the_field('slider_resources') ?></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h5 class="section-heading">RESOURCES</h5>
                    <h3>Hear from our experts</h3>
                    <h6><strong>VIEW ALL OUR RESOURCES</strong></h6>
                </div>
                <div class="col-md-4">
                    <div class="resources-slider__slick-arrows">
                        <button class="prev-slide"></button>
                        <button class="next-slide"></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="section-heading dark">
                        <?php $res_ctalink = get_field('slider_resources_cta_link') ?>
                        <a href="<?php echo $res_ctalink['url'] ?>"><?php the_field('slider_resources_cta') ?></a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="container-right">
            <div class="row">
                <div class="col">
                    <div class="resources-slider">
                        
                        <?php 
                        $args = array(
                            'post_type' => 'resource',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'post__not_in' => array($post->ID),
                        );
                        
                        $query_posts = new WP_Query($args);
                        if( $query_posts->have_posts() ) : ?>
                        
                        <?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
                            <div>
                                <a class="post" href="<?php the_permalink(); ?>">
                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                                    <figure class="post-image"><img src="<?php echo $featured_img_url ?>" alt=""></figure>
                                    <div class="post-content">
                                        <?php
                                        $terms = get_the_terms($query_posts->ID, 'resource_type');
                                        foreach ($terms as $term) {
                                            echo '<h4 class="section-heading">' . $term->name . '</h4>';
                                        }
                                        ?>
                                        <h5><?php the_title(); ?></h5>
                                        <?php
                                        $cta = get_field('resource_cta', $post->ID);
                                        if($cta) :
                                            echo '<h6 class="cta">' . $cta . '</h6>';
                                            else :
                                        foreach ($terms as $term) {
                                            echo '<h6 class="cta">' . $term->description . '</h6>';
                                        }
                                    endif;
                                    ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?> 
                    <?php endif; ?>
                    <?php wp_reset_postdata();  ?> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>

<?php
get_footer();
