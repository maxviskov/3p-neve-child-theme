<?php
/*
Template Name: 3P Life OS Help Page
Description: Comprehensive self-service help page for 3P Life Operating System users
Version: 1.0
Author: Max Viskov - 3P Life OS
*/

get_header(); ?>

<div id="threep-help-page" class="threep-container">
    
    <!-- Header Section -->
    <section class="help-header">
        <div class="help-header-content">
            <h1 class="help-title">How Can We Help You?</h1>
            <p class="help-subtitle">Find answers to common questions about the 3P Life Operating System™ and our planning tools</p>
            
            <!-- Search Box -->
            <div class="help-search-container">
                <input type="text" id="helpSearch" placeholder="Search for help topics..." class="help-search-input">
                <button type="button" class="help-search-btn" onclick="searchHelp()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Quick Navigation -->
    <section class="help-quick-nav">
        <div class="help-nav-grid">
            <a href="#getting-started" class="help-nav-card">
                <div class="help-nav-icon">🚀</div>
                <h3>Getting Started</h3>
                <p>New to the 3P System? Start here</p>
            </a>
            <a href="#wedding-planner" class="help-nav-card">
                <div class="help-nav-icon">💒</div>
                <h3>Wedding Planner</h3>
                <p>Help with your wedding planning tool</p>
            </a>
            <a href="#email-issues" class="help-nav-card">
                <div class="help-nav-icon">📧</div>
                <h3>Email & Delivery</h3>
                <p>Not receiving your plans?</p>
            </a>
            <a href="#technical-support" class="help-nav-card">
                <div class="help-nav-icon">⚙️</div>
                <h3>Technical Issues</h3>
                <p>Browser and compatibility help</p>
            </a>
            <a href="#3p-system" class="help-nav-card">
                <div class="help-nav-icon">🎯</div>
                <h3>3P System</h3>
                <p>Understanding Plan, Protect, Perform</p>
            </a>
            <a href="#account-billing" class="help-nav-card">
                <div class="help-nav-icon">👤</div>
                <h3>Account & Billing</h3>
                <p>Manage your account and payments</p>
            </a>
        </div>
    </section>

    <!-- Main Help Content -->
    <div class="help-content-wrapper">
        
        <!-- Getting Started Section -->
        <section id="getting-started" class="help-section">
            <h2>🚀 Getting Started</h2>
            
            <div class="faq-item">
                <h3>What is the 3P Life Operating System™?</h3>
                <div class="faq-answer">
                    <p>The 3P Life Operating System™ is an integrated methodology that treats your entire life as interconnected systems. Instead of juggling separate apps for productivity, projects, and safety, you operate from one cohesive framework built on three pillars:</p>
                    <ul>
                        <li><strong>PLAN (Project Mastery):</strong> Every meaningful life change is a project waiting to be managed</li>
                        <li><strong>PROTECT (Personal Safety):</strong> You can't achieve your goals if you don't protect your ability to pursue them</li>
                        <li><strong>PERFORM (Productivity Systems):</strong> Consistent small actions compound into extraordinary results</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>How do I start using the 3P System?</h3>
                <div class="faq-answer">
                    <p>Begin with these simple steps:</p>
                    <ol>
                        <li><strong>Take the 3P Assessment:</strong> Understand your current life management strengths and weaknesses</li>
                        <li><strong>Start with one pillar:</strong> Choose your weakest area and implement one simple system</li>
                        <li><strong>Use our free tools:</strong> Try the wedding planner to see how project management principles work in real life</li>
                        <li><strong>Build integration:</strong> Gradually connect all three pillars into one unified system</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <h3>Is the 3P System only for big life projects?</h3>
                <div class="faq-answer">
                    <p>No! The 3P System scales from daily tasks to major life changes. Whether you're planning a wedding, changing careers, organizing your home, or just trying to be more productive, the same principles apply. Start small and expand as you see results.</p>
                </div>
            </div>
        </section>

        <!-- Wedding Planner Section -->
        <section id="wedding-planner" class="help-section">
            <h2>💒 Wedding Planner Help</h2>
            
            <div class="faq-item">
                <h3>How does the free wedding planner work?</h3>
                <div class="faq-answer">
                    <p>Our wedding planner uses the 3P methodology to create comprehensive, personalized wedding plans:</p>
                    <ol>
                        <li><strong>Answer questions:</strong> Complete our TypeForm survey about your preferences, budget, and timeline</li>
                        <li><strong>AI processing:</strong> Our system analyzes your responses and creates a customized plan</li>
                        <li><strong>Receive your plan:</strong> Get a detailed PDF plan via email within 10-15 minutes</li>
                    </ol>
                    <p>Your plan includes project timelines, safety considerations, and productivity systems to keep you organized.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>What's included in my wedding plan?</h3>
                <div class="faq-answer">
                    <p>Your personalized wedding plan includes:</p>
                    <ul>
                        <li><strong>Executive Summary:</strong> Overview of your wedding vision and priorities</li>
                        <li><strong>Timeline & Milestones:</strong> Month-by-month planning schedule</li>
                        <li><strong>Budget Breakdown:</strong> Cost estimates tailored to your budget range</li>
                        <li><strong>Vendor Recommendations:</strong> Priority list based on your style and location</li>
                        <li><strong>Safety & Backup Plans:</strong> Risk mitigation for common wedding issues</li>
                        <li><strong>Productivity Systems:</strong> Organization tools to stay on track</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>Can I modify my wedding plan after receiving it?</h3>
                <div class="faq-answer">
                    <p>Your PDF plan serves as a comprehensive starting point that you can customize as needed. While we don't currently offer plan modifications through the website, the plan is designed to be flexible and adaptable to changing circumstances. Future versions will include account dashboards for plan updates.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>How accurate are the budget estimates?</h3>
                <div class="faq-answer">
                    <p>Budget estimates are based on current market data and industry standards. Actual costs vary by location, vendor, and specific choices. Use the estimates as planning guidelines and always get quotes from multiple vendors for accurate pricing in your area.</p>
                </div>
            </div>
        </section>

        <!-- Email Issues Section -->
        <section id="email-issues" class="help-section">
            <h2>📧 Email & Delivery Issues</h2>
            
            <div class="faq-item">
                <h3>I haven't received my wedding plan email. What should I do?</h3>
                <div class="faq-answer">
                    <p>If you haven't received your wedding plan within 30 minutes, try these steps:</p>
                    <ol>
                        <li><strong>Check your spam folder:</strong> Look for emails from "noreply@planner.maxviskov.com"</li>
                        <li><strong>Check your promotions tab:</strong> Gmail users should check the Promotions tab</li>
                        <li><strong>Verify your email address:</strong> Make sure you entered it correctly during the survey</li>
                        <li><strong>Whitelist our domain:</strong> Add planner.maxviskov.com to your safe senders list</li>
                        <li><strong>Try the resend function:</strong> Visit <a href="/resend">/resend</a> to request another copy</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <h3>The email arrived but there's no PDF attachment</h3>
                <div class="faq-answer">
                    <p>If the PDF didn't generate properly, your email will contain a text preview of your wedding plan. This still includes all the essential information you need. We're working to improve PDF generation reliability. Contact support if you need a properly formatted version.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Can I change the email address for my plan?</h3>
                <div class="faq-answer">
                    <p>Currently, plans are sent to the email address provided during the initial survey. If you need it sent to a different address, please use our <a href="/contact">contact form</a> with your original details and the new email address.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>How do I add planner.maxviskov.com to my safe senders list?</h3>
                <div class="faq-answer">
                    <p>Instructions for popular email providers:</p>
                    <ul>
                        <li><strong>Gmail:</strong> Add planner.maxviskov.com to your contacts, or mark our email as "Not Spam"</li>
                        <li><strong>Outlook:</strong> Go to Settings → Mail → Junk Email → Safe Senders and add our domain</li>
                        <li><strong>Yahoo:</strong> Add the sender to your contacts or whitelist the domain in spam settings</li>
                        <li><strong>Apple Mail:</strong> Right-click the email and select "Add to VIPs"</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Technical Support Section -->
        <section id="technical-support" class="help-section">
            <h2>⚙️ Technical Issues</h2>
            
            <div class="faq-item">
                <h3>Browser Compatibility</h3>
                <div class="faq-answer">
                    <p>Our tools work best with modern browsers:</p>
                    <ul>
                        <li><strong>Recommended:</strong> Chrome 90+, Firefox 88+, Safari 14+, Edge 90+</li>
                        <li><strong>Mobile:</strong> iOS Safari 14+, Chrome Mobile 90+</li>
                        <li><strong>Not supported:</strong> Internet Explorer (use Edge instead)</li>
                    </ul>
                    <p>If you're experiencing issues, try updating your browser or switching to a recommended one.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>The survey form isn't loading or submitting</h3>
                <div class="faq-answer">
                    <p>Troubleshooting steps:</p>
                    <ol>
                        <li><strong>Clear your cache:</strong> Refresh the page with Ctrl+F5 (Cmd+R on Mac)</li>
                        <li><strong>Disable ad blockers:</strong> Some ad blockers interfere with TypeForm</li>
                        <li><strong>Check your connection:</strong> Ensure you have a stable internet connection</li>
                        <li><strong>Try incognito mode:</strong> Test in a private/incognito browser window</li>
                        <li><strong>Mobile users:</strong> Try desktop if mobile isn't working</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <h3>The website looks broken or isn't mobile-friendly</h3>
                <div class="faq-answer">
                    <p>Our website is designed to be mobile-responsive. If it's not displaying correctly:</p>
                    <ul>
                        <li>Try refreshing the page</li>
                        <li>Clear your browser cache</li>
                        <li>Check if you're using an outdated browser</li>
                        <li>Disable browser extensions that might interfere</li>
                    </ul>
                    <p>If problems persist, please contact support with your browser and device information.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>JavaScript or loading errors</h3>
                <div class="faq-answer">
                    <p>If you see error messages or features aren't working:</p>
                    <ol>
                        <li>Make sure JavaScript is enabled in your browser</li>
                        <li>Disable browser extensions temporarily</li>
                        <li>Try a different browser or device</li>
                        <li>Check if you have security software blocking scripts</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- 3P System Section -->
        <section id="3p-system" class="help-section">
            <h2>🎯 Understanding the 3P System</h2>
            
            <div class="faq-item">
                <h3>How do the three pillars work together?</h3>
                <div class="faq-answer">
                    <p>The 3P System's power comes from integration:</p>
                    <ul>
                        <li><strong>PLAN ↔ PROTECT:</strong> Every project includes safety considerations and risk mitigation</li>
                        <li><strong>PROTECT ↔ PERFORM:</strong> Productivity systems that don't burn you out, with secure digital tools</li>
                        <li><strong>PERFORM ↔ PLAN:</strong> Daily actions that consistently advance your major life projects</li>
                    </ul>
                    <p>This creates a reinforcing system where each pillar strengthens the others.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Which pillar should I start with?</h3>
                <div class="faq-answer">
                    <p>Start with your weakest area:</p>
                    <ul>
                        <li><strong>If you have big dreams but no progress:</strong> Start with PLAN (Project Mastery)</li>
                        <li><strong>If you're always stressed or unprepared:</strong> Start with PROTECT (Personal Safety)</li>
                        <li><strong>If you're disorganized or procrastinate:</strong> Start with PERFORM (Productivity Systems)</li>
                    </ul>
                    <p>Take our 3P Assessment to identify your starting point.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Can I use the 3P System with my existing tools?</h3>
                <div class="faq-answer">
                    <p>Absolutely! The 3P System is methodology, not software. You can apply it using:</p>
                    <ul>
                        <li><strong>Simple tools:</strong> Google Docs, Calendar, and basic note apps</li>
                        <li><strong>Popular apps:</strong> Notion, Todoist, or your current productivity tools</li>
                        <li><strong>Professional tools:</strong> Monday.com, Asana, or project management software</li>
                    </ul>
                    <p>The key is integration and thinking about all three pillars together.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Is this just for organized people?</h3>
                <div class="faq-answer">
                    <p>No! The 3P System is especially helpful for people who struggle with organization. It provides structure while being flexible enough to adapt to your natural working style. Start simple and build complexity gradually.</p>
                </div>
            </div>
        </section>

        <!-- Account & Billing Section -->
        <section id="account-billing" class="help-section">
            <h2>👤 Account & Billing</h2>
            
            <div class="faq-item">
                <h3>Do I need an account to use the free wedding planner?</h3>
                <div class="faq-answer">
                    <p>No account is required for the free wedding planner. Simply complete the survey and provide your email address to receive your plan. Account features are coming in future updates.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>How do I update my email preferences?</h3>
                <div class="faq-answer">
                    <p>Email preferences can be managed through the unsubscribe link at the bottom of any email we send you. Future account features will provide more granular control over email notifications.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>What's coming in future updates?</h3>
                <div class="faq-answer">
                    <p>We're actively developing:</p>
                    <ul>
                        <li>User accounts with saved plans and progress tracking</li>
                        <li>Additional planning tools (moving, career change, home projects)</li>
                        <li>Premium features and advanced 3P System resources</li>
                        <li>Community features and group coaching</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>How do I delete my data?</h3>
                <div class="faq-answer">
                    <p>To request data deletion, please contact us through our <a href="/contact">contact form</a>. We respect your privacy and will remove your information from our systems within 30 days of your request.</p>
                </div>
            </div>
        </section>

    </div>

    <!-- Still Need Help Section -->
    <section class="help-contact-cta">
        <div class="help-cta-content">
            <h2>Still Need Help?</h2>
            <p>Can't find what you're looking for? Our support team is here to help you succeed with the 3P Life Operating System.</p>
            <div class="help-cta-buttons">
                <a href="/contact" class="btn-primary">Contact Support</a>
                <a href="/about" class="btn-secondary">Learn More About 3P</a>
            </div>
            <p class="help-response-time">💬 We typically respond within 24 hours</p>
        </div>
    </section>

