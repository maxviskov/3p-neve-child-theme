<?php
/**
 * 3P Neve Child Theme Functions
 * 
 * Child theme for Neve with 3P Life Operating System features
 * Version: 1.0.0
 */


define('THREEP_EMAIL_SERVICE', 'mailchimp');

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

// Add this to your theme's functions.php file

/**
 * Ensure AI Engine chatbot scripts load properly
 */
 /*
function threep_ensure_chatbot_scripts() {
    // Only load on specific pages or if chatbot is needed
    if (is_page_template('page-wedding.php') || 
        is_page_template('page-new-wedding.php') || 
        is_front_page() || 
        is_home()) {
        
        // Ensure AI Engine scripts are loaded
        wp_enqueue_script('react');
        wp_enqueue_script('react-dom');
        wp_enqueue_script('wp-element');
        
        // Add inline script to help with chatbot initialization
        wp_add_inline_script('wp-element', '
            // 3P Chatbot initialization helper
            window.threepChatbotInit = function() {
                if (typeof window.mwai !== "undefined") {
                    console.log("3P: AI Engine chatbot initialized");
                    return true;
                } else {
                    console.warn("3P: AI Engine not yet available, retrying...");
                    setTimeout(window.threepChatbotInit, 500);
                    return false;
                }
            };
            
            // Start initialization check
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(window.threepChatbotInit, 1000);
            });
        ');
    }
}

add_action('wp_enqueue_scripts', 'threep_ensure_chatbot_scripts', 20);
*/
/**
 * Add chatbot debugging information for admin users
 */
function threep_chatbot_debug_info() {
    if (current_user_can('manage_options') && isset($_GET['chatbot_debug'])) {
        echo '<div style="position: fixed; top: 10px; right: 10px; background: #000; color: #0f0; padding: 10px; z-index: 99999; font-family: monospace; font-size: 12px;">';
        echo '<h4 style="color: #0f0; margin: 0 0 10px 0;">3P Chatbot Debug</h4>';
        echo '<div>✅ Debug mode active</div>';
        echo '<div>🔍 Check browser console for details</div>';
        echo '<div>📍 Page template: ' . basename(get_page_template()) . '</div>';
        echo '</div>';
        
        echo '<script>
        console.log("=== 3P CHATBOT DEBUG ===");
        console.log("Current page:", window.location.href);
        console.log("jQuery available:", typeof jQuery !== "undefined");
        console.log("React available:", typeof React !== "undefined");
        console.log("AI Engine available:", typeof window.mwai !== "undefined");
        
        // Check for chatbot container
        setTimeout(function() {
            const containers = document.querySelectorAll(".mwai-chatbot-container");
            console.log("Chatbot containers found:", containers.length);
            containers.forEach(function(container, index) {
                console.log("Container " + index + ":", container);
                console.log("Container data-params:", container.getAttribute("data-params"));
                console.log("Container data-system:", container.getAttribute("data-system"));
            });
        }, 2000);
        </script>';
    }
}
add_action('wp_footer', 'threep_chatbot_debug_info');

/**
 * Force AI Engine chatbot to load even if there are minor configuration issues
 */
function threep_force_chatbot_load() {
    // Check if AI Engine is active
    if (!class_exists('Meow_MWAI_Query_Text')) {
        return;
    }
    
    // Add a fallback for pages where chatbot should appear
    if (is_page_template('page-wedding.php') || 
        is_page_template('page-new-wedding.php') || 
        is_front_page()) {
        
        // Ensure scripts are properly enqueued
        add_action('wp_footer', function() {
            echo '<script>
            // Fallback chatbot initialization
            if (typeof window.mwai === "undefined") {
                console.warn("3P: AI Engine not loaded, attempting manual initialization...");
                
                // Try to load the chatbot script manually
                const script = document.createElement("script");
                script.src = "' . plugins_url('ai-engine/dist/mwai_chatbot.js') . '";
                script.onload = function() {
                    console.log("3P: Chatbot script loaded manually");
                };
                script.onerror = function() {
                    console.error("3P: Failed to load chatbot script manually");
                };
                document.head.appendChild(script);
            }
            </script>';
        }, 99);
    }
}
add_action('wp_head', 'threep_force_chatbot_load');

