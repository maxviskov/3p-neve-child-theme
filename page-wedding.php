<?php
/**
 * Template for wedding planner page (slug: wedding)
 */

get_header(); ?>

<div class="wedding-planner-page">
    <section class="hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 120px 0 80px; text-align: center;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h1 style="font-size: 3rem; margin-bottom: 1.5rem;">Free Personalized Wedding Planner</h1>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Get your customized, easy-to-follow wedding plan tailored to your budget, style, and timeline.</p>
            <a href="#plannerForm" style="background: linear-gradient(135deg, #ff6b6b, #ee5a24); color: white; padding: 18px 40px; border-radius: 50px; text-decoration: none; font-weight: 700; display: inline-block;">Start Your Free Plan Now</a>
        </div>
    </section>
    
    <section id="plannerForm" style="padding: 80px 0; background: #f8f9ff;">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 2rem;">Start Your Free Wedding Plan</h2>
            <div style="background: white; padding: 3rem; border-radius: 20px;">
                <div data-tf-live="01K1NSRF64B55KK37BK85TACHR"></div>
                <script src="//embed.typeform.com/next/embed.js"></script>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>