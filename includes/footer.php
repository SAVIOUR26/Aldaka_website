    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content container">
            <div class="footer-section">
                <h3><i class="fas fa-comments"></i> <?php echo SITE_NAME; ?></h3>
                <p><?php echo SITE_TAGLINE; ?>. We specialize in helping organizations and individuals communicate with clarity, confidence, and impact.</p>
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
                    <li><a href="booking.php"><i class="fas fa-search"></i> Communication Assessment</a></li>
                    <li><a href="booking.php"><i class="fas fa-lightbulb"></i> Strategy Development</a></li>
                    <li><a href="booking.php"><i class="fas fa-microphone"></i> Media Training</a></li>
                    <li><a href="booking.php"><i class="fas fa-users"></i> Workshops & Training</a></li>
                    <li><a href="booking.php"><i class="fas fa-brain"></i> Crisis Communication</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Info</h3>
                <p><i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo SITE_ADDRESS; ?></p>
                <p><i class="fas fa-clock"></i> Mon - Fri: 9AM - 5PM</p>
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
