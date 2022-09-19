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

    ));
    
    acf_register_block_type(array(
        'name'              => 'slider_resources',
        'title'             => __('Slider Resources'),
        'render_template'   => '/template-parts/blocks/slider-resources.php',
        'category'          => 'behind-blocks',
        'mode'              => 'edit',

    ));
    
    acf_register_block_type(array(
    'name'              => 'vertical_tabs',
    'title'             => __('Vertical Tabs'),
    'render_template'   => '/template-parts/blocks/vertical-tabs.php',
    'category'          => 'behind-blocks',
    'mode'              => 'edit',
));


}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'acf_blocks_init');
}


