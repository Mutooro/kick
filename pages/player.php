<?php
$db = "'localhost','root','','project'";
session_start();

if(!isset($_SESSION['username'])){
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Kick || Football Club HTML Template</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicons/apple-touch-icon.png">
    
    <link rel="icon" type="../image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    
    <link rel="icon" type="../image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    
    <link rel="manifest" href="../assets/favicons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    
    <!-- SlickNav CSS -->
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    
    <!-- Scroll CSS -->
    <link rel="stylesheet" href="../assets/css/perfect-scrollbar.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">

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
                           
                        
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="header-top-right">
                           
                            <a href="player.php#">
                                <i class="fa fa-user"></i>
                                My Account
                            </a>
                          
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
                                            <a href="../index.php">Home</a>
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
                                        <li class="current-page-item">
                                            <a href="player.php">Player</a>
                                            <ul>
                                                <li><a href="player.php">players</a></li>
                                                <li><a href="player-details.php">player details</a></li>
                                            </ul>
                                        </li>
                                      
                                    </ul>
                                </nav>
                            </div>
                            <div class="kick-site-logo">
                                <div class="responsive-menu-2"></div>
                                <a href="../index.php" class="kick-site-logo">
                                    <img src="../assets/img/logo.png" alt="site logo" />
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
                                       
                                        <li>
                                            <a href="player.php#">page</a>
                                            <ul>
                                               
                                                <li>
                                                    <a href="faq.php">FAQs Page</a>
                                                </li>
                                                <li>
                                                    <a href="../auth/logout.php">logout</a>
                                                </li>
                                               
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
                        <h2>our players</h2>
                        <ul>
                            <li><a href="player.php#"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>player</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Player Page Section Start -->
    <section class="kick-player-page">
        <div class="kick-player-section section_t_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kick-section-heading">
                            <h2>our <span>team forwards</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-4.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-player-section section_t_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kick-section-heading">
                            <h2>our <span>team midfielders</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-player-section section_t_100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kick-section-heading">
                            <h2>our <span>goal keeper</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="single-top-player center">
                            <img src="../assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-player-section section_t_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kick-section-heading">
                            <h2>our <span>team defenders</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-4.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-player-section section_t_100 section_b_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kick-section-heading">
                            <h2>our <span>faculty staff</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-4.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-top-player">
                            <img src="../assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="player.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Page Section Start -->
    
    
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
                                    <p> 616 Street, Old Trafford, New South Wales London , UK </p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <p><a href="player.html#">info@companyname.co</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="player.html#">+123-456-78990</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Usefull link</h3>
                            <ul class="single-footer-link">
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        team
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        terms
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        privecy policy
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
                                    <a href="player.html#">
                                        <div class="footer-post-img">
                                            <img src="../assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <div class="footer-post-img">
                                            <img src="../assets/img/footer-post-2.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="player.html#">
                                        <div class="footer-post-img">
                                            <img src="../assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
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
                                Sed ut perspiciatis unde omnis iste natus
                                error sit Sed ut perspiciatis unde omnis
                            </p>
                            <ul class="single-footer-social">
                                <li>
                                    <a href="player.html#" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="player.html#" class="twit"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="player.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="player.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                   <a href="player.html#" class="skype"><i class="fa fa-skype"></i></a>
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
                                Copyright &copy; 2017 <a href="player.html#">kick</a>
                                . Made with <i class="fa fa-heart"></i> from <span>Themescare</span> 
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2017 <a href="player.html#">kick</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- jQuery -->
    <script src="../assets/js/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    
    <!-- SlickNav JS -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    
    <!-- Scrollbar JS -->
    <script src="../assets/js/jquery-perfect-scrollbar.min.js"></script>
    
    <!-- Countdown JS -->
    <script src="../assets/js/jquery.countdown.min.js"></script>
    
    <!-- Waypoints JS -->
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    
    <!-- Progressbar JS -->
    <script src="../assets/js/progressbar.min.js"></script>
    
    <!-- Isotop JS -->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    
    <script src="../assets/js/custom-isotop.js"></script>
    
    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
    
</body>
</html>