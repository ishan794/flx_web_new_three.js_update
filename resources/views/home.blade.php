@extends('layouts.app')

@section('content')

<!-- 1. Hero Section (Hero Parallax) -->
<div class="hero-parallax-wrapper" id="hero-parallax-wrapper">
    <!-- Fixed background canvas -->
    <canvas id="three-canvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; opacity: 0.7; z-index: 0;"></canvas>
    
    <div class="hero-parallax-content">
        <!-- Text Header -->
        <div class="hero-parallax-header container" style="position: relative; z-index: 2; padding-top: 15vh; text-align: center;">
            <h1 style="font-size: 4rem; margin-bottom: 1.5rem; display: inline-block;" class="fade-in" id="typewriter-title"></h1>
            <p style="font-size: 1.25rem; max-width: 600px; margin: 0 auto 2.5rem; color: var(--text-secondary);" class="fade-in" id="text-generate-p">We're a passionate team of developers creating innovative software that transforms businesses and empowers growth.</p>
            <div style="display: flex; gap: 1rem; justify-content: center;" class="fade-in">
                <a href="#portfolio" class="btn-primary">View Our Work</a>
                <a href="#contact" class="btn-outline">Get Started</a>
            </div>
        </div>

        <!-- Parallax Grid -->
        <div class="hero-parallax-grid" id="parallax-grid" style="position: relative; z-index: 1;">
            <!-- Row 1 (Right to Left) -->
            <div class="parallax-row" id="parallax-row-1">
                <a href="https://gomoonbeam.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/moonbeam.png" alt="Moonbeam"><div class="parallax-overlay"><h3>Moonbeam</h3></div></a>
                <a href="https://cursor.so" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/cursor.png" alt="Cursor"><div class="parallax-overlay"><h3>Cursor</h3></div></a>
                <a href="https://userogue.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/rogue.png" alt="Rogue"><div class="parallax-overlay"><h3>Rogue</h3></div></a>
                <a href="https://editorially.org" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/editorially.png" alt="Editorially"><div class="parallax-overlay"><h3>Editorially</h3></div></a>
                <a href="https://editrix.ai" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/editrix.png" alt="Editrix AI"><div class="parallax-overlay"><h3>Editrix AI</h3></div></a>
            </div>
            
            <!-- Row 2 (Left to Right) -->
            <div class="parallax-row" id="parallax-row-2">
                <a href="https://app.pixelperfect.quest" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/pixelperfect.png" alt="Pixel Perfect"><div class="parallax-overlay"><h3>Pixel Perfect</h3></div></a>
                <a href="https://algochurn.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/algochurn.png" alt="Algochurn"><div class="parallax-overlay"><h3>Algochurn</h3></div></a>
                <a href="https://ui.aceternity.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/aceternityui.png" alt="Aceternity UI"><div class="parallax-overlay"><h3>Aceternity UI</h3></div></a>
                <a href="https://tailwindmasterkit.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/tailwindmasterkit.png" alt="Tailwind Master Kit"><div class="parallax-overlay"><h3>Tailwind Master Kit</h3></div></a>
                <a href="https://smartbridgetech.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/smartbridge.png" alt="SmartBridge"><div class="parallax-overlay"><h3>SmartBridge</h3></div></a>
            </div>
            
            <!-- Row 3 (Right to Left) -->
            <div class="parallax-row" id="parallax-row-3">
                <a href="https://renderwork.studio" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/renderwork.png" alt="Renderwork Studio"><div class="parallax-overlay"><h3>Renderwork Studio</h3></div></a>
                <a href="https://cremedigital.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/cremedigital.png" alt="Creme Digital"><div class="parallax-overlay"><h3>Creme Digital</h3></div></a>
                <a href="https://goldenbellsacademy.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/goldenbellsacademy.png" alt="Golden Bells Academy"><div class="parallax-overlay"><h3>Golden Bells Academy</h3></div></a>
                <a href="https://invoker.lol" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/invoker.png" alt="Invoker Labs"><div class="parallax-overlay"><h3>Invoker Labs</h3></div></a>
                <a href="https://efreeinvoice.com" class="parallax-card"><img src="https://www.aceternity.com/images/products/thumbnails/new/efreeinvoice.png" alt="E Free Invoice"><div class="parallax-overlay"><h3>E Free Invoice</h3></div></a>
            </div>
        </div>
    </div>
