<?php

$mainurl = "http://localhost/pethouse/";
$baseurl = "http://localhost/pethouse/assets/";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 13:05:14 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/plugins.css"/>
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/main.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseurl ?>image/favicon.ico">
    <title>Petmark - Pet Care & Veterinary Bootstrap Template</title>
</head>

<body class="">
    <div class="site-wrapper">
        <header class="header petmark-header-1">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-left">
                                <p class="font-weight-300">Welcome to Pethouse</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-nav right-nav">
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Language:</span><a class="slide-down--btn" href="#" role="button">
                                            English<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">En</a></li>
                                            <li><a href="#">En</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Currency:</span><a class="slide-down--btn" href="#" role="button">
                                            USD<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <!-- Template Logo -->
                            <div class="col-lg-3 col-md-12 col-sm-4">
                                <div class="site-brand  text-center text-lg-left">
                                    <a href="<?php echo $mainurl ?>" class="brand-image">
                                        <img src="<?php echo $baseurl ?>image/main-logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Category With Search -->
                            <div class="col-lg-5 col-md-7 order-3 order-md-2">
                                <form class="category-widget">
                                    <input type="text" name="search" placeholder="Search products ">
                                    <div class="search-form__group search-form__group--select">
                                        <select name="category " id="searchCategory" class="search-form__select nice-select">
                                            <option value="all">All Categories</option>
                                            <optgroup label="Books, Magazines">

                                                <option>Dog</option>
                                                <option>Cat</option>
                                                <option>Fish</option>
                                            </optgroup>
                                            <optgroup label="Electronics">
                                                <option>Bird</option>
                                                <option>Reptile</option>
                                            </optgroup>
                                            <option value="3">Small Pet</option>
                                        </select>
                                    </div>
                                    <button class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Call Login & Track of Order -->
                            <div class="col-lg-4 col-md-5 col-sm-8 order-2 order-md-3">
                                <div class="header-widget-2 text-center text-sm-right ">
                                    <div class="call-widget">
                                        <p>CALL US NOW: <i class="icon ion-ios-telephone"></i><span class="font-weight-mid">+91-012
                                                345 678</span></p>
                                    </div>
                                    <?php
                                    if (!isset($_SESSION["id"])) {
                                    ?>
                                        <ul class="header-links">
                                            <!-- <li><a href="cart.php"><i class="fas fa-car-alt"></i> Track Your Order</a></li> -->
                                            <li><a href="<?php echo $mainurl ?>Login1"><i class="fas fa-user"></i>&nbsp&nbspSign in or
                                                    Register
                                                </a></li>

                                        </ul>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="dropdown" style="display:inline"><a data-toggle="dropdown" href="#"><span class="fa fa-user"></span> Welcome :<b style="color:red; letter-spacing: 2px;">
                                                    <?php echo ucfirst($_SESSION["em"]); ?> </b><span class="caret"></span></b></a>
                                            <ul class="dropdown-menu" style="Width:220px">


                                                <li>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo $mainurl; ?>Profile"><span class="fa fa-user"></span> Manage Profile</a></li><br>
                                                <li>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="<?php echo $mainurl; ?>ChangePassword"><span class="fa fa-lock"></span> Chanage Password</a></li><br>
                                                <li>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#"><span class="fa fa-trash"></span>
                                                        Delete Account</a></li> <br>
                                                <li>
                                                    <center><a href="#" class="btn btn-block btn-danger" style="color:white; margin-left:3%; Width:150px" data-toggle="modal" data-target="#lg"><span class="fa fa-power-off"></span> Logout
                                                            Here ?</a></center>
                                                </li>

                                            </ul>

                                        </li>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                            <!-- logout here -->
                            <div class="modal fade" role="dialog" id="lg">
                                <div class="modal-dialog" style="width: 40%; margin-top:8%">
                                    <div class="modal-content" style="height: 150px;">


                                        <div class="list-group">

                                            <div class="list-group-item" style="background-color:red; width:100%">

                                                <h4 align="center" style="color:white">Are you Sure to logout ?</h4>
                                            </div>

                                            <div class="list-group-item">

                                                <center>
                                                    <span class="fa fa-close" style="font-size:65px; color:red"></span>
                                                    <br><br>
                                                    <a href="<?php echo $mainurl; ?>?lgout"><button type="button" class="btn btn-default btn-lg" style="border:solid 1px red">Yes</button></a>
                                                    &nbsp;&nbsp;
                                                    <a href="#"><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No</button></a>
                                                </center>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-nav-wrapper">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row no-gutters">
                            <!-- Category Nav -->
                            <div class="col-lg-3 col-md-8">
                                <!-- Category Nav Start -->
                                <div class="category-nav-wrapper bg-blue">
                                    <div class="category-nav">
                                        <h2 class="category-nav__title primary-bg" id="js-cat-nav-title"><i class="fa fa-bars"></i>
                                            <span>All Categories</span>
                                        </h2>

                                        <ul class="category-nav__menu" id="js-cat-nav">


                                            <?php foreach ($catnm as $catnm1) {

                                            ?>

                                                <li class="category-nav__menu__item ">
                                                    <a href="<?php echo $mainurl ?>Dog?mcatid=<?php echo $catnm1["mid"] ?>"><?php echo $catnm1["mname"]; ?></a>


                                                </li>

                                            <?php
                                            }
                                            ?>



                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- Category Nav End -->
                                <div class="category-mobile-menu"></div>
                            </div>
                            <!-- Main Menu -->
                            <div class="col-lg-7 d-none d-lg-block">
                                <nav class="main-navigation">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item ">
                                            <a href="<?php echo $mainurl ?>" class="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Aboutus">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Contact">Contact</a>
                                                    <!-- <ul class="sub-menu">
                                                <li><a href="contact.php">Contact 1</a>
                                                </li>
                                                <li><a href="contact-2.php">Contact 2</a>
                                                </li>
                                            </ul> -->
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Services">Services</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Faq">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>404">404</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Cart">Cart</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo $mainurl ?>Wishlist">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>ProductBill">Productbill</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo $mainurl ?>Profile">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="<?php echo $mainurl ?>Portfolio" class="mainmenu__link">gallery</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="<?php echo $mainurl ?>BookDoctor" class="mainmenu__link">Doctor</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo $mainurl ?>BookDoctor">Book Doctor</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo $mainurl ?>Bill">Doctor Receipt</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children " >
                                            <a href="#" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column" >
                                                <?php foreach ($catnm as $catnm1) {

                                                ?>
                                                    <li>
                                                       

                                                    <a href="<?php echo $mainurl ?>Dog?mcatid=<?php echo $catnm1["mid"] ?>"><?php echo $catnm1["mname"]; ?></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- Mainmenu End -->
                                </nav>
                            </div>
                            <!-- Cart block-->
                            <div class="col-lg-2 col-6 offset-6 offset-md-0 col-md-3 order-3">
                                <div class="cart-widget-wrapper slide-down-wrapper">
                                    <div class="cart-widget slide-down--btn">
                                        <div class="cart-icon">
                                            <i class="ion-bag"></i>
                                            <span class="cart-count-badge">
                                                <?php echo $crttot[0]["total"]; ?>

                                            </span>
                                        </div>
                                        <div class="cart-text">
                                            <a href="<?php echo $mainurl ?>Wishlist"><span class="d-block">Your cart</span>
                                                <strong><span class="amount"><span class="currencySymbol">Rs.</span><?php echo $subtotal[0]["total"]; ?></span></strong>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                <!-- Main Mobile Menu Start -->
                                <div class="mobile-menu"></div>
                                <!-- Main Mobile Menu End -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="fixed-header sticky-init">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="index.php">
                                    <img src="<?php echo $baseurl ?>image/main-logo.png" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->
                                <nav class="sticky-navigation">
                                    <ul class="mainmenu sticky-menu">
                                        <li class="mainmenu__item">
                                            <a href="<?php echo $mainurl?>">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Aboutus">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Contact">Contact</a>
                                                    <!-- <ul class="sub-menu">
                                                <li><a href="contact.php">Contact 1</a>
                                                </li>
                                                <li><a href="contact-2.php">Contact 2</a>
                                                </li>
                                            </ul> -->
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Services">Services</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Faq">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>404">404</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Cart">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>Wishlist">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $mainurl ?>ProductBill">Productbill</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo $mainurl ?>Profile">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="<?php echo $mainurl ?>Portfolio" class="mainmenu__link">Gallery</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                        <a href="<?php echo $mainurl ?>BookDoctor" class="mainmenu__link">Doctor</a>
                                            
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo $mainurl ?>BookDoctor">Book Doctor</a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo $mainurl ?>Bill">Doctor Receipt</a>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="<?php echo $mainurl ?>shop.php" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column">
                                            <?php foreach ($catnm as $catnm1) {

?>
<li>
                                                       

                                                       <a href="<?php echo $mainurl ?>Dog?mcatid=<?php echo $catnm1["mid"] ?>"><?php echo $catnm1["mname"]; ?></a>
                                                       </li>
                                                       <?php
                                                }
                                                ?>
                                               
                                            </ul>
                                            <div class="sticky-mobile-menu  d-lg-none">
                                                <span class="sticky-menu-btn"></span>
                                            </div>
                                </nav>
                                <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="<?php echo $baseurl ?>js/plugins.js"></script>
        <script src="<?php echo $baseurl ?>js/ajax-mail.js"></script>
        <script src="<?php echo $baseurl ?>js/custom.js"></script>