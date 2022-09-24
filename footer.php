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
      <div class="col-md-8">
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
                      <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                      <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                      <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                      <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
              </div>
          </div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
      </div>
      <div class="col-md-4">
        <div class="footer-content">
            <?php the_field('footer_content'), 'options' ?>
        </div>
      </div>
    </div>
  </div>
 <div class="legal-section">
     <div class="container narrow">
         <div class="row">
             <div class="col">
                 <div class="legal">
                 Copyright &copy;<?php echo date('Y'); ?> Behind The Work. ALL RIGHTS RESERVED
                 </div>
             </div>
         </div>
     </div>
 </div>
  
</footer>

<?php wp_footer(); ?>

</body>
</html>