</div>

<!-- 2. Welcome Section -->
<section class="section section-alt text-center">
    <div class="container">
        <div class="section-header fade-in" style="max-width: 800px; margin: 0 auto;">
            <h2>Welcome to Flxware Technologies</h2>
            <p>Founded with a vision to bridge the gap between innovative ideas and practical software solutions, Flxware Technologies specializes in creating robust, scalable applications that drive business success. Our team combines technical expertise with creative problem-solving to deliver exceptional results.</p>
            <a href="#about" class="btn-outline" style="margin-top: 2rem; display: inline-block;">Learn More About Us</a>
        </div>
    </div>
</section>

<!-- 3. Why Choose Flxware -->
<section class="section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Why Choose Flxware?</h2>
            <p>We combine cutting-edge technology with proven methodologies to deliver software that exceeds expectations.</p>
        </div>
        <div class="grid-2 hover-group">
            <div class="glass-card fade-in">
                <h3>Custom Development</h3>
                <p>Tailored software solutions built to your exact specifications and business needs.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Mobile Excellence</h3>
                <p>Native and cross-platform mobile applications that deliver exceptional user experiences.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Cloud Integration</h3>
                <p>Scalable cloud solutions that grow with your business and ensure optimal performance.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Dedicated Support</h3>
                <p>Ongoing maintenance and support to keep your applications running smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. Our Services -->
<section class="section section-alt" id="services">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Our Services</h2>
            <p>We offer comprehensive software development services to help your business thrive in the digital age.</p>
        </div>
        <div class="grid-2 hover-group">
            <div class="glass-card fade-in">
                <h3>Web Application Development</h3>
                <p>Custom web applications built with modern frameworks like React, Vue, and Angular. Responsive, fast, and user-friendly interfaces that work seamlessly across all devices.</p>
                <ul style="margin-top: 1rem; color: var(--accent); list-style: none; padding: 0;">
                    <li>✓ Responsive Design</li>
                    <li>✓ Modern Frameworks</li>
                    <li>✓ API Integration</li>
                    <li>✓ Performance Optimization</li>
                </ul>
            </div>
            <div class="glass-card fade-in">
                <h3>Mobile App Development</h3>
                <p>Native iOS and Android applications, as well as cross-platform solutions using React Native and Flutter. Delivering exceptional mobile experiences.</p>
                <ul style="margin-top: 1rem; color: var(--accent); list-style: none; padding: 0;">
                    <li>✓ Native Development</li>
                    <li>✓ Cross-Platform</li>
                    <li>✓ App Store Deployment</li>
                    <li>✓ Push Notifications</li>
                </ul>
            </div>
            <div class="glass-card fade-in">
                <h3>Enterprise Solutions</h3>
                <p>Scalable enterprise software solutions including CRM systems, inventory management, and business process automation tools.</p>
                <ul style="margin-top: 1rem; color: var(--accent); list-style: none; padding: 0;">
                    <li>✓ Scalable Architecture</li>
                    <li>✓ Business Process Automation</li>
                    <li>✓ Data Analytics</li>
                    <li>✓ Custom Integrations</li>
                </ul>
            </div>
            <div class="glass-card fade-in">
                <h3>Cloud Integration</h3>
                <p>Seamless cloud migration and integration services using AWS, Google Cloud, and Azure. Ensuring your applications are scalable and reliable.</p>
                <ul style="margin-top: 1rem; color: var(--accent); list-style: none; padding: 0;">
                    <li>✓ Cloud Migration</li>
                    <li>✓ Serverless Architecture</li>
                    <li>✓ Microservices</li>
                    <li>✓ DevOps Integration</li>
                </ul>
            </div>
            <div class="glass-card fade-in">
                <h3>API Development</h3>
                <p>RESTful and GraphQL API development for seamless data exchange between applications. Secure, documented, and efficient APIs.</p>
                <ul style="margin-top: 1rem; color: var(--accent); list-style: none; padding: 0;">
                    <li>✓ RESTful APIs</li>
                    <li>✓ GraphQL</li>
                    <li>✓ Documentation</li>
                    <li>✓ Security Implementation</li>
                </ul>
            </div>
            <div class="glass-card fade-in">
                <h3>Maintenance & Support</h3>
                <p>Ongoing maintenance, updates, and technical support to ensure your applications continue to perform optimally and stay secure.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Why Engitech App -->
