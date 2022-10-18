<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
if(isset($_SESSION['usrId']) && isset($_SESSION['cartId'])){
$usrId = $_SESSION['usrId'];
$cartId = $_SESSION['cartId'];
$sql = mysqli_query($con, "SELECT * FROM cartProducts WHERE cartId = '$cartId'");
if ($sql->num_rows <= 0) {
    echo'<h4 style="margin-top:25px; margin-left:12px;">No Products in your cart.</h4>';
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
        <li>
            <div class="cart__item d-flex justify-content-between align-items-center">
                <div class="cart__inner d-flex">
                    <div class="cart__thumb">
                        <a href="'.$url.'product/'.$res->productId.'">
                            <img src="'.$url.'uploads/products/main/'.$res->main_pic.'" alt="" />
                        </a>
                    </div>
                    <div class="cart__details">
                        <h6><a href="'.$url.'product/'.$res->productId.'"> '.$res->pName.' </a></h6>
                        <div class="cart__price">
                            <span>'.$items['quantityAdded'].' X '.$res->price.'</span>
                        </div>
                    </div>
                </div>
                <div class="cart__del">
                    <a class="delete" href="#popup1" data-popup-trigger="popup1"><i class="fal fa-trash-alt"></i></a>
                    <div id="popup1" class="card pop-overlay">
                        <div class="popup container">
                        <div class="card-header c-head">
                            <h3>Delete item</h3>
                            <p>are sure you want to delet item?</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="cancelbtn">Cancel</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="deletebtn" onclick="deleteItem()">Delete</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    ';
}

    
}
}



