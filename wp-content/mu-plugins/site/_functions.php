<?php

function site_body_class() {
	global $post;
	
	$classes[] = $post->post_name;
	return $classes;
}
add_filter('body_class', 'site_body_class');



function site_link_title_class($value, $attr = null, $content = null) {
	// Remove special characters
	$value = str_replace('&gt;', '', $value);

	// Substitute dashes
	$value = str_replace(' ', '-', trim($value));

	// Make lower case
	$value = strtolower($value);

	return $value; 
}
add_filter('link_title_class', 'site_link_title_class');



function site_load_scripts() {
	wp_register_script('waypoints', get_stylesheet_directory_uri() . '/dist/scripts/waypoints.js');
	wp_enqueue_script('waypoints', false, [], null, true);
}
add_action( 'init', 'site_load_scripts' );