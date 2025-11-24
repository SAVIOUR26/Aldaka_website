<?php
require_once '../config.php';
session_start();

// Simple authentication check (you should implement proper authentication)
$admin_password = 'admin123'; // CHANGE THIS!

if (!isset($_SESSION['admin_logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'] ?? '';
        if ($password === $admin_password) {
            $_SESSION['admin_logged_in'] = true;
        } else {
            $error = 'Invalid password';
        }
    }

    if (!isset($_SESSION['admin_logged_in'])) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Login - <?php echo SITE_NAME; ?></title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="../assets/css/style.css">
        </head>
        <body>
            <section class="section">
                <div class="container">
                    <div class="booking-container" style="max-width: 400px;">
                        <h2 class="text-center mb-3" style="color: var(--primary-color);">
                            <i class="fas fa-lock"></i> Admin Login
                        </h2>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-error"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required autofocus>
                            </div>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </body>
        </html>
        <?php
        exit;
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $booking_id = $_POST['booking_id'] ?? 0;
    $new_status = $_POST['status'] ?? 'pending';

    try {
        $conn = getDBConnection();
        if ($conn) {
            $stmt = $conn->prepare("UPDATE bookings SET status = ? WHERE id = ?");
            $stmt->execute([$new_status, $booking_id]);
            $success = "Booking status updated successfully!";
        }
    } catch (Exception $e) {
        $error = "Error updating status: " . $e->getMessage();
    }
}

// Get all bookings
$bookings = [];
try {
    $conn = getDBConnection();
    if ($conn) {
        $stmt = $conn->query("SELECT * FROM bookings ORDER BY created_at DESC");
        $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {
    $error = "Database error: " . $e->getMessage();
}

$page_title = 'Admin Dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .admin-header {
            background: var(--dark-color);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-table {
            width: 100%;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin-top: 2rem;
        }
        .admin-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .admin-table th {
            background: var(--primary-color);
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }
        .admin-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-light);
        }
        .admin-table tr:hover {
            background: var(--light-color);
        }
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .status-pending { background: #ffc107; color: #000; }
        .status-confirmed { background: #17a2b8; color: white; }
        .status-completed { background: #28a745; color: white; }
        .status-cancelled { background: #dc3545; color: white; }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            text-align: center;
        }
        .stat-card h3 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        .stat-card p {
            color: var(--gray);
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <h1><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>
        <a href="?logout=1" class="btn btn-secondary" style="background: var(--accent-color); border: none;">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>

    <section class="section">
        <div class="container">
            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>

            <!-- Statistics -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3><?php echo count($bookings); ?></h3>
                    <p><i class="fas fa-calendar-check"></i> Total Bookings</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo count(array_filter($bookings, fn($b) => $b['status'] === 'pending')); ?></h3>
                    <p><i class="fas fa-clock"></i> Pending</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo count(array_filter($bookings, fn($b) => $b['status'] === 'confirmed')); ?></h3>
                    <p><i class="fas fa-check"></i> Confirmed</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo count(array_filter($bookings, fn($b) => $b['status'] === 'completed')); ?></h3>
                    <p><i class="fas fa-check-double"></i> Completed</p>
                </div>
            </div>

            <h2><i class="fas fa-list"></i> All Bookings</h2>

            <?php if (empty($bookings)): ?>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> No bookings yet. Database may not be configured.
                </div>
            <?php else: ?>
                <div class="admin-table">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $booking): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($booking['id']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['name']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['email']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['service']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['booking_date']); ?></td>
                                    <td><?php echo htmlspecialchars($booking['booking_time'] ?: 'N/A'); ?></td>
                                    <td>
                                        <span class="status-badge status-<?php echo $booking['status']; ?>">
                                            <?php echo ucfirst($booking['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <form method="POST" style="display: inline;">
                                            <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                            <select name="status" onchange="this.form.submit()" style="padding: 0.25rem; border-radius: 4px;">
                                                <option value="pending" <?php echo $booking['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                                <option value="confirmed" <?php echo $booking['status'] === 'confirmed' ? 'selected' : ''; ?>>Confirmed</option>
                                                <option value="completed" <?php echo $booking['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                                                <option value="cancelled" <?php echo $booking['status'] === 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                                            </select>
                                            <input type="hidden" name="update_status" value="1">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

            <div class="text-center mt-4">
                <a href="../index.php" class="btn btn-secondary">
                    <i class="fas fa-home"></i> Back to Website
                </a>
            </div>
        </div>
    </section>
</body>
</html>
