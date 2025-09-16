<?php
/**
 * 3P Neve Child Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue child theme stylesheet
function threep_neve_child_styles() {
    // Load parent theme stylesheet
    wp_enqueue_style('neve-parent-style', get_template_directory_uri() . '/style.css');
    
    // Load child theme stylesheet
    wp_enqueue_style('threep-child-style', get_stylesheet_directory_uri() . '/style.css', 
                     array('neve-parent-style'), '1.0.0');
    
    // Load 3P custom CSS
    wp_enqueue_style('threep-custom', get_stylesheet_directory_uri() . '/assets/css/3p-custom.css', 
                     array('threep-child-style'), '1.0.0');
    
    // Load 3P JavaScript
    wp_enqueue_script('threep-interactions', get_stylesheet_directory_uri() . '/assets/js/3p-interactions.js', 
                      array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'threep_neve_child_styles');

// Include 3P functionality
require_once get_stylesheet_directory() . '/includes/3p-content-loader.php';
require_once get_stylesheet_directory() . '/includes/3p-shortcodes.php';

// Add 3P-specific customizations
function threep_neve_customizations() {
    // Add support for 3P page templates
    add_theme_support('custom-page-templates');
    
    // Register 3P widget areas
    register_sidebar(array(
        'name' => '3P Methodology Sidebar',
        'id' => 'threep-methodology-sidebar',
        'description' => 'Sidebar for 3P methodology pages',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('after_setup_theme', 'threep_neve_customizations');

// Load 3P content function
function load_3p_content($page_slug) {
    $content_dir = get_stylesheet_directory() . '/content-templates/';
    $content_file = $content_dir . $page_slug . '.md';
    
    if (file_exists($content_file)) {
        $content = file_get_contents($content_file);
        
        // Parse frontmatter
        if (preg_match('/^---\n(.+?)\n---\n(.*)$/s', $content, $matches)) {
            $frontmatter = array();
            $lines = explode("\n", $matches[1]);
            foreach ($lines as $line) {
                if (strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $frontmatter[trim($key)] = trim($value, ' "\'');
                }
            }
            $body = $matches[2];
        } else {
            $frontmatter = array();
            $body = $content;
        }
        
        // Simple markdown processing
        $body = preg_replace('/^# (.+)$/m', '<h1>$1</h1>', $body);
        $body = preg_replace('/^## (.+)$/m', '<h2>$1</h2>', $body);
        $body = preg_replace('/^### (.+)$/m', '<h3>$1</h3>', $body);
        $body = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $body);
        $body = preg_replace('/\*(.+?)\*/', '<em>$1</em>', $body);
        $body = nl2br($body);
        
        return array(
            'meta' => $frontmatter,
            'content' => $body
        );
    }
    
    return false;
}

// Add 3P shortcodes
function threep_methodology_shortcode($atts) {
    ob_start();
    ?>
    <div class="threep-methodology">
        <div class="pillar-card">
            <span class="pillar-icon">🎯</span>
            <h3 class="pillar-title">PLAN</h3>
            <p class="pillar-description">Transform your biggest goals into manageable projects with clear timelines and success metrics.</p>
        </div>
        <div class="pillar-card">
            <span class="pillar-icon">🛡️</span>
            <h3 class="pillar-title">PROTECT</h3>
            <p class="pillar-description">Safeguard your projects and progress through comprehensive safety and security planning.</p>
        </div>
        <div class="pillar-card">
            <span class="pillar-icon">⚡</span>
            <h3 class="pillar-title">PERFORM</h3>
            <p class="pillar-description">Build daily systems that automatically advance your major life projects.</p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('3p_methodology', 'threep_methodology_shortcode');

// Custom post types for 3P resources
function threep_custom_post_types() {
    // 3P Resources
    register_post_type('threep_resource', array(
        'labels' => array(
            'name' => '3P Resources',
            'singular_name' => '3P Resource',
            'add_new' => 'Add New Resource',
            'add_new_item' => 'Add New 3P Resource',
            'edit_item' => 'Edit 3P Resource',
            'new_item' => 'New 3P Resource',
            'view_item' => 'View 3P Resource',
            'search_items' => 'Search 3P Resources',
            'not_found' => 'No 3P resources found',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-chart-line',
        'menu_position' => 25,
    ));
}
add_action('init', 'threep_custom_post_types');
// Add this new function at the end, before the closing ?>
function load_3p_content($page_slug) {
    $content_dir = get_stylesheet_directory() . '/content-templates/';
    $content_file = $content_dir . $page_slug . '.md';
    
    if (file_exists($content_file)) {
        $content = file_get_contents($content_file);
        // Simple processing - keep it minimal
        $content = nl2br(esc_html($content));
        return $content;
    }
    return false;
}


?>