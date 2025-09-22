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
            
            <!-- Advanced Search Box with Filters -->
            <div class="help-search-container">
                <input type="text" id="helpSearch" placeholder="Search for help topics..." class="help-search-input">
                <button type="button" class="help-search-btn" onclick="searchHelp()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
                
                <!-- Search Filters -->
                <div class="search-filters" id="searchFilters" style="display: none;">
                    <label>
                        <input type="checkbox" name="section" value="getting-started" checked> Getting Started
                    </label>
                    <label>
                        <input type="checkbox" name="section" value="wedding-planner" checked> Wedding Planner
                    </label>
                    <label>
                        <input type="checkbox" name="section" value="email-issues" checked> Email Issues
                    </label>
                    <label>
                        <input type="checkbox" name="section" value="technical-support" checked> Technical Support
                    </label>
                    <label>
                        <input type="checkbox" name="section" value="3p-system" checked> 3P System
                    </label>
                    <label>
                        <input type="checkbox" name="section" value="account-billing" checked> Account & Billing
                    </label>
                </div>
                
                <!-- Search Suggestions -->
                <div class="search-suggestions" id="searchSuggestions" style="display: none;">
                    <div class="suggestion-item" onclick="performSearch('email not received')">Email not received</div>
                    <div class="suggestion-item" onclick="performSearch('browser compatibility')">Browser compatibility</div>
                    <div class="suggestion-item" onclick="performSearch('wedding plan PDF')">Wedding plan PDF</div>
                    <div class="suggestion-item" onclick="performSearch('3P system')">3P system explained</div>
                    <div class="suggestion-item" onclick="performSearch('TypeForm not working')">TypeForm issues</div>
                </div>
            </div>
            
            <!-- Advanced Search Toggle -->
            <div class="search-options">
                <button type="button" onclick="toggleSearchFilters()" class="search-toggle-btn">
                    Advanced Search Options
                </button>
                <button type="button" onclick="clearSearch()" class="search-clear-btn" style="display: none;">
                    Clear Search
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
                <h3>What makes our wedding planner different?</h3>
                <div class="faq-answer">
                    <p>Unlike simple checklists or generic templates, our planner applies proven business project management principles to your wedding:</p>
                    <ul>
                        <li><strong>PLAN pillar:</strong> Treats your wedding as a proper project with timelines, milestones, and risk management</li>
                        <li><strong>PROTECT pillar:</strong> Includes safety planning, backup options, and contingency plans</li>
                        <li><strong>PERFORM pillar:</strong> Provides productivity systems to keep you organized and stress-free</li>
                        <li><strong>Personalized:</strong> Every recommendation is tailored to your specific budget, style, and timeline</li>
                        <li><strong>Comprehensive:</strong> Complete enough that you could plan your entire wedding using just this document</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>What information do I need to provide?</h3>
                <div class="faq-answer">
                    <p>The survey takes 3-5 minutes and asks about:</p>
                    <ul>
                        <li><strong>Basic details:</strong> Your names, email, and wedding date</li>
                        <li><strong>Style preferences:</strong> Classic, modern, rustic, destination, etc.</li>
                        <li><strong>Budget range:</strong> Select from predefined ranges for accurate recommendations</li>
                        <li><strong>Guest count:</strong> Helps determine venue and catering needs</li>
                        <li><strong>Venue preferences:</strong> Indoor, outdoor, religious, destination options</li>
                        <li><strong>Main concerns:</strong> What you're most worried about in planning</li>
                        <li><strong>Priorities:</strong> Where you want to focus your budget</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>What's included in my personalized wedding plan?</h3>
                <div class="faq-answer">
                    <p>Your comprehensive wedding plan includes:</p>
                    <ul>
                        <li><strong>Executive Summary:</strong> Overview of your wedding vision and key priorities</li>
                        <li><strong>12-Month Timeline:</strong> Month-by-month planning schedule with specific tasks</li>
                        <li><strong>Detailed Budget Breakdown:</strong> Cost estimates for all wedding elements</li>
                        <li><strong>Vendor Priority List:</strong> Which vendors to book first and when</li>
                        <li><strong>Style Guide:</strong> Specific recommendations based on your chosen aesthetic</li>
                        <li><strong>Safety & Risk Planning:</strong> Weather contingencies, vendor backup plans, emergency protocols</li>
                        <li><strong>Organization Systems:</strong> File organization, task tracking, and deadline management</li>
                        <li><strong>Guest Management:</strong> RSVP tracking, seating planning, and communication templates</li>
                        <li><strong>Day-of Timeline:</strong> Detailed schedule for your wedding day</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>How accurate are the budget estimates?</h3>
                <div class="faq-answer">
                    <p>Our budget estimates are based on:</p>
                    <ul>
                        <li><strong>Current market data:</strong> Updated regularly from industry sources</li>
                        <li><strong>Regional variations:</strong> Adjusted for different cost-of-living areas</li>
                        <li><strong>Your specific choices:</strong> Style, venue type, and guest count all factor in</li>
                        <li><strong>Industry standards:</strong> Based on what most couples actually spend</li>
                    </ul>
                    <p><strong>Important note:</strong> Use estimates as planning guidelines. Always get quotes from multiple vendors for accurate pricing in your area. Costs can vary significantly by location and specific vendor choices.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Can I modify my wedding plan after receiving it?</h3>
                <div class="faq-answer">
                    <p>Your PDF plan is designed to be flexible and customizable:</p>
                    <ul>
                        <li><strong>Built-in flexibility:</strong> Plans include multiple options and alternatives</li>
                        <li><strong>Editable elements:</strong> You can modify timelines, budgets, and task lists</li>
                        <li><strong>Scalable recommendations:</strong> Easy to adjust for budget changes or guest count updates</li>
                    </ul>
                    <p><strong>Future updates:</strong> We're developing user accounts that will allow plan modifications through the website. Currently, the comprehensive plan serves as your customizable foundation.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Is this really free? What's the catch?</h3>
                <div class="faq-answer">
                    <p>Yes, the wedding planner is completely free! Here's why:</p>
                    <ul>
                        <li><strong>Showcase our methodology:</strong> Demonstrates how the 3P System works in real life</li>
                        <li><strong>Build our community:</strong> Connect with people who value systematic life planning</li>
                        <li><strong>Gather feedback:</strong> Your experience helps us improve our tools and services</li>
                        <li><strong>No hidden costs:</strong> No credit card required, no premium upgrades, no spam</li>
                        <li><strong>Email updates only:</strong> Occasionally we'll share new free tools or resources</li>
                    </ul>
                    <p>Think of it as our gift to help you have the best wedding possible while showing you what systematic life planning can achieve!</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>What if I'm not planning a traditional wedding?</h3>
                <div class="faq-answer">
                    <p>Our planner works for all types of weddings and celebrations:</p>
                    <ul>
                        <li><strong>Elopements:</strong> Scaled-down planning with focus on essential elements</li>
                        <li><strong>Destination weddings:</strong> Additional travel and logistics planning</li>
                        <li><strong>Second marriages:</strong> Appropriate recommendations for mature couples</li>
                        <li><strong>Cultural/religious ceremonies:</strong> Adapts to different traditions and requirements</li>
                        <li><strong>Same-sex weddings:</strong> Inclusive planning that celebrates all love stories</li>
                        <li><strong>Non-traditional venues:</strong> Backyard, beach, courthouse, and unique location guidance</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>How do I get started with my wedding plan?</h3>
                <div class="faq-answer">
                    <p>Ready to create your personalized wedding plan?</p>
                    <ol>
                        <li><strong>Click the wedding planner button</strong> on our homepage</li>
                        <li><strong>Complete the 3-5 minute survey</strong> with your preferences</li>
                        <li><strong>Check your email</strong> within 15 minutes for your complete plan</li>
                        <li><strong>Download and save your PDF</strong> for easy reference</li>
                        <li><strong>Start with the immediate next steps</strong> outlined in your plan</li>
                    </ol>
                    <p><a href="/wedding" class="btn-primary" style="display: inline-block; padding: 10px 20px; background: #667eea; color: white; border-radius: 20px; text-decoration: none;">Start Your Free Wedding Plan Now →</a></p>
                </div>
            </div>
        </section></h3>
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
                <h3>Email delivery failed or bounced back</h3>
                <div class="faq-answer">
                    <p>If you receive a bounce-back notification or email delivery failure:</p>
                    <ul>
                        <li><strong>Check email address spelling:</strong> Even small typos prevent delivery</li>
                        <li><strong>Corporate email blocks:</strong> Some company emails block external automated messages</li>
                        <li><strong>Mailbox full:</strong> Clear space in your email account</li>
                        <li><strong>Temporary server issues:</strong> Wait 10 minutes and try the resend function</li>
                        <li><strong>Alternative email:</strong> Use a personal Gmail, Yahoo, or Outlook account</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>Why is my email taking so long to arrive?</h3>
                <div class="faq-answer">
                    <p>Email delivery times vary by provider:</p>
                    <ul>
                        <li><strong>Normal delivery:</strong> 5-15 minutes for most providers</li>
                        <li><strong>Gmail/Google Workspace:</strong> Usually fastest (2-5 minutes)</li>
                        <li><strong>Outlook/Hotmail:</strong> Can take 10-20 minutes</li>
                        <li><strong>Yahoo Mail:</strong> Often delayed 15-30 minutes</li>
                        <li><strong>Corporate email:</strong> May require IT approval (up to 24 hours)</li>
                    </ul>
                    <p>If it's been over 1 hour, use the <a href="/resend">resend function</a> or contact support.</p>
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

            <div class="faq-item">
                <h3>Email delivery confirmation - How do I know it worked?</h3>
                <div class="faq-answer">
                    <p>After submitting your wedding planning survey:</p>
                    <ol>
                        <li><strong>Confirmation page:</strong> You should see a "Thank you" confirmation page</li>
                        <li><strong>Processing notification:</strong> Look for a brief "Processing your plan..." message</li>
                        <li><strong>Email within 30 minutes:</strong> Check your inbox (and spam folder)</li>
                        <li><strong>No confirmation page?</strong> Your submission may not have gone through - try again</li>
                        <li><strong>Still no email after 1 hour?</strong> Use our <a href="/resend">resend functionality</a></li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <h3>Testing email delivery across different providers</h3>
                <div class="faq-answer">
                    <p>We regularly test our email system with major providers:</p>
                    <ul>
                        <li><strong>Gmail:</strong> ✅ Reliable delivery, rarely goes to spam</li>
                        <li><strong>Outlook/Hotmail:</strong> ✅ Good delivery, occasionally delayed</li>
                        <li><strong>Yahoo:</strong> ⚠️ Sometimes delayed, check spam folder</li>
                        <li><strong>Apple iCloud:</strong> ✅ Good delivery rates</li>
                        <li><strong>Corporate email:</strong> ⚠️ May be blocked by security policies</li>
                    </ul>
                    <p>If you're having persistent issues with your email provider, try using a different email address.</p>
                </div>
            </div>
        </section>

        <!-- Technical Support Section -->
        <section id="technical-support" class="help-section">
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
                        <li><strong>Samsung Internet 14+:</strong> ✅ Good mobile compatibility</li>
                    </ul>
                    <p><strong>Limited Support:</strong></p>
                    <ul>
                        <li><strong>Internet Explorer:</strong> ❌ Not supported - use Edge instead</li>
                        <li><strong>Chrome Mobile 89 and below:</strong> ⚠️ May have form submission issues</li>
                        <li><strong>Safari 13 and below:</strong> ⚠️ Limited TypeForm compatibility</li>
                    </ul>
                    <p><strong>Mobile Browser Notes:</strong></p>
                    <ul>
                        <li>iOS Safari 14+ works best for iPhone/iPad users</li>
                        <li>Chrome Mobile recommended for Android devices</li>
                        <li>Ensure JavaScript is enabled on all mobile browsers</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>TypeForm survey not loading or submitting</h3>
                <div class="faq-answer">
                    <p>If the wedding planning survey isn't working:</p>
                    <ol>
                        <li><strong>Clear browser cache:</strong> Press Ctrl+F5 (Windows) or Cmd+Shift+R (Mac) to hard refresh</li>
                        <li><strong>Disable ad blockers:</strong> Some ad blockers block TypeForm embeds
                            <ul>
                                <li>uBlock Origin: Click icon, select "Disable on this site"</li>
                                <li>AdBlock Plus: Click icon, toggle off for this website</li>
                                <li>Browser built-in blockers: Check browser settings</li>
                            </ul>
                        </li>
                        <li><strong>Check JavaScript:</strong> Our forms require JavaScript to be enabled</li>
                        <li><strong>Try incognito/private mode:</strong> This disables extensions temporarily</li>
                        <li><strong>Update your browser:</strong> Older browsers may not support modern form features</li>
                        <li><strong>Switch devices:</strong> Try desktop if mobile isn't working, or vice versa</li>
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
                        <li><strong>Zoom level:</strong> Make sure you're not zoomed in too far</li>
                        <li><strong>Network connection:</strong> Switch between WiFi and cellular data</li>
                        <li><strong>Browser app:</strong> Try opening in your default browser instead of in-app browsers (Facebook, Instagram, etc.)</li>
                        <li><strong>Storage space:</strong> Clear some device storage if running low</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>JavaScript errors and loading problems</h3>
                <div class="faq-answer">
                    <p>If you see error messages or pages won't load properly:</p>
                    <ol>
                        <li><strong>Enable JavaScript:</strong>
                            <ul>
                                <li>Chrome: Settings → Privacy & Security → Site Settings → JavaScript → Allowed</li>
                                <li>Firefox: Type "about:config" → search "javascript.enabled" → set to true</li>
                                <li>Safari: Preferences → Security → Enable JavaScript</li>
                            </ul>
                        </li>
                        <li><strong>Disable browser extensions:</strong> Some extensions interfere with our tools</li>
                        <li><strong>Check firewall/antivirus:</strong> Security software may block scripts</li>
                        <li><strong>Clear cookies and cache:</strong> Old data can cause conflicts</li>
                        <li><strong>Try a different network:</strong> Some corporate networks block certain scripts</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <h3>Site appears broken or layout issues</h3>
                <div class="faq-answer">
                    <p>If the website doesn't look right or isn't mobile-friendly:</p>
                    <ul>
                        <li><strong>Hard refresh:</strong> Ctrl+F5 or Cmd+Shift+R to reload completely</li>
                        <li><strong>Clear browser cache:</strong> Old CSS files can cause display issues</li>
                        <li><strong>Check browser zoom:</strong> Ensure zoom level is set to 100%</li>
                        <li><strong>Disable custom fonts:</strong> Some browsers have font loading issues</li>
                        <li><strong>Try different browser:</strong> Compare display across browsers</li>
                        <li><strong>Update browser:</strong> Ensure you have the latest version</li>
                    </ul>
                    <p>If problems persist, please contact support with your browser name, version, and device type.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3>Slow loading or timeout errors</h3>
                <div class="faq-answer">
                    <p>If our tools are loading slowly or timing out:</p>
                    <ul>
                        <li><strong>Check internet speed:</strong> Try speedtest.net to verify connection</li>
                        <li><strong>Close other tabs:</strong> Too many open tabs can slow performance</li>
                        <li><strong>Restart browser:</strong> Fresh start often resolves memory issues</li>
                        <li><strong>Try different time:</strong> Peak hours (evening) may be slower</li>
                        <li><strong>Disable VPN:</strong> VPNs can sometimes cause connection issues</li>
                        <li><strong>Contact ISP:</strong> Persistent issues may be network-related</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>Session timeout and data loss prevention</h3>
                <div class="faq-answer">
                    <p>To avoid losing your progress in the wedding planner survey:</p>
                    <ul>
                        <li><strong>Complete in one session:</strong> Don't leave the survey open for hours</li>
                        <li><strong>Good internet connection:</strong> Ensure stable connection throughout</li>
                        <li><strong>Don't use back button:</strong> Use TypeForm's built-in navigation</li>
                        <li><strong>Keep browser active:</strong> Don't minimize or switch away for long periods</li>
                        <li><strong>If session expires:</strong> Simply restart the survey - it only takes 3-5 minutes</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3>404 errors and broken links</h3>
                <div class="faq-answer">
                    <p>If you encounter "Page Not Found" errors:</p>
                    <ul>
                        <li><strong>Check URL spelling:</strong> Ensure the web address is correct</li>
                        <li><strong>Try homepage first:</strong> Navigate from <a href="/">planner.maxviskov.com</a></li>
                        <li><strong>Clear browser cache:</strong> Old links may be cached</li>
                        <li><strong>Report broken links:</strong> Contact us if you find broken internal links</li>
                    </ul>
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

