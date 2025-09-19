<?php
/*
Template Name: 3P Life OS Homepage
Description: Dedicated homepage template for 3P Life Operating System
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add custom head content for this template
function threep_homepage_head_content() {
    ?>
    <meta name="description" content="Master life's biggest projects with our proven 3P system. Free personalized planning tools for weddings, moving, and major life events.">
    
    <style>
        /* Reset and Base Styles for 3P Homepage */
        #threep-homepage * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #threep-homepage {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #ffffff;
        }

        #threep-homepage .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        #threep-homepage .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #threep-homepage .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        #threep-homepage .hero-content {
            position: relative;
            z-index: 2;
        }

        #threep-homepage .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        #threep-homepage .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        #threep-homepage .hero-badges {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }

        #threep-homepage .badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        #threep-homepage .cta-button {
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

        #threep-homepage .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(238, 90, 36, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Tools Grid Section */
        #threep-homepage .tools-section {
            padding: 100px 0;
            background: #f8f9ff;
        }

        #threep-homepage .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #threep-homepage .section-subtitle {
            font-size: 1.2rem;
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        #threep-homepage .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #threep-homepage .tool-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        #threep-homepage .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        #threep-homepage .tool-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        #threep-homepage .tool-badge.free {
            background: linear-gradient(135deg, #00b894, #00a085);
            color: white;
        }

        #threep-homepage .tool-badge.paid {
            background: linear-gradient(135deg, #fdcb6e, #e17055);
            color: white;
        }

        #threep-homepage .tool-badge.coming-soon {
            background: linear-gradient(135deg, #a29bfe, #6c5ce7);
            color: white;
        }

        #threep-homepage .tool-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        #threep-homepage .tool-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #threep-homepage .tool-card p {
            color: #7f8c8d;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        #threep-homepage .tool-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        #threep-homepage .tool-features li {
            padding: 0.5rem 0;
            color: #5a6c7d;
            position: relative;
            padding-left: 1.5rem;
        }

        #threep-homepage .tool-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #00b894;
            font-weight: 700;
        }

        #threep-homepage .tool-button {
            display: block;
            width: 100%;
            text-align: center;
            padding: 1rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        #threep-homepage .tool-button.available {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        #threep-homepage .tool-button.available:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            color: white;
            text-decoration: none;
        }

        #threep-homepage .tool-button.coming-soon {
            background: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }

        /* Email Signup */
        #threep-homepage .email-section {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        #threep-homepage .email-form {
            max-width: 500px;
            margin: 2rem auto 0;
            display: flex;
            gap: 1rem;
        }

        #threep-homepage .email-input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
        }

        #threep-homepage .email-button {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #threep-homepage .email-button:hover {
            transform: translateY(-2px);
        }

        /* Features Section */
        #threep-homepage .features-section {
            padding: 100px 0;
            background: white;
        }

        #threep-homepage .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        #threep-homepage .feature {
            text-align: center;
        }

        #threep-homepage .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        #threep-homepage .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #threep-homepage .feature p {
            color: #7f8c8d;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #threep-homepage .hero h1 {
                font-size: 2.5rem;
            }

            #threep-homepage .hero p {
                font-size: 1.1rem;
            }

            #threep-homepage .tools-grid {
                grid-template-columns: 1fr;
            }

            #threep-homepage .email-form {
                flex-direction: column;
            }

            #threep-homepage .hero-badges {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Override WordPress theme styles */
        #threep-homepage .entry-header {
            display: none;
        }

        #threep-homepage .entry-content {
            margin: 0;
            padding: 0;
        }
    </style>
    <?php
}
add_action('wp_head', 'threep_homepage_head_content');

get_header(); ?>

