<?php
session_start();
$url = "https://http://localhost/ovenda3/";
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
                                      <li class="breadcrumb-item active" aria-current="page">Login to Ovenda</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- login Area Strat-->
            <section class="login-area "> <!--pb-100 -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 d-flex justify-content-end">
                            <div class="basic-login ">
                                <img src="<?= $url ?>static/siteassets/img/logo/logow.png" alt="" srcset="">
                                <h3 class="text-center mb-30">Login From Here</h3>
                                <form action="includes/site/auth_file.inc.php" method="POST">
                                    <label for="name">Email Address</label>
                                    <input id="name" name="email" type="text" placeholder="Email address..." />
                                    <label for="pass">Password </label>
                                    <input id="pass" type="password"  name="password" placeholder="Enter password..." />
                                    <div class="login-action mb-10 fix text-left">
                                        <?php if (isset($_SESSION['msg'])): ?>
                                            <p style="color:red;" class="text-center"><?= $_SESSION['msg'] ?></p>
                                        <?php endif?>
                                    </div>
                                    <button name="login"  type="submit" class="t-y-btn w-100">Login Now</button>
                                    <div class="login-action mt-20 fix text-center"> 
                                            <span class="forgot-login">
                                            <a href="#">Lost your password?</a>
                                            </span>
                                    </div>
                                    <div class="or-divide"><span>or</span></div>
                                    <a href="register" class="t-y-btn t-y-btn-grey w-100">Register Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End-->
        </main>
    </body>
</html>