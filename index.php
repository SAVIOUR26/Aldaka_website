<?php
require_once 'config.php';
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1><i class="fas fa-star"></i> Welcome to Aldaka Services</h1>
        <p>Professional services delivered with excellence. Your satisfaction is our priority.</p>
        <div class="hero-buttons">
            <a href="booking.php" class="btn btn-primary"><i class="fas fa-calendar-check"></i> Book a Service</a>
            <a href="#services" class="btn btn-secondary"><i class="fas fa-info-circle"></i> Learn More</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">We offer a wide range of professional services to meet your needs</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-broom"></i>
                </div>
                <h3>Cleaning Services</h3>
                <p>Professional deep cleaning for homes, offices, and commercial spaces. We ensure every corner sparkles.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-wrench"></i>
                </div>
                <h3>Maintenance & Repair</h3>
                <p>Expert maintenance and repair services for your property. Quick, reliable, and affordable solutions.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <h3>Painting Services</h3>
                <p>Transform your space with our professional painting services. Interior and exterior painting experts.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Electrical Work</h3>
                <p>Certified electricians for all your electrical needs. Safe, efficient, and code-compliant work.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-faucet"></i>
                </div>
                <h3>Plumbing Services</h3>
                <p>Professional plumbing solutions for repairs, installations, and emergency services. Available 24/7.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Carpentry</h3>
                <p>Custom carpentry and woodwork services. From furniture to renovations, we craft with precision.</p>
                <a href="booking.php" class="btn btn-outline mt-2">Book Now</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-subtitle">We're committed to delivering excellence in every service we provide</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <div class="feature-content">
                    <h4>Quality Guaranteed</h4>
                    <p>We stand behind our work with a 100% satisfaction guarantee on all services.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="feature-content">
                    <h4>Timely Service</h4>
                    <p>We value your time and always arrive on schedule, completing work as promised.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="feature-content">
                    <h4>Experienced Professionals</h4>
                    <p>Our team consists of certified and experienced professionals in their respective fields.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="feature-content">
                    <h4>Affordable Pricing</h4>
                    <p>Competitive rates without compromising on quality. Get value for your money.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="feature-content">
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock customer support for emergencies and inquiries.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="feature-content">
                    <h4>Insured & Licensed</h4>
                    <p>Fully licensed and insured for your peace of mind and protection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Simple and straightforward booking process</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, #ff6b35, #ff8c5a);">
                    <i class="fas fa-calendar-plus"></i>
                </div>
                <h3>1. Choose Service</h3>
                <p>Select the service you need from our wide range of professional offerings.</p>
            </div>

            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, #ff6b35, #ff8c5a);">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>2. Book Appointment</h3>
                <p>Pick a convenient date and time that works best for your schedule.</p>
            </div>

            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, #ff6b35, #ff8c5a);">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>3. Confirm Details</h3>
                <p>Provide your information and any specific requirements for the service.</p>
            </div>

            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, #ff6b35, #ff8c5a);">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <h3>4. Get It Done</h3>
                <p>Our professionals arrive on time and deliver exceptional service quality.</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="booking.php" class="btn btn-primary btn" style="font-size: 1.2rem; padding: 1rem 3rem;">
                <i class="fas fa-rocket"></i> Get Started Now
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Have questions? We're here to help!</p>
        </div>

        <div class="features-grid">
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
                <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="feature-content">
                    <h4>Call Us</h4>
                    <p><a href="tel:+<?php echo WHATSAPP_NUMBER; ?>">+<?php echo WHATSAPP_NUMBER; ?></a></p>
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
                    <i class="fas fa-clock"></i>
                </div>
                <div class="feature-content">
                    <h4>Working Hours</h4>
                    <p>Monday - Saturday<br>8:00 AM - 6:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1rem;">Ready to Get Started?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.95;">Book your service today and experience professional excellence</p>
        <a href="booking.php" class="btn" style="background: white; color: var(--primary-color); font-size: 1.2rem; padding: 1rem 3rem;">
            <i class="fas fa-calendar-check"></i> Book Now
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
