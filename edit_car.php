<?php
session_start();
include 'connect.php';

// Vérifier si un ID est passé dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID de la voiture manquant.");
}

$id = intval($_GET['id']);

// Récupérer les données de la voiture à modifier
$query = "SELECT * FROM cars WHERE id = $id";
$result = $conn->query($query);
$car = $result->fetch_assoc();

if (!$car) {
    die("Voiture non trouvée.");
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $prix = $_POST['prix'];

    // Gestion de l'image (si une nouvelle image est téléchargée)
    if (!empty($_FILES['image']['name'])) {
        $imageName = basename($_FILES['image']['name']);
        $targetPath = "images/" . $imageName;

        move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
    } else {
        $imageName = $car['image']; // Garder l'ancienne image
    }

    // Mise à jour dans la base de données
    $updateQuery = "UPDATE cars SET 
        marque = '$marque', 
        modele = '$modele', 
        annee = '$annee', 
        prix = '$prix', 
        image = '$imageName' 
        WHERE id = $id";

    if ($conn->query($updateQuery)) {
        header("Location: manage_cars.php");
        exit;
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Voiture</title>
    <link rel="stylesheet" href="edit_car1.css">
</head>
<body>



<div class="sidebar">
    <h2>AutoNest Admin</h2>
    <ul>
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_cars.php" class="active">Manage Cars</a></li>
        <li><a href="site_stats.php">Site Stats</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>


<div class="main-content">
    <h1>Modifier une voiture</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="form-style">
        <label>Marque :</label>
        <input type="text" name="marque" value="<?= htmlspecialchars($car['marque']) ?>" required>

        <label>Modèle :</label>
        <input type="text" name="modele" value="<?= htmlspecialchars($car['modele']) ?>" required>

        <label>Année :</label>
        <input type="number" name="annee" value="<?= $car['annee'] ?>" required>

        <label>Prix (MAD) :</label>
        <input type="number" name="prix" value="<?= $car['prix'] ?>" required>

        <label>Image actuelle :</label><br>
        <?php if (!empty($car['image'])): ?>
            <img src="images/<?= htmlspecialchars($car['image']) ?>" width="120"><br>
        <?php else: ?>
            <p>Aucune image</p>
        <?php endif; ?>

        <label>Nouvelle Image (optionnelle) :</label>
        <input type="file" name="image">

        <button type="submit" class="btn-edit"> Enregistrer les modifications ✅ </button>
    </form>

    <a href="manage_cars.php" class="btn-cancel">⬅ Retour</a>
</div>

</body>
</html>


