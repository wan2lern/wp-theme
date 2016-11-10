<?php

define("THEME_DIR", get_template_directory_uri());

// remove version info meta
remove_action('wp_head', 'wp_generator');

// theme support
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
add_theme_support('menus');

// enqueue styles & scripts
function mspecs_scripts() {
    // styles
    wp_enqueue_style('mspecs-main', THEME_DIR . '/css/main.css');
    wp_enqueue_style('mspecs-flexbox', THEME_DIR . '/css/flexbox.css');
    
    // Load IE only stylesheet
	wp_enqueue_style( 'mspecs-ie', THEME_DIR . "/css/ie.css", array( 'mspecs' ) );
	wp_style_add_data( 'mspecs-ie', 'conditional', 'IE' );
	
    // Load IE7 specific stylesheet
	wp_enqueue_style( 'mspecs-ie7', THEME_DIR . "/css/ie7.css", array( 'mspecs' ) );
	wp_style_add_data( 'mspecs-ie7', 'conditional', 'IE 7' );
    
    // script
    // wp_enqueue_script('jquery', THEME_DIR . '/js/vendor/jquery.min.js', '3.1.1', true);
    wp_enqueue_script('app', THEME_DIR . '/js/app.js', array('jquery'), '1.0.0', true);
}

// action hook => styles & scripts
add_action('wp_enqueue_scripts', 'mspecs_scripts');

// register menu
if (!function_exists('register_mspecs_theme_menus')) {
    function register_cr8gr8designs_theme_menus() {
        register_nav_menus( array('main' => __('Main Menu')) );
    }
}

// action hook => meny
add_action('init', 'register_mspecs_theme_menus');
