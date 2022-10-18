<?php
    include "../includes/admin/count_file.inc.php";
?>
<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row clearfix">

                        <div class="col-lg-4 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <div class="carousel-inner">
                                        
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-list-alt"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold mb-2 text-uppercase"> Main Product Categories</div>
                                                        <h4 class="number mb-0"><?= $mc_count ?><span class="font-12 text-muted"> Main Product Categories</span></h4>
                                                        <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-medkit"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold mb-2 text-uppercase">Available Categories</div>
                                                    <h4 class="number mb-0"><?= $pc_count ?><span class="font-12 text-muted"> drug/s</span></h4>
                                                    <small class="text-muted">All products categories for all items in stock</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold font-weight-bold mb-2 text-uppercase">Total Placed Orders</div>
                                                    <h4 class="number mb-0"><?= $orders_count ?> <span class="font-12 text-muted"><i class="fa fa-level-up"></i> Order/s</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold font-weight-bold mb-2 text-uppercase">Total payments Made</div>
                                                    <h4 class="number mb-0"><?= $payments_count ?> <span class="font-12 text-muted"><i class="fa fa-level-up"></i> payments</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="3500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold mb-2 text-uppercase">Published Blogs</div>
                                                    <h4 class="number mb-0"><?= $pc_count ?> <span class="font-12 text-muted"><i class="fa fa-level-up"></i> blogs</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item ">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text font-weight-bold mb-2 text-uppercase">Postive Feedbacks</div>
                                                    <h4 class="number mb-0"><?= $feeds_count ?> <span class="font-12 text-muted"><i class="fa fa-level-up"></i> feeds</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                
</div>

<section>
    <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="fa fa-user-o"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">New Patient</div>
                                <h4 class="number mb-0">351 <span class="font-12"><i class="fa fa-level-up"></i> 8.1%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="fa fa-bed"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Admited</div>
                                <h4 class="number mb-0">219 <span class="font-12"><i class="fa fa-level-up"></i> 11%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="fa fa-undo"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Re-Admits</div>
                                <h4 class="number mb-0">71 <span class="font-12"><i class="fa fa-level-down"></i> 5.2%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon bg-light"><i class="fa fa-heart"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Discharged</div>
                                <h4 class="number mb-0">408 <span class="font-12"><i class="fa fa-level-up"></i> 3.8%</span></h4>
                                <small>Analytics for last month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-info"><i class="fa fa-building"></i> </div>
                            <div class="content">
                                <div class="text">Categories</div>
                                <h5 class="number"><?= $mc_count ?></h5>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-warning"><i class="fa fa-area-chart"></i> </div>
                            <div class="content">
                                <div class="text">Growth</div>
                                <h5 class="number">62%</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon text-danger"><i class="fa fa-shopping-cart"></i> </div>
                            <div class="content">
                                <div class="text">Total Sales</div>
                                <h5 class="number">$3205</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-tag"></i> </div>
                            <div class="content">
                                <div class="text">Rented</div>
                                <h5 class="number">3,217</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card text-center">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="fa fa-eye fa-2x"></i>
                                        <h4>2,365</h4>
                                        <span>Post View</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="fa fa-thumbs-o-up fa-2x"></i>
                                        <h4>365</h4>
                                        <span>Likes</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="fa fa-comments fa-2x"></i>
                                        <h4>65</h4>
                                        <span>Comments</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="fa fa-user fa-2x"></i>
                                        <h4>2,055</h4>
                                        <span>Profile Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>