<section class="home-hero-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home-hero">
                    <div class="home-hero-left">
                        <h1 class="xl" data-aos="fade-up" data-aos-offset="0"><?php the_field('home_hero') ?></h1>
                        <?php the_field('home_hero_content') ?>
                        <div class="home-hero-left-logos" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                            <?php if (have_rows( 'home_hero_logos')) : while (have_rows('home_hero_logos')) : the_row(); ?>
                                <?php 
                                $img = get_sub_field('image');
                                $link = get_sub_field('link');
                                // $link_target = $link['target'];
                                ?>
                                <?php if($link) : ?>
                                    <a class="logo" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo $link['target']; ?>">
                                        <img width="120" src="<?php echo $img['url'] ?>" />
                                    </a>
                                <?php else : ?>
                                    <img class="logo" width="120" src="<?php echo $img['url'] ?>" />
                                <?php endif; ?>
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
                                    <?php
                                    $cta = get_field('resource_cta', $p->ID);
                                    if($cta) :
                                        echo '<h6 class="cta">' . $cta . '</h6>';
                                        else :
                                    foreach ($terms as $term) {
                                        echo '<h6 class="cta">' . $term->description . '</h6>';
                                    }
                                endif;

                                    ?>
                                </a>
                                
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </section>
                        
                    </div>
                    <div class="home-hero-right">
                        <div><?php the_field('home_hero_right_content') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>