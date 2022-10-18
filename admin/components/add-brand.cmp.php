<section>
    <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 m-auto">
                    <div class="card">
                        <div class="header">
                            <h2>Add a product brand</h2>
                            
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
                                            <label>Brand Name</label>
                                            <input type="text" class="form-control" name="b_name" required placeholder="Brand Name">
                                        </div>
                                    </div>

                                    
                                    
                                    
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Upload brand photo</label>
                                            <input type="file" name="b_pic" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" name="add_brand" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="button">Cancel</button>

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
</section>