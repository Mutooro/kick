<!-- <script>
    var message = alert('Invalid Login');
</script> -->
<?php
session_start();

//connect to db

include 'db/auth.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    //get the submitted form data

    $username = $_POST['username'];
    $password = $_POST['password'];

    //getting user from the database

    $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    //verify password
    if(password_verify($password,$user['password'])){
        //log the user in
        $_SESSION['username'] = $user['username'];
        header('location:index.php');
        //exit();

    }else{
        //display an error
        echo '<script> alert(message)</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Mak || Login</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-touch-icon.png">
    
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    
    <link rel="manifest" href="assets/favicons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- SlickNav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- Scroll CSS -->
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

    
    <!-- Header Area Start -->
    <section class="kick-header-area">
        <div class="header-top-area">
            <div class="header-top-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="header-top-left">
                            <div class="dropdown">
                                <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur" data-toggle="dropdown" aria-haspopup="true">
                                USD
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                                    <li>USD</li>
                                    <li>EURO</li>
                                    <li>BDT</li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                                English
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                    <li>English</li>
                                    <li>French</li>
                                    <li>Arabic</li>
                                    <li>Chinese</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="header-top-right">
                            <!-- <a href="login.html#">
                                <i class="fa fa-shopping-cart"></i>
                                cart
                            </a> -->
                            <a href="login.php#">
                                <i class="fa fa-user"></i>
                                My Account
                            </a>
                            <!-- <a href="login.php#">
                                <i class="fa fa-sign-in"></i>
                                login
                            </a>
                            <a href="registration.php">
                                <i class="fa fa-user-plus"></i>
                                register
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mainmenu-area">
            <div class="container">
                <div class="kick-desktop-menu">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu-left pull-left">
                                <nav>
                                    <ul id="navigation_menu">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php">about</a>
                                        </li>
                                        <li>
                                            <a href="fixture.php">fixture</a>
                                            <ul>
                                                <li><a href="fixture.php">Fixtures</a></li>
                                                <li><a href="single-fixture.php">Fixtures details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="player.php">Player</a>
                                            <ul>
                                                <li><a href="player.php">players</a></li>
                                                <li><a href="player-details.php">player details</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li>
                                            <a href="gallery.html">gallery</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="kick-site-logo">
                                <div class="responsive-menu-2"></div>
                                <a href="index.html" class="kick-site-logo">
                                    <img src="assets/img/logo.png" alt="site logo" />
                                </a>
                                <div class="responsive-menu-1"></div>
                            </div>
                            <div class="mainmenu-left second-menu">
                                <nav>
                                    <ul id="navigation_menu_2">
                                        <li>
                                            <a href="tickets.php">all tickets</a>
                                            <ul>
                                                <li><a href="tickets.php">tickets</a></li>
                                                <li><a href="buy-tickets.php">tickets details</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li>
                                            <a href="shop.html">shop</a>
                                            <ul>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="single-shop.html">single shop</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout page</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="blog-grid.html">blog</a>
                                            <ul>
                                                <li><a href="blog-grid.html">blog grid</a></li>
                                                <li><a href="blog-left.html">blog left sidebar</a></li>
                                                <li><a href="blog-right.html">blog right sidebar</a></li>
                                                <li><a href="single-blog.html">single blog</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="current-page-item">
                                            <a href="login.html#">page</a>
                                            <ul>
                                                <!-- <li>
                                                    <a href="404.html">404 page</a>
                                                </li> -->
                                                <li>
                                                    <a href="faq.html">FAQs Page</a>
                                                </li>
                                                <li>
                                                    <a href="auth/logout.php">logout</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="registration.php">registration
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Area End -->
    
    
    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>Login page</h2>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Login Area Start -->
    <section class="kick-login-page-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-page-box">
                        <div class="login-page-heading">
                            <i class="fa fa-key"></i>
                            <h3>sign in</h3>
                        </div>
                        <form method="post" autocompletion="off">
                            <div class="account-form-group">
                                <input type="text" placeholder="Username or Email" name="username" >
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="account-form-group">
                                <input type="password" placeholder="Password" name="password" >
                                <i class="fa fa-lock"></i>
                            </div>
                            <p class="forgot">
                                <a href="login.html#">Forgot username?</a>
                            </p>
                            <p>
                                <label>
                                    <input name="remember" type="checkbox">
                                    Remember Me
                                </label>
                            </p>
                            <p>
                                <button type="submit" >Login</button>
                            </p>
                        </form>
                        <div class="login-sign-up">
                            <a href="registration.php">Do you need an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End -->
    
    
    <!-- Footer Area Start -->
    <footer class="kick-footer-area">
        <div class="kick-top-footer-area section_50">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>about <span>kick</span></h3>
                            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ante at nunc pretium.</p>
                            <ul class="single-footer-address">
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p> Pool road, Makerere University, UG</p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <p><a href="mailto:info@maksports.com">info@maksports.com</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="">+256-707-064-452</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Usefull link</h3>
                            <ul class="single-footer-link">
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-chevron-right"></i>
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        team
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        terms
                                    </a>
                                </li>
                                <li>
                                    <a href="faqs.html">
                                        <i class="fa fa-chevron-right"></i>
                                        faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        privacy policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>recent post</h3>
                            <ul class="single-footer-post">
                                <li>
                                    <a href="login.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                        Impis wins university league championship.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post-2.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                        Impis wins university league championship.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                        Impis wins university league championship.
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Connect with us</h3>
                            <p>Follow us to stay in the loop on what’s
                                trending and new feeds.
                            </p>
                            <ul class="single-footer-social">
                                <li>
                                    <a href="login.html#" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="login.html#" class="twit"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="login.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="login.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                   <a href="login.html#" class="skype"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-footer-bottom section_15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p class="desktop">
                                Copyright &copy; 2023 <a href="index.php">Mak</a>
                                . Made with <i class="fa fa-heart"></i> from <span>Boosteds</span> 
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2023 <a href="index.php">Mak</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <!-- SlickNav JS -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- Scrollbar JS -->
    <script src="assets/js/jquery-perfect-scrollbar.min.js"></script>
    
    <!-- Countdown JS -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    
    <!-- Waypoints JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    
    <!-- Progressbar JS -->
    <script src="assets/js/progressbar.min.js"></script>
    
    <!-- Isotop JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <script src="assets/js/custom-isotop.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>