<?php
function fetchbrands(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productBrand');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $brand) {
                echo '
                    <tr>
                        <td>' .
                        $brand['brandId'] .
                        '</td>
                            <td>' .
                        $brand['brandName'] .
                        '</td>
                            <td>' .
                        $brand['date_created'] .
                        '</td>
                            <td>
                                <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                                <a href="../../includes/admin/delete_file.inc.php?id='."#".'&fn=drug" class="btn btn-sm btn-danger ml-1"><i class="fa fa-trash"></i></button>
                            </td>
                    </tr>
                ';
                $i++;
            }
        } else {
            echo ' 
                <h2 class="m-auto not-available">No brands available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}
function fetchMaincategories(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productMainCategory');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $cat) {
                echo '
                    <tr>
                     <td>' .
                    $cat['mcId'] .
                    '</td>
                        <td>' .
                    $cat['name'] .
                    '</td>
                        <td>' .
                    $cat['date_created'] .
                    '</td>
                        <td>
                            <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                            <a href="../../includes/admin/delete_file.inc.php?id='."#".'&fn=drug" class="btn btn-sm btn-danger ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                ';
                $i++;
            }
        } else {
            echo ' 
                <h2 class="m-auto not-available">No categories available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}
function fetchCategories(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productCategory');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $cat) {
                $mcId = $cat['mcId'];
                $mc_ = mysqli_query($con, "SELECT * FROM productMainCategory WHERE mcId = '$mcId'");
                $res = $mc_->fetch_object();

                echo '
                     <tr>
                     <td>' .
                    $cat['categoryId'] .
                    '</td>
                    <td>' .
                    $res->name.
                    '</td>
                        <td>' .
                    $cat['categoryName'] .
                    '</td>
                        <td>' .
                    $cat['date_created'] .
                    '</td>
                        <td>
                            <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                            <a href="../../includes/admin/delete_file.inc.php?id='."#".'&fn=drug" class="btn btn-sm btn-danger ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                ';
                $i++;
            }
        } else {
            echo ' 
                <h2 class="m-auto not-available">No categories available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}
function fetchSubcategories(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productSubcategory');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $cat) {
                echo '
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="property grid">
                                    <div class="thumb">
                                        <img class="img-fluid rounded" src="../uploads/subcategories/' .$cat['subPic'] .'" alt="' .$cat['subName'] .'">
                                        <ul class="list-unstyled icon mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pencil"></i></a></li>
                                            <li class="list-inline-item"><a name="delete-category" href="../../includes/admin/delete_file.inc.php?id='.$cat['subcategoryId'] .'&fn=category"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="details flex-grow-1">
                                        <div class="tc_content">
                                            <h4>' .$cat['subName'] .'</h4> 
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">     
                                            <div>' .$cat['date_created'] .'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                ';
                $i++;
            }
        } else {
            echo ' 
                <h2 class="m-auto not-available">No categories available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}

function fetchProduct(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM product');
        if ($query) {
            $i = 1;
            foreach ($query as $prod) {
                $scId = $prod['subcategoryId'];
                $sql = mysqli_query(
                    $con,
                    "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
                );
                $sc_name = $sql->fetch_object();
                echo '
                    <tr>
                        <td><span class="list-icon"><img class="avatar" src="../uploads/products/main/' .
                    $prod['main_pic'] .
                    '" alt=""></span></td>
                        <td>' .
                    $prod['pName'] .
                    '</td>
                        <td>' .
                    $sc_name->subName .
                    '</td>
                        <td>' .
                    $prod['quantity'] .
                    '</td>
                        <td>' .
                    $prod['price'] .
                    '</td>
                        <td>
                            '.($prod['availability']) .'
                        </td>
                        <td>' .
                    $prod['date_created'] .
                    '</td>
                        <td>
                            <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                            <a href="../../includes/admin/delete_file.inc.php?id='."#".'&fn=drug" class="btn btn-sm btn-danger ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                ';
                $i++;
            }
        } else {
            echo ' 
            <tr>
                    <td><h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No products available for now.</h2></td>
                </tr>
            ';
        }
    } catch (Exception $e) {
    }
}

