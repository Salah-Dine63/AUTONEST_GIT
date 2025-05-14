<?php
session_start();



include 'connect.php';

// Récupérer des informations pour l'admin
// Exemple : nombre d'utilisateurs, nombre de voitures, etc.
$userCountQuery = "SELECT COUNT(*) FROM users";
$userCountResult = $conn->query($userCountQuery);
$userCount = $userCountResult->fetch_row()[0];

$carCountQuery = "SELECT COUNT(*) FROM cars";  // Assumant qu'il y a une table 'cars'
$carCountResult = $conn->query($carCountQuery);
$carCount = $carCountResult->fetch_row()[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - AutoNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style3.css"> <!-- Fichier CSS externe -->
</head>
<body>

    <div class="sidebar">
        <h2>AutoNest Admin</h2>
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="manage_cars.php">Manage Cars</a></li>
            <li><a href="site_stats.php">Site Stats</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Welcome to the Admin Dashboard</h1>

        <div class="stats">
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>Total Users</h3>
                <p><?php echo $userCount; ?></p>
            </div>
            <div class="stat-card">
                <i class="fas fa-car"></i>
                <h3>Total Cars</h3>
                <p><?php echo $carCount; ?></p>
            </div>
        </div>

        <div class="recent-activities">
            <h2>Recent Activities</h2>
            <p>View the latest activities here (e.g., new sign-ups, added cars, etc.).</p>
            <!-- You can display recent activities here -->
        </div>

    </div>

</body>
</html>
