<?php
//get theme name
$name = wp_get_theme();


if( function_exists('acf_add_options_page') ) {
	
	// add sub page
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global',
		'menu_title' 	=> 'Global'
		//'parent_slug' 	=> $parent['menu_slug'],
	));
	//set title
	acf_set_options_page_title( __($name) );
}