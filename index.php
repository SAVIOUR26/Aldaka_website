<?php
require_once 'config.php';
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1><i class="fas fa-comments"></i> <?php echo SITE_NAME; ?></h1>
        <p style="font-size: 1.5rem; font-weight: 600;"><?php echo SITE_TAGLINE; ?></p>
        <p>A leading communication company providing comprehensive communication solutions for businesses, organizations, government agencies, educational and healthcare institutions, community groups, and individuals.</p>
        <div class="hero-buttons">
            <a href="booking.php" class="btn btn-primary"><i class="fas fa-calendar-check"></i> Get Started</a>
            <a href="#about" class="btn btn-secondary"><i class="fas fa-book-open"></i> Learn More</a>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section id="about" class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Story</h2>
            <p class="section-subtitle">Committed to enhancing communication strategies across all sectors</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--dark-color); margin-bottom: 1.5rem;">
                Aldaka Services is a leading communication company with a mission to provide comprehensive communication solutions for businesses, organizations, government agencies, educational and healthcare institutions, community groups, and individuals. With a unique focus on enhancing both internal and external communication strategies, we bring <strong>13 years of experience in social work and communications</strong>.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                We specialize in helping organizations and individuals communicate with clarity, confidence, and impact. Our work blends communication strategy, psychology, and practical training to strengthen voices, build trust, and inspire action across sectors.
            </p>
        </div>
    </div>
</section>

<!-- Founder's Message Section -->
<section class="section" style="background: linear-gradient(135deg, rgba(0, 102, 204, 0.05), rgba(0, 168, 204, 0.05));">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">A Word from Our Founder</h2>
        </div>

        <div class="founder-section-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 3rem; align-items: center; max-width: 1000px; margin: 0 auto;">
            <!-- Founder Image -->
            <div style="text-align: center;">
                <div class="founder-image-container" style="width: 100%; max-width: 540px; height: 540px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; box-shadow: var(--shadow-lg); margin: 0 auto;">
                    <div style="text-align: center; padding: 2rem;">
                        <i class="fas fa-user-circle" style="font-size: 8rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                        <p style="opacity: 0.8;">Founder Image<br>540 x 540</p>
                    </div>
                </div>
            </div>

            <!-- Founder's Message -->
            <div>
                <p style="font-size: 1.15rem; line-height: 1.9; color: var(--dark-color); font-style: italic; margin-bottom: 1.5rem;">
                    "At Aldaka, communication is more than just information-sharing—it's a tool for empowerment, transformation, and leadership. We are deeply passionate about skilling communicators and PR professionals to become strategic and effective voices in their fields."
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray); margin-bottom: 1.5rem;">
                    "We believe in mentoring women and youth, helping them build confidence, resilience, and leadership capacity. Through every service we offer, we seek to amplify voices that matter, foster meaningful dialogue, and build bridges of understanding."
                </p>
                <p style="font-size: 1rem; color: var(--primary-color); font-weight: 600;">
                    <i class="fas fa-signature"></i> Founder, Aldaka Services
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive communication solutions tailored to your needs</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Communication Needs Assessment</h3>
                <p>We identify gaps and opportunities in your communication strategies, ensuring every message is clear and impactful.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Strategy Development</h3>
                <p>Developing effective communication strategies, plans, and policies that align with your organizational goals.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-pen-fancy"></i>
                </div>
                <h3>Content Creation</h3>
                <p>Crafting impactful messages, content, and talking points that resonate with your target audience.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-microphone"></i>
                </div>
                <h3>Media Training & Coaching</h3>
                <p>Delivering media training and public speaking coaching to enhance your communication skills and confidence.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Workshops & Training</h3>
                <p>Facilitating workshops, training programs, and focus groups to build communication capacity in your team.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Research & Evaluation</h3>
                <p>Conducting research and using data to inform decisions, measure effectiveness, and improve outcomes.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Stakeholder Engagement</h3>
                <p>Building relationships with stakeholders, media, and audiences to enhance your organizational reach.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3>Crisis Communication</h3>
                <p>Designing and executing crisis communication plans to protect and maintain your reputation.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Psychology-Integrated Communication</h3>
                <p>Integrating psychology into communication to support mental wellness, empathy, and behavior change.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Who We Work With Section -->
