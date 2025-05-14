<?php
// Connexion à la base de données
require_once 'connect.php';

// Traitement du formulaire d'ajout d'utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $date_inscription = date('Y-m-d H:i:s'); // Date et heure actuelles

    $query = "INSERT INTO users (firstName, lastName, email, role, date_inscription) 
              VALUES ('$first_name', '$last_name', '$email', '$role', '$date_inscription')";

    if (mysqli_query($conn, $query)) {
        $success_message = "Utilisateur ajouté avec succès.";
    } else {
        $error_message = "Erreur lors de l'ajout de l'utilisateur : " . mysqli_error($conn);
    }
}

// Vérifier si une suppression est demandée
if (isset($_GET['delete_id'])) {
    $userId = intval($_GET['delete_id']); // Convertir en entier pour éviter les injections SQL

    // Requête SQL pour supprimer l'utilisateur
    $query = "DELETE FROM users WHERE id = $userId";

    if (mysqli_query($conn, $query)) {
        $success_message = "Utilisateur supprimé avec succès.";
    } else {
        $error_message = "Erreur lors de la suppression de l'utilisateur : " . mysqli_error($conn);
    }
}

// Récupérer les utilisateurs depuis la base de données
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>

    <div class="container">
        <!-- Barre latérale -->
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

        <!-- Contenu principal -->
        <div class="main-content">
            <h1>Gestion des Utilisateurs</h1>

            <!-- Bouton Ajouter Utilisateur -->
            <a href="add_user.php" class="btn-add-user">Ajouter Utilisateur</a>

            <!-- Affichage des messages -->
            <?php if (isset($success_message)) { ?>
                <div class="success"><?php echo $success_message; ?></div>
            <?php } ?>

            <?php if (isset($error_message)) { ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php } ?>

            <!-- Tableau des utilisateurs -->
            <h2>Liste des Utilisateurs</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Date d'Inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['firstName']; ?></td>
                            <td><?php echo $user['lastName']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['role']; ?></td>
                            <td><?php echo $user['date_inscription']; ?></td>
                            <td>
                                <!-- Lien pour modifier l'utilisateur -->
                                <a href="edit_users.php?id=<?php echo $user['id']; ?>">Modifier</a>
                                <!-- Lien pour supprimer l'utilisateur -->
                                <a href="manage_users.php?delete_id=<?php echo $user['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

