            <!-- banner area start -->
            <section class="banner__area pt-20 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="<?= $url ?>static/siteassets/img/banner/watches.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="<?= $url ?>static/siteassets/img/banner/items-of-clothing.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- deal off the day area start -->
            <section class="deal__area pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Deals<span>Of The Day</span></h3>
                                </div>
                            </div>
                            <div class="product__deal owl-carousel">
                                <?php fetchweekDeals(); ?>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Headsets & <span>Earphones</span></h3>
                                </div>
                            </div>
                            <div class="product__electronic owl-carousel">
                                <?php fetchElectonics(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- deal off the day area end -->