<?php
// Connexion à la base de données
require_once 'connect.php';

// Traitement du formulaire d'ajout d'utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $date_inscription = date('Y-m-d H:i:s'); // Date et heure actuelles

    $query = "INSERT INTO users (firstName, lastName, email, role, date_inscription) 
              VALUES ('$firstName', '$lastName', '$email', '$role', '$date_inscription')";

    if (mysqli_query($conn, $query)) {
        $success_message = "Utilisateur ajouté avec succès.";
    } else {
        $error_message = "Erreur lors de l'ajout de l'utilisateur : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <link rel="stylesheet" href="user.css">
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
            <h1>Ajouter un Utilisateur</h1>

            <!-- Messages -->
            <?php if (isset($success_message)) { ?>
                <div class="success"><?php echo $success_message; ?></div>
            <?php } ?>

            <?php if (isset($error_message)) { ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php } ?>

            <!-- Formulaire -->
            <form action="add_user.php" method="POST" class="form-container">
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Entrez le prénom" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Entrez le nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez l'email" required>
                </div>

                <div class="form-group">
                    <label for="role">Rôle</label>
                    <select id="role" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="user">Utilisateur</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>