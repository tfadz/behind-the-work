<?php while (have_posts()) { the_post(); ?>
    <div class="col-sm-4">
        <a href="<?php the_permalink(); ?>" class="post">
            <?php $featured_img_url = get_the_post_thumbnail_url(); $author = get_field('resource_author'); ?>
            <figure class="featured-img"><img src="<?php echo $featured_img_url ?>" alt=""></figure>
            <?php
            $terms = get_the_terms($post->ID, 'resource_type');
            foreach ($terms as $term) {
                echo '<h6 class="section-heading">' . $term->name . '</h6>';
            }
            ?>
            <h3><?php the_title(); ?></h3>
            <h5 class="contributer"><img src="<?php bloginfo('template_directory'); ?>/images/scribble-light.svg" alt=""> Contributed by <?php if($author) : ?>
                <?php echo $author; ?><?php else : ?><?php echo get_the_author(); ?><?php endif; ?></h5>
            <?php
            $terms = get_the_terms($post->ID, 'resource_type');
            foreach ($terms as $term) {
                echo '<h6 class="cta">' . $term->description . '</h6>';
            }
            ?>
        </a>
    </div>
<?php } ?>

