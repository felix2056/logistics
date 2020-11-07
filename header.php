<?php


//$row = $db->get("website","*",["websiteID" => 11]);

$row = [
    "logo" => "/images/logo.png",
    "title" => "Logistics",
    "service1" => "Dummy Service One Text",
    "service2" => "Dummy Service Two Text",
    "service3" => "Dummy Service Three Text",
    "service4" => "Dummy Service Four Text",
    "service5" => "Dummy Service Five Text",
    "service6" => "Dummy Service Six Text",
    "aboutus" => "Logistic is a global supplier of transport and logistics solutions. We have offices in more than 50 countries and an international network of partners and agents, making us a truly global player that offers services worldwide.",
    "aboutus2" => "Mixtape taxidermy plaid crucifix, Cosby sweater occupy cold-pressed Portland pop-up lo-fi PBR&B kale chips readymade. Flexitarian bitters Shoreditch literally paleo. Vice letterpress Bushwick direct trade fingerstache tattooed. Stumptown flannel mlkshk wayfarers forage, plaid VHS drinking vinegar quinoa YOLO.",
    "address" => "123 Second Street Fifth Avenue, Manhattan, New York",
    "email" => "support@logistics.com",
    "number" => "+449839272383",
    "slider1" => "/images/slider1.jpg",
    "slider2" => "/images/slider2.jpg",
    "slider1_title" => "This is slider one text. Lorem ipsum",
    "slider2_title" => "This is slider two text. Lorem ipsum",
    "myinfo" => "This is my info text. Loren Ipsum"
];

$logo          = $row["logo"];
$title         = $row["title"];
$service1      = $row["service1"];
$service2      = $row["service2"];
$service3      = $row["service3"];
$service4      = $row["service4"];
$service5      = $row["service5"];
$service6      = $row["service6"];
$aboutus       = $row["aboutus"];
$aboutus2      = $row["aboutus2"];
$address       = $row["address"];
$email         = $row["email"];
$number        = $row["number"];
$slider1       = $row["slider1"];
$slider2       = $row["slider2"];
$slider1_title = $row["slider1_title"];
$slider2_title = $row["slider2_title"];
$myinfo        = $row["myinfo"];
?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransitions">

<head>
    <title><?=$title;?></title>
    <meta name="description" content="Trucking is transportation and Logistics website template">
    <meta name="author" content="pixel-industry">
    <meta name="keywords"
        content="transportation, logistics, transportation template, logistics template, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.css"><!-- bootstrap grid -->
    <link rel="stylesheet" href="/masterslider/style/masterslider.css"><!-- Master slider css -->
    <link rel="stylesheet" href="/masterslider/skins/default/style.css"><!-- Master slider default skin -->
    <link rel="stylesheet" href="/css/animate.css"><!-- animations -->
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css"><!-- Client carousel -->
    <link rel="stylesheet" href="/css/style.css"><!-- template styles -->
    <link rel="stylesheet" href="/css/color-default.css"><!-- template main color -->
    <link rel="stylesheet" href="/css/retina.css"><!-- retina ready styles -->
    <link rel="stylesheet" href="/css/responsive.css"><!-- responsive styles -->

    <!-- Google Web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600"
        rel="stylesheet" type="text/css">

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"><!-- Fontawesome icons css -->
</head>

<body style="position: relative;">
    <div class="header-wrapper dark" style="top: 0px;">
        <!-- .header.header-style02 start -->
        <header id="header" class="header-style02">
            <div id="top-bar-wrapper" class="clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-9">
                            <ul id="quick-links" class="clearfix">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+00 41 895 785 6985</span>
                                </li>

                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="contact-simple.html">Contact us today</a>
                                </li>
                            </ul><!-- .quick links end -->
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6 col-xs-3">
                            <div class="wpml-languages enabled">
                                <a class="active" href="/">
                                    <img src="/img/en.png" alt="English">

                                    <i class="fa fa-chevron-down"></i>
                                </a>

                                <ul class="wpml-lang-dropdown">
                                    <li>
                                        <a href="/">
                                            <img src="/img/de.png" alt="German">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/">
                                            <img src="/img/it.png" alt="Italian">
                                        </a>
                                    </li>
                                </ul><!-- .wpml-lang-dropdown end -->
                            </div><!-- .wpml-languages.enabled end -->
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .top-bar-wrapper end -->

            <div class="header-inner">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="/">
                                                <img src="/img/logo.png"
                                                    alt="Trucking Transportation and Logistics HTML Template">
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li><a href="/">Home</a></li>

                                            <li><a href="/about.php">About</a></li>

                                            <li><a href="/track.php">Track</a></li>

                                            <li><a href="/contactus.php">Contact</a></li>
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="/">Home</a>
                                                    
                                                </li>

                                                <li>
                                                    <a href="/about.php">About</a>
                                                    
                                                </li>

                                                <li><a href="/track.php">Locations</a></li>

                                                <li>
                                                    <a href="/contactus.php">Contact</a>
                                                    
                                                </li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit">
                                                <input id="m_search" name="s" type="text"
                                                    placeholder="Type and hit enter...">
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </div><!-- .header-inner end -->
        </header><!-- .header.header-style02 -->
    </div>