<?php

// Add Theme Options
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_set_options_page_menu('Theme Options');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Navigation');
    acf_add_options_sub_page('Resources');


	acf_add_options_sub_page(array(
		'page_title'  => 'Footer',
		'menu_title'  => 'Footer',
		'menu_slug'   => 'theme-options-footer',
		'capability'  => 'edit_posts',
		'parent_slug' => 'theme-options',
		'position'    => false,
		'icon_url'    => false,
	));


	acf_add_options_sub_page(array(
		'page_title'  => 'Header',
		'menu_title'  => 'Header',
		'menu_slug'   => 'theme-options-header',
		'capability'  => 'edit_posts',
		'parent_slug' => 'theme-options',
		'position'    => false,
		'icon_url'    => false,
	));
    
    acf_add_options_sub_page(array(
		'page_title'  => 'Navigation',
		'menu_title'  => 'Navigation',
		'menu_slug'   => 'theme-options-navigation',
		'capability'  => 'edit_posts',
		'parent_slug' => 'theme-options',
		'position'    => false,
		'icon_url'    => false,
	));
    acf_add_options_sub_page(array(
		'page_title'  => 'Resources',
		'menu_title'  => 'Resources',
		'menu_slug'   => 'theme-options-resources',
		'capability'  => 'edit_posts',
		'parent_slug' => 'theme-options',
		'position'    => false,
		'icon_url'    => false,
	));
  
}
