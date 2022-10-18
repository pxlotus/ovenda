            
            <link rel="stylesheet" href="static/siteassets/css/cart.css" />
            <section class="cart-area pb-100" id="carts-area">
                <div class="container">
                    <!-- <div>
                        <div class="item">
                            <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                            </div>

                            <div class="image">
                            <img src="https://designmodo.com/demo/shopping-cart/item-1.png" alt="" />
                            </div>

                            <div class="description">
                            <span>Common Projects</span>
                            <span>Bball High</span>
                            <span>White</span>
                            </div>

                            <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                            </div>

                            <div class="total-price">$549</div>
                        </div>
                        <div class="item">
                            <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                            </div>

                            <div class="image">
                            <img src="https://designmodo.com/demo/shopping-cart/item-2.png" alt=""/>
                            </div>

                            <div class="description">
                            <span>Maison Margiela</span>
                            <span>Future Sneakers</span>
                            <span>White</span>
                            </div>

                            <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                            </div>

                            <div class="total-price">$870</div>
                        </div>
                        <div class="item">
                            <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                            </div>

                            <div class="image">
                            <img src="https://designmodo.com/demo/shopping-cart/item-3.png" alt="" />
                            </div>

                            <div class="description">
                            <span>Our Legacy</span>
                            <span>Brushed Scarf</span>
                            <span>Brown</span>
                            </div>

                            <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                            </div>

                            <div class="total-price">$349</div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="cart-container row m-auto">
                            <div class="col-lg-9 col-md-12 col-sm-12 m-auto">
                                <div class="card mt-3 border-0">
                                    <div class="card-header border-bottom-0">
                                        <?php include 'includes/site/functions.inc.php'; ?>
                                        <h4 class="float-left">Cart(<?= isset($c_count) ? $c_count : '0'; ?>)</h4>
                                        <a href="<?= $url ?>includes/site/rm-cart-item.inc.php?clearAll='1'" onclick="return confirm('Are you sure your want clear your cart?.')" class="float-right" style="font-size: 15px; color:#d69b1b;"> <i class="fa fa-trash"></i> Clear cart</a>
                                    </div>
                                    <?php include 'includes/site/fetch_cart.inc.php'; ?>

                                    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
                                    <script type="text/javascript">
                                        $('.minus-btn').on('click', function(e) {
                                                e.preventDefault();
                                                var $this = $(this);
                                                var $input = $this.closest('div').find('input');
                                                var value = parseInt($input.val());

                                                    if (value > 1) {
                                                    value = value - 1;
                                                } else {
                                                    value = 0;
                                                }

                                            $input.val(value);

                                            });

                                            $('.plus-btn').on('click', function(e) {
                                                e.preventDefault();
                                                var $this = $(this);
                                                var $input = $this.closest('div').find('input');
                                                var value = parseInt($input.val());

                                                if (value < 100) {
                                                value = value + 1;
                                                } else {
                                                    value =100;
                                                }

                                                $input.val(value);
                                            });

                                        $('.like-btn').on('click', function() {
                                            $(this).toggleClass('is-active');
                                        });
                                    </script>
                                            <div class="card mt-3 cart-summary">
                                                <div class="card-header bg-light">
                                                    <h4 class="float-left">Items</h4>
                                                    <h4 class="float-right"><?= isset($c_count) ? $c_count : '0'; ?> Items</h4>
                                                </div>        
                                                <div class="card-header">
                                                    <h4 class="float-left">Cart summary</h4>
                                                    <h4 class="float-right">UGX 
                                                                    <?php if (
                                                                        isset(
                                                                            $Total
                                                                        )
                                                                    ):
                                                                        echo number_format(
                                                                            $Total,
                                                                            2,
                                                                            '.',
                                                                            ','
                                                                        );
                                                                    else:
                                                                        echo '0';
                                                                    endif; ?></h4>
                                                </div>  
                                                <div class="card-footer d-flex justify-content-center">
                                                    <a class="btn btn-dark payment" href="<?=$url?>checkout"> Proceed to Payment</a>
                                                    <!-- <div class="btn btn-dark payment" data-target="#biling" type="button"
                                                    onclick="Checkout()">Proceed To Payment</div> -->
                                                </div>                         
                                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Cart Area End -->



            
            <!-- CONTENT -->
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AND CONTENT -->
