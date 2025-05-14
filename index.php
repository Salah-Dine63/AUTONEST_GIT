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
    <link rel="logo icon" href="logo.png">

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
                    <span><i class='bx bxs-envelope'></i>AutoNest@gmail.com</span>
                    <span><i class='bx bxs-phone-call' ></i>+2 123 654 7890</span>
                    <span><i class='bx bxs-alarm' ></i>Sun Fri (08 AM 10 PM)</span>
                </div>

                <div class="col-2">
                    <a href="login.php"><i class='bx bx-arrow-to-right' ></i>Login</a>
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
                        <li><a href="index.php">Home</a></li>
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
                                
                                <li><a href="checkout.html">My orders</a></li>
                                <li><a href="#">My Account<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-three">
                                        <li><a href="login.php">Dashboard</a></li>
                                        <li><a href="login.PHP">My Profile</a></li>
                                        <li><a href="#">My Listing</a></li>
                                        <li><a href="#">Add Listing</a></li>
                                        <li><a href="#">My favorites</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a href="#">Setting</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Authentification<i class="bx bx-chevron-down chev"></i></a>
                                    <ul class="drop-down-four">
                                        <li><a href="login">Login</a></li>
                                        <li><a href="login.php">Register</a></li>
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
    <!--home section start
    <div class="home">
        <div class="swiper myHomer">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide slide-one">

                    <div class="col-1">
                        <h4>Welcome to AutoNest!</h4>
                        <h1>best way to find <br> your <span>dream</span> car</h1>
                        <div class="button">
                           <button type="submit" class="about"><i class="bx bx-right-arrow-alt"></i>About More</button>
                           <button type="submit" class="learn"><i class="bx bx-right-arrow-alt"></i>Learn More</button>
                        </div>
                    </div>

                    <div class="col-2" >
                        <img src="hero-1.png" alt="" id="FFFG">
                    </div>
                </div>

                <div class="swiper-slide slide slide-two" >

                    <div class="col-1">
                        <h4>Welcome to AutoNest!</h4>
                        <h1>best way to find <br> your <span>dream</span> car</h1>
                        <div class="button">
                           <button type="submit" class="about"><i class="bx bx-right-arrow-alt"></i>About More</button>
                           <button type="submit" class="learn"><i class="bx bx-right-arrow-alt"></i>Learn More</button>
                        </div>
                    </div>

                    <div class="col-2">
                        <img src="yellow-car-png-26-removebg-preview.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide slide-three">

                    <div class="col-1">
                        <h4>Welcome to AutoNest!</h4>
                        <h1>best way to find <br> your <span>dream</span> car</h1>
                        <div class="button">
                           <button type="submit" class="about"><i class="bx bx-right-arrow-alt"></i>About More</button>
                           <button type="submit" class="learn"><i class="bx bx-right-arrow-alt"></i>Learn More</button>
                        </div>
                    </div>

                    <div class="col-2">
                        <img src="hero-3.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
        </div>

    </div> --->

    <div class="header__container" id="home">
        <div class="header__image">
            <div class="image__background">
                <img src="./header.png" alt="header" />
            </div>
        </div>
        <div class="header__content">
            <h4>Welcome to AutoNest!</h4>
            <h1>best way to find <br> your <span>dream</span> car</h1>
          <!--<p class="section__description">
            Discover a seamless car rental experience with us. Choose from a

            range of premium vehicles to suit your style and needs, and hit the

            road with confidence. Quick, easy, and reliable - rent your ride
            today!
          </p>-->
        </div>
      </div>


<!--perfect section start-->
<div class="search">
    <div class="find">
        <h3>Let's Find Your Perfect Car</h3>
        <div class="row">
            <div class="find-item">
                <h4>Car condition</h4>
                <select name="" id="">
                    <option value="">All select</option>
                </select>
            </div>
            <div class="find-item">
                <h4>Brand Name</h4>
                <select name="" id="">
                    <option value="">All Brand</option>
                    <option value="">Mercedes</option>
                    <option value="">Ford</option>
                    <option value="">Volkswagen</option>
                    <option value="">Mazda</option>
                </select>
            </div>
            <div class="find-item">
                <h4>Car Model</h4>
                <select name="" id="">
                    <option value="">All Model</option>
                    <option value="">Volkswagen Golf 8</option>
                    <option value="">Ford ranger</option>
                    <option value="">Mazda CX-8</option>
                    <option value="">Mercedes-Benz classe A</option>
                </select>
            </div>
            <div class="find-item">
                <h4>All year</h4>
                <select name="" id="">
                    <option value="">2025</option>
                    <option value="">2025</option>
                    <option value="">2025</option>
                    <option value="">2023</option>
                    <option value="">2022</option>
                </select>
            </div>
            <div class="find-item">
                <h4>Choose Milieage</h4>
                <select name="" id="">
                    <option value="">All Milieage</option>
                    <option value="">200 Milies</option>
                    <option value="">100 Milies</option>
                    <option value="">300 Milies</option>
                    <option value="">400 Miles</option>
                </select>
            </div>
            <div class="find-item">
                <h4>Price range</h4>
                <select name="" id="">
                    <option value="">All Price</option>
                    <option value="">500 000MAD</option>
                    <option value="">400 000MAD</option>
                    <option value="">300 000MAD</option>
                    <option value="">200 000MAD</option>
                </select>
            </div>
            <div class="find-item">
                <h4>Body Type</h4>
                <select name="" id="">
                    <option value="">All Body Type</option>
                    <option value="">Compact SUV</option>
                    <option value="">Double Cap Pikup</option>
                    <option value="">Compact Hatchback</option>
                    <option value="">Hatchback</option>
                </select>
            </div>
            <div class="search-btn">
                <button><i class="bx bx-search"> Find Your Car</i></button>

            </div>
        </div>
    </div>
