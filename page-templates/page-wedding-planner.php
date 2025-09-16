<?php
/**
 * Template Name: Wedding Planner Landing
 */

get_header(); ?>

<div class="wedding-planner-page">
    <?php
    // Load header content
    $header_content = load_3p_content('wedding-planner-header');
    if ($header_content) {
        echo '<section class="hero">' . $header_content['content'] . '</section>';
    }
    
    // Load how-it-works content  
    $how_it_works = load_3p_content('wedding-planner-how-it-works');
    if ($how_it_works) {
        echo '<section class="how-it-works">' . $how_it_works['content'] . '</section>';
    }
    
    // Load benefits content
    $benefits = load_3p_content('wedding-planner-benefits');
    if ($benefits) {
        echo '<section class="why-choose-us">' . $benefits['content'] . '</section>';
    }
    ?>
    
    <!-- TypeForm Section (stays in template) -->
    <section id="plannerForm" class="survey-section">
        <div class="container">
            <h2 class="section-title">Start Your Free Wedding Plan</h2>
            <div class="form-container">
                <div data-tf-live="01K1NSRF64B55KK37BK85TACHR"></div>
                <script src="//embed.typeform.com/next/embed.js"></script>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>