<div id="threep-homepage">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Master Life's Biggest Projects</h1>
                <p>The 3P Life Operating System helps you Plan, Protect, and Perform through every major life event with confidence and control.</p>
                
                <div class="hero-badges">
                    <span class="badge">🎯 Project Management</span>
                    <span class="badge">🛡️ Risk Assessment</span>
                    <span class="badge">📊 Cost Analysis</span>
                    <span class="badge">⚡ Implementation Focus</span>
                </div>
                
                <a href="#tools" class="cta-button">Explore Free Tools</a>
            </div>
        </div>
    </section>

    <!-- Tools Grid Section -->
    <section id="tools" class="tools-section">
        <div class="container">
            <h2 class="section-title">Life Planning Tools</h2>
            <p class="section-subtitle">Professional-grade planning tools designed for life's most important moments</p>
            
            <div class="tools-grid">
                <!-- Wedding Planner - FREE -->
                <div class="tool-card">
                    <div class="tool-badge free">Free</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #ff6b6b, #ee5a24);">💍</div>
                    <h3>Wedding Planner</h3>
                    <p>Get your personalized wedding timeline, budget breakdown, and vendor recommendations in minutes.</p>
                    <ul class="tool-features">
                        <li>12-month planning timeline</li>
                        <li>Budget tracking & allocation</li>
                        <li>Vendor recommendations</li>
                        <li>Risk assessment checklist</li>
                        <li>Implementation roadmap</li>
                    </ul>
                    <a href="<?php echo home_url('/wedding/'); ?>" class="tool-button available">Start Planning Free</a>
                </div>

                <!-- Moving Planner - COMING SOON -->
                <div class="tool-card">
                    <div class="tool-badge coming-soon">Coming Soon</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #6c5ce7, #a29bfe);">📦</div>
                    <h3>Moving Planner</h3>
                    <p>Comprehensive moving checklist with timeline, budget planning, and logistics coordination.</p>
                    <ul class="tool-features">
                        <li>8-week moving timeline</li>
                        <li>Cost comparison tools</li>
                        <li>Address change checklist</li>
                        <li>Utility transfer guide</li>
                        <li>Moving day coordination</li>
                    </ul>
                    <a href="#" class="tool-button coming-soon">Notify When Available</a>
                </div>

                <!-- Baby Planning - COMING SOON -->
                <div class="tool-card">
                    <div class="tool-badge coming-soon">Coming Soon</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #00b894, #00a085);">👶</div>
                    <h3>Baby Planner</h3>
                    <p>From pregnancy through first year - comprehensive planning for your growing family.</p>
                    <ul class="tool-features">
                        <li>40-week pregnancy timeline</li>
                        <li>Hospital bag checklist</li>
                        <li>Baby gear essentials</li>
                        <li>Budget planning tools</li>
                        <li>Newborn care schedule</li>
                    </ul>
                    <a href="#" class="tool-button coming-soon">Notify When Available</a>
                </div>

                <!-- Home Buying - COMING SOON -->
                <div class="tool-card">
                    <div class="tool-badge coming-soon">Coming Soon</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #fdcb6e, #e17055);">🏠</div>
                    <h3>Home Buying Planner</h3>
                    <p>Navigate the home buying process with confidence using our step-by-step guidance.</p>
                    <ul class="tool-features">
                        <li>Pre-approval checklist</li>
                        <li>House hunting timeline</li>
                        <li>Offer strategy guide</li>
                        <li>Inspection checklist</li>
                        <li>Closing preparation</li>
                    </ul>
                    <a href="#" class="tool-button coming-soon">Notify When Available</a>
                </div>

                <!-- Event Planning - PAID -->
                <div class="tool-card">
                    <div class="tool-badge paid">Paid</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #e84393, #fd79a8);">🎉</div>
                    <h3>Event Planner Pro</h3>
                    <p>Professional event planning tools for corporate events, parties, and celebrations.</p>
                    <ul class="tool-features">
                        <li>Custom event timelines</li>
                        <li>Vendor management system</li>
                        <li>Budget tracking</li>
                        <li>Guest list management</li>
                        <li>Day-of coordination</li>
                    </ul>
                    <a href="#" class="tool-button coming-soon">Coming Q4 2025</a>
                </div>

                <!-- Travel Planning - PAID -->
                <div class="tool-card">
                    <div class="tool-badge paid">Paid</div>
                    <div class="tool-icon" style="background: linear-gradient(135deg, #74b9ff, #0984e3);">✈️</div>
                    <h3>Travel Planner Pro</h3>
                    <p>Comprehensive travel planning with itineraries, budgets, and safety protocols.</p>
                    <ul class="tool-features">
                        <li>Multi-destination planning</li>
                        <li>Budget optimization</li>
                        <li>Travel document checklist</li>
                        <li>Safety risk assessment</li>
                        <li>Emergency planning</li>
                    </ul>
                    <a href="#" class="tool-button coming-soon">Coming Q1 2026</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Email Signup Section -->
    <section class="email-section">
        <div class="container">
            <h2 class="section-title">Get Notified About New Tools</h2>
            <p class="section-subtitle">Be the first to know when new planning tools become available</p>
            <form class="email-form" id="newsletterForm">
                <input type="email" class="email-input" placeholder="Enter your email address" required>
                <button type="submit" class="email-button">Stay Updated</button>
            </form>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title">Why Choose the 3P System?</h2>
            <p class="section-subtitle">Professional project management principles adapted for personal life</p>
            
            <div class="features-grid">
                <div class="feature">
                    <div class="feature-icon">📋</div>
                    <h3>Plan</h3>
                    <p>Comprehensive planning with detailed timelines, budgets, and checklists tailored to your specific needs and constraints.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🛡️</div>
                    <h3>Protect</h3>
                    <p>Risk assessment and safety planning to identify potential issues before they become problems.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">⚡</div>
                    <h3>Perform</h3>
                    <p>Implementation-focused approach with clear action steps and progress tracking for successful execution.</p>
                </div>
            </div>
        </div>
    </section>
    
    <?php echo do_shortcode('[mwai_chatbot id="chatbot-kyjcyq"]'); ?>
    
    <!--
    <div class='mwai-chatbot-container' data-params='{
    "aiName":"3P Life Assistant: ",
    "userName":"You: ",
    "guestName":"Guest: ",
    "textSend":"Send",
    "textClear":"Clear",
    "multiUpload":false,
    "mode":"chat",
    "textInputPlaceholder":"Ask about planning...",
    "textInputMaxLength":512,
    "textCompliance":"",
    "startSentence":"Hi! I can help you with planning questions using our 3P approach. What would you like to know?",
    "localMemory":true,
    "themeId":"chatgpt",
    "window":true,
    "icon":"",
    "iconText":"💬",
    "iconTextDelay":1,
    "iconAlt":"3P Life Assistant",
    "iconPosition":"bottom-right",
    "centerOpen":false,
    "width":"",
    "openDelay":"",
    "iconBubble":true,
    "windowAnimation":"zoom",
    "fullscreen":false,
    "copyButton":false,
    "headerSubtitle":"3P Life Assistant",
    "containerType":"standard",
    "headerType":"standard",
    "messagesType":"standard",
    "inputType":"standard",
    "footerType":"standard"
}' data-system='{
    "botId":"chatbot-kyjcyq",
    "customId":"chatbot-kyjcyq",
    "userData":null,
    "sessionId":"<?php echo uniqid('3p-'); ?>",
    "restNonce":"<?php echo wp_create_nonce('wp_rest'); ?>",
    "contextId":"<?php echo is_page() ? get_the_ID() : 'homepage'; ?>",
    "pluginUrl":"<?php echo plugins_url('ai-engine/'); ?>",
    "restUrl":"<?php echo get_rest_url(); ?>",
    "stream":true,
    "debugMode":false,
    "eventLogs":true,
    "speech_recognition":false,
    "speech_synthesis":false,
    "typewriter":false,
    "crossSite":false,
    "actions":[],
    "blocks":[],
    "shortcuts":[]
}' data-theme='{
    "type":"internal",
    "name":"ChatGPT",
    "themeId":"chatgpt",
    "settings":[],
    "style":""
}'></div>
-->

