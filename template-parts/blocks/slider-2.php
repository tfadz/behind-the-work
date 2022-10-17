<section class="slider2-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slider2-heading">
                    <h5>WHO WE ARE</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="slick-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slider2-nav">
                        <?php if (have_rows( 'slider_design2')) : while (have_rows('slider_design2')) : the_row(); ?>
                            <div><h2><?php the_sub_field('title') ?></h2></div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slick-arrows">
                        <button class="prev"></button>
                        <button class="next"></button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slider2">
            <?php if (have_rows('slider_design2')) : while (have_rows('slider_design2')) : the_row(); ?>
                <?php $img = get_sub_field('image') ?>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider2-content"><p class="small"><?php the_sub_field('text') ?></p></div>
                            </div>
                            <div class="col-md-5">
                                <figure class="slider2-image">
                                    <img src="<?php echo $img['url'] ?>" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        
    </div>
</section>