</div>

<!---market section start
<section class="market">
    <div class="col-3">
        <img class="one" src="./img-20250422T181147Z-001/img/market/01.png" alt="">
        <div class="service">
            <img class="two" src="./img-20250422T181147Z-001/img/market/2.JPG" alt="">
            <span class="text">30 years of <br> quality service</span>
        </div>
    </div>
    <div class="col-4">
        <h4><i class="bx bx-car"></i>About Us</h4>
        <h3>world largest <span>Car <br> Draler</span> Marketplace.</h3>
        <p>hhhhhh hhhhh hhhh hh hhhhhh hhhhhhhhh hhhh hhhhhhhhh hhhhh hhhhhhh hhhh
        hhhhhhhhh hhhhh hhhhh pppppppp ppp ii iii ii fffi hhhhhh bnbnbn ,kggb khfde. </p>
        <br>
        <p class="p1"><i class='bx bx-last-page' ></i>ddddd dfdfgh gyhui ghy azer.</p>
        <p class="p1"><i class='bx bx-last-page' ></i>ddddd dfdfgh gyhui ghy azer.</p>
        <p class="p1"><i class='bx bx-last-page' ></i>ddddd dfdfgh gyhui ghy azer.</p>
        <button>Discover More <i class="bx bx-right-arrow-alt"></i></button>
    </div>
</section>-->

<!--counter section start-->
<div class="counter">
    <div class="container">
        <img src="./img-20250422T181147Z-001/img/icons/1.JPG" alt="">
        <span class="num" data-value="500">0000</span>
        <span class="text"><i class="bx bx-plus"></i>Avilable Cars</span>
    </div>
    <div class="container">
        <img src="./img-20250422T181147Z-001/img/icons/2.JPG" alt="">
        <span class="num" data-value="900">0000</span>
        <span class="text"><i class="bx bx-plus"></i>Happy Clients</span>
    </div>
    <div class="container">
        <img src="./img-20250422T181147Z-001/img/icons/3.JPG" alt="">
        <span class="num" data-value="1500">0000</span>
        <span class="text"><i class="bx bx-plus"></i>Team Workers</span>
    </div>
    <div class="container">
        <img src="./img-20250422T181147Z-001/img/icons/4.JPG" alt="">
        <span class="num" data-value="30">0000</span>
        <span class="text"><i class="bx bx-plus"></i>Years Of Experience</span>
    </div>
</div>
<!--arrivals section start-->
<section class="arrivals">
    <h4><i class='bx bx-car'></i> new arrivals</h4>
    <h1>let's check latest <span>cars</span></h1>
    <div class="arrow">
        <div class="arr-col">
            <div class="image">
                <img src="./Mercedes/1.jpg" alt="">
            </div>
            <h5>Mercedes Benz classe A</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0IM</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Diesel</span>
            </div>
            <div class="price">
                <p>486.326 MAD</p>
                <a href="mercedes classe A.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="./Golf/1.jpg" alt="">
            </div>
            <h5>Golf 8 face-lift</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0IM</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Diesel</span>
            </div>
            <div class="price">
                <p>340.000 MAD</p>
                <a href="golf 8 .php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="./Ford/1.jpg" alt="">
            </div>
            <h5>Ford Next-Gen Ranger XLT</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0IM</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Diesel</span>
            </div>
            <div class="price">
                <p>510000 MAD</p>
                <a href="ford.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="./Mazda/5.jpg" alt="">
            </div>
            <h5>Mazda CX-3</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0MI</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Gasoline</span>
            </div>
            <div class="price">
                <p>330.000 MAD</p>
                <a href="mazda.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="mercedes S-class/1.jpg" alt="">
            </div>
            <h5>Mercedes Benz S-Class</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>10.15km</span>
                <span><i class="bx bx-car"></i> Model 2024</span>
                <span><i class="bx bx-target-lock"></i>Hybrid</span>
            </div>
            <div class="price">
                <p>1,630,000 MAD</p>
                <a href="merc_S_class.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="kia/1.jpg" alt="">
            </div>
            <h5>Kia Sportage X-Line</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0km</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Hybrid</span>
            </div>
            <div class="price">
                <p>340.000 MAD</p>
                <a href="kia.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="tesla/1.jpg" alt="">
            </div>
            <h5>Tesla S 100D</h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0km</span>
                <span><i class="bx bx-car"></i> Model 2017</span>
                <span><i class="bx bx-target-lock"></i>Mybrid</span>
            </div>
            <div class="price">
                <p>280.000 MAD</p>
                <a href="tesla.php"><button>Details</button></a>
            </div>
        </div>

        <div class="arr-col">
            <div class="image">
                <img src="jeep/1.jpg" alt="">
            </div>
            <h5>Jeep grand cherokee </h5>
            <div class="rating">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="review">
                    <span>5.0(5.8 5k Review)</span>
                </div>
            </div>
            <div class="features">
                <span><i class="bx bx-error-circle"></i>Automatic</span>
                <span><i class="bx bx-label"></i>0km</span>
                <span><i class="bx bx-car"></i> Model 2025</span>
                <span><i class="bx bx-target-lock"></i>Hybrid</span>
            </div>
            <div class="price">
                <p>670.000 MAD</p>
                <a href="jeep.php"><button>Details</button></a>
            </div>
        </div>
    </div>
    <button class="load">Load More <i class="bx bx-sync"></i></button>
