<section class="callout-section">
    <div class="container">
        <div class="callout">
            <div class="row">
                <div class="col-lg-8">
                    <h2><?php the_field('callout') ?></h2>
                </div>
                <div class="col-lg-4 callout-cta">
                    <?php $callout_cta = get_field('callout_cta_link'); ?>
                    <?php if($callout_cta) : ?>
                        <a class="cta-button" href="<?php echo $callout_cta['url'] ?>"><?php the_field('callout_cta') ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>