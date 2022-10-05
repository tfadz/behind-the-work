<section class="accordion-section">
<div class="container">
    <?php if(get_field('accordion_title')) : ?>
        <div class="row">
            <div class="col">
                <h2 class="section-heading"><?php the_field('accordion_title') ?></h2>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col">
        <?php if (have_rows('accordion') ) : while ( have_rows('accordion') ) : the_row(); ?>
        <div class="accordion">
            <div class="accordion-question"><h2><?php the_sub_field('title') ?></h2></div>
            <div class="accordion-answer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php if(get_sub_field('eyebrow')) : ?><h5 class="section-heading"><?php the_sub_field('eyebrow') ?></h5><?php endif; ?>
                            <?php the_sub_field('text') ?>
                            <?php $cta_link = get_sub_field('cta_link') ?>
                            <?php if(get_sub_field('cta')) : ?><a href="<?php echo $cta_link; ?>" class="cta button"><?php the_sub_field('cta') ?></a><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; 
        endif; ?>
        </div>
    </div>
</div>
</section>