<section class="section section-alt text-center" id="why-engitech">
    <div class="container">
        <div class="section-header fade-in" style="margin-bottom: 4rem;">
            <h2>Why Engitech App</h2>
            <p>become the one-top in finacial app</p>
        </div>

        <div class="grid-2 hover-group" style="text-align: left;">
            <div class="glass-card fade-in">
                <div style="margin-bottom: 1.5rem;">
                    <img src="https://img.icons8.com/color/96/000000/bank-cards.png" style="width: 64px; height: 64px;" alt="icon">
                </div>
                <h3>100+ Gateways<br>Payment</h3>
                <p>Nanotechnology immersion along the information highway will close the loop on focusing solely</p>
            </div>
            
            <div class="glass-card fade-in">
                <div style="margin-bottom: 1.5rem;">
                    <img src="https://img.icons8.com/color/96/000000/blockchain-technology.png" style="width: 64px; height: 64px;" alt="icon">
                </div>
                <h3>Intergrate With<br>Blockchains</h3>
                <p>Nanotechnology immersion along the information highway will close the loop on focusing solely</p>
            </div>

            <div class="glass-card fade-in">
                <div style="margin-bottom: 1.5rem;">
                    <img src="https://img.icons8.com/color/96/000000/calculator--v1.png" style="width: 64px; height: 64px;" alt="icon">
                </div>
                <h3>Flexiable Pricing<br>Plan To Start</h3>
                <p>Nanotechnology immersion along the information highway will close the loop on focusing solely</p>
            </div>

            <div class="glass-card fade-in">
                <div style="margin-bottom: 1.5rem;">
                    <img src="https://img.icons8.com/color/96/000000/customer-support.png" style="width: 64px; height: 64px;" alt="icon">
                </div>
                <h3>24/7 Dedicated<br>Support</h3>
                <p>Nanotechnology immersion along the information highway will close the loop on focusing solely</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. Our Development Process -->
<section class="section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Our Development Process</h2>
            <p>We follow a proven methodology to ensure your project is delivered on time, within budget, and exceeds expectations.</p>
        </div>
        <div class="grid-2 hover-group">
            <div class="glass-card fade-in">
                <h3>01. Discovery</h3>
                <p>We analyze your requirements and define project scope</p>
            </div>
            <div class="glass-card fade-in">
                <h3>02. Design</h3>
                <p>Creating wireframes, prototypes, and technical architecture</p>
            </div>
            <div class="glass-card fade-in">
                <h3>03. Development</h3>
                <p>Agile development with regular updates and feedback</p>
            </div>
            <div class="glass-card fade-in">
                <h3>04. Deployment</h3>
                <p>Testing, optimization, and successful launch</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. About Flxware Technologies -->
