    <section>
        <form action="../includes/admin/submissions.inc.php" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 m-auto">
                    <div class="card">
                        
                        <div class="header">
                            <h2>Add a new Product <small>Fill up the form to add a product to the database.</small> </h2>                            
                        </div>
                        <div class="body">

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

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Product Brand</label>
                                        <select class="form-control" name="brandId">
                                                <?php
                                                    $db_root ="../dbconnect/connect.inc.php";
                                                    include $db_root;
                                                    $sql = mysqli_query($con, "SELECT * FROM productBrand");
                                                    if ($sql){
                                                        $i = 1;
                                                        foreach($sql as $brand){
                                                            echo'<option value="'.$brand['brandId'].'">'.$brand['brandName'].'</option>';
                                                            $i++;
                                                        }
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Product Sub-category</label>
                                        <select class="form-control" name="scId">
                                                <?php
                                                    $db_root ="../dbconnect/connect.inc.php";
                                                    include $db_root;
                                                    $sql = mysqli_query($con, "SELECT * FROM productSubcategory");
                                                    if ($sql){
                                                        $i = 1;
                                                        foreach($sql as $cat){
                                                            echo'<option value="'.$cat['subcategoryId'].'">'.$cat['subName'].'</option>';
                                                            $i++;
                                                        }
                                                        # code...
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <input type="text" name="prod_name" class="form-control" placeholder="Product Name">
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Product Price</label>
                                        <input type="text" name="price" class="form-control" placeholder="Price" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix mt-2">
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="text" name="qty" class="form-control" placeholder="Quantity" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div>
                                            <label class="fancy-radio">
                                                <input name="avis" type="checkbox" value="true">
                                                <span><i></i>Availability in Stock</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input name="topsales" type="checkbox" value="true">
                                                <span><i></i>Top sales</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input name="toprated" type="checkbox" value="true">
                                                <span><i></i>Top Rated</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input name="flashsales" type="checkbox" value="true">
                                                <span><i></i>New Arrival</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input name="weekdeals" type="checkbox"  value="true">
                                                <span><i></i>Week Deals</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea class="summernote" name="prod_desc" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-10  m-auto col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Upload photos related to the med <small>You have the ability to select more photos</small> </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Upload Main Drug Image</label>
                                        <input type="file" name="main_pic" class="form-control" required>
                                    </div>
                                </div>  
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Hover Image</label>
                                        <input type="file" name="hov_img" class="form-control" placeholder="Select photos">
                                    </div>
                                </div>  
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Other Images</label>
                                        <input type="file" name="files[]" class="form-control" placeholder="Select photos" multiple>
                                    </div>
                                </div>  
                                <div class="col-sm-12">
                                    <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
           
    </section>