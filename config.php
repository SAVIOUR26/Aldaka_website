<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'aldaka_services');

// Site Configuration
define('SITE_NAME', 'Aldaka Services');
define('SITE_URL', 'https://www.aldakaservices.com');
define('SITE_EMAIL', 'info@aldakaservices.com');
define('WHATSAPP_NUMBER', '1234567890'); // Replace with actual WhatsApp number (with country code, no + or spaces)

// Timezone
date_default_timezone_set('UTC');

// Error Reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Connection
function getDBConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
        return null;
    }
}
?>
