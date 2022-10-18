<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
if(isset($_SESSION['cartId'])){
$usrId = $_SESSION['cartId'];
$sql = mysqli_query($con, "SELECT * FROM cartProducts WHERE cartId = '$cartId'");
if ($sql->num_rows <= 0) {
    echo'<h4 style="margin-top:25px;">No Products in your cart.</h4>';
}
else {
    $transport_costs = 5000;
    $Total = 0.00;
    $subtotal = 0.00;
    

    foreach ($sql as $items) {
        $prodId = $items['productId'];
        $price = $items['productPrice'];
        $qty = (int)$items['quantityAdded'];
        $pprice = intval(preg_replace('/[^\d. ]/', '', $price));
        $subtotal = $qty * $pprice;
        $Total += $subtotal;
        $orderTotal = $transport_costs + $Total;

        $sql_s = mysqli_query($con, "SELECT * FROM product WHERE productId = '$prodId'");
        $res = $sql_s ->fetch_object();
        // print_r($res);   
}

    
}
}



