<section>
    <form action="../includes/admin/submissions.inc.php" method="POST" enctype="multipart/form-data">
    <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
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
                                <div class="col-sm-12   ">
                                    <div class="form-group">
                                        <label for="">Blog Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Blog Title" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Blog Tags</label>
                                        <input type="text" class="form-control" name="tags" placeholder="Tags" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Blog Author</label>

                                        <input type="text" class="form-control" name="author" placeholder="Author" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Blog Category</label>
                                        <select class="form-control show-tick" name="category" required>
                                            <option>Select Blog Category</option>
                                            <option>Web Design</option>
                                            <option value="RealEstate">RealEstate</option>
                                            <option value="Medicine">Medicine</option>
                                            <option value="Photography">Photography</option>
                                            <option value="Videography">Videography</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Lifestyle">Lifestyle</option>
                                            <option value="Sports">Sports</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Main Blog Photo</label>

                                        <input type="file" class="form-control" name="main_pic" placeholder="Main Pic" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Other Blog Photo</label>
                                        <input type="file" class="form-control" name="other_pic" placeholder="Other Pic" required>
                                    </div>
                                </div>
                            </div>
                            
                            <textarea class="summernote" name="blog_desc" required></textarea>
                            <button type="submit" name="add_blog" class="btn btn-block btn-primary m-t-20">Post</button>
                        </div>
                    </div>
                </div>            
            </div>
    </form>
</section>