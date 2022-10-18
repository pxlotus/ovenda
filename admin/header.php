<?php
include 'session.php';

        $email = $_SESSION['user'];

// $url = 'https://ovenda.omsao.health/';
$url = "http://localhost/ovenda3/";
?>


    <!doctype html>
    <html lang="en">

    <head>
        <title>Ovenda - Your Online Platform <?= $email ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Omsao Pharmacy & Logistics">
        <meta name="author" content="">
        <link rel="icon" href="<?= $url ?>static/images/favicon.png" type="image/x-icon">

        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="<?= $url ?>static/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $url ?>static/vendor/font-awesome/css/font-awesome.min.css">

        <!-- MAIN Project CSS file -->
        <link rel="stylesheet" href="<?= $url ?>static/css/main.css">
        <link rel="stylesheet" href="<?= $url ?>static/css/admin.css">
        <link rel="stylesheet" href="<?= $url ?>static/css/summer-note.css">
    </head>

    <body data-theme="light" class="font-nunito">
        <div class="overlay"></div>
        <div id="wrapper" class="theme-admin-pharma">

            <!-- Page Loader -->
            <div class="page-loader-wrapper">
                <div class="loader">
                    <div class="m-t-30"><img src="<?= $url ?>static/images/omsao.png" width="48" height="48" alt="Iconic"></div>
                    <p>Please wait...</p>
                </div>
            </div>

            <!-- Top navbar div start -->
            <nav class="navbar navbar-fixed-top header-top">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                        <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                        <a href="#"><img src="<?= $url ?>static/images/omsao.png" alt="" srcset=""></a>
                    </div>

                    <div class="navbar-right">
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>
<!-- 
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="fa fa-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?=$url?>/includes/admin/logout.inc.php" class="icon-menu"><i class="fa fa-power-off"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </nav>

            <!-- main left menu -->
            <div id="left-sidebar" class="sidebar">
                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
                <div class="sidebar-scroll">
                    <div class="user-account">
                        <!-- <img src="" class="rounded-circle user-photo" alt="User Profile Picture"> -->
                        <div class="dropdown">
                            <span>Welcome,</span>
                            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                                <strong><?= $email ?></strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right account">
                                <li><a href="."><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="<?=$url?>includes/admin/logout.inc.php"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-pill">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
                    </ul>

                    <!-- Tab panes -->
                    
                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="menu">
                            <nav id="left-sidebar-nav" class="sidebar-nav">
                                <ul class="metismenu li_animation_delay">
                                    <li class="<?= ($pageName == 'Oshop Admin dashboard' || $pageName == 'Add a Main Category' || $pageName == 'Add a Category' 
                                    || $pageName == 'Add a Sub-Category' || $pageName == 'All Main categories' || $pageName == 'All categories' || $pageName == 'All Sub-Categories') ? 'active':''; ?>" ><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-list-alt"></i><span>Product Categories</span></a>
                                        <ul>
                                            <li class="<?= ($pageName == 'Oshop Admin dashboard') ? 'active':''; ?>"><a href="<?= $url ?>admin">Dashboard</a></li>
                                            <li class="<?= ($pageName == 'Add a Main Category') ? 'active':''; ?>"><a href="<?= $url ?>admin/add-main-category">Add a Main Category</a></li>
                                            <li class="<?= ($pageName == 'Add a Category') ? 'active':''; ?>"><a href="<?= $url ?>admin/add-category">Add a Category</a></li>
                                            <li class="<?= ($pageName == 'Add a Sub-Category') ? 'active':''; ?>"><a href="<?= $url ?>admin/add-subcategory">Add a Sub-Category</a></li>
                                            <li class="<?= ($pageName == 'All Main categories') ? 'active':''; ?>"><a href="<?= $url ?>admin/main-categories">All Main categories</a></li>
                                            <li class="<?= ($pageName == 'All categories') ? 'active':''; ?>"><a href="<?= $url ?>admin/categories">All Categories</a></li>
                                            <li class="<?= ($pageName == 'All Sub-Categories') ? 'active':''; ?>"><a href="<?= $url ?>admin/sub-categories">All Sub-Categories</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?= ($pageName == 'Add a brand' || $pageName == 'All available brands') ? 'active':''; ?>" ><a href="javascript:void(0);" class="has-arrow"><i class=" fa fa-newspaper-o"></i><span>Brands</span></a>
                                        <ul>
                                            <li class="<?= ($pageName == 'Add a brand') ? 'active':''; ?>" ><a href="<?= $url ?>admin/add-brand">Add product brand</a></li>
                                            <li class="<?= ($pageName == 'All available brands') ? 'active':''; ?>"  ><a href="<?= $url ?>admin/brands">All Product Brands</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?= ($pageName == 'Add a product' || $pageName == 'All available products') ? 'active':''; ?>" ><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-medkit"></i><span>Products</span></a>
                                        <ul>
                                            <li class="<?= ($pageName == 'Add a product') ? 'active':''; ?>"><a href="<?= $url ?>admin/add-product">Add a Product</a></li>
                                            <li class="<?= ($pageName == 'All available products') ? 'active':''; ?>"><a href="<?= $url ?>admin/all-products">All Products</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?= ($pageName == 'All Orders Made') ? 'active':''; ?>" ><a href="<?= $url ?>admin/orders"><i class="fa fa-shopping-cart"></i><span>Orders</span></a></li>
                                    <li class="<?= ($pageName == 'All Payments') ? 'active':''; ?>" ><a href="<?= $url ?>admin/payments"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                                    <li class="<?= ($pageName == 'All available blogs' || $pageName == 'Add a blog') ? 'active':''; ?>" ><a href="javascript:void(0);" class="has-arrow"><i class=" fa fa-newspaper-o"></i><span>Blogs</span></a>
                                        <ul>
                                            <li class="<?= ($pageName == 'Add a blog') ? 'active':''; ?>" ><a href="<?= $url ?>admin/add-blog">Add a blog</a></li>
                                            <li class="<?= ($pageName == 'All available blogs') ? 'active':''; ?>"  ><a href="<?= $url ?>admin/all-blogs">All available blogs</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="<?= ($pageName == 'All available blogs' || $pageName == 'Add a blog') ? 'active':''; ?>" ><a href="javascript:void(0);" class="has-arrow"><i class=" fa fa-newspaper-o"></i><span>Blogs</span></a> -->

                                    <li class="<?= ($pageName == 'Clients Feedbacks') ? 'active':''; ?>" ><a href="<?= $url ?>admin/feedbacks"><i class="fa fa-gratipay"></i><span>Client Feedbacks</span></a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane" id="Chat">
                            <form>
                                <div class="input-group m-b-20">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            <ul class="right_chat list-unstyled li_animation_delay">
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                            <span class="message">chrisfox@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                            <span class="message">Jogelucky@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                            <span class="message">Isabella@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                            <span class="message">FolisiseChosielie@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Alexander <i class="fa fa-heart-o font-12"></i></span>
                                            <span class="message">Alexander@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                            <span class="message">Isabella@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="./assets/images/xs/avatar7.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name d-flex justify-content-between">Dr. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                            <span class="message">FolisiseChosielie@gmail.com</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="app-contact.html" class="btn btn-block btn-primary">View all Doctors</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="setting">
                            <h6>Choose Skin</h6>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan" class="active">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                                <li data-theme="red">
                                    <div class="red"></div>
                                </li>
                            </ul>

                            <ul class="list-unstyled font_setting mt-3">
                                <li>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                        <span class="custom-control-label">Nunito Google Font</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                        <span class="custom-control-label">Ubuntu Font</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                        <span class="custom-control-label">Raleway Google Font</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                        <span class="custom-control-label">IBM Plex Google Font</span>
                                    </label>
                                </li>
                            </ul>

                            <ul class="list-unstyled mt-3">
                                <li class="d-flex align-items-center mb-2">
                                    <label class="toggle-switch theme-switch">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                    <span class="ml-3">Enable Dark Mode!</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <label class="toggle-switch theme-rtl">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                    <span class="ml-3">Enable RTL Mode!</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <label class="toggle-switch theme-high-contrast">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                    <span class="ml-3">Enable High Contrast Mode!</span>
                                </li>
                            </ul>

                            <hr>
                            <h6>General Settings</h6>
                            <ul class="setting-list list-unstyled">
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Allowed Notifications</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Offline</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Location Permission</span>
                                    </label>
                                </li>
                            </ul>

                            <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                            <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                        </div>
                        <div class="tab-pane" id="question">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            <ul class="list-unstyled question">
                                <li class="menu-heading">HOW-TO</li>
                                <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                                <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                                <li><a href="javascript:void(0);">Website Analytics</a></li>
                                <li class="menu-heading">ACCOUNT</li>
                                <li><a href="javascript:void(0);">Cearet New Account</a></li>
                                <li><a href="javascript:void(0);">Change Password?</a></li>
                                <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);">Payment info</a></li>
                                <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                                <li class="menu-button mt-3">
                                    <a href="./docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- rightbar icon div -->
            <div class="right_icon_bar">
                <ul>
                    <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
                    <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
                    <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
                    <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
                    <li><a href="../"><i class="fa fa-globe"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
                    <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div> 

            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2><?= $pageName ?></h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= $url ?>admin"><i class="fa fa-dashboard"></i></a></li>                            
                                    <li class="breadcrumb-item"><?= $pageName ?></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