</div>

<!-- Help Page Styles -->
<style>
/* Help Page Specific Styles */
#threep-help-page {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.help-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
    padding: 60px 20px 40px;
    margin: -20px -20px 40px -20px;
    border-radius: 0 0 20px 20px;
}

.help-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 16px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.help-subtitle {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
}

.help-search-container {
    max-width: 500px;
    margin: 0 auto;
    position: relative;
}

.help-search-input {
    width: 100%;
    padding: 15px 20px 15px 20px;
    font-size: 16px;
    border: none;
    border-radius: 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    outline: none;
}

.help-search-btn {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    background: #667eea;
    border: none;
    color: white;
    padding: 10px 15px;
    border-radius: 25px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.help-search-btn:hover {
    background: #5a6fd8;
}

.help-quick-nav {
    margin-bottom: 60px;
}

.help-nav-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

.help-nav-card {
    background: white;
    border: 2px solid #f0f0f0;
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.help-nav-card:hover {
    border-color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.1);
    text-decoration: none;
    color: inherit;
}

.help-nav-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.help-nav-card h3 {
    margin-bottom: 10px;
    color: #333;
    font-size: 1.3rem;
}

.help-nav-card p {
    color: #666;
    margin: 0;
}

.help-content-wrapper {
    max-width: 900px;
    margin: 0 auto;
}

.help-section {
    margin-bottom: 60px;
    background: white;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.help-section h2 {
    color: #333;
    border-bottom: 3px solid #667eea;
    padding-bottom: 15px;
    margin-bottom: 30px;
    font-size: 2rem;
}

.faq-item {
    margin-bottom: 30px;
    border-bottom: 1px solid #eee;
    padding-bottom: 25px;
}

.faq-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.faq-item h3 {
    color: #444;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.faq-item h3:hover {
    color: #667eea;
}

.faq-item h3::after {
    content: "↓";
    font-size: 1rem;
    transition: transform 0.3s ease;
}

.faq-item.collapsed h3::after {
    transform: rotate(-90deg);
}

.faq-answer {
    line-height: 1.6;
    color: #555;
}

.faq-answer ul, .faq-answer ol {
    margin: 15px 0;
    padding-left: 20px;
}

.faq-answer li {
    margin-bottom: 8px;
}

.faq-answer strong {
    color: #333;
}

.faq-answer a {
    color: #667eea;
    text-decoration: none;
}

.faq-answer a:hover {
    text-decoration: underline;
}

.help-contact-cta {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
    padding: 50px 20px;
    border-radius: 20px;
    margin-top: 60px;
}

.help-cta-content h2 {
    margin-bottom: 15px;
    font-size: 2.2rem;
}

.help-cta-content p {
    font-size: 1.1rem;
    margin-bottom: 25px;
    opacity: 0.9;
}

.help-cta-buttons {
    margin-bottom: 20px;
}

.help-cta-buttons .btn-primary,
.help-cta-buttons .btn-secondary {
    display: inline-block;
    padding: 15px 30px;
    margin: 0 10px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.help-cta-buttons .btn-primary {
    background: white;
    color: #667eea;
}

.help-cta-buttons .btn-primary:hover {
    background: #f8f9ff;
    transform: translateY(-2px);
    text-decoration: none;
    color: #667eea;
}

.help-cta-buttons .btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.help-cta-buttons .btn-secondary:hover {
    background: white;
    color: #667eea;
    text-decoration: none;
}

.help-response-time {
    font-size: 0.9rem;
    opacity: 0.8;
    margin: 0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .help-title {
        font-size: 2.2rem;
    }
    
    .help-nav-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .help-nav-card {
        padding: 20px;
    }
    
    .help-section {
        padding: 25px 20px;
    }
    
    .help-cta-buttons .btn-primary,
    .help-cta-buttons .btn-secondary {
        display: block;
        margin: 10px auto;
        width: 200px;
    }
}

/* Search Functionality */
.search-highlight {
    background: #ffeb3b;
    padding: 2px 4px;
    border-radius: 3px;
}

.search-no-results {
    text-align: center;
    padding: 40px 20px;
    color: #666;
}

.search-no-results h3 {
    margin-bottom: 15px;
}
</style>

<!-- Help Page JavaScript -->
<script>
// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('h3');
        const answer = item.querySelector('.faq-answer');
        
        // Initially show all answers (remove this if you want them collapsed by default)
        // item.classList.add('collapsed');
        // answer.style.display = 'none';
        
        question.addEventListener('click', function() {
            const isCollapsed = item.classList.contains('collapsed');
            
            if (isCollapsed) {
                item.classList.remove('collapsed');
                answer.style.display = 'block';
            } else {
                item.classList.add('collapsed');
                answer.style.display = 'none';
            }
        });
    });
    
    // Search functionality
    const searchInput = document.getElementById('helpSearch');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchHelp();
            }
        });
    }
});

