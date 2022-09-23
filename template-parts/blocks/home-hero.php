<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home-hero">
                    <div class="home-hero-left">
                        <h1 class="xl"><?php the_field('home_hero') ?></h1>
                        <?php the_field('home_hero_content') ?>
                        
                        <div class="home-hero-left-logos">
                            <?php if (have_rows( 'home_hero_logos')) : while (have_rows('home_hero_logos')) : the_row(); ?>
                                <?php $img = get_sub_field('image') ?>
                                <div>
                                    <img width="90" src="<?php echo $img['url'] ?>" />
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="home-hero-right">
                        <?php the_field('home_hero_right_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>