    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content container">
            <div class="footer-section">
                <h3><i class="fas fa-tools"></i> <?php echo SITE_NAME; ?></h3>
                <p>Your trusted partner for professional services. We deliver quality, reliability, and excellence in everything we do.</p>
                <div class="social-links">
                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="index.php#services"><i class="fas fa-chevron-right"></i> Services</a></li>
                    <li><a href="index.php#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="booking.php"><i class="fas fa-chevron-right"></i> Book Now</a></li>
                    <li><a href="index.php#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Our Services</h3>
                <ul class="footer-links">
                    <li><a href="booking.php"><i class="fas fa-broom"></i> Cleaning Services</a></li>
                    <li><a href="booking.php"><i class="fas fa-wrench"></i> Maintenance</a></li>
                    <li><a href="booking.php"><i class="fas fa-paint-roller"></i> Painting</a></li>
                    <li><a href="booking.php"><i class="fas fa-plug"></i> Electrical Work</a></li>
                    <li><a href="booking.php"><i class="fas fa-faucet"></i> Plumbing</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Info</h3>
                <p><i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
                <p><i class="fas fa-phone"></i> +<?php echo WHATSAPP_NUMBER; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> Your Location Here</p>
                <p><i class="fas fa-clock"></i> Mon - Sat: 8AM - 6PM</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #ff6b35;"></i></p>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20services"
       class="whatsapp-float"
       target="_blank"
       title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
