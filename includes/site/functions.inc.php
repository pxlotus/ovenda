<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
if (isset($_SESSION['cartId'])) {
    $cartId = $_SESSION['cartId'];
    $cart_count = mysqli_query($con, "SELECT * FROM cartProducts WHERE cartId = '$cartId'");
    $c_count = $cart_count->num_rows;
}