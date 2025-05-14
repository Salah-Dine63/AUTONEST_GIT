<?php
session_start();

include('connect.php');

// Récupération des données depuis la session
$nom_client = $_SESSION['nom_client'];
$email = $_SESSION['email'];
$car = $_SESSION['car'];
$montant = $_SESSION['montant'];
$masked_card_number = $_SESSION['masked_card_number'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour votre paiement</title>
    <link rel="stylesheet" href="remerciement.css">
</head>
<body>
    <div class="commande-page">
        <h1>Merci pour votre paiement !</h1>
        <p>Votre paiement a été traité avec succès.</p>
        <p><strong>Nom :</strong> <?php echo htmlspecialchars($nom_client); ?></p>
        <p><strong>Email :</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Voiture :</strong> <?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></p>
        <p><strong>Montant :</strong> <?php echo number_format($montant, 2, ',', ' '); ?> MAD</p>
        <p><strong>Numéro de carte :</strong> **** **** **** <?php echo htmlspecialchars($masked_card_number); ?></p>

        <!-- Bouton pour rediriger vers index.php -->
        <a href="index.php" class="btn">Retour à l'accueil</a>
    </div>
</body>
</html>
