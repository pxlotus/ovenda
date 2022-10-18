
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
                                                              <button class="nav-link active" id="FiveCol-tab" data-bs-toggle="tab" data-bs-target="#FiveCol" type="button" role="tab" aria-controls="FiveCol" aria-selected="false">
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
                                        <div class="tab-pane fade show active" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                                            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-4">
                                               <?php if($query->num_rows > 0): foreach($query as $prod): ?> <div class="col">
                                                     <div class="product__item white-bg mb-30">
                                                         <div class="product__thumb p-relative">
                                                             <a href="<?= $url ?>product/<?= $prod['productId'] ?>" class="w-img">
                                                                 <img src="<?= $url ?>uploads/products/main/<?= $prod['main_pic'] ?>" alt="product">
                                                                 <img class="second-img" src="<?= $url ?>uploads/products/hover/<?= $prod['hover_pic'] ?>" alt="product">
                                                             </a>
                                                         </div>
                                                         <div class="product__content text-center">
                                                             <h6 class="product-name">
                                                                 <a class="product-item-link prod_link" style="font-weight: 600;" href="<?= $url ?>product/<?= $prod['productId'] ?>"><?= $prod['pName'] ?></a>
                                                             </h6>
                                                             <div class="rating">
                                                                 <ul>
                                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                 </ul>
                                                             </div>
                                                             <span style="font-weight: 500;" class="price">UGX <?= $prod['price'] ?></span>
                                                         </div>
                                                         <div class="product__add-btn">
                                                             <button type="button">Add to Cart</button>
                                                         </div>
                                                     </div>
                                                </div>
                                                <?php endforeach; else: echo '<h3 style="color:#fdb721" class="col-lg-12 col-sm-12">No products u '.$cat->brandName.'</h3>'; endif; ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                               <?php if($query->num_rows > 0): foreach($query as $prod): ?> <div class="col">

                                                    <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                        <div class="product__thumb p-relative mr-20">
                                                            <a href="product-details.html" class="w-img">
                                                                <img src="<?= $url ?>uploads/products/main/<?= $prod['main_pic'] ?>" alt="product">
                                                                <img class="second-img" src="<?= $url ?>uploads/products/hover/<?= $prod['hover_pic'] ?>" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <h6 class="product-name">
                                                                <a class="product-item-link" href="product-details.html"><?= $prod['pName'] ?></a>
                                                            </h6>
                                                            <div class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">UGX <?= $prod['price'] ?></span>
                                                            <p class="product-text"><?= $prod['description'] ?> </p>
                                                            <div class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                                <form action="../includes/site/add_to_cart.inc.php" method="POST">
                                                                    <input type="text" hidden name="prodId" value="<?= $prod['productId'] ?>">
                                                                    <input type="text" hidden name="userId" value="<?= $_SESSION['usrId'] ? $_SESSION['usrId'] : null;  ?>">
                                                                    <input type="text" hidden name="price" value="<?= $prod['price']; ?>">
                                                                    <input name="qty" hidden type="text" value="1" />
                                                                    <button class="t-y-btn mr-10" type="submit">Add to Cart</button>
                                                                </form>
                                                                <ul>
                                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; else: echo '<h3 style="color:#fdb721" class="col-lg-12 col-sm-12">No products under this product brand</h3>'; endif; ?>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    <?php if($query->num_rows > 0): ?>
                                    <div class="row">
                                        <div class="col-xxl-12 text-center">
                                            <div class="basic-pagination pt-30 pb-30">
                                                <nav>
                                                   <ul>
                                                      <li>
                                                         <a href="#">
                                                            <i class="fal fa-chevron-double-left"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#">1</a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="active">2</a>
                                                      </li>
                                                      <li>
                                                         <a href="#">3</a>
                                                      </li>
                                                      <li>
                                                         <a href="#">
                                                            <i class="fal fa-chevron-double-right"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                 </nav>
                                             </div>
                                        </div>
                                    </div>
                                    <?php else: echo""; endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product area end -->
