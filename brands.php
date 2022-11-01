<?php
session_start();
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
    
}
$url = "http://localhost/ovenda3/";
// include "includes/site/functions.inc.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Ovenda, Jangu tugule</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= $url ?>static/siteassets/img/favicon.png" />

        <!-- CSS here -->
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/preloader.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/slick.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/backToTop.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/nice-select.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/animate.min.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/ui-range-slider.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/default.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/style.css">
        <link rel="stylesheet" href="<?= $url ?>static/siteassets/css/payment.css">
        
        <!-- external css for the checkout and cart -->
        <!-- <link rel="stylesheet" href="assets2/css/bootstrap.css">
        <link rel="stylesheet" href="assets2/js/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets2/js/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets2/css/style.css"> -->
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <header class="yellow-header">
            <div class="header__area">
                <div class="header__top d-none d-sm-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                                <div class="header__welcome">
                                    <span>Welcome to Ovenda Store.</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="header__action d-flex justify-content-center justify-content-md-end">
                                    <ul>
                                        <?php if(isset($_SESSION['user'])): ?>
                                        <li><a style="font-weight: bold;" href=""> <i class="fa fa-user-alt"></i> <?= $_SESSION['user'] ?></a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="<?= $url ?>includes/site/auth_file.inc.php?logout=1">Logout</a></li>
                                        <?php else: ?>
                                        <li><a href="<?= $url ?>login">Sign In</a></li>
                                        <li><a href="<?= $url ?>register">Create an account</a></li>
                                        <?php endif; ?>

                                        <!-- <li><a href="#">Compare</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sellonovenda">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-16">
                                <div class="text-link">
                                    <a href="./seller/sell-on-ovenda.php"><i class='fas fa-star' style='color: #f3da35'></i> Sell on Ovenda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__info">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-3">
                                <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                    <div class="logo-main">
                                        <a href="<?= $url ?>"><img class=".img-fluid.max-width: 100%;" src="<?= $url ?>static/siteassets/img/logo/logowhite.png" alt="logo" /></a>
                                    </div>
                                    <div class="header__hotline align-items-center d-none d-sm-flex d-lg-none d-xl-flex">
                                        <div class="header__hotline-icon">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="header__hotline-info">
                                            <span>Hotline Free:</span>
                                            <h6>+256 795 339 392</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9">
                                <div class="header__info-right">
                                    <div class="header__search f-left d-none d-sm-block">
                                        <form action="">
                                            <div class="header__search-box">
                                                <input type="text" placeholder="Search For Products..." />
                                                <button type="submit">Search</button>
                                            </div>
                                            <div class="header__search-cat">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Best Seller Products</option>
                                                    <option>Top 10 Offers</option>
                                                    <option>New Arrivals</option>
                                                    <option>Phones & Tablets</option>
                                                    <option>Electronics & Digital</option>
                                                    <option>Fashion & Clothings</option>
                                                    <option>Jewelry & Watches</option>
                                                    <option>Health & Beauty</option>
                                                    <option>Sound & Speakers</option>
                                                    <option>TV & Audio</option>
                                                    <option>Computers</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                        <a href="javascript:void(0);" class="cart__toggle">
                                            <span class="cart__total-item"><?= isset($c_count) ? $c_count : '0'; ?></span>
                                        </a>
                                        <!-- <span class="cart__content">
                                            <span class="cart__my">My Cart:</span>
                                            <span class="cart__total-price font-weight-bold">UGX <?php if(isset($Total)): echo $Total; else: echo '0'; endif ?></span>
                                        </span> -->
                                        <div class="cart__mini">
                                            <div class="cart__close">
                                                <button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="cart__title">
                                                        <h4>My Cart</h4>
                                                        <span>(<?= isset($c_count) ? $c_count : '0'; ?> Item in Cart)</span>
                                                    </div>
                                                </li>
                                                <?php include "includes/site/sidebar_cart.inc.php";?>
                                                <li>
                                                    <div class="cart__sub d-flex justify-content-between align-items-center">
                                                        <h6>Car Subtotal</h6>
                                                        <span class="cart__sub-total">UGX <?php if(isset($Total)): echo number_format($Total,2,".",","); else: echo '0'; endif?></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="<?= $url ?>cart" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                                <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                    <div class="side-menu d-xl-none mr-20">
                                        <button type="button" class="side-menu-btn side-menu-btn-2 offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                    </div>
                                    <div class="main-menu main-menu-2 d-none d-md-block">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="<?= $url ?>">Home</a>
                                                </li>
                                                <li><a href="<?= $url ?>allproducts">Products</a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="product.html">Product Type</a></li>
                                                        <li><a href="product.html">Product Features <i class="far fa-angle-down"></i></a>
                                                            <ul class="submenu">
                                                                <li><a href="product-details.html">Simple Product</a></li>
                                                                <li><a href="product-details-config.html">Configurable Product</a></li>
                                                                <li><a href="product-details-group.html">Group Product</a></li>
                                                                <li><a href="product-details-download.html">Downloadable Product</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="product.html">Shop By Brand</a></li>
                                                    </ul> -->
                                                </li>
                                                <li>
                                                    <a href="<?= $url ?>blog">Blogs </a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-detaills.html">Blog Details</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="<?= $url ?>about">about us</a></li>
                                                <li><a href="<?= $url ?>contact">contact</a></li>
                                                <!-- <li>
                                                    <a href="<?= $url ?>abou">pages <i class="far fa-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?= $url ?>login">Login</a></li>
                                                        <li><a href="<?= $url ?>register">Register</a></li>
                                                        <li><a href="<?= $url ?>cart">Cart</a></li>
                                                        <li><a href="<?= $url ?>wishlist">Wishlist</a></li>
                                                        <li><a href="<?= $url ?>checkout">Checkout</a></li>
                                                        <li><a href="<?= $url ?>error">404 Error</a></li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6 col-6 d-md-none d-lg-block">
                                <div class="header__bottom-right d-flex justify-content-end">
                                    <div class="header__currency">
                                        <select>
                                            <option>UGX</option>
                                        </select>
                                    </div>
                                    <div class="header__lang d-md-none d-lg-block">
                                        <select>
                                            <option>English</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->
        
        <section class="brands">
            <div class="container-fluid">
               <div class="container">
                    <div class="row brand-container bg-secondary">
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>  
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>    
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>      
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>   
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>   
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>   
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a>   
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                        <a href="#" class="cols">
                            <div class="brand-item">
                                <img src="./static/images/nivea-product-teaser.png">
                            </div>
                        </a> 
                    </div>
               </div>
            </div>
        </section>

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="<?= $url ?>">
                    <img src="<?= $url ?>static/siteassets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

            <!-- back to top btn area start -->
            <section class="back-btn-top">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xl-12">
                            <div id="scroll" class="back-to-top-btn back-to-top-btn-2 text-center">
                                <a href="javascript:void(0);">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- back to top btn area end -->
        <!-- footer area start -->
        <footer>
            <div class="footer__area">
                <div class="footer__top black-bg pt-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Ovenda Info</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">About us</a></li>
                                                        <li><a href="contact.php">Contact us</a></li>
                                                        <li><a href="#">Find a Store</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Links</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">Special Offers</a></li>
                                                        <li><a href="#"> Gift Cards</a></li>
                                                        <li><a href="#">F21 Red</a></li>
                                                        <li><a href="#">Privacy Policy</a></li>
                                                        <li><a href="#"> Teams of Use</a></li>
                                                        <li><a href="#">Portfolio</a></li>                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Let Us Help You</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="#">Wishlist</a></li>
                                                        <li><a href="#">Addresses</a></li>
                                                        <li><a href="#"> Account details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Company Info</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">About us</a></li>
                                                        <li><a href="#">Contact us</a></li>
                                                        <li><a href="#">Careers</a></li>
                                                        <li><a href="#">Business With Us</a></li>
                                                        <li><a href="#">Find a Store</a></li>
                                                        <li><a href="#">Press & Talent</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="footer__widget">
                                    <div class="footer__widget-title footer__widget-title-2">
                                        <h4>Social Media</h4>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__social mb-20">
                                            <ul>
                                                <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="gp"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li class="yt"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li class="pt"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li class="em"><a href="#"><i class="fal fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="footer__download">
                                            <h4>Download The App - Get 30% Sale Coupon</h4>
                                            <a href="#" class="m-img"><img src="<?= $url ?>static/siteassets/img/icon/app-store-2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright pb-10 black-bg ">
                    <div class="container">
                        <div class="footer__copyright-inner ">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12 d-flex justify-content-center">
                                    <div class="footer__copyright-text">
                                        <p>Copyright © <a href="index.php">Ovenda.</a> All Rights Reserved.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

        <!-- JS here -->
         
        <script src="<?= $url ?>static/siteassets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/vendor/waypoints.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/meanmenu.js"></script>
        <script src="<?= $url ?>static/siteassets/js/slick.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/backToTop.js"></script>
        <script src="<?= $url ?>static/siteassets/js/jquery.fancybox.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/countdown.js"></script>
        <script src="<?= $url ?>static/siteassets/js/nice-select.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/isotope.pkgd.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/owl.carousel.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/jquery-ui-slider-range.js"></script>
        <script src="<?= $url ?>static/siteassets/js/ajax-form.js"></script>
        <script src="<?= $url ?>static/siteassets/js/wow.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/main.js"></script>
        <script src="<?= $url ?>static/siteassets/js/cart.js"></script>
    </body>
</html>
