<?php
/**
 * Template for wedding planner page (slug: wedding)
 * Integrates with Neve theme structure
 */

get_header(); ?>

<style>
/* Wedding Planner Specific Styles - Integrated with Neve */
.wedding-hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 120px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin: 0 -15px; /* Break out of container */
}

.wedding-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
}

.hero-content {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.hero-text h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-text p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.trust-badge {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 1.5rem;
    border-radius: 15px;
    margin: 2rem 0;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.trust-badge h3 {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
}

.cta-button {
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

.cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 40px rgba(238, 90, 36, 0.4);
    color: white;
    text-decoration: none;
}

.mockup-preview {
    background: rgba(255, 255, 255, 0.95);
    color: #2c3e50;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    max-width: 350px;
    width: 100%;
}

.progress-bar {
    width: 100%;
    height: 8px;
    background: #e9ecef;
    border-radius: 4px;
    margin-bottom: 1.5rem;
    overflow: hidden;
}

.progress-fill {
    width: 60%;
    height: 100%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 4px;
}

.wedding-section {
    padding: 100px 0;
}

.wedding-section.alt-bg {
    background: #f8f9ff;
    margin: 0 -15px; /* Break out of container */
    padding-left: 15px;
    padding-right: 15px;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 1rem;
    color: #2c3e50;
}

.section-subtitle {
    font-size: 1.2rem;
    text-align: center;
    color: #7f8c8d;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.steps-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto;
}

.step {
    text-align: center;
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.step:hover {
    transform: translateY(-5px);
}

.step-number {
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

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.benefit {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding: 2rem;
    background: #f8f9ff;
    border-radius: 15px;
    border-left: 4px solid #667eea;
    transition: transform 0.3s ease;
}

.benefit:hover {
    transform: translateY(-2px);
}

.benefit-icon {
    color: #27ae60;
    font-size: 1.5rem;
    font-weight: 700;
    margin-top: 5px;
    flex-shrink: 0;
}

.three-p-section {
    background: linear-gradient(135deg, #2c3e50, #3498db);
    color: white;
    text-align: center;
    padding: 100px 0;
    margin: 0 -15px; /* Break out of container */
}

.three-p-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}

.three-p-section p {
    font-size: 1.3rem;
    color: rgba(255, 255, 255, 0.9);
    max-width: 600px;
    margin: 0 auto 3rem;
}

.survey-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9ff, #e8f4ff);
    margin: 0 -15px; /* Break out of container */
}

.form-container {
    background: white;
    padding: 3rem;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

.final-cta-section {
    padding: 100px 0;
    text-align: center;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .hero-text h1 {
        font-size: 2.5rem;
    }
    
    .steps-container {
        grid-template-columns: 1fr;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .wedding-section.alt-bg,
    .three-p-section,
    .survey-section,
    .wedding-hero-section {
        margin: 0 -20px;
        padding-left: 20px;
        padding-right: 20px;
    }
}
</style>

<!-- Sticky CTA Button -->
<div class="sticky-cta" id="stickyCTA" style="position: fixed; bottom: 20px; right: 20px; z-index: 999; opacity: 0; transition: all 0.3s ease;">
    <a href="#plannerForm" class="cta-button" style="padding: 15px 25px; font-size: 16px;">🎯 Start Your Free Plan Now</a>
</div>

<!-- This integrates with Neve's content structure -->
<div class="nv-content-wrap entry-content">
    <div class="container single-page-container">
        
        <!-- Hero Section -->
        <section class="wedding-hero-section">
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
                
                <div class="hero-visual" style="display: flex; justify-content: center; align-items: center;">
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
        </section>

    </div> <!-- End container for hero -->
    
    <!-- How It Works Section -->
    <section class="wedding-section alt-bg">
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
    <section class="wedding-section">
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
    <section class="three-p-section">
        <div class="container">
            <h2>Our Unique 3P Life Operating System™</h2>
            <p>Plan, Protect, Perform — helping you master life's biggest projects with confidence.</p>
            <a href="/" class="cta-button">Experience the 3P System</a>
        </div>
    </section>

    <!-- Survey Form Section -->
    <section id="plannerForm" class="survey-section">
        <div class="container">
            <h2 class="section-title">Start Your Free Wedding Plan</h2>
            <p class="section-subtitle">Answer a few quick questions to get your personalized timeline and budget guide</p>
            
            <div class="form-container">
                <div data-tf-live="01K1NSRF64B55KK37BK85TACHR"></div>
                <script src="//embed.typeform.com/next/embed.js"></script>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <div class="container">
        <section class="final-cta-section">
            <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: #2c3e50;">Questions About Your Wedding Plan?</h2>
            <p style="font-size: 1.2rem; color: #7f8c8d; margin-bottom: 2rem;">Need help with your personalized wedding timeline? We're here to support you!</p>
            <a href="#plannerForm" class="cta-button">Back to Survey</a>
        </section>
    </div>

</div> <!-- End nv-content-wrap -->

<!-- AI Engine Chatbot -->
<div class='mwai-chatbot-container' data-params='{
    "aiName":"3P Wedding Assistant: ",
    "userName":"You: ",
    "textInputPlaceholder":"Ask about wedding planning...",
    "startSentence":"Hi! I can help you with wedding planning questions and guide you through our 3P approach. What would you like to know?",
    "themeId":"chatgpt",
    "window":true,
    "iconPosition":"bottom-right",
    "headerSubtitle":"Wedding Planning Helper"
}' data-system='{
    "botId":"chatbot-poq3ao",
    "customId":"chatbot-poq3ao",
    "sessionId":"wedding-planner"
}'></div>

<script>
// Sticky CTA Button Logic
window.addEventListener('scroll', function() {
    const stickyCTA = document.getElementById('stickyCTA');
    const heroSection = document.querySelector('.wedding-hero-section');
    
    if (heroSection) {
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
        
        if (window.scrollY > heroBottom - 100) {
            stickyCTA.style.opacity = '1';
            stickyCTA.style.transform = 'translateY(0)';
        } else {
            stickyCTA.style.opacity = '0';
            stickyCTA.style.transform = 'translateY(20px)';
        }
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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
</script>

<?php get_footer(); ?>