// Search Function
function searchHelp() {
    const searchTerm = document.getElementById('helpSearch').value.toLowerCase().trim();
    const faqItems = document.querySelectorAll('.faq-item');
    const sections = document.querySelectorAll('.help-section');
    let hasResults = false;
    
    if (searchTerm === '') {
        // Show all items if search is empty
        faqItems.forEach(item => {
            item.style.display = 'block';
        });
        sections.forEach(section => {
            section.style.display = 'block';
        });
        return;
    }
    
    // Clear previous highlights
    clearHighlights();
    
    sections.forEach(section => {
        let sectionHasResults = false;
        const sectionFaqItems = section.querySelectorAll('.faq-item');
        
        sectionFaqItems.forEach(item => {
            const question = item.querySelector('h3').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
                sectionHasResults = true;
                hasResults = true;
                
                // Highlight search terms
                highlightSearchTerm(item, searchTerm);
                
                // Expand the FAQ item if it's collapsed
                item.classList.remove('collapsed');
                item.querySelector('.faq-answer').style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide entire sections based on results
        if (sectionHasResults) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    });
    
    // Show no results message if needed
    if (!hasResults) {
        showNoResults(searchTerm);
    } else {
        hideNoResults();
    }
}

// Highlight search terms
function highlightSearchTerm(item, searchTerm) {
    const question = item.querySelector('h3');
    const answer = item.querySelector('.faq-answer');
    
    [question, answer].forEach(element => {
        const walker = document.createTreeWalker(
            element,
            NodeFilter.SHOW_TEXT,
            null,
            false
        );
        
        const textNodes = [];
        let node;
        
        while (node = walker.nextNode()) {
            textNodes.push(node);
        }
        
        textNodes.forEach(textNode => {
            const parent = textNode.parentNode;
            if (parent.className !== 'search-highlight') {
                const text = textNode.textContent;
                const regex = new RegExp(`(${escapeRegex(searchTerm)})`, 'gi');
                
                if (regex.test(text)) {
                    const highlightedHTML = text.replace(regex, '<span class="search-highlight">$1</span>');
                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = highlightedHTML;
                    
                    while (wrapper.firstChild) {
                        parent.insertBefore(wrapper.firstChild, textNode);
                    }
                    parent.removeChild(textNode);
                }
            }
        });
    });
}

// Clear previous highlights
function clearHighlights() {
    const highlights = document.querySelectorAll('.search-highlight');
    highlights.forEach(highlight => {
        const parent = highlight.parentNode;
        parent.replaceChild(document.createTextNode(highlight.textContent), highlight);
        parent.normalize();
    });
}

// Escape regex characters
function escapeRegex(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\    sections.forEach(section => {
        let sectionHasResults = false;
        const sectionFaqItems');
}

// Show no results message
function showNoResults(searchTerm) {
    let noResultsDiv = document.querySelector('.search-no-results');
    
    if (!noResultsDiv) {
        noResultsDiv = document.createElement('div');
        noResultsDiv.className = 'search-no-results';
        document.querySelector('.help-content-wrapper').appendChild(noResultsDiv);
    }
    
    noResultsDiv.innerHTML = `
        <h3>No results found for "${searchTerm}"</h3>
        <p>Try different keywords or browse the categories above.</p>
        <p>Still can't find what you're looking for? <a href="/contact">Contact our support team</a></p>
    `;
    noResultsDiv.style.display = 'block';
}

// Hide no results message
function hideNoResults() {
    const noResultsDiv = document.querySelector('.search-no-results');
    if (noResultsDiv) {
        noResultsDiv.style.display = 'none';
    }
}

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.help-nav-card[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Analytics tracking for help page interactions
function trackHelpInteraction(action, section) {
    if (typeof gtag !== 'undefined') {
        gtag('event', 'help_page_interaction', {
            'event_category': 'help',
            'event_label': section,
            'action': action
        });
    }
}

// Track FAQ expansions
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item h3');
    
    faqItems.forEach(question => {
        question.addEventListener('click', function() {
            const section = this.closest('.help-section').id;
            const questionText = this.textContent.trim();
            trackHelpInteraction('faq_toggle', `${section}: ${questionText}`);
        });
    });
});

// Track search usage
function searchHelp() {
    const searchTerm = document.getElementById('helpSearch').value.toLowerCase().trim();
    
    if (searchTerm) {
        trackHelpInteraction('search', searchTerm);
    }
    
    // Continue with existing search logic...
    const faqItems = document.querySelectorAll('.faq-item');
    const sections = document.querySelectorAll('.help-section');
    let hasResults = false;
    
    if (searchTerm === '') {
        // Show all items if search is empty
        faqItems.forEach(item => {
            item.style.display = 'block';
        });
        sections.forEach(section => {
            section.style.display = 'block';
        });
        return;
    }
    
    // Clear previous highlights
    clearHighlights();
    
    sections.forEach(section => {
        let sectionHasResults = false;
        const sectionFaqItems = section.querySelectorAll('.faq-item');
        
        sectionFaqItems.forEach(item => {
            const question = item.querySelector('h3').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
                sectionHasResults = true;
                hasResults = true;
                
                // Highlight search terms
                highlightSearchTerm(item, searchTerm);
                
                // Expand the FAQ item if it's collapsed
                item.classList.remove('collapsed');
                item.querySelector('.faq-answer').style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide entire sections based on results
        if (sectionHasResults) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    });
    
    // Show no results message if needed
    if (!hasResults) {
        showNoResults(searchTerm);
    } else {
        hideNoResults();
    }
}
</script>

<?php get_footer(); ?>