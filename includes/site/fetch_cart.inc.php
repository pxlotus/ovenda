<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
if(isset($_SESSION['usrId']) && isset($_SESSION['cartId'])){
$usrId = $_SESSION['usrId'];
$cartId = $_SESSION['cartId'];
$sql = mysqli_query($con, "SELECT * FROM cartProducts WHERE cartId = '$cartId'");
if ($sql->num_rows <= 0) {
    echo'<h4 style="margin-bottom:25px; margin-top:25px; margin-left:12px;">No Products in your cart.</h4><br/><a href="'.$url.'allproducts" class="btn btn-dark payment">Continue Shopping</a>';
}
else {
    $transport_costs = 7000;
    $Total = 0.00;
    $subtotal = 0.00;

    foreach ($sql as $items) {
        $prodId = $items['productId'];
        $price = $items['productPrice'];
        $qty = (int)$items['quantityAdded'];
        $pprice = intval(preg_replace('/[^\d. ]/', '', $price));
        $subtotal = $qty * $pprice;
        $Total += $subtotal;

        $sql_s = mysqli_query($con, "SELECT * FROM product WHERE productId = '$prodId'");
        $res = $sql_s ->fetch_object();
        // print_r($res);

        echo'
                        <div class="item">
                            <div class="buttons">
                                <a href="'.$url.'includes/site/rm-cart-item.inc.php?prodId='.$prodId.'&cart=1" onClick="return confirm(Are sure you want to remove item from your cart?.);"><span class="delete-btn"><i class="fa fa-times"></i></span></a>
                                <span class="like-btn"></span>
                            </div>

                            <div class="image">
                                <a href="'.$url.'product/'.$prodId.'"><img src="'.$url.'uploads/products/main/'.$res->main_pic.'" width="85px" alt="" /></a>
                            </div>

                            <div class="description">
                                <a href="'.$url.'product/'.$prodId.'"><span class="font-weight-bold">'.$res->pName.'</span></a>
                            </div>

                            <div class="quantity">
                                <button class="plus-btn" type="button" name="button">
                                    <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                                </button>
                                <input type="text" name="name" value="'.$items['quantityAdded'].'">
                                <button class="minus-btn" type="button" name="button">
                                    <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                                </button>
                            </div>
                            <div class="total-price">UGX '.$res->price.'</div>
                        </div>
    ';
}

    
}
}



