
<?php
session_start();
include 'connect.php';

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Récupérer les informations de l'utilisateur
$email = $_SESSION['email'];
$userQuery = "SELECT * FROM users WHERE email = '$email'";
$userResult = $conn->query($userQuery);
$user = $userResult->fetch_assoc();

// Autres informations à afficher pour l'utilisateur
$carCountQuery = "SELECT COUNT(*) FROM cars WHERE user_id = '" . $user['id'] . "'";
$carCountResult = $conn->query($carCountQuery);
$carCount = $carCountResult->fetch_row()[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - AutoNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style4.css"> <!-- Fichier CSS externe -->
</head>
<body>

    <div class="sidebar">
        <h2>AutoNest</h2>
        <ul>
            <li><a href="user_dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="my_cars.php">My Cars</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Welcome, <?php echo $user['firstName']; ?>!</h1>

        <div class="stats">
            <div class="stat-card">
                <i class="fas fa-user"></i>
                <h3>Your Profile</h3>
                <p><?php echo $user['firstName'] . ' ' . $user['lastName']; ?></p>
            </div>
            <div class="stat-card">
                <i class="fas fa-car"></i>
                <h3>Your Cars</h3>
                <p><?php echo $carCount; ?></p>
            </div>
        </div>

        <div class="recent-activities">
            <h2>Recent Activities</h2>
            <p>View the latest updates related to your cars or profile here.</p>
        </div>
    </div>

</body>
</html>

