                        <div class="col-xxl-7 col-xl-7 col-lg-7">
                            <div class="product__details-wrapper">
                                <div class="product__details">
                                    <h3 class="product__details-title">
                                        <a href="product-details.html"><?= $prod->pName;    ?></a>
                                    </h3>
                                    <div class="product__review d-sm-flex">
                                        <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="product__add-review mb-15">
                                        <span><a href="#">1 Review</a></span>
                                        <span><a href="#">Add Review</a></span>
                                        </div> -->
                                    </div>
                                    <div class="product__price">
                                        <span class="new">UGX <?= $prod->price; ?></span>
                                        <!-- <span class="old">$320.00</span> -->
                                    </div>
                                    <div class="product__stock">
                                        <span>Availability :</span>
                                        <?= ($prod->availability) ? '<span>In Stock</span>' : '<span style="color:red;">Out of Stock</span>'?>
                                    </div>
                                    <div class="product__stock sku mb-30">
                                        <span>Brand:</span>
                                        <span><?= $subcat->subName; ?></span>
                                    </div>
                                    <div class="product__details-des mb-30">
                                        <p><?= $prod->description ?></p>
                                    </div>
                                    <div class="product__details-stock">
                                        <h3><span>Hurry Up!</span> Only <?= $prod->quantity ?> products left in stock.</h3>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                                          </div>
                                    </div>
                                    <div class="product__details-quantity mb-20">
                                        <form action="../includes/site/add_to_cart.inc.php" method="POST">
                                            <input type="text" hidden name="prodId" value="<?= $productId ?>">
                                            <input type="text" hidden name="cartId" value="<?= $_SESSION['cartId'] ? $_SESSION['cartId'] : null;  ?>">
                                            <input type="text" hidden name="price" value="<?= $prod->price; ?>">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative">
                                                        <input name="qty" type="text" value="1" />
                                                    </div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="t-y-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__details-action">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>