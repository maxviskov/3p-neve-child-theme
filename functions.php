<?php
// Disable all caching for testing
if (!defined('WP_CACHE')) define('WP_CACHE', false);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

/**/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Child theme setup - minimal and safe
function threep_neve_child_styles() {
    wp_enqueue_style('neve-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('threep-child-style', get_stylesheet_uri(), array('neve-parent-style'));
}
add_action('wp_enqueue_scripts', 'threep_neve_child_styles');
?>