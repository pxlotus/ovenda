<?php
function fetchCategories(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productMainCategory');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $mc) {
                $mcId = $mc['mcId'];
                $sql_cat = mysqli_query($con, "SELECT * FROM productCategory WHERE mcId = '$mcId'");
                $x = 1;
                foreach($sql_cat as $cat){
                    $cId = $cat['categoryId'];
                    $sql_sc = mysqli_query($con, "SELECT * FROM productSubcategory WHERE categoryId = '$cId'");
                    $y = 1;
                }
                
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

function fetchCategoriesSlider(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM drugCategories');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $cat) {
                echo '
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-2">
                                        <a href="#"><img src="../uploads/categories/'.$cat['categoryPhoto'].'" class="img-responsive center-block"></a>
                                        <h4 class="text-center">'.$cat['name'].'</h4>
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

function fetchTopsales(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;


    if(isset($_SESSION['cartId'])){
        $cartId = $_SESSION['cartId'];
    }
    else{
        $cartId = "";
    }
    try {
        $query = mysqli_query($con, "SELECT * FROM product WHERE topSales='1'");
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                $scId = $prod['subcategoryId'];
                $sql = mysqli_query(
                    $con,
                    "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
                );
                $c_name = $sql->fetch_object();
                echo '
                                        <div class="product__item product__item-2 white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product/'.$prod['productId'].'" class="w-img">
                                                    <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product"/>
                                                    <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a value="'.$prod['productId'].'" href="#" data-bs-id="'.$prod['productId'].'" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php">'.$prod['pName'].'</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="price">UGX '.$prod['price'].'</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <form action="includes/site/add_to_cart.inc.php" method="POST">
                                                    <input type="text" hidden name="prodId" value="'.$prod['productId'].'">
                                                    <input type="text" hidden name="cartId" value="'.$cartId.'">
                                                    <input type="text" hidden name="price" value="'.$prod['price'].'">
                                                    <input name="qty" hidden type="text" value="1" />
                                                    <button type="submit">Add to Cart</button>
                                                </form>
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

function fetchNewArrival(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    if(isset($_SESSION['cartId'])){
        $cartId = $_SESSION['cartId'];
    }
    else{
        $cartId = "";
    }
    try {
        $query = mysqli_query($con, "SELECT * FROM product WHERE newArrival='1'");
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                $scId = $prod['subcategoryId'];
                $sql = mysqli_query(
                    $con,
                    "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
                );
                $c_name = $sql->fetch_object();
                echo '
                                        <div class="product__item product__item-2 white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product/'.$prod['productId'].'" class="w-img">
                                                    <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product"/>
                                                    <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php">'.$prod['pName'].'</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="price">UGX '.$prod['price'].'</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <form action="includes/site/add_to_cart.inc.php" method="POST">
                                                    <input type="text" hidden name="prodId" value="'.$prod['productId'].'">
                                                    <input type="text" hidden name="cartId" value="'.$cartId.'">
                                                    <input type="text" hidden name="price" value="'.$prod['price'].'">
                                                    <input name="qty" hidden type="text" value="1" />
                                                    <button type="submit">Add to Cart</button>
                                                </form>
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

function fetchTopRated(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    if(isset($_SESSION['cartId'])){
        $cartId = $_SESSION['cartId'];
    }
    else{
        $cartId = "";
    }
    try {
        $query = mysqli_query($con, "SELECT * FROM product WHERE topRated='1'");
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                $scId = $prod['subcategoryId'];
                $sql = mysqli_query(
                    $con,
                    "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
                );
                $c_name = $sql->fetch_object();
                echo '
                                        <div class="product__item product__item-2 white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product/'.$prod['productId'].'" class="w-img">
                                                    <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product"/>
                                                    <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.php">'.$prod['pName'].'</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="price">UGX '.$prod['price'].'</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <form action="includes/site/add_to_cart.inc.php" method="POST">
                                                    <input type="text" hidden name="prodId" value="'.$prod['productId'].'">
                                                    <input type="text" hidden name="cartId" value="'.$cartId.'">
                                                    <input type="text" hidden name="price" value="'.$prod['price'].'">
                                                    <input name="qty" hidden type="text" value="1" />
                                                    <button type="submit">Add to Cart</button>
                                                </form>
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
function fetchweekDeals(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, "SELECT * FROM product WHERE weekDeals='1'");
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                $scId = $prod['subcategoryId'];
                $sql = mysqli_query(
                    $con,
                    "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
                );
                $c_name = $sql->fetch_object();
                echo '
                        <div class="product__deal-item">
                                    <div class="product__item product__item-2 product__sale mb-30">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="product__thumb product__thumb-big p-relative">
                                                    <a href="product/'.$prod['productId'].'" class="w-img">
                                                        <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product" />
                                                        <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                                    </a>
                                                    <div class="product__offer">
                                                        <span class="discount">-55%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="product__content product__content-2">
                                                    <h6 class="product-name product__deal-name">
                                                        <a class="product-item-link" href="product/'.$prod['productId'].'"> '.$prod['pName'].' </a>
                                                    </h6>
                                                    <div class="rating rating-2">
                                                        <ul>
                                                            <li>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="new mb-5 text-uppercase">UGX '.$prod['price'].'</span>
                                                    <!--<span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p class="mt-10">'.$prod['description'].'</p>-->
                                                    <div class="product__countdown">
                                                        <h4>Hurry Up! Offer ends in:</h4>
                                                        <div class="countdown-wrapper">
                                                            <div data-countdown data-date="Aug 18 2022 20:20:22">
                                                                <ul>
                                                                    <li>
                                                                        <span data-days>0</span> 
                                                                        <p>Days</p>
                                                                    </li>
                                                                    <li>
                                                                        <span data-hours>0</span> 
                                                                        <p>Hours</p> 
                                                                    </li>
                                                                    <li>
                                                                        <span data-minutes>0</span> 
                                                                        <p>mins</p>
                                                                    </li>
                                                                    <li>
                                                                        <span data-seconds>0</span> 
                                                                        <p>secs</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
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

// function fetchElectronics(){
//     $db_root = 'dbconnect/connect.inc.php';
//     include $db_root;
//     try {
//         $query = mysqli_query($con, "SELECT * FROM product ");
//         if (mysqli_num_rows($query) > 0) {
//             $i = 1;
//             foreach ($query as $prod) {
//                 $scId = $prod['subcategoryId'];
//                 $sql = mysqli_query(
//                     $con,
//                     "SELECT * FROM productSubcategory WHERE subcategoryId = '$scId'"
//                 );
//                 $c_name = $sql->fetch_object();
//                 echo '
//                         <div class="product__deal-item">
//                                     <div class="product__item product__item-2 product__sale mb-30">
//                                         <div class="row">
//                                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
//                                                 <div class="product__thumb product__thumb-big p-relative">
//                                                     <a href="product/'.$prod['productId'].'" class="w-img">
//                                                         <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product" />
//                                                         <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
//                                                     </a>
//                                                     <div class="product__offer">
//                                                         <span class="discount">-55%</span>
//                                                     </div>
//                                                 </div>
//                                             </div>
//                                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
//                                                 <div class="product__content product__content-2">
//                                                     <h6 class="product-name product__deal-name">
//                                                         <a class="product-item-link" href="product/'.$prod['productId'].'"> '.$prod['pName'].' </a>
//                                                     </h6>
//                                                     <div class="rating rating-2">
//                                                         <ul>
//                                                             <li>
//                                                                 <a href="#"><i class="far fa-star"></i></a>
//                                                             </li>
//                                                             <li>
//                                                                 <a href="#"><i class="far fa-star"></i></a>
//                                                             </li>
//                                                             <li>
//                                                                 <a href="#"><i class="far fa-star"></i></a>
//                                                             </li>
//                                                             <li>
//                                                                 <a href="#"><i class="far fa-star"></i></a>
//                                                             </li>
//                                                             <li>
//                                                                 <a href="#"><i class="far fa-star"></i></a>
//                                                             </li>
//                                                         </ul>
//                                                     </div>
//                                                     <span class="new mb-5">UGX '.$prod['price'].'</span>
//                                                     <!--<span class="price-old mb-5"> <del>$125.00</del> </span>
//                                                     <p class="mt-10">'.$prod['description'].'</p>-->
//                                                     <div class="product__countdown">
//                                                         <h4>Hurry Up! Offer ends in:</h4>
//                                                         <div class="countdown-wrapper">
//                                                             <div data-countdown data-date="Aug 18 2022 20:20:22">
//                                                                 <ul>
//                                                                     <li>
//                                                                         <span data-days>0</span> 
//                                                                         <p>Days</p>
//                                                                     </li>
//                                                                     <li>
//                                                                         <span data-hours>0</span> 
//                                                                         <p>Hours</p> 
//                                                                     </li>
//                                                                     <li>
//                                                                         <span data-minutes>0</span> 
//                                                                         <p>mins</p>
//                                                                     </li>
//                                                                     <li>
//                                                                         <span data-seconds>0</span> 
//                                                                         <p>secs</p>
//                                                                     </li>
//                                                                 </ul>
//                                                             </div>
//                                                         </div>
//                                                     </div>
//                                                 </div>
//                                             </div>
//                                         </div>
//                                     </div>
//                                 </div>
//                                     ';
//                 $i++;
//             }
//         } else {
//             echo ' 
//             <tr>
//                     <td><h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No products available for now.</h2></td>
//                 </tr>
//             ';
//         }
//     } catch (Exception $e) {
//     }
// }

function fetchBlog(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, "SELECT * FROM pharmacyBlogs LIMIT 6");
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $blog) {
                // $cId = $drug['categoryId'];
                // $sql = mysqli_query(
                //     $con,
                //     "SELECT * FROM drugCategories WHERE categoryId = '$cId'"
                // );
                // $c_name = $sql->fetch_object();
                echo '
                    
                    <!-- Blog Item -->
                    <div class="col-lg-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="blog/'.$blog['blogId'].'"><img src="../uploads/blogs/'.$blog['blogpic'].'" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: '.$blog['author'].'</a>
                                        </li>
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>'.$blog['tags'].'</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="blog/'.$blog['blogId'].'">'.substr($blog['title'],0, 50).'............'.'</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>'.$blog['date_created'].'</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="blog/'.$blog['blogId'].'">Read more</a>
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

function fetchAllBlogs(){
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM pharmacyBlogs');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $blog) {
                // $cId = $drug['categoryId'];
                // $sql = mysqli_query(
                //     $con,
                //     "SELECT * FROM drugCategories WHERE categoryId = '$cId'"
                // );
                // $c_name = $sql->fetch_object();
                echo '
                    
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="blog/'.$blog['blogId'].'"><img src="../uploads/blogs/'.$blog['blogpic'].'" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: '.$blog['author'].'</a>
                                        </li>
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>'.$blog['tags'].'</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="blog/'.$blog['blogId'].'">'.substr($blog['title'],0, 50).'............'.'</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>'.$blog['date_created'].'</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="blog/'.$blog['blogId'].'">Read more</a>
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

function fetchElectonics(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    if(isset($_SESSION['cartId'])){
        $cartId = $_SESSION['cartId'];
    }
    else{
        $cartId = "";
    }
     // Fetch all products where subcategory is Electronics
    $query = mysqli_query($con, "SELECT * FROM product p INNER JOIN productSubcategory s ON p.subcategoryId = s.subcategoryId WHERE subName = 'Earphones and Headphones'  ");
    // $subcat = $sql_category_name_fetch->fetch_object();

    try {
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                echo '
                <div class="product__electronic-item ">
                                    <div class="product__item product__item-2 white-bg">
                                        <div class="product__thumb electro-item p-relative">
                                            <a href="product/'.$prod['productId'].'" class="w-img">
                                                <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product" />
                                                <img class="second-img hov-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                            </a>
                                            <div class="product__offer">
                                                <span class="discount">-34%</span>
                                            </div>
                                            <div class="product__action p-absolute">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content text-center">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product/'.$prod['productId'].'"> '.$prod['pName'].'</a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="price">UGX '.$prod['price'].'</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <form action="includes/site/add_to_cart.inc.php" method="POST">
                                                <input type="text" hidden name="prodId" value="'.$prod['productId'].'">
                                                <input type="text" hidden name="cartId" value="'.$cartId.'">
                                                <input type="text" hidden name="price" value="'.$prod['price'].'">
                                                <input name="qty" hidden type="text" value="1" />
                                                <button type="submit">Add to Cart</button>
                                            </form>
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

function fetchAllProducts(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
     // Fetch all products where subcategory is Electronics
    $query = mysqli_query($con, "SELECT * FROM product LIMIT 16");
    // $subcat = $sql_category_name_fetch->fetch_object();

    try {
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                echo '
                <div class="col-xl-3">
                            <div class="product__item-wrapper">
                                    <div class="product__item product__item-2 white-bg d-flex mb-20">
                                        <div class="product__thumb product__thumb-sale p-relative">
                                            <a href="product/'.$prod['productId'].'" class="w-img">
                                                <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product" />
                                                <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product" />
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <h6 class="product-name">
                                                <a class="product-item-link" href="product/'.$prod['productId'].'"> '.$prod['pName'].'</a>
                                            </h6>
                                            <div class="rating">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="far fa-star"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="new new-2">UGX '.$prod['price'].'</span>
                                            <!--<span class="price-old"> <del>$100.00</del> </span>-->
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
function fetchProducts(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    if(isset($_SESSION['cartId'])){
        $cartId = $_SESSION['cartId'];
    }
    else{
        $cartId = "";
    }
     // Fetch all products where subcategory is Electronics
    $query = mysqli_query($con, "SELECT * FROM product LIMIT 16");
    // $subcat = $sql_category_name_fetch->fetch_object();

    try {
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $prod) {
                echo '

                <div class="col">
                                                     <div class="product__item white-bg mb-30">
                                                         <div class="product__thumb p-relative">
                                                             <a href="product/'.$prod['productId'].'" class="w-img">
                                                                 <img src="uploads/products/main/'.$prod['main_pic'].'" alt="product">
                                                                 <img class="second-img" src="uploads/products/hover/'.$prod['hover_pic'].'" alt="product">
                                                             </a>
                                                             <div class="product__action p-absolute">
                                                                 <ul>
                                                                     <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                                     <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                                     <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                                 </ul>
                                                             </div>
                                                         </div>
                                                         <div class="product__content text-center">
                                                             <h6 class="product-name">
                                                                 <a class="product-item-link" href="product/'.$prod['productId'].'">'.$prod['pName'].'</a>
                                                             </h6>
                                                             <div class="rating">
                                                                 <ul>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                     <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                 </ul>
                                                             </div>
                                                             <span class="price">UGX '.$prod['price'].'</span>
                                                         </div>
                                                         <div class="product__add-btn">
                                                            <form action="includes/site/add_to_cart.inc.php" method="POST">
                                                                <input type="text" hidden name="prodId" value="'.$prod['productId'].'">
                                                                <input type="text" hidden name="cartId" value="'.$cartId.'">
                                                                <input type="text" hidden name="price" value="'.$prod['price'].'">
                                                                <input name="qty" hidden type="text" value="1" />
                                                                <button type="submit">Add to Cart</button>
                                                            </form>
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

 function fetchAllbrands(){
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    $url = 'https://localhost/ovenda3//';
     // Fetch all product Brands
    $query = mysqli_query($con, "SELECT * FROM productBrand");
    // $subcat = $sql_category_name_fetch->fetch_object();

    try {
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $brand) {
                echo '
                <div class="brand__item">
                                    <a href="'.$url.'brands/'.$brand['brandId'].'">
                                        <img src="'.$url .'uploads/brands/'.$brand['brandPic'].'" alt="">
                                    </a>
                                </div>
               ';
                $i++;
            }
        } else {
            echo ' 
            <tr>
                    <td><h2 class="col-lg-12 m-auto" style="color:red; font-size:22px; padding:15px;">No Product brands available for now.</h2></td>
                </tr>
            ';
        }
    } catch (Exception $e) {
    }
}
