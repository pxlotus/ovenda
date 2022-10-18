        <main>
            <!-- slider area satrt -->
            <section class="slider__area pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 custom-col-2 d-none d-xl-block">
                            <div class="cat__menu-wrapper">
                                <div class="cat-toggle cat-toggle-2">
                                    <button type="button" class="cat-toggle-btn"><i class="fas fa-bars"></i> Shop by department</button>
                                    <div class="cat__menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <?php include "includes/site/display_categories.inc.php";
                                                 ?>
                                                 <?php foreach ($query as $mc): ?>
                                                <li>
                                                    <a href="#"><?= $mc['name'] ?> <i class="far fa-angle-down"></i></a>
                                                    <ul class="mega-menu">
                                                            <?php
                                                            $mId = $mc['mcId'];
                                                            $sql_cat = mysqli_query($con, "SELECT * FROM productCategory WHERE mcId = '$mId'");
                                                            if (mysqli_num_rows($sql_cat) > 0):
                                                                foreach ($sql_cat as $cat): ?>
                                                        <li><a style="cursor: pointer;"><?=$cat ['categoryName'] ?></a>
                                                            <ul class="mega-item">
                                                                <?php
                                                                    $cId = $cat['categoryId'];
                                                                    $sql_sub = mysqli_query($con, "SELECT * FROM productSubcategory WHERE categoryId = '$cId'");
                                                                    if (mysqli_num_rows($sql_sub) > 0):
                                                                        foreach ($sql_sub as $sub): 
                                                                ?>
                                                                <li><a href="category/<?= $sub['subcategoryId'] ?>"><?= $sub['subName'] ?></a></li>
                                                                <?php endforeach; endif; ?>
                                                            </ul>
                                                        </li>
                                                        <?php endforeach; endif;  ?>
                                                            
                                                    </ul>
                                                </li>
                                                <?php endforeach ?>

                                                <!-- <li>
                                                    <a href="product.html">Best Seller Products
                                                        <span class="cat-label">hot!</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Top 10 Offers
                                                        <span class="cat-label green">new!</span>
                                                    </a>
                                                </li> -->
                                                <li><a href="product.html">More Categories</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 custom-col-10 col-lg-12">
                            <div class="row">
                                <div class="col-xl-9 custom-col-9 col-lg-8">
                                    <div class="slider__inner slider-active">
                                        <div class="single-slider w-img">
                                            <a href=""><img src="<?= $url ?>static/siteassets/img/slider/01/camera.jpg" alt="slider" /></a>
                                        </div>
                                        <div class="single-slider w-img">
                                            <img src="<?= $url ?>static/siteassets/img/slider/01/fashion.jpg" alt="slider" />
                                        </div>
                                        <div class="single-slider w-img">
                                            <img src="<?= $url ?>static/siteassets/img/slider/01/onestop.jpg" alt="slider" />
                                        </div>
                                        <div class="single-slider w-img">
                                            <img src="<?= $url ?>static/siteassets/img/slider/01/cosmetic.jpg" alt="slider" />
                                        </div>
                                        <div class="single-slider w-img">
                                            <img src="<?= $url ?>static/siteassets/img/slider/01/elegant.jpg" alt="slider" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 custom-col-3 col-lg-4 d-none d-md-block">
                                    <div class="banner__area">
                                        <div class="banner__item mb-20 w-img">
                                            <a href="product-details.html"><img src="<?= $url ?>static/siteassets/img/banner/1.jpg" alt="" /></a>
                                        </div>
                                        <div class="banner__item mb-20 w-img">
                                            <a href="product-details.html"><img src="<?= $url ?>static/siteassets/img/banner/heads.jpg" alt="" /></a>
                                        </div>
                                        <div class="banner__item w-img">
                                            <a href="product-details.html"><img src="<?= $url ?>static/siteassets/img/slider/01/cam.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider area end -->
