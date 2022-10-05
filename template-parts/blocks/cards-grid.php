<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="cards-grid">
                    <?php if (have_rows('cards_grid')) : while (have_rows('cards_grid')) : the_row(); ?>
                        <article class="cards-grid-card">
                            <div class="cards-grid-card__body">
                                <?php $icon = get_sub_field('icon') ?>
                                <?php if($icon) : ?><img class="icon" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>"><?php endif; ?>
                                <h3><?php the_sub_field('title') ?></h3>
                                <div><?php the_sub_field('content') ?></div>
                            </div>
                            
                            <div class="cards-grid-card__overlay">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo recusandae sequi quibusdam rem maiores ipsam provident, quaerat, eum facilis eos accusantium doloremque fugiat voluptatum necessitatibus eius facere id commodi esse.</p>
                            </div>
                        </article>
                    <?php endwhile; endif; ?>
                </section>
            </div>
        </div>
    </div>
</section>

