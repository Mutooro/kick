<?php
$db = "'localhost','root','','project'";
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Mak || Fixtures</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicons/apple-touch-icon.png">
    
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    
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
                           
                            <a href="fixture.html#">
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
                                        <li class="current-page-item">
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
                                      
                                    </ul>
                                </nav>
                            </div>
                            <div class="kick-site-logo">
                                <div class="responsive-menu-2"></div>
                                <a href="index.php" class="kick-site-logo">
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
                                            <a href="fixture.html#">page</a>
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
                        <h2>fixture</h2>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>fixture</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Fixture Page Next Match Start -->
    <section class="kick-fixture-page-next-match section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="fixture-page-next-match-left">
                        <div class="single-upcoming-match">
                            <div id="coming-soon"></div>
                            <h2>next match started in</h2>
                            <div class="upcoming-match-box">
                                <h4>Laliga Semi Finals at city stadium</h4>
                                <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="fixture.html#">
                                                    <img src="../assets/img/team-2.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="team-head-vs">
                                                <span>VS</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="fixture.html#">
                                                    <img src="../assets/img/team-3.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                    <a href="fixture.html#" class="kick-btn">view more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fixture-page-next-match-right">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>team</th>
                                    <th>w</th>
                                    <th>d</th>
                                    <th>l</th>
                                    <th>pts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Soccer</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Madrid</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>City Club</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Soccer</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Madrid</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fixture Page Next Match End -->
    
    
    <!-- Last Match Result Area Start -->
    <section class="kick-last-match-result section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>last match <span>result</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="last-match-box">
                    <div class="col-md-5">
                        <div class="last-match-result-one last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">win</h3>
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="fixture.html#">kick dragon</a>
                                    </h3>
                                    <ul>
                                        <li><p>Roman Fenley</p><span>(15)</span></li>
                                        <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li>
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="fixture.html#"><img src="assets/img/team-4.png" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="last-match-score">
                            <h2>3 <span class="devider">/</span> <span class="lose-point">2</span> </h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">lose</h3>
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                        <a href="fixture.html#"><img src="assets/img/team-2.png" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="fixture.html#">
                                            kick ninja
                                        </a>
                                    </h3>
                                    <ul>
                                        <li><p>Roman Fenley</p><span>(15)</span></li>
                                        <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="view-all-result">
                    <a href="fixture.html#" class="kick-btn">view all result</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Match Result Area End -->
    
    
    <!-- Upcoming Matches Area Start -->
    <section class="kick-upcoming-mathces-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>upcoming <span>matches</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-3.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-4.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-4.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-4.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-4.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-3.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="team-head-vs">
                                            <span>VS</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="fixture.html#">
                                                <img src="../assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="fixture.html#" class="kick-btn">Buy tickets </a>
                                <a href="fixture.html#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-box">
                        <ul class="pagination">
                            <li><a href="fixture.html#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="fixture.html#">1</a></li>
                            <li><a href="fixture.html#">2</a></li>
                            <li class="active"><a href="fixture.html#">3</a></li>
                            <li><a href="fixture.html#">4</a></li>
                            <li><a href="fixture.html#">5</a></li>
                            <li><a href="fixture.html#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Matches Area End -->
    
    
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
                                    <p><a href="fixture.html#">info@companyname.co</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="fixture.html#">+123-456-78990</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Usefull link</h3>
                            <ul class="single-footer-link">
                                <li>
                                    <a href="fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        team
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        terms
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
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
                                    <a href="fixture.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post-2.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="fixture.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
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
                                    <a href="fixture.html#" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="fixture.html#" class="twit"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="fixture.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="fixture.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                   <a href="fixture.html#" class="skype"><i class="fa fa-skype"></i></a>
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
                                Copyright &copy; 2017 <a href="fixture.html#">kick</a>
                                . Made with <i class="fa fa-heart"></i> from <span>Themescare</span> 
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2017 <a href="fixture.html#">kick</a>
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