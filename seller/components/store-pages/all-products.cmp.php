    <div id="main-content">
        <div class="contianer-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="row mt-2">
                            <div class="col-md-10">
                                <div class="header">
                                    <h2>Products List</h2>
                                    <!-- <ul class="header-dropdown">
                                        <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Weekly">W</a></li>
                                        <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Monthly">M</a></li>
                                        <li><a class="tab_btn active" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yearly">Y</a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    
                                    </ul>-->
                                
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="add-btn p-2 d-flex justify-content-center"">
                                    <a href="./add-products.php"><button type="button" class="btn btn-success btn-small">Add product</button></a>
                                </div>
                            </div>
                        </div>                                               
                        <div class="body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                    <!-- <div class="form-group" style="color:red;">
                                        <?php 
                                            if (isset($_SESSION['statusMsg'])) {
                                                echo '<span class="color-green text-center" style="text-align:center; color:green; font-size:20px;"><i class="fa fa-check-circle-o"></i> ' .
                                                    $_SESSION['statusMsg'] .
                                                    '</span>';
                                                    }
                                                unset($_SESSION['statusMsg']);
                                        ?>
                                    </div> -->
                                    <table class="table mb-0 table-hover">
                                        <thead>
                                            <tr>                                       
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Subcategory</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Entry Date</th>
                                                <th>Expiry Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "../includes/admin/fetch_file.inc.php";
                                                fetchProduct();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>