/**
 * 3P Chatbot Diagnostic Tool
 * Add this as a temporary page or function to diagnose chatbot issues
 */

function threep_chatbot_diagnostic() {
    // Check if user has admin privileges
    if (!current_user_can('manage_options')) {
        return 'Access denied. Admin privileges required.';
    }
    
    echo '<div style="background: #f1f1f1; padding: 20px; margin: 20px; border-radius: 8px; font-family: monospace;">';
    echo '<h2 style="color: #333;">🔧 3P Chatbot Diagnostic Report</h2>';
    
    // Test 1: AI Engine Plugin
    echo '<h3>1. AI Engine Plugin Status</h3>';
    if (class_exists('Meow_MWAI_Query_Text')) {
        echo '✅ AI Engine plugin is active<br>';
        
        // Check for global mwai_core
        global $mwai_core;
        if ($mwai_core) {
            echo '✅ AI Engine core is loaded<br>';
        } else {
            echo '❌ AI Engine core is not loaded<br>';
        }
        
        // Check AI Engine options
        $mwai_options = get_option('mwai_options', array());
        if (!empty($mwai_options)) {
            echo '✅ AI Engine has configuration options<br>';
            
            $default_env = $mwai_options['ai_default_env'] ?? null;
            if ($default_env) {
                echo '✅ Default environment set: ' . esc_html($default_env) . '<br>';
            } else {
                echo '❌ No default environment configured<br>';
            }
            
            $envs = $mwai_options['ai_envs'] ?? array();
            if (!empty($envs)) {
                echo '✅ Found ' . count($envs) . ' AI environment(s)<br>';
            } else {
                echo '❌ No AI environments configured<br>';
            }
        } else {
            echo '❌ No AI Engine configuration found<br>';
        }
    } else {
        echo '❌ AI Engine plugin is not active or installed<br>';
    }
    
    // Test 2: Chatbot Configuration
    echo '<h3>2. Chatbot Configuration</h3>';
    
    // Check if chatbot ID exists
    $chatbot_options = get_option('mwai_chatbots', array());
    if (!empty($chatbot_options)) {
        echo '✅ Found ' . count($chatbot_options) . ' chatbot configuration(s)<br>';
        
        // Look for our specific chatbot ID
        $found_3p_chatbot = false;
        foreach ($chatbot_options as $chatbot_id => $chatbot_config) {
            if (strpos($chatbot_id, '3p-os-chatbot') !== false || 
                strpos($chatbot_id, 'kyjcyq') !== false) {
                echo '✅ Found 3P chatbot configuration: ' . esc_html($chatbot_id) . '<br>';
                $found_3p_chatbot = true;
            }
        }
        
        if (!$found_3p_chatbot) {
            echo '⚠️ 3P specific chatbot not found, using default configuration<br>';
        }
    } else {
        echo '❌ No chatbot configurations found<br>';
    }
    
    // Test 3: Required Scripts
    echo '<h3>3. Required Scripts</h3>';
    
    // Check if AI Engine scripts are registered
    global $wp_scripts;
    $ai_scripts = array('mwai_chatbot', 'react', 'react-dom', 'wp-element');
    
    foreach ($ai_scripts as $script) {
        if (isset($wp_scripts->registered[$script])) {
            echo '✅ Script registered: ' . $script . '<br>';
        } else {
            echo '❌ Script missing: ' . $script . '<br>';
        }
    }
    
    // Test 4: Page Template Check
    echo '<h3>4. Current Page Information</h3>';
    echo 'Current URL: ' . esc_url(home_url($_SERVER['REQUEST_URI'])) . '<br>';
    echo 'Page template: ' . esc_html(basename(get_page_template())) . '<br>';
    echo 'Is front page: ' . (is_front_page() ? 'Yes' : 'No') . '<br>';
    echo 'Is page: ' . (is_page() ? 'Yes' : 'No') . '<br>';
    if (is_page()) {
        echo 'Page ID: ' . get_the_ID() . '<br>';
    }
    
    // Test 5: JavaScript Check
    echo '<h3>5. Client-Side Check</h3>';
    echo '<button onclick="runClientDiagnostic()" style="padding: 10px; background: #0073aa; color: white; border: none; border-radius: 4px; cursor: pointer;">Run Client-Side Diagnostic</button>';
    echo '<div id="client-results" style="margin-top: 10px; padding: 10px; background: #fff; border-radius: 4px;"></div>';
    
    // JavaScript diagnostic
    echo '<script>
    function runClientDiagnostic() {
        const results = document.getElementById("client-results");
        let output = "<h4>Client-Side Diagnostic Results:</h4>";
        
        // Check jQuery
        output += "jQuery available: " + (typeof jQuery !== "undefined" ? "✅ Yes" : "❌ No") + "<br>";
        
        // Check React
        output += "React available: " + (typeof React !== "undefined" ? "✅ Yes" : "❌ No") + "<br>";
        
        // Check AI Engine
        output += "AI Engine (mwai) available: " + (typeof window.mwai !== "undefined" ? "✅ Yes" : "❌ No") + "<br>";
        
        // Check chatbot containers
        const containers = document.querySelectorAll(".mwai-chatbot-container");
        output += "Chatbot containers found: " + containers.length + "<br>";
        
        // Check for console errors
        output += "<br><strong>Check browser console for additional error details</strong><br>";
        
        // Check if chatbot is visible
        if (containers.length > 0) {
            const firstContainer = containers[0];
            const isVisible = firstContainer.offsetParent !== null;
            output += "First chatbot container visible: " + (isVisible ? "✅ Yes" : "❌ No") + "<br>";
            
            if (!isVisible) {
                output += "Container style: " + firstContainer.getAttribute("style") + "<br>";
                output += "Container classes: " + firstContainer.className + "<br>";
            }
        }
        
        results.innerHTML = output;
        
        // Log detailed info to console
        console.log("=== 3P CHATBOT DIAGNOSTIC ===");
        console.log("Containers:", containers);
        if (containers.length > 0) {
            console.log("First container data-params:", containers[0].getAttribute("data-params"));
            console.log("First container data-system:", containers[0].getAttribute("data-system"));
        }
    }
    
    // Auto-run diagnostic after 2 seconds
    setTimeout(runClientDiagnostic, 2000);
    </script>';
    
    echo '</div>';
}

