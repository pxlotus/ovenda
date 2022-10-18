                    <link rel="stylesheet" href="static/siteassets/css/cart.css" />
                    <?php include 'includes/site/fetch_user.inc.php'; ?>
                    <!-- checkout-area start -->
                    
                    <section class="cart-area pb-100" id="billingm">
                        <div class="container" style="width:100%">
                            <form action="includes/site/order-handler.inc.php" method="POST" class="col-lg-10 col-md-12 col-sm-12 m-auto">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-9 col-md-12 col-sm-12 mt-25">
                                        <div class="cart-categories">
                                            <!-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-warning bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    60% Complete
                                                </div>
                                            </div> -->


                                            <div class="checkout-order ">
                                                <div class="card accordion mb-25" id="checkoutAccordion">
                                                    <div class="accordion-item">
                                                        <h2 class="card-header accordion-header bg-no" id="checkoutOne">
                                                            <span class="accordion-button collapsed">
                                                                1. BILLING ADDRESS
                                                                <!-- <span class="building px-2"><i class="fad fa-university"></i></span> -->
                                                        </span>
                                                        </h2>
                                                        <div id="bankOne" class="card-body accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                                            <div class="accordion-body">
                                                                <?php
                                                                    $usrId = $_SESSION['usrId'];
                                                                    if (isset($usrId)):
                                                                        # code...
                                                                    
                                                                    $check_bill_address = mysqli_query($con, "SELECT * FROM userBillingAddress WHERE usrId = '$usrId'");
                                                                    if ($check_bill_address -> num_rows > 0):
                                                                        $get_billing = $check_bill_address->fetch_object();
                                                                    $check_user = mysqli_query($con, "SELECT * FROM userProfile WHERE usrId = '$usrId'");
                                                                    $get_user = $check_user->fetch_object();

                                                                                                                                       
                                                                ?>
                                                                <div class="card bill_exists mb-10 mt-5">
                                                                    <div class="row">
                                                                        <div class="col-lg-8 col-md-12 col-sm-12">
                                                                            <input type="text" hidden value="<?= $items[
                                                                                            'cartId'
                                                                                        ] ?>" name="cartId" placeholder="CartId" required readonly/>
                                                                            <p class="head"><?= $get_user->name ?></p>
                                                                            <p class="sub-head"><?= $get_billing->location ?>, <?= $get_billing->street ?></p>
                                                                            <p class="text"><?= $get_billing->phone ?></p>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                                            <a href="" class="add_address">
                                                                                <p><i class="fa fa-plus"></i>  Change Address</p>
                                                                            </a>
                                                                            <a id="bill_btn" style="width: 100%; cursor:pointer;" name="place-order" class="float-right proceed_btn">PROCEED TO NEXT STEP</a>
                                                                        </div>

                                                                    </div>
                                                                    
                                                                </div>
                                                                <?php else: ?>
                                                                <div class="form-text pb-2 border-bottom">
                                                                    <p><b> Fill in the correct information.</p></b>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="checkbox-form">
                                                                            
                                                                            <div class="row">
                                                                                
                                                                                <div class="col-md-12 mt-3">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Fullname <span class="required">*</span></label>
                                                                                        
                                                                                        <input type="text" hidden value="<?= $items[
                                                                                            'cartId'
                                                                                        ] ?>" name="cartId" placeholder="CartId" required readonly/>
                                                                                        <input type="text"  value="<?= isset(
                                                                                            $user
                                                                                        )
                                                                                            ? $user->name
                                                                                            : '' ?>" name="name" placeholder="Fullname" required readonly/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Email <span class="required">*</span></label>
                                                                                        <input type="email" name="email" value="<?= isset(
                                                                                            $user
                                                                                        )
                                                                                            ? $user->email
                                                                                            : '' ?>" placeholder="Email" required readonly/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Phone <span class="required">*</span></label>
                                                                                        <input type="text" placeholder="Phone" value="<?= isset(
                                                                                            $user
                                                                                        )
                                                                                            ? $user->phone
                                                                                            : '' ?>" name="phone" required readonly/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Address <span class="required">*</span></label>
                                                                                        <input type="text" placeholder="Address" value="<?= isset(
                                                                                            $user
                                                                                        )
                                                                                            ? $user->address
                                                                                            : '' ?>" name="address" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Street <span class="required">(optional)</span></label>
                                                                                        <input type="text" name="street" placeholder="Street" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="checkout-form-list">
                                                                                        <label>Division <span class="required">*</span></label>
                                                                                        <select name="division" class="select" id="" required>
                                                                                            <option value="Kampala">Kampala</option>
                                                                                            <option value="Wakiso">Wakiso</option>
                                                                                            <option value="Nakawa">Nakawa</option>
                                                                                            <option value="Kawempe">Kawempe</option>
                                                                                            <option value="Rubaga">Rubaga</option>
                                                                                            <option value="Kasubi">Kasubi</option>
                                                                                            <option value="Kololo">Kololo</option>
                                                                                            <option value="Ntinda">Ntinda</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="order-button-payment mt-20">
                                                                            <a id="bill_btn" style="width: 100%; cursor:pointer;" name="place-order" class="float-right t-y-btn t-y-btn-grey">PROCEED TO NEXT STEP</a>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                    
                                                                </div>
                                                                <?php endif; else: echo '<h5 style="color:red;">Login first to continue</h5>';endif;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card accordion mb-25" id="checkoutAccordion">
                                                    <div class="accordion-item">
                                                        <h2 class="card-header accordion-header bg-no" id="checkoutOne">
                                                            <span class="accordion-button collapsed">
                                                                2. DELIVERY DETAILS
                                                                <!-- <span class="building px-2"><i class="fad fa-university"></i></span> -->
                                                            </span>
                                                        </h2>
                                                        <!-- <?php if($check_bill_address -> num_rows > 0): echo "show"; endif?> -->
                                                        <div id="itemDelivery" class="card-body accordion-collapse collapse  " aria-labelledby="deliverytwo" data-bs-parent="#checkoutAccordion">
                                                            <div class="accordion-body">
                                                                <h5>How do you want your order delivered?</h5>
                                                                <div class="shipping border-bottom">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="delivery" id="flexRadioDefault1" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Standard Shipping
                                                                        </label>
                                                                        <p>Deliverd between <b>1-2 working days</b> for <span>UGX 5,000</span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="pickup">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="delivery" id="flexRadioDefault1" >
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Pickup Station
                                                                        </label>
                                                                        <p>Ready for pick up between <b>2-3 working days</b> with cheaper Local Delivery Fees</p>
                                                                    </div>
                                                                    <div class="your-order m-auto col-lg-10 col-md-12 col-sm-12">
                                                                                <h4 style="color: #ffc107 !important;">Your order summary</h4>
                                                                                <div class="your-order-table table-responsive">
                                                                                    <table>
                                                                                        <tbody>
                                                                                            <?php
                                                                                                include 'includes/site/fetch_order_summary.inc.php';
                                                                                                ?>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr class="cart-subtotal">
                                                                                                <th style="font-weight: bold;">Cart Subtotal</th>
                                                                                                <td style="font-weight: bold;">
                                                                                                    <span class="amount">
                                                                                                        UGX 
                                                                                                            <?php 
                                                                                                                if (isset($Total)): echo number_format($Total,2,'.',',');
                                                                                                                else:
                                                                                                                    echo '0';
                                                                                                                endif; 
                                                                                                            ?>
                                                                                                    </span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr class="shipping">
                                                                                                <th style="font-weight: bold;">Delivery</th>
                                                                                                <td>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            
                                                                                                            <label style="font-weight: bold;">
                                                                                                                Delivery costs: <span class="amount">UGX 5,000.00</span>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr class="order-total">
                                                                                                <th>Order Total</th>
                                                                                                <input value="<?= $orderTotal ?>" hidden name="orderTotal" type="text" required/>
                                                                                                <td><strong><span class="amount">UGX <?php if (
                                                                                                    isset(
                                                                                                        $orderTotal
                                                                                                    )
                                                                                                ):
                                                                                                    echo number_format(
                                                                                                        $orderTotal,
                                                                                                        2,
                                                                                                        '.',
                                                                                                        ','
                                                                                                    );
                                                                                                else:
                                                                                                    echo '0';
                                                                                                endif; ?></span></strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>
                                                                                </div> 
                                                                            </div>
                                                                </div>
                                                            </div>
                                                            <div class="order-button-payment mt-2">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col-md-11">
                                                                        <p class="text-center">You will be able to add a payment method of your choice in the next step</p>
                                                                        <div class="order-button-payment mt-20">
                                                                            <a style="width: 100%; cursor:pointer;" id="delivery_btn" name="place-order" class="t-y-btn t-y-btn-grey">PROCEED TO NEXT STEP</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card accordion mb-25" id="checkoutAccordion">
                                                    <div class="accordion-item">
                                                        <h2 class="card-header accordion-header bg-no " id="checkoutOne">
                                                            <span class="accordion-button collapsed">
                                                                2. PAYMENT METHOD
                                                                <!-- <span class="building px-2"><i class="fad fa-university"></i></span> -->
                                                            </span>
                                                        </h2>
                                                        <div id="paymentMethod" class="accordion-collapse collapse" aria-labelledby="paymentMethodthree" data-bs-parent="#checkoutAccordion">
                                                            <div class="accordion-body">
                                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Cash on Delivery" name="payment-method" id="cod">
                                                                <label class="form-check-label" for="cod" style="cursor: pointer;">
                                                                    Cash on Delivery
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Mobile Money" name="payment-method" id="mm">
                                                                <label class="form-check-label" for="mm" style="cursor: pointer;">
                                                                    Mobile Money
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Visa Card" name="payment-method" id="vc">
                                                                <label class="form-check-label" for="vc" style="cursor: pointer;">
                                                                    Visa Card
                                                                </label>
                                                            </div>
                                                            
                                                        <div class="order-button-payment mt-20">
                                                            <button type="submit" name="place-order" class="t-y-btn t-y-btn-grey">Place order</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <script>
                        const billingDiv = document.getElementById("bankOne");
                        const deliveryDiv = document.getElementById("itemDelivery");
                        const paymentDiv = document.getElementById("paymentMethod");
                        const btnbill = document.getElementById("bill_btn");
                        const btndelivery = document.getElementById("delivery_btn");
                        const btnpay = document.getElementById("bill_btn");
                        btnbill.onclick = function () {
                        if (deliveryDiv.className !== "show") {
                            deliveryDiv.classList.toggle('show');
                            billingDiv.classList.toggle('show');
                        }
                        };
                        btndelivery.onclick = function(){
                            if (paymentDiv.className !== "show") {
                                deliveryDiv.classList.toggle('show');
                                paymentDiv.classList.toggle('show');
                            }
                        };

                    </script>