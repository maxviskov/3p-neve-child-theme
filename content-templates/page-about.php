<?php
/*
Template Name: 3P Life OS About Page
Description: About page template for 3P Life Operating System explaining methodology and founder
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add custom head content for this template
function threep_about_head_content() {
    ?>
    <meta name="description" content="Learn about Max Viskov and the revolutionary 3P Life Operating System that helps people plan, protect, and perform their most important life projects.">
    
    <style>
        /* Reset and Base Styles for 3P About Page */
        #threep-about * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #threep-about {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #ffffff;
        }

        #threep-about .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        #threep-about .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #threep-about .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        #threep-about .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        #threep-about .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        #threep-about .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        #threep-about .hero .tagline {
            font-size: 1.1rem;
            font-style: italic;
            opacity: 0.9;
        }

        /* Section Styles */
        #threep-about .section {
            padding: 80px 0;
        }

        #threep-about .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: #F08F3E;
        }

        #threep-about .section-subtitle {
            font-size: 1.2rem;
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Story Section */
        #threep-about .story-section {
            background: #f8f9ff;
        }

        #threep-about .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        #threep-about .story-text {
            font-size: 1.1rem;
        }

        #threep-about .story-text h3 {
            color: #3498db;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        #threep-about .story-text p {
            margin-bottom: 1.5rem;
        }

        #threep-about .profile-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
        }

        #threep-about .profile-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
            font-weight: 700;
        }

        #threep-about .profile-name {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        #threep-about .profile-title {
            color: #3498db;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        #threep-about .profile-credentials {
            font-size: 0.95rem;
            color: #7f8c8d;
            line-height: 1.4;
        }

        /* 3P System Section */
        #threep-about .system-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
        }

        #threep-about .system-section .section-title,
        #threep-about .system-section .section-subtitle {
            color: white;
        }

        #threep-about .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #threep-about .pillar {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        #threep-about .pillar-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #threep-about .pillar h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        #threep-about .pillar h4 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        #threep-about .pillar p {
            opacity: 0.9;
        }

        /* Mission Section */
        #threep-about .mission-section {
            text-align: center;
            background: white;
        }

        #threep-about .mission-statement {
            background: #f8f9ff;
            padding: 3rem;
            border-radius: 20px;
            font-size: 1.3rem;
            font-style: italic;
            color: #2c3e50;
            border-left: 5px solid #3498db;
            margin: 2rem 0;
        }

        #threep-about .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #threep-about .value-item {
            text-align: center;
            padding: 1.5rem;
        }

        #threep-about .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        #threep-about .value-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        /* CTA Section */
        #threep-about .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        #threep-about .cta-button {
            display: inline-block;
            padding: 18px 40px;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(238, 90, 36, 0.3);
        }

        #threep-about .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(238, 90, 36, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            #threep-about .hero h1 {
                font-size: 2.5rem;
            }

            #threep-about .hero p {
                font-size: 1.1rem;
            }

            #threep-about .section-title {
                font-size: 2rem;
            }

            #threep-about .story-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            #threep-about .pillars-grid {
                grid-template-columns: 1fr;
            }

            #threep-about .values-grid {
                grid-template-columns: 1fr;
            }

            #threep-about .section {
                padding: 60px 0;
            }

            #threep-about .mission-statement {
                padding: 2rem;
                font-size: 1.1rem;
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

        #threep-about .animate-on-scroll {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Override WordPress theme styles */
        #threep-about .entry-header {
            display: none;
        }

        #threep-about .entry-content {
            margin: 0;
            padding: 0;
        }
    </style>
    <?php
}
add_action('wp_head', 'threep_about_head_content');

get_header(); ?>

