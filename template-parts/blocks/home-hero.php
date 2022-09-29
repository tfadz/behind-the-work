<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home-hero">
                    <div class="home-hero-left" data-aos="fade-up" data-aos-offset="0">
                        <h1 class="xl"><?php the_field('home_hero') ?></h1>
                        <?php the_field('home_hero_content') ?>
                        
                        <div class="home-hero-left-logos">
                            <?php if (have_rows( 'home_hero_logos')) : while (have_rows('home_hero_logos')) : the_row(); ?>
                                <?php $img = get_sub_field('image') ?>
                                <div>
                                    <img width="120" src="<?php echo $img['url'] ?>" />
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <section class="home-hero-resources">
                            <?php 
                            $posts = get_field('home_resources');
                            if( $posts ): ?>
                            <?php foreach( $posts as $p ): ?>
                                <!-- Category Label -->
                                
                                <a class="post" href="<?php the_permalink($p->ID); ?>">
                                    <?php $featured_img_url = get_the_post_thumbnail_url($p->ID,'medium_large'); ?>
                                    <div class="featured-img" style="background-image: url(<?php echo $featured_img_url ?>);"></div>
                                    <?php $terms = get_the_terms( $p->ID, 'resource_type' ); 
                                    foreach($terms as $term) {
                                        $term_link = get_term_link( $term );
                                        echo '<h6 class="section-heading">' . $term->name . '</h6>';
                                    } ?>
                                    <h5><?php echo get_the_title( $p->ID ); ?></h5>
                                </a>
                                
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </section>
                        
                    </div>
                    <div class="home-hero-right" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                        <?php the_field('home_hero_right_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>