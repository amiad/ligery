<?php
/*
Plugin Name: Lity for WordPress
Description: Lightweight, accessible and responsive lightbox for Wordpress.
Plugin URI: http://hatul.info/lity
Version: 0.1
Author: Hatul
Author URI: http://hatul.info
License: GPL http://www.gnu.org/copyleft/gpl.html
*/

function lity_assets() {
    wp_register_style('lity-css', plugins_url('js-lity/lity.min.css', __FILE__));
    wp_enqueue_style('lity-css');
    wp_register_script('lity-js', plugins_url('js-lity/lity.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('lity-js');
    wp_register_script('wp-lity', plugins_url('wp-lity.js', __FILE__), array('lity-js'));
    wp_enqueue_script('wp-lity');
}

add_action('wp_enqueue_scripts', 'lity_assets');
