                                                    <div role="tabpanel" class="tab-pane" id="Section3">
                                                        <h3>Payment Details</h3>
                                                        <div class="card accordion mb-25" id="checkoutAccordion">
                                                            <div class="accordion-item">
                                                                <h2 class="card-header accordion-header bg-no " id="checkoutOne">
                                                                    <span class="accordion-button collapsed">
                                                                        PAYMENT METHOD
                                                                        <!-- <span class="building px-2"><i class="fad fa-university"></i></span> -->
                                                                    </span>
                                                                </h2>
                                                                <div id="paymentMethod"  class="accordion-collapse " aria-labelledby="paymentMethodthree" data-bs-parent="#checkoutAccordion">
                                                                    <div class="accordion-body">
                                                                        Choose the mode of Payment preferable to you.
                                                                        Please use your ID as the payment reference.
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Cash on Delivery" name="payment-method" id="cod">
                                                                        <label class="form-check-label" for="cod" style="cursor: pointer;">
                                                                            Cash on Delivery
                                                                            <i class="fa fa-money-bill"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Mobile Money" name="payment-method" id="mm" onclick="number()">
                                                                        <label class="form-check-label" for="mm" style="cursor: pointer;">
                                                                            Mobile Money
                                                                            <span><i class="fa fa-mobile"></i></span>
                                                                        </label>
                                                                        <div class="third-form">
                                                                            <div class="row register-form p-3">
                                                                                <div class="col-md-6 mt-3">
                                                                                    <div class="form-group" id="myNumber" style="display: none;">
                                                                                        <span class="helper-text">Registered Phone-Number</span>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                                                            </div>
                                                                                            <input class="form-control" name="phone number" type="text" placeholder="Business number" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Visa Card" name="payment-method" id="vc">
                                                                        <label class="form-check-label" for="vc" style="cursor: pointer;">
                                                                            Visa Card
                                                                        </label>
                                                                    </div> -->
                                                                    
                                                                    <div class="order-button-payment mt-20">
                                                                        <button name="place-order" class="t-y-btn t-y-btn-grey">Confirm Details</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                