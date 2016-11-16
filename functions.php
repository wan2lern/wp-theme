<?php
// define root of theme
define("THEME_DIR", get_template_directory_uri());

/* Add MSPECS API settings page
require_once('inc/options.php'); */

// remove version info meta
remove_action('wp_head', 'wp_generator');

// theme support
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
add_theme_support('menus');

// enqueue styles & scripts
function mspecs_scripts() {
    // Load IE only stylesheet
	/*wp_enqueue_style( 'mspecs-ie', THEME_DIR . "/css/ie.css", array( 'mspecs' ) );
	wp_style_add_data( 'mspecs-ie', 'conditional', 'IE' );
	wp_enqueue_style( 'mspecs-ie7', THEME_DIR . "/css/ie7.css", array( 'mspecs' ) );
	wp_style_add_data( 'mspecs-ie7', 'conditional', 'IE 7' );
    wp_enqueue_style('normalize', THEME_DIR . '/css/normalize.css', '5.0.0');
    wp_enqueue_style('mspecs-flexbox', THEME_DIR . '/css/flexboxgrid.css', '2.0');
    wp_enqueue_style('mspecs-main', THEME_DIR . '/css/main.css', '1.0.1');*/
    
    wp_enqueue_style('mspecs-styles', THEME_DIR . '/styles/main.css', '1.0.0');
    
    /*  Comment all. Use minified version: bundle.js
    wp_enqueue_script('jquery', THEME_DIR . '/js/vendor/jquery.min.js', '3.1.1', true);
    wp_enqueue_script('modernizr-flexbox', THEME_DIR . '/js/vendor/modernizr.flexbox.js', '7.2.1');
    wp_enqueue_script('browser', THEME_DIR . '/js/vendor/browser.min.js', '1.0.0');
    wp_enqueue_script('react', THEME_DIR . '/js/vendor/react.min.js', '15.3.2');
    wp_enqueue_script('react-dom', THEME_DIR . '/js/vendor/react-dom.min.js', '15.3.2');
    wp_enqueue_script('app', THEME_DIR . '/js/app.js', array('jquery'), '1.0.1', true);*/
    
    wp_enqueue_script('bundle', THEME_DIR . '/dist/main.min.js', '1.0.0', true);
}

// action hook => styles & scripts
add_action('wp_enqueue_scripts', 'mspecs_scripts');

// register menu
if (!function_exists('register_mspecs_theme_menus')) {
    function register_mspecs_theme_menus() {
        register_nav_menus( array('main' => __('Main Menu')) );
    }
}

// action hook => meny
add_action('init', 'register_mspecs_theme_menus');