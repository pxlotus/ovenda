                                <link rel="stylesheet" href="<?=$url?>static/siteassets/css/pay.css">
                                <div class="container row mt-25" id="profile-vertical" role="tabpanel" aria-labelledby="profile-vertical-tab">
                                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                                        <form action="includes/site/payment_handler.inc.php" method="POST">
                                            <!-- <div class="icon-logos"> -->
                                                <div class="container row">
                                                    <div class="col-lg-8 m-auto col-md-6 col-sm-12 text-center pills">
                                                            <img src="<?= $url ?>static/siteassets/img/pill.png" alt="">

                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                            <div class="row inpt-tabs mx-auto">
                                                <div class="col-md-12 px-3">
                                                    <div class="form-group row py-2">
                                                         <div class="col-md-12 mb-3">
                                                            <select name="serviceProvider" class="select-service form-control" id="">
                                                                <option value="" disabled selected hidden>Choose service provider...</option>
                                                                <option value="Airtel Money">Airtel Money</option>
                                                                <option value="MTN Mobile Money">MTN Mobile Money</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <input type="text" class="form-control" name="name" placeholder="Registered Name">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-2">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="amount" placeholder="Amount Payable">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-2">
                                                        <div class="col-md-12">
                                                            <button type="submit" name="payment-button" class="btn btn-warning"><i class="fad fa-bags-shopping"></i> Confirm Payment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    
                                </div>