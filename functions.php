<?php
// define root of theme
define("THEME_DIR", get_template_directory_uri());

require_once('estates.php');

/* Add MSPECS API settings page
require_once('inc/options.php'); */

// remove version info meta
remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
add_theme_support('menus');

function mspecs_scripts() {
    wp_enqueue_style('mspecs-css', THEME_DIR . '/dist/main.css', '1.0.0');
    wp_enqueue_script('mspecs-js', THEME_DIR . '/dist/app.min.js', '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mspecs_scripts');

if (!function_exists('register_mspecs_theme_menus')) {
    function register_mspecs_theme_menus() {
        register_nav_menus( array('main' => __('Main Menu')) );
    }
}
add_action('init', 'register_mspecs_theme_menus');

// Add excerpt link
function add_read_more_link( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'mspecs') . '</a>';
}
add_filter( 'excerpt_more', 'add_read_more_link' );