// Add this to create a diagnostic page - you can access it by adding ?chatbot_diagnostic=1 to any page URL
add_action('wp_footer', function() {
    if (isset($_GET['chatbot_diagnostic']) && current_user_can('manage_options')) {
        threep_chatbot_diagnostic();
    }
});


// TEMPORARY: Add this, run once, then remove it
/*
function flush_ai_engine_data() {
    if (current_user_can('manage_options') && isset($_GET['flush_ai_engine'])) {
        global $wpdb;
        $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE 'mwai_%'");
        $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE 'ai_engine_%'");
        echo '<div class="notice notice-success"><p>AI Engine data flushed!</p></div>';
    }
}
add_action('admin_notices', 'flush_ai_engine_data');
*/

/**
 * 3P Life OS - Notify Me Button System
 * Add to functions.php in your 3p-child theme
 */

// Email service configuration - Edit these at the top of functions.php

/**
 * Enqueue notify me button scripts and styles
 */
function threep_notify_me_scripts() {
    // Only load on pages that need it
    if (is_front_page() || has_shortcode(get_post()->post_content, 'threep_notify_button')) {
        wp_enqueue_script(
            'threep-notify-me',
            get_stylesheet_directory_uri() . '/js/notify-me.js',
            array('jquery'),
            filemtime(get_stylesheet_directory() . '/js/notify-me.js'), // Use file time for cache busting
            true
        );
        
        // Localize script for AJAX
        wp_localize_script('threep-notify-me', 'threep_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('threep_notify_me_nonce'),
            'messages' => array(
                'success' => 'Thank you! We\'ll notify you when this tool becomes available.',
                'error' => 'Something went wrong. Please try again.',
                'invalid_email' => 'Please enter a valid email address.',
                'already_subscribed' => 'You\'re already on our notification list!'
            )
        ));
    }
}
add_action('wp_enqueue_scripts', 'threep_notify_me_scripts');