/* Advanced Search Styles */
.search-filters {
    background: rgba(255,255,255,0.95);
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.search-filters label {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    color: #333;
    font-size: 14px;
    white-space: nowrap;
}

.search-filters input[type="checkbox"] {
    margin: 0;
    width: 16px;
    height: 16px;
}

.search-suggestions {
    background: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-top: 5px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    max-height: 200px;
    overflow-y: auto;
}

.suggestion-item {
    padding: 12px 20px;
    cursor: pointer;
    border-bottom: 1px solid #f0f0f0;
    transition: background 0.2s ease;
}

.suggestion-item:hover {
    background: #f8f9ff;
    color: #667eea;
}

.suggestion-item:last-child {
    border-bottom: none;
}

.search-options {
    text-align: center;
    margin-top: 15px;
}

.search-toggle-btn,
.search-clear-btn {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.3);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 14px;
    margin: 0 5px;
    transition: all 0.3s ease;
}

.search-toggle-btn:hover,
.search-clear-btn:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.5);
}

/* Breadcrumb Navigation */
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

/* Section Navigation */
.section-nav {
    position: sticky;
    top: 20px;
    background: white;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.section-nav h4 {
    margin-bottom: 15px;
    color: #333;
    font-size: 1rem;
}

.section-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.section-nav li {
    margin-bottom: 8px;
}

.section-nav a {
    color: #666;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}

.section-nav a:hover,
.section-nav a.active {
    color: #667eea;
    font-weight: 600;
}

/* FAQ Category Tags */
.faq-category-tag {
    display: inline-block;
    background: #e3f2fd;
    color: #1976d2;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.faq-category-tag.email { background: #fff3e0; color: #f57c00; }
.faq-category-tag.technical { background: #f3e5f5; color: #7b1fa2; }
.faq-category-tag.wedding { background: #fce4ec; color: #c2185b; }
.faq-category-tag.system { background: #e8f5e8; color: #388e3c; }

/* Search Results Counter */
.search-results-info {
    background: #e3f2fd;
    border: 1px solid #bbdefb;
    border-radius: 8px;
    padding: 12px 16px;
    margin-bottom: 20px;
    color: #1565c0;
    font-size: 14px;
    text-align: center;
}

/* Popular Questions Highlight */
.popular-question {
    position: relative;
}

.popular-question::before {
    content: "🔥 Popular";
    position: absolute;
    top: -8px;
    right: 10px;
    background: #ff9800;
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
}

/* Recently Updated Badge */
.recently-updated::after {
    content: "Updated";
    background: #4caf50;
    color: white;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 600;
    margin-left: 10px;
    text-transform: uppercase;
}

/* Print Styles */
@media print {
    .help-header,
    .help-quick-nav,
    .help-contact-cta,
    .search-filters,
    .search-suggestions,
    .search-options {
        display: none !important;
    }
    
    .help-section {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .faq-item {
        break-inside: avoid;
    }
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

// Advanced Search Functions
function toggleSearchFilters() {
    const filters = document.getElementById('searchFilters');
    const isVisible = filters.style.display === 'block';
    
    if (isVisible) {
        filters.style.display = 'none';
    } else {
        filters.style.display = 'block';
    }
}

function performSearch(term) {
    document.getElementById('helpSearch').value = term;
    searchHelp();
    document.getElementById('searchSuggestions').style.display = 'none';
}

function clearSearch() {
    document.getElementById('helpSearch').value = '';
    const faqItems = document.querySelectorAll('.faq-item');
    const sections = document.querySelectorAll('.help-section');
    
    // Show all items
    faqItems.forEach(item => item.style.display = 'block');
    sections.forEach(section => section.style.display = 'block');
    
    // Clear highlights
    clearHighlights();
    
    // Hide search elements
    hideNoResults();
    hideSearchResultsInfo();
    document.querySelector('.search-clear-btn').style.display = 'none';
}

function showSearchSuggestions() {
    const suggestions = document.getElementById('searchSuggestions');
    const input = document.getElementById('helpSearch');
    
    if (input.value.length === 0) {
        suggestions.style.display = 'block';
    } else {
        suggestions.style.display = 'none';
    }
}

function hideSearchSuggestions() {
    setTimeout(() => {
        document.getElementById('searchSuggestions').style.display = 'none';
    }, 200);
}

function showSearchResultsInfo(count, term) {
    let infoDiv = document.querySelector('.search-results-info');
    
    if (!infoDiv) {
        infoDiv = document.createElement('div');
        infoDiv.className = 'search-results-info';
        document.querySelector('.help-content-wrapper').insertBefore(
            infoDiv, 
            document.querySelector('.help-section')
        );
    }
    
    infoDiv.innerHTML = `Found ${count} result${count !== 1 ? 's' : ''} for "${term}"`;
    infoDiv.style.display = 'block';
}

function hideSearchResultsInfo() {
    const infoDiv = document.querySelector('.search-results-info');
    if (infoDiv) {
        infoDiv.style.display = 'none';
    }
}

// Enhanced Search Function with Filters
function searchHelp() {
    const searchTerm = document.getElementById('helpSearch').value.toLowerCase().trim();
    const faqItems = document.querySelectorAll('.faq-item');
    const sections = document.querySelectorAll('.help-section');
    const selectedSections = getSelectedSectionFilters();
    let hasResults = false;
    let resultCount = 0;
    
    if (searchTerm === '') {
        clearSearch();
        return;
    }
    
    // Show clear button
    document.querySelector('.search-clear-btn').style.display = 'inline-block';
    
    // Clear previous highlights
    clearHighlights();
    
    sections.forEach(section => {
        const sectionId = section.id;
        let sectionHasResults = false;
        
        // Check if this section is selected in filters
        if (selectedSections.length > 0 && !selectedSections.includes(sectionId)) {
            section.style.display = 'none';
            return;
        }
        
        const sectionFaqItems = section.querySelectorAll('.faq-item');
        
        sectionFaqItems.forEach(item => {
            const question = item.querySelector('h3').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
                sectionHasResults = true;
                hasResults = true;
                resultCount++;
                
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
    
    // Show results info or no results message
    if (!hasResults) {
        showNoResults(searchTerm);
        hideSearchResultsInfo();
    } else {
        hideNoResults();
        showSearchResultsInfo(resultCount, searchTerm);
    }
    
    // Track search
    trackHelpInteraction('search', searchTerm);
}

function getSelectedSectionFilters() {
    const checkboxes = document.querySelectorAll('input[name="section"]:checked');
    return Array.from(checkboxes).map(checkbox => checkbox.value);
}

// Enhanced FAQ Toggle with Analytics
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('h3');
        const answer = item.querySelector('.faq-answer');
        
        // Add category tags to FAQ items
        addCategoryTags(item);
        
        // Add popular and recently updated badges
        addFAQBadges(item);
        
        question.addEventListener('click', function() {
            const isCollapsed = item.classList.contains('collapsed');
            
            if (isCollapsed) {
                item.classList.remove('collapsed');
                answer.style.display = 'block';
            } else {
                item.classList.add('collapsed');
                answer.style.display = 'none';
            }
            
            // Track FAQ interaction
            const section = item.closest('.help-section').id;
            const questionText = question.textContent.trim();
            trackHelpInteraction('faq_toggle', `${section}: ${questionText}`);
        });
    });
    
    // Search input enhancements
    const searchInput = document.getElementById('helpSearch');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchHelp();
            }
        });
        
        searchInput.addEventListener('focus', showSearchSuggestions);
        searchInput.addEventListener('blur', hideSearchSuggestions);
        
        // Real-time search suggestions
        searchInput.addEventListener('input', function() {
            if (this.value.length === 0) {
                showSearchSuggestions();
            } else {
                hideSearchSuggestions();
            }
        });
    }
    
    // Add breadcrumb navigation
    addBreadcrumbNavigation();
    
    // Add section navigation
    addSectionNavigation();
});

function addCategoryTags(item) {
    const section = item.closest('.help-section').id;
    const question = item.querySelector('h3');
    
    let tagClass = 'faq-category-tag';
    let tagText = '';
    
    switch(section) {
        case 'email-issues':
            tagClass += ' email';
            tagText = 'Email';
            break;
        case 'technical-support':
            tagClass += ' technical';
            tagText = 'Technical';
            break;
        case 'wedding-planner':
            tagClass += ' wedding';
            tagText = 'Wedding';
            break;
        case '3p-system':
            tagClass += ' system';
            tagText = '3P System';
            break;
    }
    
    if (tagText) {
        const tag = document.createElement('span');
        tag.className = tagClass;
        tag.textContent = tagText;
        item.insertBefore(tag, question);
    }
}

function addFAQBadges(item) {
    const question = item.querySelector('h3');
    const questionText = question.textContent.toLowerCase();
    
    // Mark popular questions
    const popularQuestions = [
        'haven\'t received my wedding plan',
        'browser compatibility',
        'how does the free wedding planner work',
        'what is the 3p life operating system'
    ];
    
    if (popularQuestions.some(popular => questionText.includes(popular))) {
        item.classList.add('popular-question');
    }
    
    // Mark recently updated questions
    const recentlyUpdated = [
        'email delivery confirmation',
        'testing email delivery',
        'session timeout'
    ];
    
    if (recentlyUpdated.some(recent => questionText.includes(recent))) {
        question.classList.add('recently-updated');
    }
}

function addBreadcrumbNavigation() {
    const breadcrumb = document.createElement('div');
    breadcrumb.className = 'help-breadcrumb';
    breadcrumb.innerHTML = '<a href="/">Home</a> / <a href="/help">Help Center</a>';
    
    const helpHeader = document.querySelector('.help-header');
    helpHeader.parentNode.insertBefore(breadcrumb, helpHeader.nextSibling);
}

function addSectionNavigation() {
    const nav = document.createElement('div');
    nav.className = 'section-nav';
    nav.innerHTML = `
        <h4>Quick Navigation</h4>
        <ul>
            <li><a href="#getting-started">🚀 Getting Started</a></li>
            <li><a href="#wedding-planner">💒 Wedding Planner</a></li>
            <li><a href="#email-issues">📧 Email Issues</a></li>
            <li><a href="#technical-support">⚙️ Technical Support</a></li>
            <li><a href="#3p-system">🎯 3P System</a></li>
            <li><a href="#account-billing">👤 Account & Billing</a></li>
        </ul>
    `;
    
    const contentWrapper = document.querySelector('.help-content-wrapper');
    contentWrapper.insertBefore(nav, contentWrapper.firstChild);
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