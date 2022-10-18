<?php
session_start();
$url = "https://ovenda.omsao.health/";
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
        <link rel="shortcut icon" type="image/x-icon" href="<?= $url ?>static/siteassets/img/favicon.ico" />

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
    </head>
    <body>
        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Create an account with us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- Registration Area Strat-->
            <section class="registration-area"> <!-- pb-100 -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-4 col-md-12 col-sm-12"> <!-- offset-lg-2 -->
                            <div class="basic-registration">
                                <h3 class="text-center mb-30">Register Here</h3>

                                <!-- <div class="footer__widget-content d-flex justify-content-center">
                                    <div class="footer__social mb-20">
                                        <ul>
                                            <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="gp"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li class="pt"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li class="em"><a href="#"><i class="fal fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <form action="includes/site/create_account.inc.php" method="POST" enctype="multipart/form-data" class="ltn__form-box contact-form-box">
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="helper-text">Username *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-user"></i></span>
                                                    </div>
                                                    <input class="form-control" name="username" type="text" placeholder="Username " required>
                                                    
                                                </div>
                                                <?php if(isset($_SESSION['msguser'])): ?>
                                                    <p style="color: red;"><?= $_SESSION['msguser'] ?></p>  
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="helper-text">Email *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-envelope"></i></span>
                                                    </div>
                                                    <input class="form-control" name="email" type="email" placeholder="Email..." required>
                                                </div>
                                                <?php if(isset($_SESSION['msgemail'])): ?>
                                                    <p style="color: red;"><?= $_SESSION['msgemail'] ?></p>  
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        
                                        <!-- <label for="email-id">Email Address </label>
                                        <input id="email-id" type="text" placeholder="Email address..." />
                                        <label for="name">Username </label>
                                        <input id="name" type="text" placeholder="Preferred Username" />
                                        <label for="pass">Password </label> -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="helper-text">Phone *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-phone"></i></span>
                                                    </div>
                                                    <input class="form-control" name="phone" type="tel" placeholder="+256 ...." required>
                                                </div>
                                            </div>
                                        </div><div class="col-md-6">
                                            <div class="form-group">
                                                <span class="helper-text">Address  *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-map-marker"></i></span>
                                                    </div>
                                                    <input class="form-control" name="address" type="text" placeholder="Your Address" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="helper-text">Picture (Optional)</span>
                                                <div class="input-group">
                                                    <input class="form-control" name="pic" type="file" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="helper-text">Password *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-lock"></i></span>
                                                    </div>
                                                    <input class="form-control" name="password" type="password" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="helper-text">Password *</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-lock"></i></span>
                                                    </div>
                                                    <input class="form-control" name="cpassword" type="password" placeholder="Confirmation Password" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-10"></div>
                                        <button name="account-create" type="submit" class="t-y-btn w-100">Register Now</button>
                                    <div class="or-divide"><span>or</span></div>
                                    <a href="login" class="t-y-btn t-y-btn-grey w-100">login Now</a>
                                </form>
                                <!-- <form action="#">
                                    <label for="email-id">Email Address </label>
                                    <input id="email-id" type="text" placeholder="Email address..." />
                                    <label for="name">Username </label>
                                    <input id="name" type="text" placeholder="Preferred Username" />
                                    <label for="pass">Password </label>
                                    <input id="pass" type="password" placeholder="Enter password..." />
                                    <label for="pass">Password</label>
                                    <input id="pass" type="password" placeholder="Confirm password..." />
                                    <div class="mt-10"></div>
                                        <button class="t-y-btn w-100">Register Now</button>
                                    <div class="or-divide"><span>or</span></div>
                                    <a href="login.php" class="t-y-btn t-y-btn-grey w-100">login Now</a>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Registration Area End-->
        </main>
    </body>
</html>