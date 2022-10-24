<!-- <div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="property grid">
                                    <div class="thumb">
                                        <img class="img-fluid rounded" src="../../uploads/categories/1657963303.jpg" alt="Vaginal Issues">
                                        <ul class="list-unstyled icon mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pencil"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="details flex-grow-1">
                                        <div class="tc_content">
                                            <h4>Vaginal Issues</h4> 
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">     
                                            <div>2022-07-16</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div> -->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="header">
                            <h2>Patients List</h2>
                            <ul class="header-dropdown">
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
                            </ul>
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
                                    <div class="form-group" style="color:red;">
                                <?php 
                                    if (isset($_SESSION['statusMsg'])) {
                                        echo '<span class="color-green text-center" style="text-align:center; color:green; font-size:20px;"><i class="fa fa-check-circle-o"></i> ' .
                                            $_SESSION['statusMsg'] .
                                            '</span>';
                                            }
                                        unset($_SESSION['statusMsg']);
                                ?>
                            </div>
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