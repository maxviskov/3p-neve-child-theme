<?php
/*
Template Name: 3P Life OS Dynamic Help System
Description: Scalable help system with tool-specific content and dropdown navigation
Version: 2.0
Author: Max Viskov - 3P Life OS
*/

get_header(); ?>

<div id="threep-help-page" class="threep-container">
    
    <!-- Header Section -->
    <section class="help-header">
        <div class="help-header-content">
            <h1 class="help-title">How Can We Help You?</h1>
            <p class="help-subtitle">Find answers about the 3P Life Operating System™ and our planning tools</p>
            
            <!-- Tool Selector Dropdown -->
            <div class="tool-selector-container">
                <label for="toolSelector" class="tool-selector-label">Select a tool for specific help:</label>
                <select id="toolSelector" class="tool-selector-dropdown" onchange="switchTool()">
                    <option value="general">General Help & 3P System</option>
                    <option value="wedding" selected>Wedding Planner (FREE)</option>
                    <option value="moving" disabled>Moving Planner (Coming Soon)</option>
                    <option value="baby" disabled>Baby Planning (Coming Soon)</option>
                    <option value="travel" disabled>Travel Planner (Coming Soon)</option>
                    <option value="career" disabled>Career Change (Coming Soon)</option>
                    <option value="home" disabled>Home Projects (Coming Soon)</option>
                </select>
            </div>
            
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
            
            <!-- Tool-Specific Quick Actions -->
            <div class="tool-quick-actions" id="toolQuickActions">
                <!-- Dynamic content populated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Breadcrumb Navigation -->
    <div class="help-breadcrumb">
        <a href="/">Home</a> / <a href="/help">Help Center</a> / <span id="toolBreadcrumb">Wedding Planner</span>
    </div>

    <!-- Quick Navigation -->
    <section class="help-quick-nav">
        <div class="help-nav-grid" id="helpNavGrid">
            <!-- Dynamic navigation cards populated by JavaScript -->
        </div>
    </section>

    <!-- Main Help Content -->
    <div class="help-content-wrapper">
        
        <!-- Universal Sections (Always Visible) -->
        <div class="universal-sections">
            
            <!-- Email & Delivery Issues Section -->
            <section id="email-issues" class="help-section universal-section">
                <h2>📧 Email & Delivery Issues</h2>
                
                <div class="faq-item">
                    <h3>I haven't received my plan email. What should I do?</h3>
                    <div class="faq-answer">
                        <p>If you haven't received your personalized plan within 30 minutes:</p>
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
                        <p>If the PDF didn't generate properly, your email will contain a text preview of your plan. This still includes all the essential information you need. We're working to improve PDF generation reliability. Contact support if you need a properly formatted version.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h3>Email delivery failed or bounced back</h3>
                    <div class="faq-answer">
                        <p>If you receive a bounce-back notification:</p>
                        <ul>
                            <li><strong>Check email address spelling:</strong> Even small typos prevent delivery</li>
                            <li><strong>Corporate email blocks:</strong> Some company emails block external automated messages</li>
                            <li><strong>Mailbox full:</strong> Clear space in your email account</li>
                            <li><strong>Alternative email:</strong> Use a personal Gmail, Yahoo, or Outlook account</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <h3>How to whitelist planner.maxviskov.com</h3>
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
            <section id="technical-support" class="help-section universal-section">
                <h2>⚙️ Technical Issues & Browser Compatibility</h2>
                
                <div class="faq-item">
                    <h3>Browser Compatibility & Requirements</h3>
                    <div class="faq-answer">
                        <p><strong>Recommended Browsers:</strong></p>
                        <ul>
                            <li><strong>Chrome 90+:</strong> ✅ Full compatibility, fastest performance</li>
                            <li><strong>Firefox 88+:</strong> ✅ Full compatibility, good performance</li>
                            <li><strong>Safari 14+:</strong> ✅ Full compatibility (Mac/iOS)</li>
                            <li><strong>Edge 90+:</strong> ✅ Full compatibility (Windows)</li>
                        </ul>
                        <p><strong>Not Supported:</strong></p>
                        <ul>
                            <li><strong>Internet Explorer:</strong> ❌ Not supported - use Edge instead</li>
                            <li><strong>Very old mobile browsers:</strong> ⚠️ May have form submission issues</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <h3>Survey form not loading or submitting</h3>
                    <div class="faq-answer">
                        <p>If the planning survey isn't working:</p>
                        <ol>
                            <li><strong>Clear browser cache:</strong> Press Ctrl+F5 (Windows) or Cmd+Shift+R (Mac)</li>
                            <li><strong>Disable ad blockers:</strong> Some ad blockers block TypeForm embeds</li>
                            <li><strong>Check JavaScript:</strong> Our forms require JavaScript to be enabled</li>
                            <li><strong>Try incognito/private mode:</strong> This disables extensions temporarily</li>
                            <li><strong>Update your browser:</strong> Ensure you have the latest version</li>
                        </ol>
                    </div>
                </div>

                <div class="faq-item">
                    <h3>Mobile compatibility troubleshooting</h3>
                    <div class="faq-answer">
                        <p>If you're having issues on mobile devices:</p>
                        <ul>
                            <li><strong>Screen orientation:</strong> Try both portrait and landscape modes</li>
                            <li><strong>Touch responsiveness:</strong> Ensure you're tapping directly on buttons/fields</li>
                            <li><strong>Browser app:</strong> Try opening in your default browser instead of in-app browsers</li>
                            <li><strong>Network connection:</strong> Switch between WiFi and cellular data</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- 3P System Section -->
            <section id="3p-system" class="help-section universal-section">
                <h2>🎯 Understanding the 3P System</h2>
                
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
                    <h3>How do the three pillars work together?</h3>
                    <div class="faq-answer">
                        <p>The 3P System's power comes from integration:</p>
                        <ul>
                            <li><strong>PLAN ↔ PROTECT:</strong> Every project includes safety considerations and risk mitigation</li>
                            <li><strong>PROTECT ↔ PERFORM:</strong> Productivity systems that don't burn you out, with secure digital tools</li>
                            <li><strong>PERFORM ↔ PLAN:</strong> Daily actions that consistently advance your major life projects</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <h3>Can I use the 3P System with my existing tools?</h3>
                    <div class="faq-answer">
                        <p>Absolutely! The 3P System is methodology, not software. You can apply it using any tools you prefer - from simple Google Docs to professional project management software. The key is integration and thinking about all three pillars together.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Tool-Specific Sections (Dynamic) -->
        <div class="tool-specific-sections">
            
            <!-- Wedding Planner Tool Section -->
            <div id="wedding-tool-content" class="tool-content active-tool">
                <section class="help-section tool-section">
                    <h2>💒 Wedding Planner Help</h2>
                    
                    <div class="tool-intro">
                        <p><strong>Current Status:</strong> <span class="status-badge free">FREE</span></p>
                        <p>Our wedding planner uses the 3P methodology to create comprehensive, personalized wedding plans that serve as your complete wedding planning bible.</p>
                        <a href="/wedding" class="cta-button">Start Your Free Wedding Plan →</a>
                    </div>
                    
                    <div class="faq-item">
                        <h3>How does the free wedding planner work?</h3>
                        <div class="faq-answer">
                            <p>Our wedding planner applies professional project management principles to your wedding:</p>
                            <ol>
                                <li><strong>Answer questions:</strong> Complete our 3-5 minute survey about your preferences</li>
                                <li><strong>AI processing:</strong> Our system creates a customized plan using the 3P methodology</li>
                                <li><strong>Receive your plan:</strong> Get a detailed PDF plan via email within 10-15 minutes</li>
                            </ol>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>What makes our wedding planner different?</h3>
                        <div class="faq-answer">
                            <p>Unlike simple checklists, our planner provides:</p>
                            <ul>
                                <li><strong>PLAN pillar:</strong> Proper project management with timelines, milestones, and risk assessment</li>
                                <li><strong>PROTECT pillar:</strong> Safety planning, backup options, and contingency plans</li>
                                <li><strong>PERFORM pillar:</strong> Productivity systems to keep you organized and stress-free</li>
                                <li><strong>Personalized:</strong> Every recommendation tailored to your budget, style, and timeline</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>What's included in my wedding plan?</h3>
                        <div class="faq-answer">
                            <p>Your comprehensive wedding plan includes:</p>
                            <ul>
                                <li><strong>Executive Summary:</strong> Wedding vision and key priorities</li>
                                <li><strong>12-Month Timeline:</strong> Month-by-month planning schedule</li>
                                <li><strong>Budget Breakdown:</strong> Cost estimates for all wedding elements</li>
                                <li><strong>Vendor Priority List:</strong> Which vendors to book first and when</li>
                                <li><strong>Safety & Risk Planning:</strong> Contingencies and backup plans</li>
                                <li><strong>Organization Systems:</strong> File organization and deadline management</li>
                                <li><strong>Day-of Timeline:</strong> Detailed wedding day schedule</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>How accurate are the budget estimates?</h3>
                        <div class="faq-answer">
                            <p>Our estimates are based on current market data and industry standards, but actual costs vary by location and vendor. Use them as planning guidelines and always get quotes from multiple vendors for accurate pricing in your area.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>Is this really free? What's the catch?</h3>
                        <div class="faq-answer">
                            <p>Yes, completely free! We provide this to:</p>
                            <ul>
                                <li>Showcase how the 3P System works in real life</li>
                                <li>Build our community of systematic life planners</li>
                                <li>Help you have the best wedding possible</li>
                                <li>No hidden costs, no credit card required, no spam</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Moving Planner Tool Section (Coming Soon) -->
            <div id="moving-tool-content" class="tool-content">
                <section class="help-section tool-section">
                    <h2>📦 Moving Planner Help</h2>
                    
                    <div class="tool-intro">
                        <p><strong>Current Status:</strong> <span class="status-badge coming-soon">COMING SOON</span></p>
                        <p>Our moving planner will apply the 3P methodology to make your relocation stress-free and organized.</p>
                        <div class="coming-soon-signup">
                            <p>Get notified when the Moving Planner launches:</p>
                            <form class="notify-form">
                                <input type="email" placeholder="Enter your email" required>
                                <button type="submit">Notify Me</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3>What will the moving planner include?</h3>
                        <div class="faq-answer">
                            <p>The moving planner will provide:</p>
                            <ul>
                                <li><strong>PLAN:</strong> Complete moving timeline, budget planning, and logistics coordination</li>
                                <li><strong>PROTECT:</strong> Insurance guidance, inventory protection, and safety protocols</li>
                                <li><strong>PERFORM:</strong> Daily task management and stress reduction systems</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>When will it be available?</h3>
                        <div class="faq-answer">
                            <p>The Moving Planner is planned for release in Phase 1 of our expansion (Q2 2024). Sign up above to be notified when it launches.</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- General Content (No specific tool selected) -->
            <div id="general-tool-content" class="tool-content">
                <section class="help-section tool-section">
                    <h2>🚀 Getting Started with 3P Life OS</h2>
                    
                    <div class="faq-item">
                        <h3>How do I start using the 3P System?</h3>
                        <div class="faq-answer">
                            <p>Begin with these simple steps:</p>
                            <ol>
                                <li><strong>Try a free tool:</strong> Start with our wedding planner to see the 3P methodology in action</li>
                                <li><strong>Identify your weakest pillar:</strong> Which area needs the most improvement?</li>
                                <li><strong>Implement one system:</strong> Choose one simple system from that pillar</li>
                                <li><strong>Build integration:</strong> Gradually connect all three pillars</li>
                            </ol>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>Which pillar should I start with?</h3>
                        <div class="faq-answer">
                            <p>Start with your weakest area:</p>
                            <ul>
                                <li><strong>Big dreams but no progress?</strong> Start with PLAN (Project Mastery)</li>
                                <li><strong>Always stressed or unprepared?</strong> Start with PROTECT (Personal Safety)</li>
                                <li><strong>Disorganized or procrastinate?</strong> Start with PERFORM (Productivity Systems)</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