function fetchBlog(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM newsBlogs');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $blog) {
                echo '
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="property grid">
                                    <div class="thumb">
                                        <img class="img-fluid rounded" src="../../uploads/blogs/' .
                    $blog['blogpic'] .
                    '" alt="' .
                    $blog['title'] .
                    '">
                                        <ul class="list-unstyled icon mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pencil"></i></a></li>
                                            <li class="list-inline-item"><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="details flex-grow-1">
                                        <div class="tc_content">
                                            <h4>' .
                    $blog['title'] .
                    '</h4> 
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">     
                                            <div>' .
                    $blog['date_created'] .
                    '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                ';
                $i++;
            }
        } else {
            echo ' 
                <tr>
                    <td><h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No categories available for now.</h2></td>
                </tr>
            ';
        }
    } catch (Exception $e) {
    }
}

function fetchOrders(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM  userOrder');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $order) {

                echo '
                    <tr>
                        <td><span class="list-name">' .
                    $order['orderId'] .
                    '</span></td>
                        <td>'.$order['cartId'] .'</td>
                        <td>'.$order['usrId'] .'</td>
                        <td>'.$order['status'] .'</td>
                        <td>'.$order['orderProgress'].'</td>
                        <td>'.$order['subtotal'].'</td>
                        <td><span class="badge badge-success bg-success text-white">Paid</span></td>
                        <td>
                            <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                            <a href="includes/delete_file.inc.php?id=' .$order['orderId'].'&fn=order" class="btn btn-outline-secondary ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                ';
                $i++;
            }
        } else {
            echo '<h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No placed orders available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}
function fetchPayments(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM  orderPayments');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $payment) {
                echo '
                    <tr>
                        <td><span class="list-name">' .
                    $payment['paymentId'] .
                    '</span></td>
                        <td><span class="list-name">' .
                    $payment['orderId'] .
                    '</span></td>
                        <td><span class="list-name">' .
                    $payment['usrId'] .
                    '</span></td>
                    <td><span class="list-name">' .
                    $payment['billId'] .
                    '</span></td>
                    <td>' .
                    $payment['paymentOption'] .
                    '</td> 
                        <td>' .
                    $payment['payedAmount'] .
                    '</td>
                    <td>' .
                    $payment['paymentStatus'] .
                    '</td>
                              
                        <td>' .
                    $payment['dateCreated	'] .
                    '</td>       
                        <td>
                            <a href="./print_image.inc.php" class="btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#EditRoom"><i class="fa fa-pencil"></i></button>
                            <a href="includes/delete_file.inc.php?id=' .
                    $payment['paymentId'] .
                    '" class="btn btn-sm btn-danger ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                ';
                $i++;
            }
        } else {
            echo '
            <h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No payments made in the system for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
}

function fetchFeedbacks(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM  clientsFeedbacks');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $feed) {
                echo '
                    
                        <li class="row clearfix mb-4">
                                    <a href="feed-details.php?id='.$feed['feedId'].'">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src=""></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="mb-0">'.$feed['name'].'</h5>
                                            <span class="mb-0">'.$feed['email'].'</span>
                                            <span class="mb-0">'.$feed['phone'].'</span>
                                            <p>'.$feed['message'].'</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">'.$feed['dateCreated'].'</a></li>
                                                <li><a href="javascript:void(0);">Reply</a></li>
                                            </ul>
                                        </div>
                                    </a> 
                        </li>
                    

                ';
                $i++;
            }
        } else {
            echo ' 
                <tr>
                    <td><h2 class="col-lg-12 m-auto" style="color:red; font-size:20px; padding:15px;">No Feedbacks messages so far.</h2></td>
                </tr>
            ';
        }
    } catch (Exception $e) {
    }
}