<section class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Who We Work With</h2>
            <p class="section-subtitle">Aldaka Services partners with a diverse range of clients</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="feature-content">
                    <h4>Businesses</h4>
                    <p>Enhancing corporate communication and brand messaging for sustainable growth.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div class="feature-content">
                    <h4>Non-Profit Organizations</h4>
                    <p>Supporting mission-driven communication that inspires action and builds community.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="feature-content">
                    <h4>Government Agencies</h4>
                    <p>Developing clear, transparent communication strategies for public service excellence.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="feature-content">
                    <h4>Educational Institutions</h4>
                    <p>Strengthening communication within schools, colleges, and universities.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="feature-content">
                    <h4>Healthcare Organizations</h4>
                    <p>Improving patient communication and public health messaging.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="feature-content">
                    <h4>Community Groups</h4>
                    <p>Empowering grassroots organizations with effective communication tools.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="feature-content">
                    <h4>Individuals</h4>
                    <p>Personalized coaching for professionals seeking to enhance their communication impact.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-venus"></i>
                </div>
                <div class="feature-content">
                    <h4>Women & Youth</h4>
                    <p>Mentoring programs focused on building confidence, resilience, and leadership.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="booking.php" class="btn btn-primary btn" style="font-size: 1.2rem; padding: 1rem 3rem;">
                <i class="fas fa-rocket"></i> Get Started Now
            </a>
        </div>
    </div>
</section>

<!-- Client Testimonials Section -->
<section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
    <div class="container">
        <div class="section-header">
            <h2 style="color: white;">Client Testimonials</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">What our clients say about working with us</p>
        </div>

        <div class="services-grid" style="margin-top: 2rem;">
            <div class="service-card" style="background: rgba(255,255,255,0.95);">
                <div style="margin-bottom: 1rem;">
                    <i class="fas fa-quote-left" style="font-size: 2rem; color: var(--accent-color);"></i>
                </div>
                <p style="font-style: italic; color: var(--dark-color); margin-bottom: 1.5rem;">
                    "Working with Aldaka Services has been a game-changer for our organization. Their communication assessments and solutions have significantly improved our outreach and engagement."
                </p>
                <div style="border-top: 2px solid var(--primary-color); padding-top: 1rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.25rem;">Didas Kambaho</h4>
                    <p style="color: var(--gray); font-size: 0.9rem;">Founding Partner, Fusion Oils, Uganda</p>
                </div>
            </div>

            <div class="service-card" style="background: rgba(255,255,255,0.95);">
                <div style="margin-bottom: 1rem;">
                    <i class="fas fa-quote-left" style="font-size: 2rem; color: var(--accent-color);"></i>
                </div>
                <p style="font-style: italic; color: var(--dark-color); margin-bottom: 1.5rem;">
                    "Aldaka Services transformed our internal communication processes, leading to increased productivity and collaboration within our team."
                </p>
                <div style="border-top: 2px solid var(--primary-color); padding-top: 1rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.25rem;">Brian Mpiirwa</h4>
                    <p style="color: var(--gray); font-size: 0.9rem;">CEO, Modern Steel Works</p>
                </div>
            </div>

            <div class="service-card" style="background: rgba(255,255,255,0.95);">
                <div style="margin-bottom: 1rem;">
                    <i class="fas fa-quote-left" style="font-size: 2rem; color: var(--accent-color);"></i>
                </div>
                <p style="font-style: italic; color: var(--dark-color); margin-bottom: 1.5rem;">
                    "The communication planning provided by Aldaka Services was instrumental in enhancing our external communication strategies, resulting in a noticeable growth in our online presence."
                </p>
                <div style="border-top: 2px solid var(--primary-color); padding-top: 1rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.25rem;">Tumushabe Allan</h4>
                    <p style="color: var(--gray); font-size: 0.9rem;">Director, Bethany Uganda</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Passion & Purpose Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Passion & Purpose</h2>
            <p class="section-subtitle">What drives us every day</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--dark-color); margin-bottom: 2rem; text-align: center;">
                At Aldaka, communication is more than just information-sharing—it's a tool for empowerment, transformation, and leadership.
            </p>

            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Skilling Professionals</h4>
                        <p>Training communicators and PR professionals to become strategic and effective voices in their fields.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Mentoring Women & Youth</h4>
                        <p>Helping women and youth build confidence, resilience, and leadership capacity.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Conducting Research</h4>
                        <p>Research that shapes communication policy and practice across sectors.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Moderating Events</h4>
                        <p>Moderating socially impactful events focused on gender, youth, and community development.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Integrating Psychology</h4>
                        <p>Using psychology in communication to support mental wellness, empathy, and behavior change.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Amplifying Voices</h4>
                        <p>Amplifying voices that matter and fostering meaningful dialogue across communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's start a conversation about your communication needs</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="feature-content">
                    <h4>Call Us</h4>
                    <p><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a></p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="feature-content">
                    <h4>Email Us</h4>
                    <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon" style="background: #25D366; color: white;">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="feature-content">
                    <h4>WhatsApp</h4>
                    <p><a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank">Chat with us instantly</a></p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="feature-content">
                    <h4>Visit Us</h4>
                    <p><?php echo SITE_ADDRESS; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1rem;">Ready to Transform Your Communication?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.95;">Contact us today and let's discuss how we can help you communicate with clarity, confidence, and impact.</p>
        <a href="booking.php" class="btn" style="background: white; color: var(--primary-color); font-size: 1.2rem; padding: 1rem 3rem;">
            <i class="fas fa-calendar-check"></i> Schedule a Consultation
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