<section class="section section-alt" id="about">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>About Flxware Technologies</h2>
            <p>We're a dynamic team of software developers, designers, and innovators passionate about creating technology solutions that make a real difference in the world.</p>
        </div>
        
        <div class="grid-2" style="margin-bottom: 3rem;">
            <div class="glass-card fade-in">
                <h3>Our Mission</h3>
                <p>Founded in 2020, Flxware Technologies was born from a simple belief: that great software should be accessible to businesses of all sizes. We bridge the gap between complex technical requirements and practical business solutions.</p>
                <p style="margin-top: 1rem;">Our mission is to empower businesses through innovative software solutions that drive growth, improve efficiency, and create exceptional user experiences. We're committed to delivering high-quality, scalable solutions that stand the test of time.</p>
            </div>
            <div class="glass-card fade-in" style="display: flex; flex-direction: column; justify-content: center; text-align: center;">
                <div style="margin-bottom: 2rem;">
                    <h2 class="text-gradient" style="font-size: 3rem; margin: 0;">10+</h2>
                    <h4 style="margin: 0.5rem 0;">Projects</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Successfully delivered across various industries</p>
                </div>
                <div style="margin-bottom: 2rem;">
                    <h2 class="text-gradient" style="font-size: 3rem; margin: 0;">4</h2>
                    <h4 style="margin: 0.5rem 0;">Years</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Of dedicated service and continuous growth</p>
                </div>
                <div>
                    <h2 class="text-gradient" style="font-size: 3rem; margin: 0;">100%</h2>
                    <h4 style="margin: 0.5rem 0;">Satisfaction</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Client satisfaction rate with ongoing support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. Our Core Values -->
<section class="section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Our Core Values</h2>
            <p>These principles guide everything we do and help us maintain the highest standards in our work.</p>
        </div>
        <div class="grid-2 hover-group">
            <div class="glass-card fade-in">
                <h3>Innovation</h3>
                <p>We stay at the forefront of technology, continuously learning and adapting to deliver cutting-edge solutions.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Collaboration</h3>
                <p>We believe in close partnership with our clients, working together to achieve shared goals and success.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Excellence</h3>
                <p>Quality is never an accident. We maintain the highest standards in every aspect of our work.</p>
            </div>
            <div class="glass-card fade-in">
                <h3>Passion</h3>
                <p>We love what we do, and it shows in the dedication and enthusiasm we bring to every project.</p>
            </div>
        </div>
    </div>
</section>

<!-- 9. Our Portfolio -->
<section class="section section-alt" id="portfolio">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Our Portfolio</h2>
            <p>Explore our recent projects and see how we've helped businesses transform their ideas into successful digital solutions.</p>
        </div>
        
        <div class="grid-2 hover-group">
            <div class="glass-card fade-in">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <span class="badge">Mobile App</span>
                    <span style="color: var(--text-secondary);">2024</span>
                </div>
                <h3>Expense Tracker</h3>
                <p>A comprehensive personal finance management app that helps users track expenses, set budgets, and achieve financial goals.</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: var(--text-primary);">Key Features:</strong>
                    <ul style="color: var(--text-secondary); margin-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">
                        <li>Expense Categorization</li>
                        <li>Budget Planning</li>
                        <li>Financial Reports</li>
                        <li>Goal Tracking</li>
                    </ul>
                    <strong style="color: var(--text-primary);">Technologies:</strong>
                    <p style="color: var(--accent); font-size: 0.9rem;">Flutter, Node.js, Firebase</p>
                </div>
                <a href="{{ route('portfolio.show', 'expense-tracker') }}" class="btn-outline" style="margin-top: 1rem; display: inline-block;">View Project Details</a>
            </div>
            
            <div class="glass-card fade-in">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <span class="badge">Mobile App</span>
                    <span style="color: var(--text-secondary);">2024</span>
                </div>
                <h3>Exercise Tracker</h3>
                <p>A fitness tracking application that monitors workouts, tracks progress, and provides personalized fitness recommendations.</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: var(--text-primary);">Key Features:</strong>
                    <ul style="color: var(--text-secondary); margin-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">
                        <li>Workout Logging</li>
                        <li>Progress Analytics</li>
                        <li>Custom Routines</li>
                        <li>Personalized Recommendations</li>
                    </ul>
                    <strong style="color: var(--text-primary);">Technologies:</strong>
                    <p style="color: var(--accent); font-size: 0.9rem;">React Native, Firebase, Dart, Cloud Functions</p>
                </div>
                <a href="{{ route('portfolio.show', 'exercise-tracker') }}" class="btn-outline" style="margin-top: 1rem; display: inline-block;">View Project Details</a>
            </div>
            
            <div class="glass-card fade-in" style="grid-column: 1 / -1;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <span class="badge">Web & Mobile Platform</span>
                    <span style="color: var(--text-secondary);">2025</span>
                </div>
                <h3>Wayz</h3>
                <p>A vehicle rental platform designed specifically for tourists, offering seamless booking and local transportation solutions.</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: var(--text-primary);">Key Features:</strong>
                    <ul style="color: var(--text-secondary); margin-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 1rem;">
                        <li>Vehicle Booking</li>
                        <li>Tourist Guide Integration</li>
                        <li>Payment Processing</li>
                        <li>GPS Navigation</li>
                    </ul>
                    <strong style="color: var(--text-primary);">Technologies:</strong>
                    <p style="color: var(--accent); font-size: 0.9rem;">Flutter, Dart, Firebase, NodeJS, AWS</p>
                </div>
                <a href="{{ route('portfolio.show', 'wayz') }}" class="btn-outline" style="margin-top: 1rem; display: inline-block;">View Project Details</a>
            </div>
        </div>
    </div>
