<?php
/**
 * 3P Neve Child Theme Functions
 * 
 * Child theme for Neve with 3P Life Operating System features
 * Version: 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function threep_neve_child_styles() {
    $parent_version = wp_get_theme()->parent() ? wp_get_theme()->parent()->get('Version') : '1.0.0';
    $child_version = wp_get_theme()->get('Version');
    
    // Enqueue parent theme style
    wp_enqueue_style(
        'neve-parent-style', 
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_version
    );
    
    // Enqueue child theme style
    wp_enqueue_style(
        'threep-child-style', 
        get_stylesheet_uri(),
        array('neve-parent-style'),
        $child_version
    );
}
add_action('wp_enqueue_scripts', 'threep_neve_child_styles');

/**
 * Enqueue Typeform script for wedding planner pages
 */
function threep_enqueue_typeform_script() {
    if (is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php')) {
        wp_enqueue_script(
            'typeform-embed',
            'https://embed.typeform.com/next/embed.js',
            array(),
            '1.0.0',
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
    // Wedding planner pages
    if (is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php')) {
        $classes[] = 'threep-wedding-planner';
        $classes[] = 'threep-landing-page';
    }
    
    // Homepage with custom template
    if (is_front_page() && get_page_template_slug() === 'front-page.php') {
        $classes[] = 'threep-homepage';
        $classes[] = 'threep-landing-page';
    }
    
    // Add 3P system identifier
    $classes[] = 'threep-system';
    
    return $classes;
}
add_filter('body_class', 'threep_custom_body_classes');

/**
 * Custom excerpt length for 3P content
 */
function threep_custom_excerpt_length($length) {
    if (is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php')) {
        return 30;
    }
    return $length;
}
add_filter('excerpt_length', 'threep_custom_excerpt_length');

/**
 * Add 3P meta tags for SEO
 */
function threep_add_meta_tags() {
    // Wedding planner pages
    if (is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php')) {
        echo '<meta name="description" content="Free personalized wedding planner using proven 3P Life Operating System methodology. Plan, Protect, Perform your perfect wedding day.">' . "\n";
        echo '<meta property="og:title" content="Free Wedding Planner - 3P Life Operating System">' . "\n";
        echo '<meta property="og:description" content="Get your customized wedding plan using our proven project management methodology.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:image" content="' . get_stylesheet_directory_uri() . '/assets/images/3p-wedding-og.jpg">' . "\n";
    }
    
    // Homepage meta tags
    if (is_front_page()) {
        echo '<meta name="description" content="Master life\'s biggest projects with our proven 3P system. Free personalized planning tools for weddings, moving, and major life events.">' . "\n";
        echo '<meta property="og:title" content="3P Life Operating System | Plan, Protect, Perform">' . "\n";
        echo '<meta property="og:description" content="Professional project management principles adapted for personal life planning.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:image" content="' . get_stylesheet_directory_uri() . '/assets/images/3p-system-og.jpg">' . "\n";
    }
    
    // Schema.org markup for 3P system
    if (is_front_page() || is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php')) {
        echo '<script type="application/ld+json">' . "\n";
        echo '{' . "\n";
        echo '  "@context": "https://schema.org",' . "\n";
        echo '  "@type": "Organization",' . "\n";
        echo '  "name": "3P Life Operating System",' . "\n";
        echo '  "description": "Professional project management principles adapted for personal life planning",' . "\n";
        echo '  "url": "' . home_url() . '",' . "\n";
        echo '  "sameAs": []' . "\n";
        echo '}' . "\n";
        echo '</script>' . "\n";
    }
}
add_action('wp_head', 'threep_add_meta_tags');

/**
 * Disable comments on wedding planner pages
 */
function threep_disable_comments_on_wedding_pages($open, $post_id) {
    $post = get_post($post_id);
    if (!$post) {
        return $open;
    }
    
    $template_slug = get_page_template_slug($post_id);
    if ($template_slug === 'page-new-wedding.php' || $template_slug === 'page-wedding.php') {
        return false;
    }
    
    return $open;
}
add_filter('comments_open', 'threep_disable_comments_on_wedding_pages', 10, 2);

/**
 * Handle newsletter signup
 */
function threep_handle_newsletter_signup() {
    if (!isset($_POST['newsletter_email']) || !isset($_POST['newsletter_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['newsletter_nonce'], 'newsletter_signup')) {
        wp_die('Security check failed');
    }
    
    $email = sanitize_email($_POST['newsletter_email']);
    
    if (!is_email($email)) {
        wp_die('Invalid email address');
    }
    
    // Store email (you can integrate with your preferred email service)
    $stored = update_option('threep_newsletter_' . md5($email), array(
        'email' => $email,
        'signup_date' => current_time('mysql'),
        'source' => 'wedding_planner'
    ));
    
    if ($stored) {
        wp_redirect(add_query_arg('newsletter', 'success', home_url()));
    } else {
        wp_redirect(add_query_arg('newsletter', 'error', home_url()));
    }
    exit;
}
add_action('init', 'threep_handle_newsletter_signup');

/**
 * Add custom CSS for 3P styling
 */
function threep_custom_styles() {
    if (is_page_template('page-new-wedding.php') || is_page_template('page-wedding.php') || is_front_page()) {
        ?>
        <style type="text/css">
        .threep-landing-page {
            --threep-primary: #4a90e2;
            --threep-secondary: #7b68ee;
            --threep-accent: #ff6b6b;
            --threep-text: #2c3e50;
            --threep-light: #f8f9fa;
        }
        
        .threep-hero {
            background: linear-gradient(135deg, var(--threep-primary), var(--threep-secondary));
            color: white;
            padding: 60px 0;
        }
        
        .threep-cta-button {
            background: var(--threep-accent);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .threep-cta-button:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }
        
        .threep-feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .threep-feature-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .threep-feature-card:hover {
            transform: translateY(-5px);
        }
        
        @media (max-width: 768px) {
            .threep-hero {
                padding: 40px 0;
            }
            
            .threep-feature-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        </style>
        <?php
    }
}
add_action('wp_head', 'threep_custom_styles');

/**
 * Add defer attribute to non-critical scripts
 */
function threep_add_defer_attribute($tag, $handle, $src) {
    $defer_scripts = array(
        'typeform-embed',
        'neve-script'
    );
    
    if (in_array($handle, $defer_scripts)) {
        return str_replace('<script ', '<script defer ', $tag);
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'threep_add_defer_attribute', 10, 3);

/**
 * Remove unnecessary WordPress features for performance
 */
function threep_clean_wp_head() {
    // Remove unnecessary meta tags
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove emoji scripts (use real emojis instead)
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('after_setup_theme', 'threep_clean_wp_head');

/**
 * Security enhancements
 */
function threep_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'threep_security_headers');

/**
 * Fix AI Engine cron schedule
 */
function threep_add_ai_engine_cron_schedule($schedules) {
    $schedules['one_minute'] = array(
        'interval' => 60,
        'display' => 'Every Minute'
    );
    return $schedules;
}
add_filter('cron_schedules', 'threep_add_ai_engine_cron_schedule');

/**
 * Force REST API route registration for AI Engine
 */
function threep_force_ai_engine_routes() {
    if (class_exists('Meow_MWAI_Core')) {
        global $mwai_core;
        if ($mwai_core && method_exists($mwai_core, 'rest_api_init')) {
            remove_action('rest_api_init', array($mwai_core, 'rest_api_init'));
            add_action('rest_api_init', array($mwai_core, 'rest_api_init'), 5);
        }
    }
}
add_action('init', 'threep_force_ai_engine_routes');