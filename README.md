# Aldaka Services - Professional Service Booking Website

A modern, professional PHP website for Aldaka Services with integrated booking functionality.

## Features

- **Modern Professional Design** with custom color scheme
  - Primary: #0066cc (Professional Blue)
  - Secondary: #00a8cc (Teal/Cyan)
  - Accent: #ff6b35 (Orange for CTAs)

- **Font Awesome Icons** throughout the site
- **Custom Logo** designed with Font Awesome and CSS
- **SVG Favicon** with brand identity
- **Floating WhatsApp Button** for instant customer contact
- **Responsive Design** - works on all devices
- **Service Booking System** with form validation
- **Admin Dashboard** to manage bookings
- **Professional Services Section** showcasing:
  - Cleaning Services
  - Maintenance & Repair
  - Painting Services
  - Electrical Work
  - Plumbing Services
  - Carpentry

## File Structure

```
aldaka_website/
├── admin/
│   └── index.php          # Admin dashboard for managing bookings
├── assets/
│   ├── css/
│   │   └── style.css      # Main stylesheet with professional design
│   └── js/
│       └── main.js        # JavaScript for interactivity
├── includes/
│   ├── header.php         # Site header with navigation
│   └── footer.php         # Site footer with WhatsApp button
├── config.php             # Configuration file
├── index.php              # Homepage
├── booking.php            # Booking form page
├── database.sql           # Database schema
└── README.md              # This file
```

## Installation

### 1. Clone or Download the Repository

```bash
git clone <repository-url>
cd Aldaka_website
```

### 2. Configure the Database

1. Create a MySQL database:
```bash
mysql -u root -p
CREATE DATABASE aldaka_services;
```

2. Import the database schema:
```bash
mysql -u root -p aldaka_services < database.sql
```

3. Update `config.php` with your database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'aldaka_services');
```

### 3. Configure Site Settings

Update the following in `config.php`:

```php
define('SITE_EMAIL', 'info@aldakaservices.com');
define('WHATSAPP_NUMBER', '1234567890'); // Include country code, no + or spaces
```

### 4. Set Up Web Server

#### Apache
Place files in your web root (e.g., `/var/www/html/` or `htdocs/`)

#### PHP Built-in Server (for testing)
```bash
php -S localhost:8000
```

Then visit: http://localhost:8000

## Usage

### Public Website

- **Homepage**: Browse services and company information
- **Book Now**: Submit a booking request with preferred date/time
- **Contact**: Multiple ways to reach out (WhatsApp, Email, Phone)

### Admin Dashboard

1. Navigate to: `/admin/`
2. Default password: `admin123` (CHANGE THIS!)
3. View and manage all bookings
4. Update booking status (pending, confirmed, completed, cancelled)

### Security Notes

**IMPORTANT**: Before going live:

1. Change the admin password in `admin/index.php`
2. Implement proper authentication (use password hashing)
3. Set `display_errors = 0` in `config.php` for production
4. Add HTTPS/SSL certificate
5. Set up proper email configuration
6. Consider implementing CSRF protection
7. Add rate limiting for form submissions

## WhatsApp Integration

The floating WhatsApp button appears on all pages:
- Update `WHATSAPP_NUMBER` in `config.php`
- Format: Country code + number (no + or spaces)
- Example: `1234567890` for +1 (234) 567-890

## Customization

### Colors
Edit CSS variables in `assets/css/style.css`:
```css
:root {
    --primary-color: #0066cc;
    --secondary-color: #00a8cc;
    --accent-color: #ff6b35;
}
```

### Services
Update services in:
- `index.php` (services section)
- `booking.php` (service dropdown)
- `includes/footer.php` (footer services list)

### Logo
The logo uses Font Awesome's `fa-tools` icon. To change:
- Edit `includes/header.php`
- Replace `<i class="fas fa-tools"></i>` with your preferred icon

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Technologies Used

- **PHP 7.4+**
- **MySQL 5.7+**
- **Font Awesome 6.4**
- **CSS3** with custom properties
- **Vanilla JavaScript** (no frameworks)
- **PDO** for database operations

## License

Proprietary - All rights reserved by Aldaka Services

## Support

For questions or support:
- Email: info@aldakaservices.com
- WhatsApp: Contact via website

---

**Developed with ❤️ for Aldaka Services**
