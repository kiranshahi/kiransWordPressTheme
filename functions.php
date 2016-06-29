<?php

function kiransThemeResources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'kiransThemeResources');

//Navigation Menus

register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer'  => __( 'Footer Menu'),
	));