<?php
session_start();
include 'connect.php';

// Récupérer toutes les voitures
$carsQuery = "SELECT * FROM cars";
$carsResult = $conn->query($carsQuery);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les Voitures - AutoNest</title>
    <link rel="stylesheet" href="manage_cars.css">
</head>
<body>

<div class="sidebar">
    <h2>AutoNest Admin</h2>
    <ul>
        <li><a href="manage_order.php">Manage Order</a></li>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_cars.php" class="active">Manage Cars</a></li>
        <li><a href="site_stats.php">Site Stats</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="main-content">
    <h1>Gestion des voitures</h1>

    <a href="add_car.php" class="button">➕ Ajouter une voiture</a>

    <table class="car-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Prix (MAD)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($car = $carsResult->fetch_assoc()): ?>
                <tr>
                    <td data-label="Image">
                        <?php if (!empty($car['image'])): ?>
                            <img src="images/<?= htmlspecialchars($car['image']) ?>" width="80" alt="Car Image">
                        <?php else: ?>
                            <span>Aucune image</span>
                        <?php endif; ?>
                    </td>
                    <td data-label="Marque"><?= htmlspecialchars($car['marque']) ?></td>
                    <td data-label="Modèle"><?= htmlspecialchars($car['modele']) ?></td>
                    <td data-label="Année"><?= $car['annee'] ?></td>
                    <td data-label="Prix"><?= $car['prix'] ?> MAD</td>
                    <td data-label="Actions">
                    <a href="edit_car.php?id=<?= $car['id'] ?>" class="btn-edit">✏️ Modifier</a>
                     <a href="delete_car.php?id=<?= $car['id'] ?>" class="btn-delete"> ❌ Supprimer </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
