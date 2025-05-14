<?php 

include 'connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // ⚠️ Utilisé ici uniquement pour correspondre à la BDD

    // Requête sécurisée avec mysqli (prévention des injections SQL)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        // Redirection selon le rôle
        if ($row['role'] == 'admin') {
            header("Location: admin_dashbord.php");
        } else {
            header("Location: dasbord.php");
        }
        exit();
    } else {
        echo "Incorrect Email or Password";
    }
}
?>
