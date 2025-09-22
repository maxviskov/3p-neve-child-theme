<?php
/*
Template Name: 3P Life OS Contact Page
Description: Contact page template for 3P Life Operating System with business inquiries and general contact
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add custom head content for this template
function threep_contact_head_content() {
    ?>
    <meta name="description" content="Get in touch with Max Viskov and the 3P Life Operating System team. Business inquiries, partnerships, feedback, and general questions welcome.">
    
    <style>
        /* Reset and Base Styles for 3P Contact Page */
        #threep-contact * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #threep-contact {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        #threep-contact .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Page Header */
        #threep-contact .page-header {
            text-align: center;
            margin-bottom: 60px;
            padding: 40px 0;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        #threep-contact .page-header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 700;
        }

        #threep-contact .page-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Response Times Section */
        #threep-contact .response-times {
            background: white;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        #threep-contact .response-times h3 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.4rem;
        }

        #threep-contact .response-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        #threep-contact .response-item {
            text-align: center;
            padding: 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
        }

        #threep-contact .response-item .emoji {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        #threep-contact .response-item h4 {
            color: #495057;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        #threep-contact .response-item .time {
            color: #667eea;
            font-weight: 600;
        }

        /* Main Contact Grid */
        #threep-contact .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        #threep-contact .contact-form-section {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        #threep-contact .contact-info-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Form Styles */
        #threep-contact .form-group {
            margin-bottom: 25px;
        }

        #threep-contact .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        #threep-contact .wpcf7-form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        #threep-contact .wpcf7-form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        #threep-contact .wpcf7-textarea {
            resize: vertical;
            min-height: 120px;
        }

        #threep-contact .required {
            color: #e74c3c;
        }

        #threep-contact .wpcf7-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        #threep-contact .wpcf7-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        /* Contact Info Styles */
        #threep-contact .contact-info h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }

        #threep-contact .info-item {
            margin-bottom: 25px;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }

        #threep-contact .info-item h4 {
            color: white;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        #threep-contact .info-item p {
            color: rgba(255,255,255,0.9);
            line-height: 1.5;
        }

        #threep-contact .info-item small {
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
        }

        /* Help Link */
        #threep-contact .help-link {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 20px;
            border-radius: 12px;
            margin-top: 30px;
            text-align: center;
        }

        #threep-contact .help-link a {
            color: #856404;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        #threep-contact .help-link a:hover {
            text-decoration: underline;
        }

        /* Success/Error Messages */
        #threep-contact .wpcf7-response-output {
            border: none;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            font-weight: 500;
        }

        #threep-contact .wpcf7-mail-sent-ok {
            background: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        #threep-contact .wpcf7-validation-errors,
        #threep-contact .wpcf7-mail-sent-ng {
            background: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        #threep-contact .wpcf7-not-valid-tip {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            #threep-contact .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            #threep-contact .page-header h1 {
                font-size: 2rem;
            }

            #threep-contact .container {
                padding: 20px 15px;
            }

            #threep-contact .contact-form-section,
            #threep-contact .contact-info-section {
                padding: 30px 20px;
            }

            #threep-contact .response-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Override WordPress theme styles */
        #threep-contact .entry-header {
            display: none;
        }

        #threep-contact .entry-content {
            margin: 0;
            padding: 0;
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

        #threep-contact .animate-on-scroll {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
    <?php
}
add_action('wp_head', 'threep_contact_head_content');

get_header(); ?>

<div id="threep-contact">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Get in Touch</h1>
            <p>Have questions about our planning tools or want to collaborate? We'd love to hear from you!</p>
        </div>

        <!-- Response Times Section -->
        <div class="response-times">
            <h3>📞 What to Expect</h3>
            <div class="response-grid">
                <div class="response-item">
                    <div class="emoji">💼</div>
                    <h4>Business Inquiries</h4>
                    <div class="time">2 business days</div>
                </div>
                <div class="response-item">
                    <div class="emoji">🤝</div>
                    <h4>Partnerships</h4>
                    <div class="time">3 business days</div>
                </div>
                <div class="response-item">
                    <div class="emoji">💡</div>
                    <h4>General Questions</h4>
                    <div class="time">24 hours</div>
                </div>
                <div class="response-item">
                    <div class="emoji">📝</div>
                    <h4>Feedback</h4>
                    <div class="time">48 hours</div>
                </div>
            </div>
        </div>

        <!-- Main Contact Grid -->
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h3 style="color: #2c3e50; margin-bottom: 25px; font-size: 1.5rem;">Send us a Message</h3>
                
                <!-- Contact Form 7 Shortcode - Replace with your actual form ID -->
                <?php echo do_shortcode('[contact-form-7 id="CONTACT_FORM_ID" title="Contact Form"]'); ?>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-section">
                <div class="contact-info">
                    <h3>Let's Connect</h3>
                    
                    <div class="info-item">
                        <h4>📧 Direct Email</h4>
                        <p>hello@maxviskov.com<br>
                        <small>For all general inquiries and business matters</small></p>
                    </div>

                    <div class="info-item">
                        <h4>🚀 What We Do</h4>
                        <p>We help people plan and organize their most important life events using proven project management principles.</p>
                    </div>

                    <div class="info-item">
                        <h4>🤝 Partnership Opportunities</h4>
                        <p>Interested in collaborating? We partner with content creators, coaches, and complementary service providers.</p>
                    </div>

                    <div class="info-item">
                        <h4>⏰ Response Times</h4>
                        <p>We personally read and respond to every message. Most inquiries get a response within 24-48 hours.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Link -->
        <div class="help-link">
            <a href="<?php echo home_url('/help'); ?>">
                🔧 Need help with our wedding planner? Visit our Help Center →
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation on scroll
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('#threep-contact .contact-grid, #threep-contact .response-times');
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

            // Track form submissions
            document.addEventListener('wpcf7mailsent', function(event) {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'contact_form_submit', {
                        'event_category': 'engagement',
                        'event_label': 'contact_page',
                        'form_id': event.detail.contactFormId
                    });
                }
            });

            // Track help center clicks
            const helpLink = document.querySelector('#threep-contact .help-link a');
            if (helpLink) {
                helpLink.addEventListener('click', function() {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'help_center_click', {
                            'event_category': 'navigation',
                            'event_label': 'from_contact_page'
                        });
                    }
                });
            }
        });
    </script>
</div>

<?php get_footer(); ?>