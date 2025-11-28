<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aldaka Services - Enhancing Communication Strategies. Professional communication consulting for businesses, organizations, and individuals in Uganda.">
    <meta name="keywords" content="communication, consulting, strategy, media training, Uganda, public relations, stakeholder engagement">
    <meta name="author" content="Aldaka Services">

    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - ' . SITE_TAGLINE; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230066cc'/><text x='50' y='70' font-size='60' text-anchor='middle' fill='white' font-family='Arial,sans-serif' font-weight='bold'>A</text></svg>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <span><?php echo SITE_NAME; ?></span>
                </a>
            </div>

            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="index.php#services" class="nav-link">Services</a></li>
                <li><a href="index.php#about" class="nav-link">About</a></li>
                <li><a href="booking.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'booking.php' ? 'active' : ''; ?>">Book Now</a></li>
                <li><a href="index.php#contact" class="nav-link">Contact</a></li>
                <li><a href="booking.php" class="btn-book-now">Get Started</a></li>
            </ul>
        </div>
    </nav>
