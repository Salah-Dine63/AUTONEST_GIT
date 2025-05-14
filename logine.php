<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];

        header("Location: homepage.php");
        exit();
    } else {
        echo "<script>alert('Email ou mot de passe incorrect'); window.location.href='register.php';</script>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="aty.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="container" id="signup">
        <div class="form-container sign-up-container">
            <form method="post" action="register.php">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" name="email" id="email" placeholder="Email" name="email"required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label></label>
                </div>
                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="login.php">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="password" id="password" placeholder="Password" />
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button>Sign In</button>
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
                    <h1>Hello,Custumer!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    
    <!-- js code -->
    <script>
const container = document.getElementById('container');
const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
        
        const overlayCon = document.getElementById('overlayCon');
        
        const overlayBtn = document.getElementById('overlayBtn');
        
        overlayBtn.addEventListener('click', () => {
        
        container.classList.toggle('right-panel-active');
        
        overlayBtn.classList.remove('btnScaled');
        
        window.requestAnimationFrame(() => {
        
        overlayBtn.classList.add('btnScaled');
        
        })
        
        });
        
        </script>

</body>
</html>