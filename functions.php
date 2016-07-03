<?php

function kiransThemeResources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'kiransThemeResources');

//Navigation Menus

register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer'  => __( 'Footer Menu' ),
	));

//Get top ancestor
function get_top_ancestor_id() {


	global $post;


	if ($post->post_parent) {


		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}

	return $post->ID;

}


// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');