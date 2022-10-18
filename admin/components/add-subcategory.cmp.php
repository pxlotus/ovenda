<section>
    <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 m-auto">
                    <div class="card">
                        <div class="header">
                            <h2>Add product subcategory</h2>
                            
                        </div>
                        <div class="body">
                            <form action="../includes/admin/submissions.inc.php" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group" style="color:green;">
                                            <?php 
                                            if (isset($_SESSION['msg'])) {
                                                echo '<span class="color-green text-center" style="text-align:center;">' .
                                                    $_SESSION['msg'] .
                                                    '</span>';
                                            }
                                            unset($_SESSION['msg']);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" name="c_name" required placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Select main category</label>
                                       <select class="form-control" name="cId">
                                        <?php
                                            $db_root ="../dbconnect/connect.inc.php";
                                            include $db_root;
                                            $sql = mysqli_query($con, "SELECT * FROM productCategory");
                                            if ($sql){
                                                $i = 1;
                                                foreach($sql as $cat){
                                                    echo'<option value="'.$cat['categoryId'].'">'.$cat['categoryName'].'</option>';
                                                    $i++;
                                                }
                                                # code...
                                            }
                                        ?>

                                       </select>
                                    </div>
                                </div>
                                    
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Upload category photo</label>
                                            <input type="file" name="c_pic" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" name="add_subcategory" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="button">Cancel</button>

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
</section>