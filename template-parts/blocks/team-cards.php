<section class="team-cards-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="section-heading">OUR TEAM</h5>
                <section class="team-cards">
                    <?php 
                        $members = get_field('team_cards');
                        if( $members ): ?>
                        <?php foreach( $members as $member ): ?>
                            
                            <article class="team-cards-card">
                                <div class="team-cards-card__body">
                                    <?php $excerpt = get_the_excerpt( $member->ID ); ?>
                                    <?php $featured_img_url = get_the_post_thumbnail_url($member->ID,'medium_large'); ?>
                                    <div class="featured-img" style="background-image: url(<?php echo $featured_img_url ?>);"></div>
                                    <div class="team-cards-card__title">
                                        <h5><?php echo get_the_title( $member->ID ); ?></h5>
                                        <h6><?php the_field('member_title', $member->ID) ?></h6>
                                    </div>
                                </div>
                                <div class="team-cards-card__overlay">
                                    <p><?php echo esc_html( $excerpt); ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
</section>

