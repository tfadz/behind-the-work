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
  <div class="container">
    <div class="row">
      <div class="col">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
        ?>
      </div>
      <div class="col-sm-auto">
        <div class="site-info">
          <?php echo get_bloginfo(); ?> &copy;<?php echo date('Y'); ?> 
        </div>
      </div>
    </div>
  </div>
  
</footer>

<?php wp_footer(); ?>

</body>
</html>
