            <!-- product area start -->
            <section class="product__area box-plr-75 pb-20 mt-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section__head mb-40">
                                <div class="section__title">
                                    <h3>Other related <span>Products</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="product__slider owl-carousel">
                                <?php foreach($related_items as $item): ?>
                                    <div class="product__item white-bg mb-30">
                                        <div class="product__thumb p-relative">
                                            <a href="<?= $url ?>product/<?= $item->productId ?>" class="w-img">
                                                <img src="<?= $url ?>uploads/products/main/<?= $item->main_pic ?>" alt="product">
                                                <img class="second-img" src="<?= $url ?>uploads/products/hover/<?= $item->hover_pic ?>" alt="product">
                                            </a>
                                            <div class="product__action p-absolute">
                                                <ul>
                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content text-center">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product-details.html"> <?= $item->pName ?></a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="price">UGX <?= $item->price ?></span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product area end -->