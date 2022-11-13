<div class="container horizontal-tabs">
    <div class="row">
        <?php if (have_rows('horizontal_tabs')): ?>
            <ul class="nav nav-pills" role="tablist">
                <?php $i=0; while (have_rows('horizontal_tabs')) : the_row(); ?>
                    <?php 
                        $tab = get_sub_field('tab'); 
                        $string = sanitize_title(get_sub_field('tab')); 
                        $icon = get_sub_field('icon');
                        $nofill = get_sub_field('no_fill');
                        $fontsize = get_field('horizontal_tabs_font');
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php if($nofill) : ?>no-fill<?php endif; ?>" id="home-tab" data-toggle="tab" href="#<?php echo $string ?>" role="tab" aria-controls="home" aria-selected="true">
                            <?php if($icon) : ?><img src="<?php echo $icon['url'] ?>" alt=""><?php endif; ?>
                            <h5 <?php if($fontsize) : ?>class="small"<?php endif; ?>><?php echo $tab ?></h5>
                            <div class="nav-item-mobile">
                                <p><?php the_sub_field('content') ?></p>
                            </div>
                        </a>
                    </li>
                    <?php $i++; endwhile; ?>
                </ul>
                
                <div class="tab-content" id="experienceTabContent">
                    <?php $i=0; while (have_rows('horizontal_tabs')) : the_row(); ?>
                        <?php $tab = get_sub_field('tab'); $string = sanitize_title(get_sub_field('tab')); ?>
                        <div class="tab-pane show fade <?php if ($i==0) { ?>in active<?php } ?>" id="<?php echo $string ?>" role="tabpanel" aria-labelledby="home-tab">
                            <h6 class="section-heading"><?php echo $tab ?></h6>
                            <p>
                                <?php the_sub_field('content') ?>
                            </p>
                        </div>
                        <?php $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