/**
 * AJAX handler for notify me subscriptions
 */
function threep_handle_notify_me_subscription() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'threep_notify_me_nonce')) {
        wp_die(json_encode(array('success' => false, 'message' => 'Security check failed')));
    }
    
    $email = sanitize_email($_POST['email']);
    $tool_name = sanitize_text_field($_POST['tool_name']);
    $source_page = sanitize_url($_POST['source_page']);
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }
    
    // Process subscription based on configured service
    $result = threep_process_email_subscription($email, $tool_name, $source_page);
    
    if ($result['success']) {
        wp_send_json_success(array('message' => $result['message']));
    } else {
        wp_send_json_error(array('message' => $result['message']));
    }
}
add_action('wp_ajax_threep_notify_me', 'threep_handle_notify_me_subscription');
add_action('wp_ajax_nopriv_threep_notify_me', 'threep_handle_notify_me_subscription');

/**
 * Process email subscription based on configured service
 */
function threep_process_email_subscription($email, $tool_name, $source_page) {
    $service = THREEP_EMAIL_SERVICE;
    
    switch ($service) {
        case 'mailchimp':
            return threep_subscribe_mailchimp($email, $tool_name, $source_page);
            
        case 'convertkit':
            return threep_subscribe_convertkit($email, $tool_name, $source_page);
            
        case 'custom':
        default:
            return threep_subscribe_database($email, $tool_name, $source_page);
    }
}

/**
 * Mailchimp subscription handler
 */
function threep_subscribe_mailchimp($email, $tool_name, $source_page) {
    $api_key = THREEP_MAILCHIMP_API_KEY;
    $list_id = THREEP_MAILCHIMP_LIST_ID;
    
    if (empty($api_key) || empty($list_id)) {
        return threep_subscribe_database($email, $tool_name, $source_page);
    }
    
    $datacenter = substr($api_key, strpos($api_key, '-') + 1);
    $url = "https://{$datacenter}.api.mailchimp.com/3.0/lists/{$list_id}/members";
    
    $data = array(
        'email_address' => $email,
        'status' => 'subscribed',
        'merge_fields' => array(
            'TOOLNAME' => $tool_name,
            'SOURCE' => $source_page
        ),
        'tags' => array('3P-Tools', 'Notify-Me', $tool_name)
    );
    
    $response = wp_remote_post($url, array(
        'headers' => array(
            'Authorization' => 'Basic ' . base64_encode('user:' . $api_key),
            'Content-Type' => 'application/json'
        ),
        'body' => json_encode($data),
        'timeout' => 30
    ));
    
    // Temporary debug logging
error_log('Mailchimp API Key present: ' . (!empty($api_key) ? 'Yes' : 'No'));
error_log('Mailchimp List ID present: ' . (!empty($list_id) ? 'Yes' : 'No'));
error_log('Mailchimp Response Code: ' . wp_remote_retrieve_response_code($response));
error_log('Mailchimp Response Body: ' . wp_remote_retrieve_body($response));

    if (is_wp_error($response)) {
        // Fallback to database if API fails
        return threep_subscribe_database($email, $tool_name, $source_page);
    }
    
    $response_code = wp_remote_retrieve_response_code($response);
    
    if ($response_code === 200) {
        return array(
            'success' => true,
            'message' => 'Thank you! We\'ll notify you when this tool becomes available.'
        );
    } elseif ($response_code === 400) {
        $body = json_decode(wp_remote_retrieve_body($response), true);
        if (isset($body['title']) && $body['title'] === 'Member Exists') {
            return array(
                'success' => true,
                'message' => 'You\'re already on our notification list!'
            );
        }
    }
    
    // Fallback to database if Mailchimp fails
    return threep_subscribe_database($email, $tool_name, $source_page);
}

