<?php
include 'connect.php'; // Inclure la connexion à la base de données

// Récupérer les commandes depuis la base de données
$sql = "SELECT * FROM commandes ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Commandes</title>
    <link rel="stylesheet" href="mange_order.css">
</head>
<body>
    
<div class="sidebar">
    <h2>AutoNest Admin</h2>
    <ul>
        <li><a href="manage_order.php">Manage Order</a></li>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_cars.php">Manage Cars</a></li>
        <li><a href="site_stats.php">Site Stats</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="dashboard">
    <h1>Liste des Commandes</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom Client</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix (MAD)</th>
            
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= htmlspecialchars($row["nom_client"]) ?></td>
                        <td><?= htmlspecialchars($row["email"]) ?></td>
                        <td><?= htmlspecialchars($row["telephone"]) ?></td>
                        <td><?= htmlspecialchars($row["adresse"]) ?></td>
                        <td><?= htmlspecialchars($row["marque"]) ?></td>
                        <td><?= htmlspecialchars($row["modele"]) ?></td>
                        <td><?= number_format($row["prix"], 2) ?></td>
                       
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="10">Aucune commande trouvée.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
