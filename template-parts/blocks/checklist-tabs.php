<div class="container checklist-tabs">
    <div class="row">
        <?php if (have_rows('checklist_tabs')): ?>
            
            <ul class="nav nav-pills" role="tablist">
                <?php $i=0; while (have_rows('checklist_tabs')) : the_row(); ?>
                    <?php 
                        $tab = get_sub_field('tab'); 
                        $string = sanitize_title(get_sub_field('tab')); 
                        $icon = get_sub_field('icon');
                        $nofill = get_sub_field('no_fill');
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#<?php echo $string ?>" role="tab" aria-controls="home" aria-selected="true">
                            <h5><?php echo $tab ?></h5></a>
                    </li>
                    <?php $i++; endwhile; ?>
                    
                </ul>
                
                <!-- /.col-md-4 -->
                
                <div class="tab-content" id="experienceTabContent">
                    <?php $i=0; while (have_rows('checklist_tabs')) : the_row(); ?>
                        <?php $tab = get_sub_field('tab'); $string = sanitize_title(get_sub_field('tab')); ?>
                        <div class="tab-pane show fade <?php if ($i==0) { ?>in active<?php } ?>" id="<?php echo $string ?>" role="tabpanel" aria-labelledby="home-tab">
                            <?php the_sub_field('content') ?>
                            <?php the_sub_field('table') ?>
                        
                        </div>
                        <?php $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
