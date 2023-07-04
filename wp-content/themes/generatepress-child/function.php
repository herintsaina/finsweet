<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
}

function myagency_child_scripts() {
	// My custom css for the landing page.
	wp_enqueue_style( 'custom-child-style', get_stylesheet_directory_uri() .  '/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'myagency_child_scripts' );