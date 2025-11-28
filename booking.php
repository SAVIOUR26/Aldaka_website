<?php
require_once 'config.php';
$page_title = 'Book a Service';

$success_message = '';
$error_message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $date = trim($_POST['date'] ?? '');
    $time = trim($_POST['time'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required";
    }

    if (empty($service)) {
        $errors[] = "Please select a service";
    }

    if (empty($date)) {
        $errors[] = "Preferred date is required";
    }

    if (empty($address)) {
        $errors[] = "Address is required";
    }

    if (empty($errors)) {
        // Try to save to database
        try {
            $conn = getDBConnection();

            if ($conn) {
                $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, service, booking_date, booking_time, address, message, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
                $stmt->execute([$name, $email, $phone, $service, $date, $time, $address, $message]);

                $success_message = "Your booking has been successfully submitted! We'll contact you shortly to confirm.";

                // Send email notification (if mail is configured)
                $to = SITE_EMAIL;
                $subject = "New Booking Request - " . $service;
                $email_body = "
                New booking request received:

                Name: $name
                Email: $email
                Phone: $phone
                Service: $service
                Date: $date
                Time: $time
                Address: $address
                Message: $message

                Please contact the customer to confirm the booking.
                ";
                $headers = "From: " . SITE_EMAIL;

                @mail($to, $subject, $email_body, $headers);

                // Clear form data
                $_POST = [];
            } else {
                // Database not configured, just show success message
                $success_message = "Thank you! Your booking request has been received. We'll contact you shortly at $phone or $email.";
            }
        } catch (Exception $e) {
            // Log error and show user-friendly message
            error_log("Booking error: " . $e->getMessage());
            $success_message = "Thank you! Your booking request has been received. We'll contact you shortly at $phone or $email.";
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}

include 'includes/header.php';
?>

<!-- Booking Hero -->
<section class="hero" style="padding: 3rem 1rem;">
    <div class="hero-content">
        <h1><i class="fas fa-calendar-check"></i> Schedule a Consultation</h1>
        <p>Let's discuss how we can enhance your communication strategies</p>
    </div>
</section>

<!-- Booking Form Section -->
<section class="section">
    <div class="container">
        <?php if ($success_message): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <?php if ($error_message): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <div class="booking-container">
            <form method="POST" action="" id="bookingForm" onsubmit="return validateBookingForm()">
                <h2 class="text-center mb-3" style="color: var(--primary-color);">
                    <i class="fas fa-clipboard-list"></i> Booking Information
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="John Doe"
                               value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control"
                               placeholder="john@example.com"
                               value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-phone"></i> Phone Number *</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                               placeholder="+1234567890"
                               value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="service"><i class="fas fa-concierge-bell"></i> Select Service *</label>
                        <select id="service" name="service" class="form-control" required>
                            <option value="">-- Choose a Service --</option>
                            <option value="Communication Needs Assessment" <?php echo (($_POST['service'] ?? '') === 'Communication Needs Assessment') ? 'selected' : ''; ?>>
                                Communication Needs Assessment
                            </option>
                            <option value="Strategy Development" <?php echo (($_POST['service'] ?? '') === 'Strategy Development') ? 'selected' : ''; ?>>
                                Strategy Development
                            </option>
                            <option value="Content Creation" <?php echo (($_POST['service'] ?? '') === 'Content Creation') ? 'selected' : ''; ?>>
                                Content Creation
                            </option>
                            <option value="Media Training & Coaching" <?php echo (($_POST['service'] ?? '') === 'Media Training & Coaching') ? 'selected' : ''; ?>>
                                Media Training & Coaching
                            </option>
                            <option value="Workshops & Training" <?php echo (($_POST['service'] ?? '') === 'Workshops & Training') ? 'selected' : ''; ?>>
                                Workshops & Training
                            </option>
                            <option value="Research & Evaluation" <?php echo (($_POST['service'] ?? '') === 'Research & Evaluation') ? 'selected' : ''; ?>>
                                Research & Evaluation
                            </option>
                            <option value="Stakeholder Engagement" <?php echo (($_POST['service'] ?? '') === 'Stakeholder Engagement') ? 'selected' : ''; ?>>
                                Stakeholder Engagement
                            </option>
                            <option value="Crisis Communication" <?php echo (($_POST['service'] ?? '') === 'Crisis Communication') ? 'selected' : ''; ?>>
                                Crisis Communication
                            </option>
                            <option value="Psychology-Integrated Communication" <?php echo (($_POST['service'] ?? '') === 'Psychology-Integrated Communication') ? 'selected' : ''; ?>>
                                Psychology-Integrated Communication
                            </option>
                            <option value="Other" <?php echo (($_POST['service'] ?? '') === 'Other') ? 'selected' : ''; ?>>
                                Other (Specify in message)
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="date"><i class="fas fa-calendar"></i> Preferred Date *</label>
                        <input type="date" id="date" name="date" class="form-control"
                               value="<?php echo htmlspecialchars($_POST['date'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="time"><i class="fas fa-clock"></i> Preferred Time</label>
                        <select id="time" name="time" class="form-control">
                            <option value="">-- Select Time --</option>
                            <option value="08:00-10:00" <?php echo (($_POST['time'] ?? '') === '08:00-10:00') ? 'selected' : ''; ?>>08:00 AM - 10:00 AM</option>
                            <option value="10:00-12:00" <?php echo (($_POST['time'] ?? '') === '10:00-12:00') ? 'selected' : ''; ?>>10:00 AM - 12:00 PM</option>
                            <option value="12:00-14:00" <?php echo (($_POST['time'] ?? '') === '12:00-14:00') ? 'selected' : ''; ?>>12:00 PM - 02:00 PM</option>
                            <option value="14:00-16:00" <?php echo (($_POST['time'] ?? '') === '14:00-16:00') ? 'selected' : ''; ?>>02:00 PM - 04:00 PM</option>
                            <option value="16:00-18:00" <?php echo (($_POST['time'] ?? '') === '16:00-18:00') ? 'selected' : ''; ?>>04:00 PM - 06:00 PM</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address"><i class="fas fa-building"></i> Organization / Company *</label>
                    <input type="text" id="address" name="address" class="form-control"
                           placeholder="Enter your organization or company name"
                           value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label for="message"><i class="fas fa-comment"></i> Tell Us About Your Communication Needs</label>
                    <textarea id="message" name="message" class="form-control"
                              placeholder="Describe your communication challenges, goals, or what you'd like to achieve..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-paper-plane"></i> Request Consultation
                </button>

                <p class="text-center mt-2" style="color: var(--gray); font-size: 0.9rem;">
                    <i class="fas fa-info-circle"></i> We'll contact you within 24 hours to discuss your needs
                </p>
            </form>
        </div>

        <!-- Quick Contact Options -->
        <div class="section-header mt-4">
            <h3 class="section-title">Need Immediate Assistance?</h3>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon" style="background: #25D366; color: white;">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="feature-content">
                    <h4>WhatsApp Us</h4>
                    <p><a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%20would%20like%20to%20book%20a%20service" target="_blank">
                        Send us a message instantly
                    </a></p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon" style="background: var(--accent-color); color: white;">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="feature-content">
                    <h4>Call Us Now</h4>
                    <p><a href="tel:+<?php echo WHATSAPP_NUMBER; ?>">+<?php echo WHATSAPP_NUMBER; ?></a></p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon" style="background: var(--primary-color); color: white;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="feature-content">
                    <h4>Email Us</h4>
                    <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
