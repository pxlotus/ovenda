<?php
$db_root = '../../dbconnect/connect.inc.php';
include $db_root;



if(isset($_GET['prodId']) && isset($_GET['sd'])){
    $prodId = $_GET['prodId'];
    $sql_rm = mysqli_query($con, "DELETE FROM `cartProducts` WHERE productId = '$prodId'");
    if ($sql_rm) {
        print_r("Delete Successfully");
        header('location: ../../');
    }
    else {
        print_r("Sorry!, Delete failed");
    }
}

if(isset($_GET['prodId']) && isset($_GET['cart'])){
    $prodId = $_GET['prodId'];
    $sql_rm = mysqli_query($con, "DELETE FROM `cartProducts` WHERE productId = '$prodId'");
    if ($sql_rm) {
        // print_r("Delete Successfully");
        header('location: ../../cart');
    }
    else {
        $_SESSION['msg'] = "Failed to remove Items from the cart try again later!.";
        header('location: ../../cart');
    }
}
if (isset($_GET['clearAll'])) {
    session_start();
    $usrId = $_SESSION['usrId'];
    $cartId = $_SESSION['cartId'];
     $sql_o = mysqli_query($con, "DELETE FROM `userOrder` WHERE usrId = '$usrId'");
     if ($sql_o) {
        $sql_ = mysqli_query($con, "DELETE FROM `cartProducts` WHERE cartId = '$cartId'");
        if ($sql_) {
            $_SESSION['msg'] = "Cart cleared";
            header('location: ../../cart');
        }
        else {
            echo $usrId;
            echo 'Biganye Baba';
        }
     }


     

}