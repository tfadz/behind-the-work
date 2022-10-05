

<?php while (have_posts()) { the_post(); ?>
    <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>" class="post">
<?php $featured_img_url = get_the_post_thumbnail_url(); ?>
<figure class="featured-img"><img src="<?php echo $featured_img_url ?>" alt=""></figure>
<?php
$terms = get_the_terms($post->ID, 'resource_type');
foreach ($terms as $term) {
echo '<h6 class="section-heading">' . $term->name . '</h6>';
}
?>
<h5><?php the_title(); ?></h5>
<?php
$terms = get_the_terms($post->ID, 'resource_type');
foreach ($terms as $term) {
echo '<h6 class="cta">' . '<span>read</span> ' . $term->name . '</h6>';
}
?>
</a>
</div>
<?php
}
?>

