<?php
/*
Template Name: Wedding Planner Landing Page
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add custom head content for this template
function wedding_template_head_content() {
    ?>
    <meta name="description" content="Get your personalized wedding plan with timeline, budget breakdown, and vendor recommendations. Free comprehensive wedding planning tool.">
    
    <!-- Google Analytics 4 - Replace GA_MEASUREMENT_ID with your actual ID -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    
    <style>
        /* Reset and Base Styles */
        #wedding-planner-page * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #wedding-planner-page {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #ffffff;
        }

        #wedding-planner-page .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        #wedding-planner-page .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #wedding-planner-page .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        #wedding-planner-page .hero-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        #wedding-planner-page .hero-text h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        #wedding-planner-page .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        #wedding-planner-page .trust-badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 15px;
            margin: 2rem 0;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        #wedding-planner-page .trust-badge h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        #wedding-planner-page .trust-badge p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        #wedding-planner-page .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(238, 90, 36, 0.3);
        }

        #wedding-planner-page .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(238, 90, 36, 0.4);
            color: white;
            text-decoration: none;
        }

        #wedding-planner-page .hero-visual {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #wedding-planner-page .mockup-preview {
            background: rgba(255, 255, 255, 0.95);
            color: #2c3e50;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            width: 100%;
        }

        #wedding-planner-page .mockup-preview h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #wedding-planner-page .progress-bar {
            width: 100%;
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        #wedding-planner-page .progress-fill {
            width: 60%;
            height: 100%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 4px;
        }

        #wedding-planner-page .mockup-preview p {
            margin: 0.5rem 0;
            font-size: 0.9rem;
        }

        /* How It Works Section */
        #wedding-planner-page .how-it-works {
            padding: 100px 0;
            background: #f8f9ff;
        }

        #wedding-planner-page .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #wedding-planner-page .section-subtitle {
            font-size: 1.2rem;
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        #wedding-planner-page .steps-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        #wedding-planner-page .step {
            text-align: center;
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        #wedding-planner-page .step:hover {
            transform: translateY(-5px);
        }

        #wedding-planner-page .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
        }

        #wedding-planner-page .step h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #wedding-planner-page .step p {
            color: #7f8c8d;
            line-height: 1.8;
        }

        /* Why Choose Us Section */
        #wedding-planner-page .why-choose-us {
            padding: 100px 0;
            background: white;
        }

        #wedding-planner-page .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #wedding-planner-page .benefit {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            padding: 2rem;
            background: #f8f9ff;
            border-radius: 15px;
            border-left: 4px solid #667eea;
            transition: transform 0.3s ease;
        }

        #wedding-planner-page .benefit:hover {
            transform: translateY(-2px);
        }

        #wedding-planner-page .benefit-icon {
            color: #27ae60;
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 5px;
            flex-shrink: 0;
        }

        #wedding-planner-page .benefit h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        #wedding-planner-page .benefit p {
            color: #7f8c8d;
            line-height: 1.6;
        }

        /* 3P System Section */
        #wedding-planner-page .three-p-system {
            padding: 100px 0;
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            text-align: center;
        }

        #wedding-planner-page .three-p-system h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        #wedding-planner-page .three-p-system p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        /* Survey Form Section */
        #wedding-planner-page .survey-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9ff, #e8f4ff);
        }

        #wedding-planner-page .form-container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        /* Final CTA Section */
        #wedding-planner-page .final-cta {
            padding: 100px 0;
            background: white;
            text-align: center;
        }

        #wedding-planner-page .final-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        #wedding-planner-page .final-cta p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
        }

        /* Sticky CTA Button */
        #wedding-planner-page .sticky-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        #wedding-planner-page .sticky-cta.show {
            opacity: 1;
            transform: translateY(0);
        }

        #wedding-planner-page .sticky-btn {
            background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        #wedding-planner-page .sticky-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(255, 107, 107, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #wedding-planner-page .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            #wedding-planner-page .hero-text h1 {
                font-size: 2.5rem;
            }

            #wedding-planner-page .hero-text p {
                font-size: 1.1rem;
            }

            #wedding-planner-page .section-title {
                font-size: 2rem;
            }

            #wedding-planner-page .steps-container {
                grid-template-columns: 1fr;
            }

            #wedding-planner-page .benefits-grid {
                grid-template-columns: 1fr;
            }

            #wedding-planner-page .form-container {
                padding: 2rem;
                margin: 0 1rem;
            }

            #wedding-planner-page .hero {
                padding: 150px 0 60px;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #wedding-planner-page .animate-on-scroll {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Override WordPress theme styles */
        #wedding-planner-page .entry-header {
            display: none;
        }

        #wedding-planner-page .entry-content {
            margin: 0;
            padding: 0;
        }
    </style>
    <?php
}
add_action('wp_head', 'wedding_template_head_content');

get_header(); ?>

