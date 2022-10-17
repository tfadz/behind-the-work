<section class="resources-gallery">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php get_template_part('template-parts/blocks/featured-post') ?>
            </div>
        </div>
        <div class="row pt1">
            <div class="col">
                <div class="resources-gallery-pager">
                    <div>
                        <div class="show-me">SHOW ME: <button value="Reset" onclick="FWP.reset()" class="facet-reset">ALL</button></div><?php echo do_shortcode('[facetwp facet="resources"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[facetwp template="resources"]'); ?>
        <div class="resources-gallery-pagination">
            <div><?php echo do_shortcode('[facetwp facet="pagination"]'); ?></div>
        </div>
    </div>
</section>