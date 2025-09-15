<?php
/**
 * Template Name: 3P Methodology
 */

get_header(); ?>

<div class="threep-page-header">
    <div class="container">
        <h1 class="threep-page-title">The 3P Life Operating System™</h1>
        <p class="threep-page-subtitle">Plan, Protect, Perform - Your integrated approach to life mastery</p>
    </div>
</div>

<div class="neve-main">
    <div class="container threep-content">
        <?php
        // Load version-controlled content
        $content_data = load_3p_content('3p-methodology');
        
        if ($content_data) {
            echo $content_data['content'];
        } else {
            // Fallback content
            echo do_shortcode('[3p_methodology]');
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>