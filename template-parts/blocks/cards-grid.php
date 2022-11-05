<?php $reverse = get_field('reverse_cards') ?>

<section class="cards-grid-section <?php if($reverse) : ?>cards-grid--reverse<?php endif; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(get_field('cards_grid_eyebrow')) : ?><h6 class="bold"><?php the_field('cards_grid_eyebrow') ?></h6><?php endif; ?>
                <section class="cards-grid">
                    <?php if (have_rows('cards_grid')) : while (have_rows('cards_grid')) : the_row(); ?>
                        <article class="cards-grid-card">
                            <div class="cards-grid-card__body">
                                <?php $icon = get_sub_field('icon') ?>
                                <?php if($icon) : ?><img class="icon" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>"><?php endif; ?>
                                <h3><?php the_sub_field('title') ?></h3>
                            </div>
                            
                            <div class="cards-grid-card__overlay">
                                <div><?php the_sub_field('overlay') ?></div>
                            </div>
                        </article>
                    <?php endwhile; endif; ?>
                </section>
            </div>
        </div>
    </div>
</section>

