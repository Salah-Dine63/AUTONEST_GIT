
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
     <!--swiper css link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--- boxicon cdn link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

   <!-- <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />-->

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
                                        <li><a href="login.php">Dashboard</a></li>
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
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
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
<!--Inventory slide-->
<section class="slider">
    <div class="slider_one">
        <div class="col-1">
            <h6>brand new</h6>
            <h5>Jeep Grand Cherokee</h5>
            <div class="date">
                <span><i class="bx bx-alarm"></i> Listed On Set, Oct 02 2025</span>
                <span><i class="bx bx-show"></i> View: 850</span>
            </div>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color:#fff;" class="swiper myInvent2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./jeep/1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./Mercedes/2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./Mercedes/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./Mercedes/4.jpg" alt="">
                    </div> 
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="swiper myInvent1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./jeep/2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./jeep/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./jeep/4.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./jeep/5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1">
            <h5>Key information</h5>
            <div class="key-row">
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>body type</span>
                        <p>Hatchback</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>Condition</span>
                        <p>New</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-stopwatch"></i>
                    <div class="name">
                        <span>Mileage</span>
                        <p>0(MI)</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-brightness"></i>
                    <div class="name">
                        <span>Transmission</span>
                        <p>Automatic</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>year</span>
                        <p>2025</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-sidebar"></i>
                    <div class="name">
                        <span>Fuel Type</span>
                        <p>Diesel</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>Color</span>
                        <p>white</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>Doors</span>
                        <p>5 Doors</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>Cylinder</span>
                        <p>4</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>Engine Size</span>
                        <p>1,950 (cc)</p>
                    </div>
                </div>
                <div class="key">
                    <i class="bx bx-car"></i>
                    <div class="name">
                        <span>VIN</span>
                        <p>MBCLA200DAMG2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1">
            <h5>Description</h5>
            <p class="dec">The Jeep Grand Cherokee is a powerful and refined SUV that offers a perfect mix of off-road 
                capability and luxury. With its bold design, advanced technology, and comfortable interior, it’s built 
                for both rugged terrain and everyday driving.</p>
            <p class="dec"></p>

            <h5>Car Features</h5>
            <div class="features">
                <p class="fe"><i class="bx bx-check-shield"></i>MBUX system with voice control.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>10.25-inch touchscreen.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>AMG Line 18-inch wheels.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>LED headlights and taillights.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>Dual-zone climate control.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>Active Brake Assist.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>Wireless charging with CarPlay/Android Auto.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>Dynamic Select driving modes.</p>
                <p class="fe"><i class="bx bx-check-shield"></i>Keyless-Go entry and start.</p>
            </div>
        </div>
    </div>
    <div class="slider_two">
        <div class="col-2">
            <h3><span>>Price:</span> 670,000 MAD</h3>
        </div>
        <a href="commande.php?id=6"><button class="load">Shop Now </button></a>
        <div class="col-2">
            <h6>Contact Details</h6>
            <input type="text" placeholder="Enter Name">
            <input type="text" placeholder="Enter Email">
            <textarea cols="30" rows="6" placeholder="Write Message"></textarea>
            <button>Send Now <i class="bx bx-right-arrow-alt"></i></button>
        </div>
    </div>
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
    
    
      
    
     <!-- <script src="https://unpkg.com/scrollreveal"></script>-->
    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--script js-->
    <script src="script.js"></script>

</body>
</html>