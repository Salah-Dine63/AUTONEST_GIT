<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php'; // Ton fichier de connexion à la base

    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];

    $sql = "INSERT INTO commandes (email, nom, adresse, telephone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $email, $name, $address, $phone);
        if ($stmt->execute()) {
            echo "<script>alert('Commande enregistrée avec succès !');</script>";
        } else {
            echo "<script>alert('Erreur lors de l\'enregistrement.');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Erreur dans la préparation de la requête.');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us </title>

    <link rel="stylesheet" href="style.css">
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- boxicon cdn link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

</head>
<body>

    <div class="top-header">
        <div class="out-box">
             <div class="inside-box">
                 <div class="col-1">
                     <span><i class='bx bxs-envelope'></i>info@gmail.com</span>
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


     

    

       <!--- navbar section start--    <header class="header">
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
                        <li><a href="about us.html">About Us</a></li>
                        <!--<li><a href="#">Inventory<i class="bx bx-chevron-down"></i> </a>
                            <ul class="drop-down">
                                <li><a href="Inventory grid.html">Inventory Grid</a></li>
                                <li><a href="#">Inventory List</a></li>
                                <li><a href="single.html">Inventory Single</a></li>
                            </ul>
                        </li>-->
                        <li><a href="#">Pages<i class="bx bx-chevron-down"></i></a>
                            <ul class="drop-down">
                                <li><a href="about us.html">About Us</a></li>
                                <li><a href="checkout.php">My orders</a></li>
                                <li><a href="#">My Account<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-three">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">My Profile</a></li>
                                        <li><a href="#">My Listing</a></li>
                                        <li><a href="#">Add Listing</a></li>
                                        <li><a href="#">My favorites</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a href="#">Setting</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Authentification<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-four">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="#">Shop<i class="bx bx-chevron-down"></i></a>
                            <ul class="drop-down">
                                <li><a href="">Shop</a></li>
                                <li><a href="">Shop Casting</a></li>
                                <li><a href="">Shop Checkout</a></li>
                                <li><a href="">Shop Single</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog<i class="bx bx-chevron-down"></i></a></li>-->
                        <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="others">
                    <i class='bx bx-search'></i>
                    <div onclick="open_close_cart()" class="icon">
                    <i class='bx bx-cart-download cart'></i>
                    </div>
                    <button class="addBtn"><i class='bx bx-plus-circle'></i>Add Listing</button>
                    <i class='bx bx-menu-alt-left' id="menuBtn"></i>
            </div>
        </nav>
    </header>


     <section class="checkout">
        <form id="form_contact" method="post" action="https://script.google.com/macros/s/AKfycbxJgEIAszL-cBrGuC3ikzvRcVwFGtQHgcX8mZ-QKAbV7bR4eHH5azfk03MIx6_-MDVS/exec">

            <input type="hidden" id="items" name="items">
            <input type="hidden" id="total_Price" name="Total Price">
            <input type="hidden" id="count_Items" name="Count Items">

            <div class="container">
                <div class="ordersummary">
                    <h1>Order Summary</h1>

                    <div class="items" id="checkout_items">



                    </div>



                    <div class="bottom_summary">
                        <div class="shop_table">
                            <p>Subtotal :</p>
                            <span class="subtotal_checkout">0.00MAD</span>
                        </div>


                        <div class="shop_table">
                            <p>Shipping :</p>
                            <span class="">0.00MAD</span>
                        </div>



                        <div class="shop_table">
                            <p>total :</p>
                            <span class="total_checkout">0.00MAD</span>
                        </div>


                        <div class="button_div">
                            <button type="submit">Place order</button>
                        </div>



                    </div>









                </div>

                <div class="input_info">
                  
                    <div class="address">
                        <h2>Delivery Address</h2>

                        <div class="inputs">
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter your email" name="Email" required>


                            <label for="">Name</label>
                            <input type="text" placeholder="enter your name" name="Name" required>

                            <label for="">Address</label>
                            <input type="text" placeholder="enter your address" name="Address" required>

                            <label for="">Phone</label>
                            <input type="number" placeholder="enter your phone" name="Phone" required>


                        </div>
                    </div>


                    <div class="coupon">
                        <h2>Coupon Code</h2>

                        <div class="inputs">
                            <label for="">Coupon code</label>
                            <input type="text" placeholder="enter your coupon code">
                        </div>

                        <div class="btn_coupon">
                            <button>Apply Coupon</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </section>
    


    



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
    
      <script src="https://unpkg.com/scrollreveal"></script>
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--script js-->
    <script src="script.js"></script>
</body>
</html>