<?php
// Inclure la connexion à la base de données
include('connect.php');

// Vérifier si l'ID de la voiture est passé dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // Convertir l'ID en entier pour éviter les injections SQL

    // Récupérer les détails de la voiture depuis la base de données
    $sql = "SELECT * FROM cars WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $car = $result->fetch_assoc();

    if (!$car) {
        die("Voiture introuvable.");
    }
} else {
    die("Aucun ID de voiture spécifié.");
}

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_client = $_POST['nom_client'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $payment_type = $_POST['payment_type']; // Récupérer le type de paiement

    // Si le type de paiement est "Carte de crédit", rediriger vers carte_bancaire.php
    if ($payment_type === "Carte de crédit") {
        // Transmettre les données via la session
        session_start();
        $_SESSION['nom_client'] = $nom_client;
        $_SESSION['email'] = $email;
        $_SESSION['telephone'] = $telephone;
        $_SESSION['adresse'] = $adresse;
        $_SESSION['car'] = $car;

        header("Location: carte_bancaire.php");
        exit();
    }

    // Sinon, insérer les données dans la table commandes
    $sql = "INSERT INTO commandes (nom_client, email, telephone, adresse, payment_type, marque, modele, prix) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $nom_client, $email, $telephone, $adresse, $payment_type, $car['marque'], $car['modele'], $car['prix']);
    $stmt->execute();

    // Afficher un message de succès
    $message = "Commande réussie avec le type de paiement : " . htmlspecialchars($payment_type);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander - <?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></title>
    <link rel="stylesheet" href="commande.css">
</head>
<body>
    <header>
        <h1>Commander une voiture</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Catalogue</a></li>
                <li><a href="about us.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="commande-page">
        <h1>Commander la voiture : <?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></h1>

        <!-- Afficher le message de succès -->
        <?php if (!empty($message)): ?>
            <div class="success-message">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="nom_client">Nom :</label>
            <input type="text" id="nom_client" name="nom_client" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>

            <label for="adresse">Adresse :</label>
            <textarea id="adresse" name="adresse" required></textarea>

            <label for="payment_type">Type de paiement :</label>
            <select id="payment_type" name="payment_type" required>
                <option value="Carte de crédit">Carte de crédit</option>
                <option value="PayPal">PayPal</option>
                <option value="Virement bancaire">Virement bancaire</option>
            </select>

            <button type="submit">Confirmer la commande</button>
        </form>
    </div>
</body>
</html>
