<?php
$db = "'localhost','root','','project'";
session_start();

if(!isset($_SESSION['username'])){
    header('location:pages/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Mak || Home page</title>
    
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
                        
                          
                    
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="header-top-right">
                            <a href="index.html#">
                               
                                <i>Hi,&nbsp;<?php echo $_SESSION['username']; ?>&nbsp;(Admin)</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                            
                            <a href="index.html#">
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
                                        <li class="current-page-item">
                                            <a href="">Home</a>
                                        </li>
                                        <li>
                                            <a href="pages/about.php">about</a>
                                        </li>
                                        <li>
                                            <a href="pages/fixture.php">fixture</a>
                                            <ul>
                                                <li><a href="pages/fixture.php">Fixtures</a></li>
                                                <li><a href="pages/single-fixture.php">Fixtures details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">Player</a>
                                            <ul>
                                                <li><a href="pages/player.php">players</a></li>
                                                <li><a href="pages/player-details.php">player details</a></li>
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
                                            <a href="">all tickets</a>
                                            <ul>
                                                <li><a href="pages/tickets.php">tickets</a></li>
                                                <li><a href="pages/buy-tickets.php">tickets details</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li>
                                            <a href="">page</a>
                                            <ul>
                                                
                                                <li>
                                                    <a href="pages/faq.php">FAQs Page</a>
                                                </li>
                                                <li>
                                                    <a href="auth/logout.php">logout</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="pages/contact.php">contact</a>
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
    
    
    <!-- Slider Area Start -->
    <section class="kick-slider-area">
        <div class="kick-slide">
            <div class="kick-main-slide slide-item-1">
                <div class="kick-main-caption">
                    <div class="kick-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>University League semi finals</h2>
                                    <p>Sunday, 10th Sep, 2023, 16:00EAT</p>
                                    <a href="index.html#" class="kick-btn">
                                        buy tickets now
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kick-main-slide slide-item-2">
                <div class="kick-main-caption">
                    <div class="kick-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>University League semi finals</h2>
                                    <p>Sunday, 10th Sep, 2023, 16:00EAT</p>
                                    <a href="index.html#" class="kick-btn">
                                        buy tickets now
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    
    
    <!-- About Area Start -->
    <section class="kick-about-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="kick-about-right">
                        <div class="kick-section-heading">
                            <h2>about <span>Mak</span></h2>
                            <div class="title-line-one"></div>
                            <div class="title-line-two"></div>
                        </div>
                        <p>Mak sports system is regulated under the Makerere Sports department. It covers different sports
                            activities ranging from football, Rugbay, Basketball, among others. We also have a wide range of Sports facilities 
                            at the department of sports.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-grav"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>training capacity</h3>
                                        <p>The sports department has over three training facilities that support different sports.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>winning history</h3>
                                        <p>Through sports, we have been able to win various credits and awards the various competitions held.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>match history</h3>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>team member</h3>
                                        <p>We are a member of the games union under the Makerere Sports department.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kick-about-left">
                        <img src="assets/img/img-03.png" alt="about player" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    
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
                                        <a href="index.html#">kick dragon</a>
                                    </h3>
                                    <ul>
                                        <li><p>Roman Fenley</p><span>(15)</span></li>
                                        <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li>
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="index.html#"><img src="assets/img/team-4.png" alt="logo" /></a>
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
                                        <a href="index.html#"><img src="assets/img/team-2.png" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="index.html#">
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
                    <a href="index.html#" class="kick-btn">view all result</a>
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
                <div class="col-md-12">
                    <div class="upcoming-slider">
                        <div class="single-upcoming-match">
                            <h3>Upcoming Match</h3>
                            <p>10th sep<span>2018</span></p>
                            <div class="upcoming-match-box">
                                <h4>Laliga Semi Finals at city stadium</h4>
                                <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="index.html#">
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
                                                <a href="index.html#">
                                                    <img src="assets/img/team-3.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="index.html#" class="kick-btn">Buy tickets </a>
                                    <a href="index.html#" class="kick-btn">view more </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-upcoming-match">
                            <h3>Upcoming Match</h3>
                            <p>10th sep<span>2018</span></p>
                            <div class="upcoming-match-box">
                                <h4>Laliga Semi Finals at city stadium</h4>
                                <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="index.html#">
                                                    <img src="assets/img/team-4.png" alt="team image" />
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
                                                <a href="index.html#">
                                                    <img src="assets/img/team-2.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="index.html#" class="kick-btn">Buy tickets </a>
                                    <a href="index.html#" class="kick-btn">view more </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-upcoming-match">
                            <h3>Upcoming Match</h3>
                            <p>10th sep<span>2018</span></p>
                            <div class="upcoming-match-box">
                                <h4>Laliga Semi Finals at city stadium</h4>
                                <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="index.html#">
                                                    <img src="assets/img/team-4.png" alt="team image" />
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
                                                <a href="index.html#">
                                                    <img src="assets/img/team-2.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="index.html#" class="kick-btn">Buy tickets </a>
                                    <a href="index.html#" class="kick-btn">view more </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-upcoming-match">
                            <h3>Upcoming Match</h3>
                            <p>10th sep<span>2018</span></p>
                            <div class="upcoming-match-box">
                                <h4>Laliga Semi Finals at city stadium</h4>
                                <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="index.html#">
                                                    <img src="assets/img/team-3.png" alt="team image" />
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
                                                <a href="index.html#">
                                                    <img src="assets/img/team-2.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="index.html#" class="kick-btn">Buy tickets </a>
                                    <a href="index.html#" class="kick-btn">view more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Matches Area End -->
    
    
    <!-- Video Area Start -->
    
    <!-- Video Area End -->
    
    
    <!-- Top Player Area Start -->
    <section class="kick-top-player-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>top <span>player</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-player-slider">
                        <div class="single-top-player">
                            <img src="assets/img/player-1.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>09</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="index.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-top-player">
                            <img src="assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>22</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="index.html#">Lan Smith</a></h4>
                                    <p>Goal Kipper</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-top-player">
                            <img src="assets/img/player-3.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>13</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="index.html#">Fizz Mark</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-top-player">
                            <img src="assets/img/player-4.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>07</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="index.html#">Ican Ivanovich</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-top-player">
                            <img src="assets/img/player-2.jpg" alt="top player" />
                            <div class="player-info">
                                <div class="player-nmbr">
                                    <p>04</p>
                                </div>
                                <div class="player-name">
                                    <h4><a href="index.html#">Vicky raj</a></h4>
                                    <p>defender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Player Area End -->
    
    
    
    
    <!-- Latest Post Area Start -->
    <section class="kick-latest-post-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>latest <span>post</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-latest-post">
                        <a href="index.html#"><img src="assets/img/post-1.jpg" alt="post image" /></a>
                        <div class="single-post-text">
                            <h3><a href="index.html#">dipisicing elit sed do eiusmod tempor</a></h3>
                            <p class="post-date">11 Aug, 2018 / Jhon Doe</p>
                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                            <div class="post-text-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="admin-image">
                                            <img src="assets/img/admin.jpg" alt="admin" />
                                            <a href="index.html#">Tarin Smith</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="admin-image-right">
                                            <ul>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-eye"></i>
                                                    90
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-heart-o"></i>
                                                    228
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-comment-o"></i>
                                                        432
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-latest-post">
                        <a href="index.html#"><img src="assets/img/post-2.jpg" alt="post image" /></a>
                        <div class="single-post-text">
                            <h3><a href="index.html#">dipisicing elit sed do eiusmod tempor</a></h3>
                            <p class="post-date">11 Aug, 2018 / Jhon Doe</p>
                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                            <div class="post-text-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="admin-image">
                                            <img src="assets/img/admin.jpg" alt="admin" />
                                            <a href="index.html#">Michel Smith</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="admin-image-right">
                                            <ul>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-eye"></i>
                                                    90
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-heart-o"></i>
                                                    228
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-comment-o"></i>
                                                        432
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Post Area End -->
    
    
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
                                    <p><a href="index.html#">info@companyname.co</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="index.html#">+123-456-78990</a></p>
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
                                    <a href="pages/about.php">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="pages/player.php">
                                        <i class="fa fa-chevron-right"></i>
                                        team`
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-chevron-right"></i>
                                        terms
                                    </a>
                                </li>
                                <li>
                                    <a href="pages/faq.php">
                                        <i class="fa fa-chevron-right"></i>
                                        faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
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
                                    <a href="index.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post-2.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
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
                                    <a href="index.html#" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="twit"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                   <a href="index.html#" class="skype"><i class="fa fa-skype"></i></a>
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
                                Copyright &copy; 2017 <a href="index.html#">kick</a>
                                . Made with <i class="fa fa-heart"></i> from <span>Themescare</span> 
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2017 <a href="index.html#">kick</a>
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