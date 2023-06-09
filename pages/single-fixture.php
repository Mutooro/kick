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
    <title>Mak || Fixture</title>
    
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
                            <!-- <a href="single-fixture.html#">
                                <i class="fa fa-shopping-cart"></i>
                                cart
                            </a> -->
                            <a href="single-fixture.html#">
                                <i class="fa fa-user"></i>
                                My Account
                            </a>
                            <!-- <a href="login.php">
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
                                        <li>
                                            <a href="single-fixture.html#">page</a>
                                            <ul>
                                                <!-- <li>
                                                    <a href="404.html">404 page</a>
                                                </li> -->
                                                <li>
                                                    <a href="faq.php">FAQs Page</a>
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
                        <h2>fixture details</h2>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>fixture details</li>
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
                                                <a href="single-fixture.html#">
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
                                                <a href="single-fixture.html#">
                                                    <img src="assets/img/team-3.png" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="single-fixture.html#" class="kick-btn">Buy tickets </a>
                                    <a href="single-fixture.html#" class="kick-btn">share</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-fixture-left-widght">
                            <h3>dipisicing elit sed do eiusmod tempor indunt</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quiata non numquam aliquam quaerat voluptatem.</p>
                        </div>
                        <div class="single-fixture-left-widght">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Match preview</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Venue </td>
                                        <td>: Spain, ABC Stadium</td>
                                    </tr>
                                    <tr>
                                        <td>Squad Number</td>
                                        <td>: 32</td>
                                    </tr>
                                    <tr>
                                        <td>Commentry</td>
                                        <td>: Jhon Tailor</td>
                                    </tr>
                                    <tr>
                                        <td>Reffery</td>
                                        <td>: Michel Smith</td>
                                    </tr>
                                    <tr>
                                        <td>Sponsor</td>
                                        <td>: ABC club</td>
                                    </tr>
                                    <tr>
                                        <td>Compatition</td>
                                        <td>: West Bay Playoffs 2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="single-fixture-left-widght">
                            <blockquote>
                                <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence</p>
                            </blockquote>
                        </div>
                        <div class="single-fixture-left-widght">
                            <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a multos senseri</p>
                            <ul>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent surface 
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent commentary
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        Refreshments are available
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                         surface complimented
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent complimented
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent surface
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent surface 
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        excellent commentary
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-check"></i>
                                        Refreshments are available
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-box-share">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box-share-left">
                                        <h3>Laliga Semi Finals</h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box-share-right">
                                        <h3>share :</h3>
                                        <a href="single-fixture.html#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="single-fixture.html#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="single-fixture.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="single-fixture.html#" class="linked"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kick-comment-list">
                            <div class="comment-group-title">
                                <h2>3 Comments</h2>
                            </div>
                            <div class="single-comment-item">
                                <div class="single-comment-box">
                                    <div class="main-comment">
                                        <div class="author-image">
                                            <img src="assets/img/author-7.jpg" alt="author" />
                                        </div>
                                        <div class="comment-text">
                                            <div class="comment-info">
                                                <h4>david kamal</h4>
                                                <p>12 february 2015 At 11:30 pm</p>
                                            </div>
                                            <div class="comment-text-inner">
                                                <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                            </div>
                                            <a href="single-fixture.html#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-box reply-comment">
                                    <div class="main-comment">
                                        <div class="author-image">
                                            <img src="assets/img/author-8.jpg" alt="author" />
                                        </div>
                                        <div class="comment-text">
                                            <div class="comment-info">
                                                <h4>Danial Martin</h4>
                                                <p>12 february 2015 At 11:30 pm</p>
                                            </div>
                                            <div class="comment-text-inner">
                                                <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                            </div>
                                            <a href="single-fixture.html#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-box">
                                    <div class="main-comment">
                                        <div class="author-image">
                                            <img src="assets/img/author-6.jpg" alt="author" />
                                        </div>
                                        <div class="comment-text">
                                            <div class="comment-info">
                                                <h4>sumaiya mim</h4>
                                                <p>12 february 2015 At 11:30 pm</p>
                                            </div>
                                            <div class="comment-text-inner">
                                                <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                            </div>
                                            <a href="single-fixture.html#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form-template">
                            <div class="comment-group-title">
                                <h2>Leave a Reply</h2>
                                <p>You must sign-in to make or comment a post</p>
                            </div>
                            <form>
                                <input class="ns-com-name" name="name" placeholder="Name" type="text">
                                <input class="ns-com-name" name="email" placeholder="Email" type="email">
                                <textarea class="comment" placeholder="Comment..." name="comment"></textarea>
                                <button type="submit" >
                                    Post comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-fixture-page-right margin-top">
                        <div class="single-fixture-right-widget">
                            <!-- <form>
                                <input type="search" placeholder="keywords..." >
                                <button type="submit" >
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="single-fixture-right-widget">
                            <h3>Categories</h3>
                            <ul class="blog-catagory">
                                <li><a href="single-fixture.html#">business market<span>(29)</span></a></li>
                                <li><a href="single-fixture.html#">Financial Services<span>(12)</span></a></li>
                                <li><a href="single-fixture.html#">Consumer Products<span>(22)</span></a></li>
                                <li><a href="single-fixture.html#">Telecommunications<span>(11)</span></a></li>
                                <li><a href="single-fixture.html#">Rebuild Services<span>(12)</span></a></li>
                                <li><a href="single-fixture.html#">Electrical System<span>(19)</span></a></li>
                                <li><a href="single-fixture.html#">Financial Services<span>(17)</span></a></li>
                            </ul>
                        </div> -->
                        <div class="single-fixture-right-widget">
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
                        <div class="single-fixture-right-widget">
                            <h3>best moment</h3>
                            <div class="moment-slider">
                                <div class="single-moment">
                                    <img src="assets/img/win-m.jpg" alt="best moment" />
                                </div>
                                <div class="single-moment">
                                    <img src="assets/img/win-m2.jpg" alt="best moment" />
                                </div>
                            </div>
                        </div>
                        <div class="single-fixture-right-widget">
                            <h3>gallery</h3>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-1.jpg" alt="Gallery" />
                            </a>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-2.jpg" alt="Gallery" />
                            </a>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-3.jpg" alt="Gallery" />
                            </a>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-2.jpg" alt="Gallery" />
                            </a>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-3.jpg" alt="Gallery" />
                            </a>
                            <a href="single-fixture.html#">
                                <img src="assets/img/widgetgallery-1.jpg" alt="Gallery" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fixture Page Next Match End -->
    
    
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
                                    <p><a href="single-fixture.html#">info@companyname.co</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="single-fixture.html#">+123-456-78990</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Usefull link</h3>
                            <ul class="single-footer-link">
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        team
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        terms
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <i class="fa fa-chevron-right"></i>
                                        faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
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
                                    <a href="single-fixture.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
                                        <div class="footer-post-img">
                                            <img src="assets/img/footer-post-2.jpg" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                            Lorem ipsum dolor amet, conse-ctetur adipiscing.
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#">
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
                                    <a href="single-fixture.html#" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#" class="twit"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="single-fixture.html#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                   <a href="single-fixture.html#" class="skype"><i class="fa fa-skype"></i></a>
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
                                Copyright &copy; 2017 <a href="single-fixture.html#">kick</a>
                                . Made with <i class="fa fa-heart"></i> from <span>Themescare</span> 
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2017 <a href="single-fixture.html#">kick</a>
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