<?php
/**
 * 3P Child Clean Test Functions
 * 
 * Child theme for Neve with 3P Life Operating System features
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function threep_neve_child_styles() {
    // Enqueue parent theme style
    wp_enqueue_style(
        'neve-parent-style', 
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Enqueue child theme style
    wp_enqueue_style(
        'threep-child-style', 
        get_stylesheet_uri(),
        array('neve-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'threep_neve_child_styles');

/**
 * Enqueue Typeform script for wedding planner pages
 */
function threep_enqueue_typeform_script() {
    if (is_page_template('page-new-wedding.php')) {
        wp_enqueue_script(
            'typeform-embed',
            '//embed.typeform.com/next/embed.js',
            array(),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'threep_enqueue_typeform_script');

/**
 * 3P Content loader for markdown content
 * 
 * @param string $page_slug The slug of the page to load content for
 * @return string|false Processed content or false if file doesn't exist
 */
function load_3p_content($page_slug) {
    $content_dir = get_stylesheet_directory() . '/content-templates/';
    $content_file = $content_dir . sanitize_file_name($page_slug) . '.md';
    
    if (!file_exists($content_file)) {
        return false;
    }
    
    $content = file_get_contents($content_file);
    
    if ($content === false) {
        return false;
    }
    
    // Basic markdown processing - convert line breaks
    $content = nl2br(esc_html($content));
    
    // Process basic markdown syntax
    $content = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $content);
    $content = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $content);
    $content = preg_replace('/^### (.*?)$/m', '<h3>$1</h3>', $content);
    $content = preg_replace('/^## (.*?)$/m', '<h2>$1</h2>', $content);
    $content = preg_replace('/^# (.*?)$/m', '<h1>$1</h1>', $content);
    
    return $content;
}

/**
 * Add custom body classes for 3P pages
 */
function threep_custom_body_classes($classes) {
    if (is_page_template('page-new-wedding.php')) {
        $classes[] = 'threep-wedding-planner';
        $classes[] = 'threep-landing-page';
    }
    
    return $classes;
}
add_filter('body_class', 'threep_custom_body_classes');

/**
 * Custom excerpt length for 3P content
 */
function threep_custom_excerpt_length($length) {
    if (is_page_template('page-new-wedding.php')) {
        return 30;
    }
    return $length;
}
add_filter('excerpt_length', 'threep_custom_excerpt_length');

/**
 * Add 3P meta tags for SEO
 */
function threep_add_meta_tags() {
    if (is_page_template('page-new-wedding.php')) {
        echo '<meta name="description" content="Free personalized wedding planner using proven 3P Life Operating System methodology. Plan, Protect, Perform your perfect wedding day.">' . "\n";
        echo '<meta property="og:title" content="Free Wedding Planner - 3P Life Operating System">' . "\n";
        echo '<meta property="og:description" content="Get your customized wedding plan using our proven project management methodology.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
    }
}
add_action('wp_head', 'threep_add_meta_tags');

/**
 * Disable comments on wedding planner pages
 */
function threep_disable_comments_on_wedding_pages($open, $post_id) {
    $post = get_post($post_id);
    if ($post && get_page_template_slug($post_id) === 'page-new-wedding.php') {
        return false;
    }
    return $open;
}
add_filter('comments_open', 'threep_disable_comments_on_wedding_pages', 10, 2);