<?php
// ACF Blocks

function acf_blocks_init()
{

    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => '/template-parts/blocks/hero.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('Accordion'),
        'render_template'   => '/template-parts/blocks/accordion.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'home_hero',
        'title'             => __('Home Hero'),
        'render_template'   => '/template-parts/blocks/home-hero.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'image_card',
        'title'             => __('Image Card'),
        'render_template'   => '/template-parts/blocks/image-card.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'video_card',
        'title'             => __('Video Card'),
        'render_template'   => '/template-parts/blocks/video-card.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'checklist_tabs',
        'title'             => __('Checklist Tabs'),
        'render_template'   => '/template-parts/blocks/checklist-tabs.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'team_cards',
        'title'             => __('Team Cards'),
        'render_template'   => '/template-parts/blocks/team-cards.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    
    acf_register_block_type(array(
        'name'              => 'cards_grid',
        'title'             => __('Cards Grid'),
        'render_template'   => '/template-parts/blocks/cards-grid.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'timeline_tabs',
        'title'             => __('Timeline Tabs'),
        'render_template'   => '/template-parts/blocks/timeline-tabs.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'title_block',
        'title'             => __('Title Block'),
        'render_template'   => '/template-parts/blocks/title-block.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'testimonials',
        'title'             => __('Testimonials'),
        'render_template'   => '/template-parts/blocks/testimonials.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_resources',
        'title'             => __('Slider Resources'),
        'render_template'   => '/template-parts/blocks/slider-resources.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'vertical_tabs',
        'title'             => __('Vertical Tabs'),
        'render_template'   => '/template-parts/blocks/vertical-tabs.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'horizontal_tabs',
        'title'             => __('Horizontal Tabs'),
        'render_template'   => '/template-parts/blocks/horizontal-tabs.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_overlay',
        'title'             => __('Slider Design 1'),
        'render_template'   => '/template-parts/blocks/slider-overlay.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_design2',
        'title'             => __('Slider Design 2'),
        'render_template'   => '/template-parts/blocks/slider-2.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_design3',
        'title'             => __('Slider Design 3'),
        'render_template'   => '/template-parts/blocks/slider-3.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_design4',
        'title'             => __('Slider Design 4'),
        'render_template'   => '/template-parts/blocks/slider-4.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/images/behind-symbol.svg' ),
    ));


}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'acf_blocks_init');
}

function behind_category( $categories, $post )
{
   return array_merge
   (
      $categories, array
      (
         array
         (
            'slug' => 'behind-blocks',
            'title' => __('Behind Blocks', 'behind-blocks'),
         ),
      )
   );
}
add_filter( 'block_categories_all', 'behind_category', 10, 2);


