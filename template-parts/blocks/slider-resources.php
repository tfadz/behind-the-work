<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <h6 class="section-heading"><?php the_field('slider_resources') ?></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2><?php the_field('slider_resources_title') ?></h2>
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
                                    <?php foreach ( $terms as $term ) { ?>
                                        <?php if($term->name == 'Blog') : ?>
                                            <div class="cta">Read Blog</div>
                                        <?php elseif($term->name == 'Video') : ?>
                                        <div class="cta">Watch Video</div>
                                    <?php endif; ?>
                                    <?php }  ?>


                                    
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