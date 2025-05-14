<?php
// Inclure la connexion à la base de données
include('connect.php');

// Vérifier si l'ID de la voiture est passé dans l'URL
if (isset($_GET['id'])) {
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
    $car = null; // Si aucun ID n'est passé, afficher la liste des voitures
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoNest - <?php echo $car ? htmlspecialchars($car['marque'] . ' ' . $car['modele']) : 'Liste des Voitures'; ?></title>

    <link rel="stylesheet" href="style.css">
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- boxicon cdn link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="top-header">
        <div class="out-box">
             <div class="inside-box">
                 <div class="col-1">
                     <span><i class='bx bxs-envelope'></i>AutoNest@gmail.com</span>
                     <span><i class='bx bxs-phone-call' ></i>+2 123 654 7890</span>
                     <span><i class='bx bxs-alarm' ></i>Sun Fri (08 AM 10 PM)</span>
                 </div>
 
                 <div class="col-2">
                     <a href="#"><i class='bx bx-arrow-to-right' ></i>Login</a>
                     <a href="#"><i class='bx bxs-user'></i></a>
                     <span>Follow Us:</span>
                     <div class="social">
                         <i class='bx bxl-facebook' ></i>
                         <i class='bx bxl-twitter' ></i>
                         <i class='bx bxl-instagram' ></i>
                         <i class='bx bxl-linkedin' ></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--- navbar section start-->
     <header class="header">
        <div class="nav__logo">
            <a href="#" class="logo">
            <img src="logo-white.png" alt="logo" class="logo-white" />
            <img src="logo-dark.png" alt="logo" class="logo-dark" />
            <img src="logo.png" alt="logo" class="fdt">
            </a>
        </div>
        <nav>
            <div class="navbar">
                <ul class="navLink">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about us.html">About US</a></li>
                        <!--<li><a href="#">Inventory<i class="bx bx-chevron-down"></i> </a>
                            <ul class="drop-down">
                                <li><a href="Inventory grid.html">Inventory Grid</a></li>
                                <li><a href="#">Inventory List</a></li>
                                <li><a href="single.html">Inventory Single</a></li>
                            </ul>
                        </li>-->
                        <li><a href="#">Pages<i class="bx bx-chevron-down"></i></a>
                            <ul class="drop-down">
                                
                               <!-- <li><a href="#">Car Listing<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-two">
                                        <li><a href="#">Listing Grid</a></li>
                                        <li><a href="#">Listing List</a></li>
                                        <li><a href="#">Listing Single</a></li>
                                        <li><a href="#">Compare</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="#">Account</a></li>
                                <li><a href="#">My Account<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-three">
                                        <li><a href="admin_dashbord.php">Dashboard</a></li>
                                        <li><a href="login.php">My Profile</a></li>
                                        <li><a href="#">My Listing</a></li>
                                        <li><a href="#">Add Listing</a></li>
                                        <li><a href="#">My favorites</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a href="#">Setting</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Authentification<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-four">
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="login.php">Register</a></li>
                                        <li><a href="#">Forgot Password</a></li>
                                    </ul>
                                   </li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="others">
                    <i class='bx bx-search'></i>
                    <i class='bx bx-cart-download cart'></i>
                    <button class="addBtn"><i class='bx bx-plus-circle'></i>Add Listing</button>
                    <i class='bx bx-menu-alt-left' id="menuBtn"></i>
            </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main>
        <?php if ($car): ?>
            <!-- Détails de la voiture -->
            <section class="car-details">
                <h2><?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></h2>
                <div class="slider">
                    <img src="./images/<?php echo htmlspecialchars($car['image']); ?>" alt="Image de la voiture">
                </div>
                <p><strong>Prix :</strong> <?php echo number_format($car['prix'], 2, ',', ' '); ?> MAD</p>
                <p><strong>Année :</strong> <?php echo htmlspecialchars($car['annee']); ?></p>
                <p><strong>Couleur :</strong> <?php echo htmlspecialchars($car['couleur']); ?></p>
                <p><strong>Description :</strong> <?php echo htmlspecialchars($car['description']); ?></p>
                <a href="commande.php?id=<?php echo $car['id']; ?>" class="btn">Commander</a>
            </section>
        <?php else: ?>
            <!-- Liste des voitures -->
            <section class="car-list">
                <h2>Liste des Voitures</h2>
                <?php
                $sql = "SELECT * FROM cars";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0):
                    while ($car = $result->fetch_assoc()):
                ?>
                    <div class="car-item">
                        <h3><?php echo htmlspecialchars($car['marque'] . ' ' . $car['modele']); ?></h3>
                        <p><strong>Prix :</strong> <?php echo number_format($car['prix'], 2, ',', ' '); ?> MAD</p>
                        <p><strong>Année :</strong> <?php echo htmlspecialchars($car['annee']); ?></p>
                        <p><strong>Couleur :</strong> <?php echo htmlspecialchars($car['couleur']); ?></p>
                        <a href="?id=<?php echo $car['id']; ?>" class="btn">Voir Détails</a>
                    </div>
                <?php
                    endwhile;
                else:
                    echo "<p>Aucune voiture disponible.</p>";
                endif;
                ?>
            </section>
        <?php endif; ?>
    </main>

    <div class="footer">
        <div class="footer-row">
          <div class="footer__col">
            <div class="footer__logo">
                <a href="#" class="logo">
                    <img src="logo-white.png" alt="logo" class="logo-white" />
                    <span>AutoNest</span>
                </a>
            </div>
            <p>
              We're here to provide you with the
              bestvehicles and a seamless
             experience. Stay connected 
              for updates, special offers, and
              more. Drive with confidence!
            </p>
            <ul class="footer__socials">
              <li>
                <a href="#"><i class="ri-facebook-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="ri-twitter-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="ri-linkedin-fill"></i></a>
              </li>
              <li>
                <a href="#"><i class="ri-instagram-line"></i></a>
              </li>
              <li>
                <a href="#"><i class="ri-youtube-fill"></i></a>
              </li>
            </ul>
          </div>
          <div class="footer__col">
            <h5>Quick linls</h5>
            <ul class="footer__links">
              <li><a href="#home"><i class='bx bx-chevron-right'></i>Home</a></li>
              <li><a href="#about"><i class='bx bx-chevron-right'></i>About Us</a></li>
              <li><a href="#deals"><i class='bx bx-chevron-right'></i>Privacy policy</a></li>
              <li><a href="#choose"><i class='bx bx-chevron-right'></i>Why Choose Us</a></li>
              <li><a href="#client"><i class='bx bx-chevron-right'></i>Testimonials</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h5>Support Center</h5>
            <ul class="footer__links">
              <li><a href="#"><i class='bx bx-chevron-right'></i>FAQ's</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Affiliates</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Booking Tips</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Sell Vehicles</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Coontact Us</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h5>Contact</h5>
            <ul class="footer__links">
              <li>
                  <span><i class="bx bx-phone"></i>+91 0987654321</span> 
              </li>
              <li>
                  <span><i class="bx bx-location-plus"></i>Casablanca,Morroco</span> 
              </li>
              <li>
                  <span><i class="bx bx-envelope"></i>info@gmail@com</span> 
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__bar">
          <p>&copy; copyright 2025 <span>AutoNest</span> All Right Reserves</p>
        </div>

        <!--scroll button-->
        <a href="#" class="scrollBtn">
            <i class="bx bxs-chevrons-up"></i>
        </a>
    </div>
    
    
      
    
     <!-- <script src="https://unpkg.com/scrollreveal"></script>-->
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--script js-->
    <script src="script.js"></script>

</body>
</html>