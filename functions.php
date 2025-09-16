<?php
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