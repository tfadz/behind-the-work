<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
*/

?>

<footer id="colophon" class="footer">
    <div class="container narrow">
        <div class="row">
            <div class="col-lg-7">
                <div class="footer-primary">
                    <div class="footer-branding">
                        <div class="footer-branding-logo">
                            <?php $flogo = get_field('footer_logo', 'options'); ?>
                            <?php if($flogo) : ?>
                                <img src="<?php echo $flogo['url'] ?>" alt="">
                            <?php else : ?>
                                <?php the_custom_logo(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="footer-branding-social">
                            <div>
                                <?php the_field('footer_social', 'options') ?>
                            </div>
                        </div>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
                    <div class="footer-contact">
                        <div class="row">
                            <div class="col-lg-5">
                                <a class="phone" href="tel:<?php the_field('footer_phone', 'options') ?>"> <i class="far fa-phone-alt"></i> <strong><?php the_field('footer_phone', 'options') ?></strong></a>
                            </div>
                            <div class="col-lg-7 flex-right">
                                <a class="email" href="mailto:<?php the_field('footer_email', 'options') ?>"><i class="fal fa-envelope"></i> <strong><?php the_field('footer_email', 'options') ?></strong></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-content">
                    <?php the_field('footer_content', 'options') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-legal-section">
        <div class="container narrow">
            <div class="row footer-legal-row">
                <div class="col-lg-6">
                    <div class="footer-legal-copyright">
                        Copyright &copy;<?php echo date('Y'); ?> <?php the_field('footer_legal', 'options') ?>
                    </div>
                </div>
                <div class="col-lg-6 flex-right footer-legal-links">
                    <?php if(get_field('footer_links', 'options')) : ?>
                        <?php the_field('footer_links', 'options') ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>