/**
 * ConvertKit subscription handler
 */
function threep_subscribe_convertkit($email, $tool_name, $source_page) {
    $api_key = THREEP_CONVERTKIT_API_KEY;
    $form_id = THREEP_CONVERTKIT_FORM_ID;
    
    if (empty($api_key) || empty($form_id)) {
        return threep_subscribe_database($email, $tool_name, $source_page);
    }
    
    $url = "https://api.convertkit.com/v3/forms/{$form_id}/subscribe";
    
    $data = array(
        'api_key' => $api_key,
        'email' => $email,
        'fields' => array(
            'tool_name' => $tool_name,
            'source_page' => $source_page
        ),
        'tags' => array('3P-Tools', 'Notify-Me', $tool_name)
    );
    
    $response = wp_remote_post($url, array(
        'headers' => array(
            'Content-Type' => 'application/json'
        ),
        'body' => json_encode($data),
        'timeout' => 30
    ));
    
    if (is_wp_error($response)) {
        return threep_subscribe_database($email, $tool_name, $source_page);
    }
    
    $response_code = wp_remote_retrieve_response_code($response);
    
    if ($response_code === 200 || $response_code === 201) {
        return array(
            'success' => true,
            'message' => 'Thank you! We\'ll notify you when this tool becomes available.'
        );
    }
    
    // Fallback to database if ConvertKit fails
    return threep_subscribe_database($email, $tool_name, $source_page);
}

/**
 * Database subscription handler (fallback or custom)
 */
function threep_subscribe_database($email, $tool_name, $source_page) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    
    // Create table if it doesn't exist
    threep_create_subscriptions_table();
    
    // Check if email already exists for this tool
    $existing = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM $table_name WHERE email = %s AND tool_name = %s",
        $email, $tool_name
    ));
    
    if ($existing) {
        return array(
            'success' => true,
            'message' => 'You\'re already on our notification list!'
        );
    }
    
    // Insert new subscription
    $result = $wpdb->insert(
        $table_name,
        array(
            'email' => $email,
            'tool_name' => $tool_name,
            'source_page' => $source_page,
            'created_at' => current_time('mysql'),
            'status' => 'subscribed'
        ),
        array('%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result !== false) {
        // Send confirmation email
        threep_send_confirmation_email($email, $tool_name);
        
        return array(
            'success' => true,
            'message' => 'Thank you! We\'ll notify you when this tool becomes available.'
        );
    }
    
    return array(
        'success' => false,
        'message' => 'Something went wrong. Please try again.'
    );
}

/**
 * Create subscriptions table
 */
function threep_create_subscriptions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id int(11) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        tool_name varchar(255) NOT NULL,
        source_page varchar(255),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        status varchar(50) DEFAULT 'subscribed',
        PRIMARY KEY (id),
        KEY email (email),
        KEY tool_name (tool_name)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

/**
 * Send confirmation email
 */
function threep_send_confirmation_email($email, $tool_name) {
    $subject = '3P Life OS - Notification Confirmed for ' . $tool_name;
    $message = "Hi there!\n\nThank you for your interest in our {$tool_name} tool.\n\nWe'll notify you as soon as it becomes available. In the meantime, check out our free Wedding Planner tool at " . home_url('/wedding/') . "\n\nBest regards,\nThe 3P Life OS Team";
    
    wp_mail($email, $subject, $message);
}

/**
 * Render notify me button
 * Usage: echo threep_render_notify_button('Moving Planner', 'Notify When Available');
 */
