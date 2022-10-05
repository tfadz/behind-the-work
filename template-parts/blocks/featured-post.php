
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
            
            foreach ($terms as $term) {
                if ($term->count > 0) {
                    echo '<h6 class="cta">' . '<span>read</span> ' . $term->name . '</h6>';
                }
            }
            ?>
        </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="featured-post__right">
    <?php echo do_shortcode('[gravityform id=3 name=Newsletter title=true description=true ajax=true]'); ?>
    <h6 class="text-center">FOLLOW US</h6>
    <div class="featured-post__right__social">
        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
    </div>
</div>
</article>
