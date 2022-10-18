            <!-- best selling area start -->
            <section class="best__sell pt-15 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Popular <span>Products</span></h3>
                                </div>
                                <div class="product__nav-tab mr-75">
                                    <ul class="nav nav-tabs" id="best-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">Top sale</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false">New Arrival</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="hot-tab" data-bs-toggle="tab" data-bs-target="#hot" type="button" role="tab" aria-controls="hot" aria-selected="false">Top Rated</button>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content" id="best-sell-tabContent">
                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="product__slider owl-carousel">
                                        <?php 
                                            include "includes/site/fetch_file.inc.php";
                                            fetchTopsales();
                                         ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                    <div class="product__slider owl-carousel">
                                        <?php 
                                            fetchNewArrival();
                                         ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                                    <div class="product__slider owl-carousel">
                                        <?php 
                                            fetchTopRated();
                                         ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best selling area end -->