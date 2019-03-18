<?php
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
function enqueue_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	// wp_enqueue_style( 'name of css file', get_template_directory_uri(). '/adres of css file '); second css file connect ;

	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>