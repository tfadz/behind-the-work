<section class="slider4-section">
    <div class="container">
        <div class="slider4">
            <?php if (have_rows('slider_design4')) : while (have_rows('slider_design4')) : the_row(); ?>
                    <div>
                    <?php $img = get_sub_field('image') ?>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="slider4-image">
                                <img src="<?php echo $img['url'] ?>" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="slider4-content">
                                <?php if(get_field('slider_design4_subhead')) : ?>
                                    <h6 class="section-heading"><?php the_field('slider_design4_subhead') ?></h5>
                                <?php endif; ?>
                                <div class="slider4-mobile-arrows">
                                    <div class="prev-slide"></div>
                                    <div class="next-slide"></div>
                                </div>
                                
                                <div><?php the_sub_field('content') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>