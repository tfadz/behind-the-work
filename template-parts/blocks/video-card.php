<?php if(get_field('video_card')) : ?>
<?php
$vid = get_field('video_card');
$vid_card = get_field('video_card', false, false);
//get wp_oEmed object, not a public method. new WP_oEmbed() would also be possible
$oembed = _wp_oembed_get_object();
//get provider
$provider = $oembed->get_provider($vid_card);
//fetch oembed data as an object
$oembed_data = $oembed->fetch( $provider, $vid_card );
$thumbnail = $oembed_data->thumbnail_url;
$iframe = $oembed_data->html;
$pull_up = get_field('pull_up');
?>

<figure class="video-card <?php if($pull_up) : ?>pull-up<?php endif; ?>">
    <?php 
    if ( $vid ) {
        if ( preg_match('/src="(.+?)"/', $vid, $matches) ) {
            $src = $matches[1];
            $params = array(
                'controls'    => 0,
                'hd'        => 1,
                'autoplay' => 0,
                'loop' => 1
            );
            $new_src = add_query_arg($params, $src);
            $vid = str_replace($src, $new_src, $vid);
            $attributes = 'frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen';
            $vid = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $vid);
        }
        echo '<div class="video-embed video-iframe">', $vid, '</div>';
    }
    ?>
<div class="video-card-cta">
    <div class="video-card-cta-btn">
        <img src="<?php bloginfo('template_directory'); ?>/images/play-btn.svg" alt="">
        <h6 class="cta"><?php the_field('video_card_cta') ?></h6>
    </div>
    <div class="video-card-pause"></div>
</div>
<div class="video-card-content">
    <div>
        <h6><?php the_field('video_card_eyebrow') ?></h6>
        <h2><?php the_field('video_card_title') ?></h2>

    </div>
</div>
</a>
</figure>

<?php endif; ?>

<script>
 jQuery(function($) {
     var player = new Vimeo.Player(document.querySelector('iframe'));
     $('.video-card-cta-btn').click(function(e) {
       player.play();
       $(this).hide();
       $('.video-card-content').hide();
       $('.video-card-pause').addClass('show');
     });
     $('.video-card-pause').click(function(e) {
       player.pause();
       $('.video-card-cta-btn').show();
       $(this).removeClass('show');
       $('.video-card-content').show();
     });

 });
</script>