/* Base Help Page Styles */
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

/* Tool Selector Styles */
.tool-selector-container {
    max-width: 500px;
    margin: 0 auto 30px;
}

.tool-selector-label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    opacity: 0.9;
}

.tool-selector-dropdown {
    width: 100%;
    padding: 15px 20px;
    font-size: 16px;
    border: none;
    border-radius: 30px;
    background: white;
    color: #333;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tool-selector-dropdown:hover {
    box-shadow: 0 6px 25px rgba(0,0,0,0.15);
}

.tool-selector-dropdown option:disabled {
    color: #999;
    font-style: italic;
}

/* Tool Quick Actions */
.tool-quick-actions {
    margin-top: 20px;
}

.quick-action-btn {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    color: white;
    padding: 8px 16px;
    margin: 5px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.3);
}

.quick-action-btn:hover {
    background: rgba(255,255,255,0.3);
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
}

/* Search Box */
.help-search-container {
    max-width: 500px;
    margin: 0 auto 20px;
    position: relative;
}

.help-search-input {
    width: 100%;
    padding: 15px 60px 15px 20px;
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

/* Breadcrumb */
.help-breadcrumb {
    background: #f8f9fa;
    padding: 15px 20px;
    margin: -20px -20px 20px -20px;
    border-radius: 0 0 10px 10px;
    font-size: 14px;
    color: #666;
}

.help-breadcrumb a {
    color: #667eea;
    text-decoration: none;
}

.help-breadcrumb a:hover {
    text-decoration: underline;
}

/* Quick Navigation */
.help-quick-nav {
    margin-bottom: 40px;
}

.help-nav-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.help-nav-card {
    background: white;
    border: 2px solid #f0f0f0;
    border-radius: 12px;
    padding: 20px;
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
    font-size: 2rem;
    margin-bottom: 10px;
}

.help-nav-card h3 {
    margin-bottom: 8px;
    color: #333;
    font-size: 1.2rem;
}

.help-nav-card p {
    color: #666;
    margin: 0;
    font-size: 0.9rem;
}

/* Content Sections */
.help-content-wrapper {
    max-width: 900px;
    margin: 0 auto;
}

.help-section {
    margin-bottom: 40px;
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.help-section h2 {
    color: #333;
    border-bottom: 3px solid #667eea;
    padding-bottom: 15px;
    margin-bottom: 25px;
    font-size: 1.8rem;
}

/* Tool-Specific Content */
.tool-specific-sections {
    margin-top: 20px;
}

.tool-content {
    display: none;
}

.tool-content.active-tool {
    display: block;
}

.tool-intro {
    background: #f8f9ff;
    border: 2px solid #e3f2fd;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 30px;
    text-align: center;
}

.status-badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.status-badge.free {
    background: #4caf50;
    color: white;
}

.status-badge.paid {
    background: #ff9800;
    color: white;
}

.status-badge.coming-soon {
    background: #9e9e9e;
    color: white;
}

.cta-button {
    display: inline-block;
    background: #667eea;
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 15px;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background: #5a6fd8;
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
}

/* Coming Soon Signup */
.coming-soon-signup {
    background: rgba(102, 126, 234, 0.1);
    border-radius: 8px;
    padding: 20px;
    margin-top: 15px;
}

.notify-form {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.notify-form input {
    flex: 1;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 20px;
    outline: none;
}

.notify-form button {
    background: #667eea;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s ease;
}

.notify-form button:hover {
    background: #5a6fd8;
}

/* FAQ Items */
.faq-item {
    margin-bottom: 25px;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
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
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

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

/* Contact CTA */
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
    
    .help-section {
        padding: 20px;
    }
    
    .notify-form {
        flex-direction: column;
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
// Tool-specific content configuration
const toolConfig = {
    general: {
        title: 'General Help',
        breadcrumb: 'General Help & 3P System',
        quickActions: [
            { text: 'Take 3P Assessment', href: '#3p-system' },
            { text: 'Understanding 3P Pillars', href: '#3p-system' }
        ],
        navCards: [
            { icon: '🎯', title: '3P System', desc: 'Understanding Plan, Protect, Perform', href: '#3p-system' },
            { icon: '📧', title: 'Email Issues', desc: 'Not receiving your plans?', href: '#email-issues' },
            { icon: '⚙️', title: 'Technical Support', desc: 'Browser and compatibility help', href: '#technical-support' }
        ]
    },
    wedding: {
        title: 'Wedding Planner',
        breadcrumb: 'Wedding Planner',
        quickActions: [
            { text: 'Start Free Wedding Plan', href: '/wedding' },
            { text: 'Resend My Plan', href: '/resend' },
            { text: 'Email Issues', href: '#email-issues' }
        ],
        navCards: [
            { icon: '💒', title: 'Wedding Planner', desc: 'Help with your wedding planning tool', href: '#wedding-tool-content' },
            { icon: '📧', title: 'Email & Delivery', desc: 'Not receiving your plan?', href: '#email-issues' },
            { icon: '⚙️', title: 'Technical Issues', desc: 'Survey not working?', href: '#technical-support' },
            { icon: '🎯', title: '3P System', desc: 'Understanding our methodology', href: '#3p-system' }
        ]
    },
    moving: {
        title: 'Moving Planner',
        breadcrumb: 'Moving Planner (Coming Soon)',
        quickActions: [
            { text: 'Get Notified', href: '#notify-signup' },
            { text: 'Try Wedding Planner', href: '/wedding' }
        ],
        navCards: [
            { icon: '📦', title: 'Moving Planner', desc: 'Coming soon - get notified', href: '#moving-tool-content' },
            { icon: '💒', title: 'Try Wedding Planner', desc: 'See how our system works', href: '/wedding' },
            { icon: '🎯', title: '3P System', desc: 'Understanding our methodology', href: '#3p-system' }
        ]
    }
};

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    // Set default tool
    switchTool();
    
    // FAQ toggle functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('h3');
        const answer = item.querySelector('.faq-answer');
        
        question.addEventListener('click', function() {
            const isCollapsed = item.classList.contains('collapsed');
            
            if (isCollapsed) {
                item.classList.remove('collapsed');
                answer.style.display = 'block';
            } else {
                item.classList.add('collapsed');
                answer.style.display = 'none';
            }
            
            // Track interaction
            trackHelpInteraction('faq_toggle', question.textContent.trim());
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
    
    // Smooth scrolling for anchor links
    document.addEventListener('click', function(e) {
        if (e.target.matches('a[href^="#"]')) {
            e.preventDefault();
            const targetId = e.target.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Switch tool content
function switchTool() {
    const selectedTool = document.getElementById('toolSelector').value;
    const config = toolConfig[selectedTool];
    
    if (!config) return;
    
    // Update breadcrumb
    document.getElementById('toolBreadcrumb').textContent = config.breadcrumb;
    
    // Update quick actions
    updateQuickActions(config.quickActions);
    
    // Update navigation cards
    updateNavigationCards(config.navCards);
    
    // Show/hide tool-specific content
    document.querySelectorAll('.tool-content').forEach(content => {
        content.classList.remove('active-tool');
    });
    
    const activeContent = document.getElementById(selectedTool + '-tool-content');
    if (activeContent) {
        activeContent.classList.add('active-tool');
    }
    
    // Track tool selection
    trackHelpInteraction('tool_selected', selectedTool);
}

// Update quick actions
function updateQuickActions(actions) {
    const container = document.getElementById('toolQuickActions');
    container.innerHTML = '';
    
    if (actions && actions.length > 0) {
        actions.forEach(action => {
            const btn = document.createElement('a');
            btn.href = action.href;
            btn.className = 'quick-action-btn';
            btn.textContent = action.text;
            container.appendChild(btn);
        });
    }
}

// Update navigation cards
function updateNavigationCards(cards) {
    const container = document.getElementById('helpNavGrid');
    container.innerHTML = '';
    
    if (cards && cards.length > 0) {
        cards.forEach(card => {
            const cardElement = document.createElement('a');
            cardElement.href = card.href;
            cardElement.className = 'help-nav-card';
            cardElement.innerHTML = `
                <div class="help-nav-icon">${card.icon}</div>
                <h3>${card.title}</h3>
                <p>${card.desc}</p>
            `;
            container.appendChild(cardElement);
        });
    }
}

// Search functionality
function searchHelp() {
    const searchTerm = document.getElementById('helpSearch').value.toLowerCase().trim();
    const faqItems = document.querySelectorAll('.faq-item');
    const sections = document.querySelectorAll('.help-section');
    let hasResults = false;
    
    if (searchTerm === '') {
        // Show all items if search is empty
        faqItems.forEach(item => item.style.display = 'block');
        sections.forEach(section => section.style.display = 'block');
        clearHighlights();
        hideNoResults();
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
                
                // Expand the FAQ item
                item.classList.remove('collapsed');
                item.querySelector('.faq-answer').style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide sections based on results
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
    
    // Track search
    trackHelpInteraction('search', searchTerm);
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

// Clear highlights
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
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\.faq-item h3:hover {');
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

// Analytics tracking
function trackHelpInteraction(action, label) {
    if (typeof gtag !== 'undefined') {
        gtag('event', 'help_page_interaction', {
            'event_category': 'help',
            'event_label': label,
            'action': action
        });
    }
}

// Handle notify form submissions
document.addEventListener('submit', function(e) {
    if (e.target.matches('.notify-form')) {
        e.preventDefault();
        const email = e.target.querySelector('input[type="email"]').value;
        
        // Track notification signup
        trackHelpInteraction('notification_signup', 'moving_planner');
        
        // Show success message (you'll need to implement actual signup logic)
        alert('Thank you! We\'ll notify you when the Moving Planner launches.');
        
        // Clear form
        e.target.querySelector('input[type="email"]').value = '';
    }
});
</script>

<?php get_footer(); ?>