function threep_render_notify_button($tool_name, $button_text = 'Notify When Available', $button_class = 'tool-button coming-soon') {
    $button_id = 'notify-' . sanitize_title($tool_name);
    
    ob_start();
    ?>
    <a href="#" 
       class="<?php echo esc_attr($button_class); ?> threep-notify-button" 
       id="<?php echo esc_attr($button_id); ?>"
       data-tool-name="<?php echo esc_attr($tool_name); ?>"
       data-source-page="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <?php echo esc_html($button_text); ?>
    </a>
    <?php
    return ob_get_clean();
}

/**
 * Admin menu for managing subscriptions
 */
function threep_add_admin_menu() {
    add_management_page(
        '3P Notify Me Subscriptions',
        '3P Subscriptions',
        'manage_options',
        'threep-subscriptions',
        'threep_admin_page'
    );
}
add_action('admin_menu', 'threep_add_admin_menu');

/**
 * Admin page content
 */
function threep_admin_page() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    
    // Handle export
    if (isset($_GET['export']) && $_GET['export'] === 'csv') {
        threep_export_subscriptions();
        return;
    }
    
    // Get subscriptions with pagination
    $page = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $per_page = 20;
    $offset = ($page - 1) * $per_page;
    
    $total = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    $subscriptions = $wpdb->get_results($wpdb->prepare(
        "SELECT * FROM $table_name ORDER BY created_at DESC LIMIT %d OFFSET %d",
        $per_page, $offset
    ));
    
    // Get tool stats
    $tool_stats = $wpdb->get_results(
        "SELECT tool_name, COUNT(*) as count FROM $table_name WHERE status = 'subscribed' GROUP BY tool_name ORDER BY count DESC"
    );
    
    ?>
    <div class="wrap">
        <h1>3P Notify Me Subscriptions</h1>
        
        <!-- Stats Summary -->
        <div class="notice notice-info" style="padding: 15px; margin: 20px 0;">
            <h3>Subscription Stats</h3>
            <p><strong>Total Active Subscriptions:</strong> <?php echo $total; ?></p>
            
            <?php if ($tool_stats): ?>
            <table class="wp-list-table widefat striped" style="max-width: 500px; margin-top: 10px;">
                <thead>
                    <tr>
                        <th>Tool Name</th>
                        <th>Subscribers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tool_stats as $stat): ?>
                    <tr>
                        <td><?php echo esc_html($stat->tool_name); ?></td>
                        <td><?php echo esc_html($stat->count); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
        
        <!-- Export Button -->
        <p class="submit">
            <a href="<?php echo admin_url('tools.php?page=threep-subscriptions&export=csv'); ?>" 
               class="button button-secondary">Export to CSV</a>
        </p>
        
        <!-- Subscriptions Table -->
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Tool Name</th>
                    <th>Source Page</th>
                    <th>Date Subscribed</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($subscriptions): ?>
                    <?php foreach ($subscriptions as $sub): ?>
                    <tr>
                        <td><?php echo esc_html($sub->email); ?></td>
                        <td><?php echo esc_html($sub->tool_name); ?></td>
                        <td><?php echo esc_html($sub->source_page); ?></td>
                        <td><?php echo esc_html(date('M j, Y g:i A', strtotime($sub->created_at))); ?></td>
                        <td><?php echo esc_html($sub->status); ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No subscriptions found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <!-- Pagination -->
        <?php
        $total_pages = ceil($total / $per_page);
        if ($total_pages > 1):
        ?>
        <div class="tablenav bottom">
            <div class="tablenav-pages">
                <?php
                echo paginate_links(array(
                    'base' => add_query_arg('paged', '%#%'),
                    'format' => '',
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                    'total' => $total_pages,
                    'current' => $page
                ));
                ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Export subscriptions to CSV
 */
function threep_export_subscriptions() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    $subscriptions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    
    $filename = '3p-subscriptions-' . date('Y-m-d') . '.csv';
    
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    
    $output = fopen('php://output', 'w');
    
    // Add CSV headers
    fputcsv($output, array('Email', 'Tool Name', 'Source Page', 'Date Subscribed', 'Status'));
    
    // Add data
    foreach ($subscriptions as $sub) {
        fputcsv($output, array(
            $sub->email,
            $sub->tool_name,
            $sub->source_page,
            $sub->created_at,
            $sub->status
        ));
    }
    
    fclose($output);
    exit;
}

