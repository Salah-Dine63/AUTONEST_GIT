<?php 
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // ⚠️ À remplacer par password_hash/verify plus tard

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] === 'admin') {
            header("Location: admin_dashbord.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in || Sign up</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post" action="">
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <div class="infield">
                <input type="text" name="fName" placeholder="First Name" required>
            </div>
            <div class="infield">
                <input type="text" name="lName" placeholder="Last Name" required>
            </div>
            <div class="infield">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="infield">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form method="post" action="">
            <h1>Sign in</h1>
            <span>or use your account</span>
            <div class="infield">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="infield">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            <a href="#" class="forgot">Forgot your password?</a>
            <button type="submit" name="signIn">Sign In</button>
        </form>
    </div>

    <div class="overlay-container" id="overlayCon">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button>Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello Customer</h1>
                <p>Enter your personal details and start your journey with us</p>
                <button>Sign Up</button>
            </div>
        </div>
        <button id="overlayBtn"></button>
    </div>
</div>

<script>
    const container = document.getElementById('container');
    const overlayBtn = document.getElementById('overlayBtn');
    overlayBtn.addEventListener('click', () => {
        container.classList.toggle('right-panel-active');
        overlayBtn.classList.remove('btnScaled');
        window.requestAnimationFrame(() => {
            overlayBtn.classList.add('btnScaled');
        });
    });
</script>

</body>
</html>
