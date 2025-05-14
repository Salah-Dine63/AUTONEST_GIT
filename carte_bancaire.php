<?php
session_start();
include('connect.php');

// Vérifier si les données sont disponibles dans la session
if (!isset($_SESSION['nom_client']) || !isset($_SESSION['car'])) {
    die("Données de commande introuvables.");
}

$nom_client = $_SESSION['nom_client'];
$email = $_SESSION['email'];
$telephone = $_SESSION['telephone'];
$adresse = $_SESSION['adresse'];
$car = $_SESSION['car'];

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $card_number = $_POST['card_number'];
    $card_name = $_POST['card_name'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Masquer le numéro de carte (ne stocker que les 4 derniers chiffres)
    $masked_card_number = substr($card_number, -4);

    // Préparer les valeurs
    $montant = $car['prix'];
    $voiture = $car['marque'] . ' ' . $car['modele'];

    // Insérer les données dans la table paiements
    $sql = "INSERT INTO paiements (nom_client, email, telephone, adresse, card_number, card_name, expiry_date, montant, voiture) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erreur préparation : " . $conn->error);
    }

    $stmt->bind_param(
        "ssssssssd",
        $nom_client,
        $email,
        $telephone,
        $adresse,
        $masked_card_number,
        $card_name,
        $expiry_date,
        $montant,
        $voiture
    );

    if (!$stmt->execute()) {
        die("Erreur exécution : " . $stmt->error);
    }

    // Enregistrer les données nécessaires dans la session pour remerciement.php
    $_SESSION['montant'] = $montant;
    $_SESSION['masked_card_number'] = $masked_card_number;

    // Rediriger vers la page de remerciement
    header("location: remerciement.php");
    exit(); // Arrêter l'exécution pour ne pas afficher le formulaire après le message
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement par Carte Bancaire</title>
    <link rel="stylesheet" href="commande.css">
</head>
<body>
    <header>
        <h1>Paiement par Carte Bancaire</h1>
    </header>

    <div class="commande-page">
        <h2>Informations de la commande</h2>
        <p><strong>Nom :</strong> <?php echo htmlspecialchars($nom_client); ?></p>
        <p><strong>Email :</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Téléphone :</strong> <?php echo htmlspecialchars($telephone); ?></p>
        <p><strong>Adresse :</strong> <?php echo htmlspecialchars($adresse); ?></p>
        <p><strong>Voiture :</strong> <?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></p>
        <p><strong>Prix :</strong> <?php echo number_format($car['prix'], 2, ',', ' '); ?> MAD</p>

        <h2>Entrez vos informations de carte bancaire</h2>
        <form method="POST">
            <label for="card_number">Numéro de carte :</label>
            <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" maxlength="19" required>

            <label for="card_name">Nom sur la carte :</label>
            <input type="text" id="card_name" name="card_name" placeholder="Nom tel qu'il apparaît sur la carte" required>

            <label for="expiry_date">Date d'expiration :</label>
            <input type="month" id="expiry_date" name="expiry_date" required>

            <label for="cvv">CVV :</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="3" required>

            <button type="submit">Payer</button>
        </form>
    </div>
</body>
</html>