<div id="threep-about">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>About the 3P Life Operating System™</h1>
                <p>Transforming how people manage life's biggest projects through proven business principles</p>
                <div class="tagline">"Your life is your most important project — manage it like one."</div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section story-section">
        <div class="container">
            <h2 class="section-title">The Story Behind 3P</h2>
            <p class="section-subtitle">From corporate project management to personal life transformation</p>
            
            <div class="story-content">
                <div class="story-text">
                    <h3>Why I Created This System</h3>
                    <p>After years of managing complex projects in the business world, I noticed something troubling: people who could flawlessly execute million-dollar corporate initiatives were struggling with their personal lives.</p>
                    
                    <p>They had scattered productivity apps, incomplete safety plans, and treated major life events like weddings, home purchases, or career changes as overwhelming chaos instead of manageable projects.</p>
                    
                    <p>I realized that the same principles that make businesses successful — systematic planning, risk management, and optimized performance — could transform how people approach their most important personal goals.</p>
                    
                    <h3>The Solution</h3>
                    <p>The 3P Life Operating System™ bridges this gap by applying proven project management, safety protocols, and productivity systems to personal life planning. It's the first integrated methodology that treats your entire life as interconnected systems requiring unified management.</p>
                </div>
                
                <div class="profile-card">
                    <div class="profile-image">MV</div>
                    <div class="profile-name">Max Viskov</div>
                    <div class="profile-title">Creator of 3P Life Operating System™</div>
                    <div class="profile-credentials">
                        Business Consultant • Project Management Expert<br>
                        Web Developer • Safety Systems Specialist<br>
                        Life Planning Methodology Pioneer
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3P System Section -->
    <section class="section system-section">
        <div class="container">
            <h2 class="section-title">The 3P Framework</h2>
            <p class="section-subtitle">Three integrated pillars that work together to create life mastery</p>
            
            <div class="pillars-grid">
                <div class="pillar">
                    <div class="pillar-icon">📋</div>
                    <h3>PLAN</h3>
                    <h4>Project Mastery</h4>
                    <p>"Every meaningful life change is a project waiting to be managed." Apply professional project management principles to your personal goals with clear timelines, milestones, and success criteria.</p>
                </div>
                
                <div class="pillar">
                    <div class="pillar-icon">🛡️</div>
                    <h3>PROTECT</h3>
                    <h4>Personal Safety</h4>
                    <p>"You can't achieve your goals if you don't protect your ability to pursue them." Comprehensive safety planning covering physical, digital, financial, and project-specific protection.</p>
                </div>
                
                <div class="pillar">
                    <div class="pillar-icon">⚡</div>
                    <h3>PERFORM</h3>
                    <h4>Productivity Systems</h4>
                    <p>"Consistent small actions compound into extraordinary results." Optimized daily and weekly systems that ensure steady progress toward your most important objectives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section mission-section">
        <div class="container">
            <h2 class="section-title">Our Mission</h2>
            
            <div class="mission-statement">
                "To democratize professional-grade life management by making proven business methodologies accessible to everyone, helping ordinary people achieve extraordinary results in their most important personal projects."
            </div>
            
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon">🎯</div>
                    <div class="value-title">Implementation Focus</div>
                    <p>We prioritize systems that actually work in real life, not just theoretical frameworks.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">🛡️</div>
                    <div class="value-title">Safety First</div>
                    <p>Every system includes comprehensive protection protocols to safeguard your progress and wellbeing.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">🌟</div>
                    <div class="value-title">Accessible Excellence</div>
                    <p>Professional-grade methodologies explained in friendly, understandable language for everyone.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">🔄</div>
                    <div class="value-title">Integrated Approach</div>
                    <p>Unlike scattered apps and systems, 3P creates unified, interconnected life management.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="container">
            <h2 class="section-title">Ready to Transform Your Life Planning?</h2>
            <p class="section-subtitle">Join thousands who have discovered the power of systematic life management</p>
            
            <a href="<?php echo home_url('/wedding/'); ?>" class="cta-button">🎯 Start with Our Free Wedding Planner</a>
            
            <p style="margin-top: 2rem; opacity: 0.9;">Experience the 3P methodology with our most popular free tool, then explore our complete life planning system.</p>
        </div>
    </section>

    <!-- AI Chatbot Integration -->
    <?php echo do_shortcode('[mwai_chatbot id="chatbot-kyjcyq"]'); ?>

    <!-- Debug Section (Admin Only) -->
    <?php if (current_user_can('manage_options') && isset($_GET['chatbot_check'])): ?>
    <div style="position: fixed; top: 10px; left: 10px; background: #333; color: white; padding: 15px; z-index: 9999; font-family: monospace; font-size: 12px; max-width: 400px;">
        <h4 style="color: white; margin: 0 0 10px 0;">Chatbot Status Check</h4>
        <div>✅ Page template: <?php echo basename(get_page_template()); ?></div>
        <div>✅ Current page ID: <?php echo get_the_ID(); ?></div>
        <div>✅ REST URL: <?php echo get_rest_url(); ?></div>
        <div>✅ Nonce generated: <?php echo wp_create_nonce('wp_rest') ? 'Yes' : 'No'; ?></div>
        <div>✅ AI Engine shortcode exists: <?php echo shortcode_exists('mwai_chatbot') ? 'Yes' : 'No'; ?></div>
    </div>
    <?php endif; ?>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('#threep-about a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll (simple version)
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('#threep-about .section');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animate-on-scroll');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Run once on load

        // Track page interactions
        document.querySelector('#threep-about .cta-button').addEventListener('click', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'about_cta_click', {
                    'event_category': 'engagement',
                    'event_label': 'wedding_planner_from_about'
                });
            }
        });
    </script>
</div>

<?php get_footer(); ?>