/**
 * Create database table on theme activation
 */
function threep_activate_notify_system() {
    threep_create_subscriptions_table();
}
// Hook to init for safety since we can't hook to theme activation directly
add_action('init', function() {
    if (get_option('threep_notify_db_created') !== '1') {
        threep_create_subscriptions_table();
        update_option('threep_notify_db_created', '1');
    }
});

/**
 * Add custom CSS for admin notifications
 */
function threep_admin_notices_styles() {
    if (isset($_GET['page']) && $_GET['page'] === 'threep-subscriptions') {
        ?>
        <style>
        .threep-stats-card {
            background: #fff;
            border: 1px solid #ccd0d4;
            border-radius: 4px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 1px 1px rgba(0,0,0,.04);
        }
        .threep-stats-card h3 {
            margin-top: 0;
            color: #23282d;
        }
        .threep-stat-item {
            display: inline-block;
            margin-right: 30px;
            padding: 10px 0;
        }
        .threep-stat-number {
            font-size: 28px;
            font-weight: bold;
            color: #0073aa;
            display: block;
        }
        .threep-stat-label {
            color: #646970;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .threep-tool-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .threep-tool-stat {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
        }
        .threep-tool-stat-number {
            font-size: 24px;
            font-weight: bold;
            color: #d63384;
        }
        .threep-tool-stat-name {
            font-size: 12px;
            color: #646970;
            margin-top: 5px;
        }
        </style>
        <?php
    }
}
add_action('admin_head', 'threep_admin_notices_styles');

/**
 * Send notification emails when tools become available
 */
function threep_send_tool_launch_notifications($tool_name, $tool_url, $message = '') {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    
    // Get all subscribers for this tool
    $subscribers = $wpdb->get_results($wpdb->prepare(
        "SELECT * FROM $table_name WHERE tool_name = %s AND status = 'subscribed'",
        $tool_name
    ));
    
    if (empty($subscribers)) {
        return false;
    }
    
    $subject = "🎉 {$tool_name} is Now Available - 3P Life OS";
    
    $default_message = "Great news! The {$tool_name} you requested is now available.\n\n";
    $default_message .= "Start using it now: {$tool_url}\n\n";
    $default_message .= "Thank you for your patience, and we hope this tool helps you master your life projects!\n\n";
    $default_message .= "Best regards,\nThe 3P Life OS Team\n\n";
    $default_message .= "P.S. Check out all our available tools at " . home_url();
    
    $email_message = !empty($message) ? $message : $default_message;
    
    $sent_count = 0;
    
    foreach ($subscribers as $subscriber) {
        $sent = wp_mail($subscriber->email, $subject, $email_message);
        if ($sent) {
            $sent_count++;
            
            // Update subscriber status to 'notified'
            $wpdb->update(
                $table_name,
                array('status' => 'notified'),
                array('id' => $subscriber->id),
                array('%s'),
                array('%d')
            );
        }
    }
    
    return $sent_count;
}

/**
 * Add tool launch notification functionality to admin
 */
function threep_add_tool_launch_submenu() {
    add_submenu_page(
        'tools.php',
        'Launch Tool Notification',
        'Launch Notification',
        'manage_options',
        'threep-launch-notification',
        'threep_launch_notification_page'
    );
}
add_action('admin_menu', 'threep_add_tool_launch_submenu');

/**
 * Tool launch notification admin page
 */
