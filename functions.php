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
}
add_action('wp_enqueue_scripts', 'threep_neve_child_styles');

// Load 3P content function (SINGLE DEFINITION)
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

// Add 3P shortcode
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
?>