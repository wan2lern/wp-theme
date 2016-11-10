<?php
/*** Remove Wordpress version info meta tagg ***/
remove_action('wp_head', 'wp_generator');

function mspecs_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('flexbox', THEME_DIR . '/css/flexbox.css');
    wp_enqueue_script('jquery', THEME_DIR . '/js/vendor/jquery.min.js', '3.1.1', true);
    wp_enqueue_script('app', THEME_DIR . '/js/app.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'mspecs_scripts');