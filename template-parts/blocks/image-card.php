<?php if(get_field('image_card')) : ?>
    <?php $img_card = get_field('image_card') ?>
    <figure class="image-card">
        <a href="#lightbox-img" data-lity>    
        <img src="<?php echo $img_card['url']  ?>" alt="">

        <div class="image-card-content">
            <div>
                <h6><?php the_field('image_card_eyebrow') ?></h6>
                <h2><?php the_field('image_card_title') ?></h2>

            </div>
        </div>
    </div>
    </figure>
    <div id="lightbox-img" class="lity-hide"><img src="<?php echo $img_card['url']  ?>" alt=""></div>

<?php endif; ?>