</section>

<!-- 10. Technologies We Use -->
<section class="section text-center">
    <div class="container">
        <div class="section-header fade-in">
            <h2>Technologies We Use</h2>
            <p>We leverage cutting-edge technologies and frameworks to build robust, scalable solutions.</p>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;" class="fade-in">
            <div class="tech-card">
                <div class="tech-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-11.5 -10.23 23 20.46"><circle cx="0" cy="0" r="2.05" fill="#61dafb"/><g stroke="#61dafb" stroke-width="1" fill="none"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg></div>
                <h3>React</h3>
            </div>
            <div class="tech-card">
                <div class="tech-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 128 128"><path fill="#339933" d="M125.7 34L64 0 2.3 34v59.9L64 128l61.7-34.1V34z"/><path fill="#fff" d="M64 96l-48-27V42h16v21l32 18 32-18V42h16v27z"/></svg></div>
                <h3>Node.js</h3>
            </div>
            <div class="tech-card">
                <div class="tech-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256"><path fill="#47A248" d="M128 0C128 0 46.7 51 46.7 141.4 46.7 204.6 97 256 128 256c31 0 81.3-51.4 81.3-114.6C209.3 51 128 0 128 0z"/><path fill="#fff" d="M128 210.6c-2.3 0-4.1-1.8-4.1-4.1v-64.6h8.2v64.6c0 2.3-1.8 4.1-4.1 4.1z"/></svg></div>
                <h3>MongoDB</h3>
            </div>
            <div class="tech-card">
                <div class="tech-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#FF9900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/><path d="M12 11v6"/><path d="M9 14l3 3 3-3"/></svg></div>
                <h3>AWS</h3>
            </div>
            <div class="tech-card">
                <div class="tech-icon-wrapper"><img src="https://img.icons8.com/color/96/000000/flutter.png" style="width: 50px; height: 50px;" alt="Flutter"></div>
                <h3>Flutter</h3>
            </div>
            <div class="tech-card">
                <div class="tech-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 128 128"><rect width="128" height="128" fill="#3178C6" rx="10"/><path fill="#fff" d="M72.2 108.5c-7 4.1-16 6.3-24.1 6.3-16.7 0-25.9-8.4-25.9-24.2V63.9h12.5v25c0 9.8 4.7 15.1 13.7 15.1 5.3 0 10.3-1.6 14.1-4.2l9.7 8.7zm28.3-52.8c11.3 0 18.2 5 21.6 10.5l-9.8 6.5c-2.4-3.6-6-5.8-11.2-5.8-5.3 0-8.6 2.5-8.6 6 0 9.8 28.5 7.6 28.5 25.1 0 11.7-9.5 20.3-23.9 20.3-9.5 0-18.4-3.6-23.7-10.8l10-7.3c3.5 5 8.4 7.6 14.3 7.6 5.8 0 10-2.6 10-6.6 0-10.8-28.7-8.1-28.7-25.5 0-11 9-19.9 22.5-19.9zM19.5 48.3H74v11H52.5v53.4H39.8V59.3H19.5v-11z"/></svg></div>
                <h3>TypeScript</h3>
            </div>
        </div>
    </div>
