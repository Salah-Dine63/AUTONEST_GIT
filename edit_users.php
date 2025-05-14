<?php
// Connexion à la base de données
require_once 'connect.php';

// Vérifier si un ID est passé dans l'URL
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']); // Convertir en entier pour éviter les injections SQL

    // Récupérer les informations de l'utilisateur
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        // Rediriger si l'utilisateur n'existe pas
        header("Location: manage_users.php?error=Utilisateur introuvable.");
        exit();
    }
} else {
    // Rediriger si aucun ID n'est fourni
    header("Location: manage_users.php?error=Aucun utilisateur sélectionné.");
    exit();
}

// Traitement du formulaire de modification
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Requête SQL pour mettre à jour les informations de l'utilisateur
    $query = "UPDATE users SET firstName = '$firstName', lastName = '$lastName', email = '$email', role = '$role' WHERE id = $userId";

    if (mysqli_query($conn, $query)) {
        // Rediriger avec un message de succès
        header("Location: manage_users.php?success=Utilisateur modifié avec succès.");
        exit();
    } else {
        $error_message = "Erreur lors de la modification de l'utilisateur : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Utilisateur</title>
    <link rel="stylesheet" href="users2.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>AutoNest Admin</h2>
            <ul>
                <li><a href="manage_order.php">Manage Order</a></li>
                <li><a href="manage_users.php" class="active">Manage Users</a></li>
                <li><a href="manage_cars.php">Manage Cars</a></li>
                <li><a href="site_stats.php">Site Stats</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>Modifier un Utilisateur</h1>

            <!-- Affichage des messages -->
            <?php if (isset($error_message)) { ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php } ?>

            <!-- Formulaire de modification -->
            <form action="edit_users.php?id=<?php echo $userId; ?>" method="POST" class="form-container">
                <div class="form-group">
                    <label for="firstName">Prénom</label>
                    <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="lastName">Nom</label>
                    <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="role">Rôle</label>
                    <select id="role" name="role" required>
                        <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                        <option value="user" <?php echo $user['role'] == 'user' ? 'selected' : ''; ?>>Utilisateur</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>