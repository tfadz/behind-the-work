<section class="timeline-tabs">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="timeline-tabs-container">
                    <div class="timeline-tabs-col">
                        <h5 class="section-heading">TIMELINE</h4>
                        <?php if( have_rows('timeline_tabs') ): ?>
                            <ul class="nav timeline-tabs__tabs flex-column" id="myTab" role="tablist">
                                <?php $i=0; while ( have_rows('timeline_tabs') ) : the_row(); ?>
                                    <?php 
                                    $string = sanitize_title( get_sub_field('tab') ); 
                                    ?>
                                    <li role="presentation" <?php if ($i==0) { ?>class="active"<?php } ?>>
                                        <a href="#<?php echo $string ?>" aria-controls="<?php echo $string ?>" role="tab" data-toggle="tab"><?php the_sub_field('tab'); ?></a>
                                    </li>
                                    <?php $i++; endwhile; ?>
                                </ul>
                            </div>
                            <div class="tab-content timeline-tabs__content">
                                <?php $i=0; while ( have_rows('timeline_tabs') ) : the_row(); ?>
                                    <?php 
                                    $string = sanitize_title( get_sub_field('tab') ); 
                                    ?>
                                    <div role="tabpanel" class="tab-pane show fade <?php if ($i==0) { ?>in active<?php } ?>" id="<?php echo $string; ?>">
                                        <h4><?php the_sub_field('tab'); ?></h4>
                                        <div class="timeline-tabs__content__inner">

                                        <p><?php the_sub_field('content') ?></p>
                                        <?php if(get_sub_field('cta')) : ?>
                                            <?php $link = get_sub_field('cta_link'); ?>
                                            <a class="cta-link" href=""><?php the_sub_field('cta') ?></a>
                                        <?php endif; ?></div>
                                        
                                    </div>
                                    <?php $i++; endwhile; ?>
                                </div>
                            <?php endif; ?>
                </div>
            </div>
                </div>
            </div>
        </section>