<div id="wedding-planner-page">
    <!-- Sticky CTA Button -->
    <div class="sticky-cta" id="stickyCTA">
        <a href="#plannerForm" class="sticky-btn">🎯 Start Your Free Plan Now</a>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Free Personalized Wedding Planner</h1>
                    <p>Get your customized, easy-to-follow wedding plan tailored to your budget, style, and timeline. Start planning stress-free today!</p>
                    
                    <div class="trust-badge">
                        <h3>⚡ This is Not Just Another Survey</h3>
                        <p>You won't be asked to register or pay at the end. Provide your email once, upfront, and receive your personalized wedding plan immediately — completely free and transparent.</p>
                    </div>
                    
                    <a href="#plannerForm" class="cta-button">Start Your Free Plan Now</a>
                </div>
                
                <div class="hero-visual">
                    <div class="mockup-preview">
                        <h3>Your Personal Wedding Timeline</h3>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                        <p>✅ Venue booked (12 months before)</p>
                        <p>⏳ Photographer interviews (8 months before)</p>
                        <p>📋 Menu tasting scheduled (6 months before)</p>
                        <p>💌 Invitations sent (2 months before)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Three simple steps to your perfect wedding plan</p>
            
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Answer Simple Questions</h3>
                    <p>Tell us about your event preferences, budget, and timeline in just a few minutes</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Receive Your Tailored Plan</h3>
                    <p>Get your detailed, personalized wedding plan delivered straight to your email</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Stay Organized & Stress-Free</h3>
                    <p>Follow your customized timeline and checklist to plan your perfect day</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <h2 class="section-title">Why Choose Us?</h2>
            <p class="section-subtitle">Your wedding deserves expert planning made simple</p>
            
            <div class="benefits-grid">
                <div class="benefit">
                    <div class="benefit-icon">✓</div>
                    <div>
                        <h4>Personalized Guidance</h4>
                        <p>Every recommendation is tailored to your specific preferences, style, and budget</p>
                    </div>
                </div>
                
                <div class="benefit">
                    <div class="benefit-icon">✓</div>
                    <div>
                        <h4>Stress Reduction</h4>
                        <p>Clear, actionable steps eliminate overwhelm and keep you on track</p>
                    </div>
                </div>
                
                <div class="benefit">
                    <div class="benefit-icon">✓</div>
                    <div>
                        <h4>Budget & Timeline Management</h4>
                        <p>Smart planning tools that help you stay within budget and on schedule</p>
                    </div>
                </div>
                
                <div class="benefit">
                    <div class="benefit-icon">✓</div>
                    <div>
                        <h4>Expert Recommendations</h4>
                        <p>Curated vendor suggestions and task priorities from wedding industry professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3P System Section -->
    <section class="three-p-system">
        <div class="container">
            <h2>Our Unique 3P Life Operating System™</h2>
            <p>Plan, Protect, Perform — helping you master life's biggest projects with confidence.</p>
            <a href="<?php echo home_url('/'); ?>" class="cta-button">Experience the 3P System</a>
        </div>
    </section>

    <!-- Survey Form Section -->
    <section id="plannerForm" class="survey-section">
        <div class="container">
            <h2 class="section-title">Start Your Free Wedding Plan</h2>
            <p class="section-subtitle">Answer a few quick questions to get your personalized timeline and budget guide</p>
            
            <div class="form-container">
                <!-- TypeForm Embed -->
                <div data-tf-live="01K1NSRF64B55KK37BK85TACHR"></div>
                <script src="//embed.typeform.com/next/embed.js"></script>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <div class="container">
            <h2>Questions About Your Wedding Plan?</h2>
            <p>Need help with your personalized wedding timeline? We're here to support you!</p>
            <a href="#plannerForm" class="cta-button">Back to Survey</a>
        </div>
    </section>

    <!--
    <?php echo do_shortcode('[mwai_chatbot id="chatbot-kyjcyq"]'); ?>
    -->
    <script>
        // Sticky CTA Button Logic
        window.addEventListener('scroll', function() {
            const stickyCTA = document.getElementById('stickyCTA');
            const heroSection = document.querySelector('#wedding-planner-page .hero');
            
            if (heroSection) {
                const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
                
                if (window.scrollY > heroBottom - 100) {
                    stickyCTA.classList.add('show');
                } else {
                    stickyCTA.classList.remove('show');
                }
            }
        });

        // Smooth scrolling for anchor links within the wedding planner page
        document.querySelectorAll('#wedding-planner-page a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll');
                }
            });
        }, observerOptions);

        document.querySelectorAll('#wedding-planner-page .step, #wedding-planner-page .benefit, #wedding-planner-page .mockup-preview').forEach(el => {
            observer.observe(el);
        });

        // Analytics tracking for form interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Track when TypeForm is loaded
            if (typeof gtag !== 'undefined') {
                gtag('event', 'form_view', {
                    'event_category': 'engagement',
                    'event_label': 'wedding_planner_form'
                });
            }
        });
    </script>
</div>

<?php get_footer(); ?>