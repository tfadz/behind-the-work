<section class="slider3-section">
<div class="container-right">
    <div class="row">
        <div class="col">
            
            <div class="slick-arrows">
                <button class="prev prev-arrow"></button>
                <button class="next next-arrow"></button>
            </div>
            <div class="slider3">
                <?php if (have_rows('slider_design3')) : while (have_rows('slider_design3')) : the_row(); ?>
                    <?php $img = get_sub_field('image') ?>
                    <div>
                        <a href="<?php echo $img['url'] ?>" class="slider3-image" data-lity>
                            <img src="<?php echo $img['url'] ?>" />
                        </a>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            
        </div>
    </div>
</div>
</section>