<?php if (current_user_can('manage_options') && isset($_GET['chatbot_check'])): ?>
<div style="position: fixed; top: 10px; left: 10px; background: #333; color: white; padding: 15px; z-index: 9999; font-family: monospace; font-size: 12px; max-width: 400px;">
    <h4 style="color: white; margin: 0 0 10px 0;">Chatbot Status Check</h4>
    <div>✅ Page template: <?php echo basename(get_page_template()); ?></div>
    <div>✅ Current page ID: <?php echo get_the_ID(); ?></div>
    <div>✅ REST URL: <?php echo get_rest_url(); ?></div>
    <div>✅ Nonce generated: <?php echo wp_create_nonce('wp_rest') ? 'Yes' : 'No'; ?></div>
    <div>✅ AI Engine shortcode exists: <?php echo shortcode_exists('mwai_chatbot') ? 'Yes' : 'No'; ?></div>
    
    <?php 
    $chatbots = get_option('mwai_chatbots', []);
    if (!empty($chatbots)):
    ?>
    <div>✅ Available chatbot IDs:</div>
    <?php foreach (array_keys($chatbots) as $bot_id): ?>
        <div style="margin-left: 20px;">- <?php echo esc_html($bot_id); ?></div>
    <?php endforeach; ?>
    <?php else: ?>
    <div>❌ No chatbots configured in AI Engine</div>
    <?php endif; ?>
</div>
<?php endif; ?>


    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('#threep-homepage a[href^="#"]').forEach(anchor => {
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

        // Email form handling with analytics tracking
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Track email signup conversion
            if (typeof gtag !== 'undefined') {
                gtag('event', 'email_signup', {
                    'event_category': 'engagement',
                    'event_label': 'newsletter_signup'
                });
            }
            
            alert('Thank you for subscribing! We\'ll notify you about new tools.');
            this.reset();
        });

        // Coming soon button handling
        document.querySelectorAll('#threep-homepage .tool-button.coming-soon').forEach(button => {
            if (button.textContent === 'Notify When Available') {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('We\'ll add you to our notification list for this tool!');
                });
            }
        });
    </script>
</div>

<?php get_footer(); ?>