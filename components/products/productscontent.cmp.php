<div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                            <div class="product__grid-wrapper">
                                <div class="product__grid-banner w-img">
                                    <img src="<?= $url ?>static/siteassets/img/banner/product-grid-banner.jpg" alt="">
                                </div>
                                <div class="product__grid-item-wrapper pt-70">
                                    <div class="product__filter mb-50">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="product__filter-left d-sm-flex align-items-center">
                                                    <div class="product__col">
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                              <button class="nav-link active" id="FiveCol-tab" data-bs-toggle="tab" data-bs-target="#FiveCol" type="button" role="tab" aria-controls="FiveCol" aria-selected="true">
                                                                <i class="fal fa-th"></i>
                                                              </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                              <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                                <i class="fal fa-list"></i>
                                                              </button>
                                                            </li>
                                                          </ul>
                                                    </div>
                                                    <div class="product__result pl-60">
                                                        <p>Showing 1-20 of 29 relults</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="product__filter-right d-flex align-items-center justify-content-md-end">
                                                    <div class="product__sorting product__show-no">
                                                        <select>
                                                            <option>10</option>
                                                            <option>20</option>
                                                            <option>30</option>
                                                            <option>40</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__sorting product__show-position ml-20">
                                                        <select>
                                                            <option>Position</option>
                                                            <option>Poduct Name</option>
                                                            <option>Price</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="productGridTabContent">
                                        <div class="tab-pane show active fade" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                                            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-4">
                                                <?php 
                                                    include "includes/site/fetch_file.inc.php";
                                                    fetchProducts();
                                                    ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>static/siteassets/img/shop/product/product-1.jpg" alt="product">
                                                                <img class="second-img" src="<?= $url ?>static/siteassets/img/shop/product/product-2.jpg" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html">Ipad 2019 6th Gen 64GB Memory</a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                                <div class="product-review-action ml-30">
                                                                    <span><a href="#">2 Reviews</a></span>
                                                                    <span><a href="#">Add Your Review</a></span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$500.00</span>
                                                            <p class="product-text">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley </p>
                                                            <div class="product__list-features">
                                                                <ul>
                                                                    <li>Light green crewneck sweatshirt.</li>
                                                                    <li>Hand pockets.</li>
                                                                    <li>Relaxed fit.</li>
                                                                    <li>Machine wash/dry.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <button class="t-y-btn mr-10">add to cart</button>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>static/siteassets/img/shop/product/product-3.jpg" alt="product">
                                                                <img class="second-img" src="<?= $url ?>static/siteassets/img/shop/product/product-4.jpg" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                                <div class="product-review-action ml-30">
                                                                    <span><a href="#">2 Reviews</a></span>
                                                                    <span><a href="#">Add Your Review</a></span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$240.00</span>
                                                            <p class="product-text">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley </p>
                                                            <div class="product__list-features">
                                                                <ul>
                                                                    <li>Light green crewneck sweatshirt.</li>
                                                                    <li>Hand pockets.</li>
                                                                    <li>Relaxed fit.</li>
                                                                    <li>Machine wash/dry.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <button class="t-y-btn mr-10">add to cart</button>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>static/siteassets/img/shop/product/product-5.jpg" alt="product">
                                                                <img class="second-img" src="<?= $url ?>static/siteassets/img/shop/product/product-6.jpg" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html">TF Camera Clock Support Bt 4.0 for Ios</a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                                <div class="product-review-action ml-30">
                                                                    <span><a href="#">2 Reviews</a></span>
                                                                    <span><a href="#">Add Your Review</a></span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$120.00</span>
                                                            <p class="product-text">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley </p>
                                                            <div class="product__list-features">
                                                                <ul>
                                                                    <li>Light green crewneck sweatshirt.</li>
                                                                    <li>Hand pockets.</li>
                                                                    <li>Relaxed fit.</li>
                                                                    <li>Machine wash/dry.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <button class="t-y-btn mr-10">add to cart</button>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>static/siteassets/img/shop/product/product-7.jpg" alt="product">
                                                                <img class="second-img" src="<?= $url ?>static/siteassets/img/shop/product/product-8.jpg" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html">Original Mobile Android Dual SIM Smart Phone</a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                                <div class="product-review-action ml-30">
                                                                    <span><a href="#">2 Reviews</a></span>
                                                                    <span><a href="#">Add Your Review</a></span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$90.00</span>
                                                            <p class="product-text">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley </p>
                                                            <div class="product__list-features">
                                                                <ul>
                                                                    <li>Light green crewneck sweatshirt.</li>
                                                                    <li>Hand pockets.</li>
                                                                    <li>Relaxed fit.</li>
                                                                    <li>Machine wash/dry.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <button class="t-y-btn mr-10">add to cart</button>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>static/siteassets/img/shop/product/product-9.jpg" alt="product">
                                                                <img class="second-img" src="<?= $url ?>static/siteassets/img/shop/product/product-8.jpg" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                                <div class="product-review-action ml-30">
                                                                    <span><a href="#">2 Reviews</a></span>
                                                                    <span><a href="#">Add Your Review</a></span>
                                                                </div>
                                                            </div>
                                                            <span class="price">$59.00</span>
                                                            <p class="product-text">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley </p>
                                                            <div class="product__list-features">
                                                                <ul>
                                                                    <li>Light green crewneck sweatshirt.</li>
                                                                    <li>Hand pockets.</li>
                                                                    <li>Relaxed fit.</li>
                                                                    <li>Machine wash/dry.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <button class="t-y-btn mr-10">add to cart</button>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    <div class="row">
                                        <div class="col-xxl-12 text-center">
                                            <div class="basic-pagination pt-30 pb-30">
                                                <nav>
                                                   <ul>
                                                      <li>
                                                         <a href="">
                                                            <i class="fal fa-chevron-double-left"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="">1</a>
                                                      </li>
                                                      <li>
                                                         <a href="" class="active">2</a>
                                                      </li>
                                                      <li>
                                                         <a href="">3</a>
                                                      </li>
                                                      <li>
                                                         <a href="">
                                                            <i class="fal fa-chevron-double-right"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                 </nav>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product area end -->
