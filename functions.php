// Add after your existing code in functions.php
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