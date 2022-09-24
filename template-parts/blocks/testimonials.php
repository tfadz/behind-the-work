<section class="testimonials <?php if(get_field('testimonials_reversed')) : ?>reversed<?php endif; ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if(get_field('testimonials_title')) : ?>
                    <h3><?php the_field('testimonials_title') ?></h2>
                <?php endif; ?>
            </div>
            
        </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonials-slider">
            <?php if (have_rows( 'testimonials')) : while (have_rows('testimonials')) : the_row(); ?>
              <div>
                  <div class="testimonial">
                    <h2><?php the_sub_field('quote') ?></h2>
                    <h6><strong><?php the_sub_field('name') ?></strong><?php the_sub_field('title') ?></h6>
                  </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
      </div>
      </div>
    </div>

</section>