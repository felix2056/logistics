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
    "address" => "123 Wall Street P.O Box 123",
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
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/style2.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.style.css">
    <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="/css/flaticon.css" rel="stylesheet">
    <link href="/css/fonts.min.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Magnific PopUP CSS =-=-=-=-=-=-= -->
    <link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme Color -->
    <link rel="stylesheet" id="color" href="css/colors/calm.css?v=<?=rand(1,999);?>">
    <!-- For Style Switcher -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- Animation Css -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Menu Hover -->
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
    <!-- <div class="preloader"><span class="preloader-gif"></span></div>-->
    <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
    <div class="transparent-header">
    <header class="header-area">

        <!-- Logo Bar -->
        <div class="logo-bar">
            <div class="container clearfix">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php"><img src="<?=$logo;?>" alt="" width="350px"></a>
                </div>
                <div class="information-content">
                    <div class="info-box  hidden-sm">
                        Delivering with perfection since 1968
                    </div>
                </div>
                <? if($myinfo) { ?> 
                <!--Info Outer-->
                <div class="information-content">
                    <!--Info Box-->
                    <div class="info-box  hidden-sm">
                        <div class="icon"><span class="icon-envelope"></span></div>
                        <div class="text">EMAIL</div>
                        <a href="mailt:<?=$email;?>"><?=$email;?></a> </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">Call Now</div>
                        <a class="location" href="#"><?=$number;?></a> </div>
                    <div class="info-box">
                        <div class="icon"><span class="icon-map-pin"></span></div>
                        <div class="text">Find Us</div>
                        <a class="location" href="#"><?=$address;?></a> </div>
                </div>
                <? } ?>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Section -->
        <div class="navigation-2">
            <!-- navigation-start -->
            <nav class="navbar navbar-default ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="nav navbar-nav pull-right">
                            <li class=" hidden-sm"><a href="index.php">Home</a></li>
                            <li class=" hidden-sm"><a href="about.php">About</a></li>
                            <li class=" hidden-sm"><a href="track.php">Track Order</a></li>
                            <li class=" hidden-sm"><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container-end -->
            </nav>
        </div>
        <!-- /.navigation-end -->
        <!-- Menu  End -->
    </header>
    
    <!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
    </div>