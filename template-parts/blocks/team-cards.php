<section class="team-cards-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (get_field('team_cards_eyebrow')) : ?><h5 class="section-heading"><?php the_field('team_cards_eyebrow') ?></h5><?php endif; ?>
                <?php if (get_field('team_cards_title')) : ?><h2><?php the_field('team_cards_title') ?></h2><?php endif; ?>
                <?php $f_first = get_field('feature_first'); ?>
                <div class="team-cards <?php if ($f_first) :?>feature-first<?php endif; ?>">
                    <?php
                    $members = get_field('team_cards');
                    if ($members): ?>
                    <?php setup_postdata($members); ?>
                    <?php foreach ($members as $member): ?>
                        <article class="team-cards-card">
                            <div class="team-cards-card__body">
                                <?php $excerpt = get_the_excerpt($member->ID); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url($member->ID, 'medium_large'); ?>
                                <?php $linkedin = get_field('linkedin', $member->ID); $instagram = get_field('instagram', $member->ID); ?>
                                <?php if ($linkedin) : ?>
                                    <a target="_blank" href="<?php echo esc_html($linkedin)?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                <?php if ($instagram) : ?>
                                    <a target="_blank" href="<?php echo esc_html($instagram)?>" class="instagram"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>
                                <div class="featured-img" style="background-image: url(<?php echo $featured_img_url ?>);"></div>
                                <div class="team-cards-card__title">
                                    <h5><?php echo get_the_title($member->ID); ?></h5>
                                    <h6><?php the_field('member_title', $member->ID) ?></h6>
                                </div>
                            </div>
                            <div class="team-cards-card__overlay">
                                <div>
                                    <p><?php echo esc_html($excerpt); ?></p>
                                    <div class="cta"><i class="fas fa-expand-arrows-alt"></i> READ FULL BIO</div>
                                </div>
                            </div>
                        </article>
                        <div class="team-cards-card__modal-wrapper">
                            <button class="close-btn">X</button>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="team-cards-card__modal">
                                            <div class="left">
                                                <?php $featured_img_url = get_the_post_thumbnail_url($member->ID, 'medium_large'); ?>
                                                <img class="featured-img" src="<?php echo $featured_img_url ?>" alt="">
                                            </div>
                                            <div class="right">
                                                <div class="right-social">
                                                    <?php if ($instagram) : ?>
                                                        <a target="_blank" href="<?php echo esc_html($instagram)?>" class="instagram"><i class="fab fa-instagram"></i></a>
                                                    <?php endif; ?>
                                                    <?php if ($linkedin) : ?>
                                                        <a target="_blank" href="<?php echo esc_html($linkedin)?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <h3><?php echo get_the_title($member->ID); ?></h3>
                                                <h6><?php the_field('member_title', $member->ID) ?></h6>
                                                <p>
                                                    <?php $output = apply_filters('the_content', $member->post_content);
                                                    echo $member->post_content; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="team-overlay"></div>