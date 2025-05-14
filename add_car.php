<?php
session_start();
include 'connect.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $prix = $_POST['prix'];

    // Traitement de l'image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $imageName = uniqid() . '_' . basename($image['name']);
        $imagePath = 'images/' . $imageName;

        // Déplacer l'image vers le dossier "images"
        move_uploaded_file($image['tmp_name'], $imagePath);
    } else {
        $imageName = null; // Pas d'image fournie
    }

    // Insérer les données dans la base de données
    $query = "INSERT INTO cars (marque, modele, annee, prix, image) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssdis', $marque, $modele, $annee, $prix, $imageName);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Voiture ajoutée avec succès!";
        header("Location: manage_cars.php");
        exit();
    } else {
        $_SESSION['error'] = "Erreur lors de l'ajout de la voiture.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Voiture - AutoNest</title>
    <link rel="stylesheet" href="edit_cars.css">
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

<div class="main-content">
    <h1>Ajouter une voiture</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert error">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php elseif (isset($_SESSION['success'])): ?>
        <div class="alert success">
            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <form action="add_car.php" method="POST" enctype="multipart/form-data">
        <label for="marque">Marque:</label>
        <input type="text" id="marque" name="marque" required>

        <label for="modele">Modèle:</label>
        <input type="text" id="modele" name="modele" required>

        <label for="annee">Année:</label>
        <input type="number" id="annee" name="annee" required>

        <label for="prix">Prix (MAD):</label>
        <input type="number" id="prix" name="prix" required>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">

        <button type="submit">Ajouter la voiture</button>
    </form>
</div>

</body>
</html>
