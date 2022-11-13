
<article class="featured-post">
    <div class="featured-post__left">
        <?php
        $posts = get_field('featured_post');
        if ($posts): ?>
        <?php foreach ($posts as $p): ?>
            <?php $featured_img_url = get_the_post_thumbnail_url($p->ID, 'medium_large'); ?>
            <a class="item" href="<?php the_permalink($p->ID); ?>">

            <figure class="featured-post__img">
                <img src="<?php echo $featured_img_url ?>" alt="">
            </figure>
            <div class="categories">
                <?php
                $terms = get_the_terms($p->ID, 'resource_type');
                foreach ($terms as $term) {
                    if ($term->count > 0) {
                        echo '<h6 class="category">' . $term->name . '</h6>';
                    }
                }
                ?>
            </div>
            <h4><?php echo get_the_title($p->ID); ?></h4>
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
</div>
<div class="featured-post__right">
    <div><?php the_field('resources_form', 'options') ?></div>
    <h6 class="text-center">FOLLOW US</h6>
    <div class="featured-post__right__social">
        <?php the_field('resources_social', 'options') ?>
    </div>
</div>
</article>
