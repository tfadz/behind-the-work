<section class="slick-overlay-section">
    <div class="slick-overlay-heading">
        <h5>WHO WE ARE</h5>
    </div>

    <div class="slick-arrows-wrapper">
        <div class="slick-arrows-wrapper__main">
            <button class="prev"></button>
            <button class="next"></button>
        </div>
    </div>
    <div class="slick-container">
        <div class="slick-overlay">
            <?php if (have_rows( 'slider_overlay')) : while (have_rows('slider_overlay')) : the_row(); ?>
                <?php $img = get_sub_field('image') ?>
                <div>
                    <img src="<?php echo $img['url'] ?>" />
                    <div class="content"><p><?php the_sub_field('text') ?></p></div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="slick-overlay-nav">
            <?php if (have_rows( 'slider_overlay')) : while (have_rows('slider_overlay')) : the_row(); ?>
                <div><h2><?php the_sub_field('title') ?></h2></div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>