function threep_launch_notification_page() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    
    // Handle form submission
    if (isset($_POST['send_notifications']) && wp_verify_nonce($_POST['threep_launch_nonce'], 'send_launch_notification')) {
        $tool_name = sanitize_text_field($_POST['tool_name']);
        $tool_url = esc_url_raw($_POST['tool_url']);
        $custom_message = sanitize_textarea_field($_POST['custom_message']);
        
        $sent_count = threep_send_tool_launch_notifications($tool_name, $tool_url, $custom_message);
        
        if ($sent_count > 0) {
            echo '<div class="notice notice-success"><p>Successfully sent notifications to ' . $sent_count . ' subscribers!</p></div>';
        } else {
            echo '<div class="notice notice-warning"><p>No notifications were sent. Check if there are subscribers for this tool.</p></div>';
        }
    }
    
    // Get available tools with subscriber counts
    $tools_with_subs = $wpdb->get_results(
        "SELECT tool_name, COUNT(*) as subscriber_count 
         FROM $table_name 
         WHERE status = 'subscribed' 
         GROUP BY tool_name 
         ORDER BY subscriber_count DESC"
    );
    
    ?>
    <div class="wrap">
        <h1>Send Tool Launch Notifications</h1>
        <p>When you launch a new tool, use this page to notify all subscribers who requested to be notified.</p>
        
        <?php if (!empty($tools_with_subs)): ?>
        <form method="post" action="">
            <?php wp_nonce_field('send_launch_notification', 'threep_launch_nonce'); ?>
            
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="tool_name">Tool Name</label></th>
                    <td>
                        <select name="tool_name" id="tool_name" class="regular-text" required>
                            <option value="">Select a tool...</option>
                            <?php foreach ($tools_with_subs as $tool): ?>
                                <option value="<?php echo esc_attr($tool->tool_name); ?>">
                                    <?php echo esc_html($tool->tool_name); ?> (<?php echo $tool->subscriber_count; ?> subscribers)
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="description">Choose the tool you're launching</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="tool_url">Tool URL</label></th>
                    <td>
                        <input type="url" name="tool_url" id="tool_url" class="regular-text" required 
                               placeholder="https://planner.maxviskov.com/moving/" />
                        <p class="description">The direct link to the new tool</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="custom_message">Custom Message (Optional)</label></th>
                    <td>
                        <textarea name="custom_message" id="custom_message" rows="10" cols="50" class="large-text">Great news! The {tool_name} you requested is now available.

Start using it now: {tool_url}

Thank you for your patience, and we hope this tool helps you master your life projects!

Best regards,
The 3P Life OS Team

P.S. Check out all our available tools at <?php echo home_url(); ?></textarea>
                        <p class="description">Leave empty to use default message. Use {tool_name} and {tool_url} as placeholders.</p>
                    </td>
                </tr>
            </table>
            
            <p class="submit">
                <input type="submit" name="send_notifications" class="button-primary" 
                       value="Send Launch Notifications" 
                       onclick="return confirm('Are you sure you want to send notifications? This action cannot be undone.');" />
            </p>
        </form>
        
        <?php else: ?>
        <div class="notice notice-info">
            <p>No tools have subscribers yet. Subscribers will appear here once people start signing up for notifications.</p>
        </div>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Shortcode for notify button
 * Usage: [threep_notify_button tool="Moving Planner" text="Notify Me"]
 */
function threep_notify_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'tool' => 'Unknown Tool',
        'text' => 'Notify When Available',
        'class' => 'tool-button coming-soon'
    ), $atts);
    
    return threep_render_notify_button($atts['tool'], $atts['text'], $atts['class']);
}
add_shortcode('threep_notify_button', 'threep_notify_button_shortcode');

/**
 * Add notification count to admin bar
 */
function threep_admin_bar_notification_count($wp_admin_bar) {
    if (!current_user_can('manage_options')) {
        return;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'threep_notify_subscriptions';
    $count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE status = 'subscribed'");
    
    if ($count > 0) {
        $wp_admin_bar->add_node(array(
            'id' => 'threep-notify-count',
            'title' => '🔔 ' . $count . ' Subscribers',
            'href' => admin_url('tools.php?page=threep-subscriptions'),
            'meta' => array(
                'title' => '3P Tool Notification Subscribers'
            )
        ));
    }
}
add_action('admin_bar_menu', 'threep_admin_bar_notification_count', 100);