</section>

<!-- 11. Contact Section -->
<section class="section section-alt" id="contact">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Get In <span class="text-gradient">Touch</span></h2>
            <p>Ready to start your next project? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
        <div class="grid-2">
            <div class="glass-card fade-in">
                <h2>Send us a Message</h2>
                <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                <form action="#" method="POST" style="margin-top: 2rem;">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Project inquiry / General question" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us about your project, timeline, budget, and any specific requirements..." required></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
            <div class="fade-in">
                <div class="glass-card" style="margin-bottom: 2rem;">
                    <h2>Contact Information</h2>
                    <p>Get in touch through any of these channels</p>
                    <div style="margin-top: 2rem;">
                        <h4 style="margin-bottom: 0.5rem; color: var(--accent);">Email Us</h4>
                        <p>hello@flxwaretech.com</p>
                        <p style="font-size: 0.875rem;">Send us an email anytime</p>
                    </div>
                    <div style="margin-top: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; color: var(--accent);">Call Us</h4>
                        <p>+971 50 739 0610</p>
                        <p style="font-size: 0.875rem;">Mon-Fri from 9am to 6pm</p>
                    </div>
                    <div style="margin-top: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; color: var(--accent);">Locations</h4>
                        <p>USA, Sri Lanka</p>
                        <p style="font-size: 0.875rem;">Global presence with local expertise</p>
                    </div>
                </div>
                <div class="glass-card">
                    <h2>Office Hours</h2>
                    <div style="display: flex; justify-content: space-between; margin-top: 1.5rem; border-bottom: 1px solid var(--glass-border); padding-bottom: 0.5rem;">
                        <span>Monday - Friday</span>
                        <span>9:00 AM - 6:00 PM PST</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 0.5rem; border-bottom: 1px solid var(--glass-border); padding-bottom: 0.5rem;">
                        <span>Saturday</span>
                        <span>10:00 AM - 4:00 PM PST</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 0.5rem; border-bottom: 1px solid var(--glass-border); padding-bottom: 0.5rem;">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </div>
                    <p style="font-size: 0.875rem; margin-top: 1rem; color: var(--accent);">Emergency support available 24/7 for existing clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 12. FAQ -->
<section class="section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions about our services and process.</p>
        </div>
        <div class="grid-2 fade-in">
            <div class="glass-card">
                <h4>What's your typical project timeline?</h4>
                <p>Project timelines vary based on complexity, but most projects range from 2-6 months. We provide detailed timelines during our initial consultation.</p>
            </div>
            <div class="glass-card">
                <h4>Do you provide ongoing support?</h4>
                <p>Yes, we offer comprehensive maintenance and support packages to ensure your application continues to perform optimally after launch.</p>
            </div>
            <div class="glass-card">
                <h4>What technologies do you specialize in?</h4>
                <p>We specialize in React, React Native, Node.js, Python, and cloud platforms like AWS. We choose technologies based on your specific needs.</p>
            </div>
            <div class="glass-card">
                <h4>How do you handle project communication?</h4>
                <p>We provide regular updates through your preferred communication channels, including weekly progress reports and milestone reviews.</p>
            </div>
        </div>
    </div>
</section>

<!-- 13. Ready to Start -->
<section class="section section-alt text-center" style="padding-bottom: 8rem;">
    <div class="container fade-in">
        <h2 style="font-size: 3rem; margin-bottom: 1.5rem;">Ready to Start Your Project?</h2>
        <p style="font-size: 1.25rem; max-width: 600px; margin: 0 auto 2.5rem; color: var(--text-secondary);">Let's discuss how we can help bring your software vision to life. Contact us today for a free consultation.</p>
        <a href="#contact" class="btn-primary" style="font-size: 1.1rem; padding: 1rem 2.5rem;">Get Free Consultation</a>
    </div>
</section>

@endsection