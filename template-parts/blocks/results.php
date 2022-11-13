<section class="results-section">
    <div class="container narrow">
        <div class="row">
            <div class="col">
                <div class="results">
                    <?php if (have_rows( 'results')) : while (have_rows('results')) : the_row(); ?>
                        <div class="results-tab">
                            <h2><?php the_sub_field('title') ?></h2>
                            <p><?php the_sub_field('text') ?></p>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>