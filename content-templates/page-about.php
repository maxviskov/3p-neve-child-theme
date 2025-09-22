<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - 3P Life Operating System | Max Viskov</title>
    <meta name="description" content="Learn about Max Viskov and the revolutionary 3P Life Operating System that helps people plan, protect, and perform their most important life projects.">
    
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
        #about-page * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #about-page {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #ffffff;
        }

        #about-page .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        #about-page .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #about-page .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        #about-page .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        #about-page .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        #about-page .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        #about-page .hero .tagline {
            font-size: 1.1rem;
            font-style: italic;
            opacity: 0.9;
        }

        /* Section Styles */
        #about-page .section {
            padding: 80px 0;
        }

        #about-page .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        #about-page .section-subtitle {
            font-size: 1.2rem;
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Story Section */
        #about-page .story-section {
            background: #f8f9fa;
        }

        #about-page .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        #about-page .story-text {
            font-size: 1.1rem;
        }

        #about-page .story-text h3 {
            color: #3498db;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        #about-page .story-text p {
            margin-bottom: 1.5rem;
        }

        #about-page .profile-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        #about-page .profile-image {
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
        }

        #about-page .profile-name {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        #about-page .profile-title {
            color: #3498db;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        #about-page .profile-credentials {
            font-size: 0.95rem;
            color: #7f8c8d;
            line-height: 1.4;
        }

        /* 3P System Section */
        #about-page .system-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
        }

        #about-page .system-section .section-title,
        #about-page .system-section .section-subtitle {
            color: white;
        }

        #about-page .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #about-page .pillar {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        #about-page .pillar-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        #about-page .pillar h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        #about-page .pillar p {
            opacity: 0.9;
        }

        /* Mission Section */
        #about-page .mission-section {
            text-align: center;
        }

        #about-page .mission-statement {
            background: #f8f9fa;
            padding: 3rem;
            border-radius: 12px;
            font-size: 1.3rem;
            font-style: italic;
            color: #2c3e50;
            border-left: 5px solid #3498db;
            margin: 2rem 0;
        }

        #about-page .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        #about-page .value-item {
            text-align: center;
            padding: 1.5rem;
        }

        #about-page .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        #about-page .value-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        /* CTA Section */
        #about-page .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        #about-page .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: rgba(255,255,255,0.2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        #about-page .cta-button:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            #about-page .hero h1 {
                font-size: 2.5rem;
            }

            #about-page .hero p {
                font-size: 1.1rem;
            }

            #about-page .section-title {
                font-size: 2rem;
            }

            #about-page .story-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            #about-page .pillars-grid {
                grid-template-columns: 1fr;
            }

            #about-page .values-grid {
                grid-template-columns: 1fr;
            }

            #about-page .section {
                padding: 60px 0;
            }

            #about-page .mission-statement {
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

        #about-page .animate-on-scroll {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>

<body>
<div id="about-page">
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
            
            <a href="/wedding" class="cta-button">🎯 Start with Our Free Wedding Planner</a>
            
            <p style="margin-top: 2rem; opacity: 0.9;">Experience the 3P methodology with our most popular free tool, then explore our complete life planning system.</p>
        </div>
    </section>
</div>

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Add animation on scroll (simple version)
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.section');
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
</script>

</body>
</html>