</section>

<!--quality section-->
<section class="quality">
    <div class="qul-row">
        <div class="col-1">
            <div class="qul-one">
                <div class="number">
                  <img src="./img-20250422T181147Z-001/img/quality/1.JPG" alt="">
                  <h2>01</h2>
                </div>
                <h5>best quality cars</h5>
                <p></p>
            </div>
            <div class="qul-one">
                <div class="number">
                  <img src="./img-20250422T181147Z-001/img/quality/2.JPG" alt="">
                  <h2>02</h2>
                </div>
                <h5>Certified Mechanics</h5>
                <p></p>
            </div>
            
        </div>
        <div class="col-1 center">
            <div class="qul-one">
                <div class="number">
                  <img src="./img-20250422T181147Z-001/img/quality/3.JPG" alt="">
                  <h2>03</h2>
                </div>
                <h5>Popular Brands</h5>
                <p></p>
            </div>
            <div class="qul-one">
                <div class="number">
                  <img src="./img-20250422T181147Z-001/img/quality/4.JPG" alt="">
                  <h2>04</h2>
                </div>
                <h5>Reasonable Price</h5>
                <p></p>
            </div>

        </div>
        <div class="col-2">
            <h4><i class="bx bx-car"></i>Why choose us</h4>
            <h3>we are dedicatred <span>to <br> provide</span> quality service</h3>

             <img src="./img-20250422T181147Z-001/img/quality/01 - car.png" alt="">
        </div>
    </div>
</section>



<!--what peaople say -->
<section class="section__container client__container" id="client">
    <h2 class="section__header">What people say about us?</h2>
    <p class="section__description">
      Discover why our customers choose us with confidence! Read real reviews and
      testimonials to see how we deliver exceptional service.
    </p>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__details">
              <img src="client-1.jpg" alt="client" />
              <div>
                <h4>Sarah Johnson</h4>
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
            <p>
                I was very happy with the service I received,
                the staff helped me find the right car, all
                was simple, fast, and professional.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__details">
              <img src="client-2.jpg" alt="client" />
              <div>
                <h4>Michael Adams</h4>
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
            <p>
                Great experience from start to finish,
                they explained everything clearly and honestly,
                I’m very satisfied with my purchase.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__details">
              <img src="client-3.jpg" alt="client" />
              <div>
                <h4>Emily Martinez</h4>
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
            <p>
                Friendly team and high-quality cars,
                they made the whole process smooth ,
                highly recommended to anyone buying a car.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__details">
              <img src="client-4.jpg" alt="client" />
              <div>
                <h4>Jason Lee</h4>
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
            <p>
                Excellent customer service and fast delivery,
                the car arrived in perfect condition,
                they truly care about their customers.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__details">
              <img src="client-5.jpg" alt="client" />
              <div>
                <h4>David Thompson</h4>
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
            <p>
                Very professional and honest dealership, they
                 answered all my questions patiently.
                I’ll definitely buy from them again.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--subscribe-->
  <section class="subscribe__container">
    <div class="subscribe__content">
      <h2 class="section-header">
        Subscribe for the latest car
      </h2>
      <p class="section__description">
        Stay in the know! Subscribe to receive the latest car rental deals,
        exclusive offers, and updates right to your inbox. Don't miss out on
        special promotions and the newest additions to our fleet.
      </p>
      <form action="index.php">
        <input type="text" placeholder="Your Email" />
        <button class="btn">Subscribe</button>
      </form>
    </div>
    <div class="subscribe__image">
      <img src="deals-7.png" alt="subscribe" />
    </div>
  </section>

  <!--footer-->
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
      <p>&copy; copyright 2025 <span>AutoNest</span> All Right Reserves.</p>
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