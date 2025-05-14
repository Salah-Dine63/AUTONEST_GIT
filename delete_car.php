<?php
session_start();
include 'connect.php';

// Vérifier si un ID est passé dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID de la voiture manquant.");
}

$id = intval($_GET['id']); // On récupère l'ID de la voiture

// Récupérer les données de la voiture à supprimer
$query = "SELECT * FROM cars WHERE id = $id";
$result = $conn->query($query);
$car = $result->fetch_assoc();

if (!$car) {
    die("Voiture non trouvée.");
}

// Traitement de la suppression si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Supprimer l'image associée si elle existe
    if (!empty($car['image'])) {
        $imagePath = "images/" . $car['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // Supprime l'image du serveur
        }
    }

    // Supprimer la voiture de la base de données
    $deleteQuery = "DELETE FROM cars WHERE id = $id";
    if ($conn->query($deleteQuery)) {
        header("Location: manage_cars.php"); // Rediriger vers la gestion des voitures après suppression
        exit;
    } else {
        echo "Erreur lors de la suppression.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer Voiture</title>
    <link rel="stylesheet" href="delete_car.css"> <!-- Assurez-vous d'avoir ce fichier CSS -->
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
    <h1>Supprimer une voiture</h1>

    <div class="form-style">
        <h2>Êtes-vous sûr de vouloir supprimer cette voiture ?</h2>
        <img src="images/<?= htmlspecialchars($car['image']) ?>" width="120" alt="Car Image">
        <p>Marque : <?= htmlspecialchars($car['marque']) ?></p>
        <p>Modèle : <?= htmlspecialchars($car['modele']) ?></p>
        <p>Année : <?= $car['annee'] ?></p>
        <p>Prix : <?= $car['prix'] ?> €</p>

        <!-- Formulaire de confirmation de suppression -->
        <form action="" method="POST">
            <button type="submit">Supprimer cette voiture ❌</button>
        </form>

        <a href="manage_cars.php" class="btn-cancel">⬅ Retour</a>
    </div>
</div>

</body>
</html>
