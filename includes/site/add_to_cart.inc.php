<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $db_root = '../../dbconnect/connect.inc.php';
    include $db_root;
    $cartId = uniqid('pc-');
    $ucart = $_POST['cartId'];
    $prodId = $_POST['prodId'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    // echo $cartId.', '.$userId.', '.$prodId.', '.$qty.', '.$price;
    if(!isset($_SESSION['usrId'])) {
        session_start();
        $_SESSION['msg'] = "First Login to continue";
        header('location: ../../login');

    }
    else{

        $check_if_exists = mysqli_query($con, "SELECT * FROM cartProducts WHERE cartId='$ucart' AND productId='$prodId'");
        if ($check_if_exists->num_rows>0){
            // print_r($check_if_exists);
            $check_values = $check_if_exists->fetch_object();
            $cartId_ = $check_values->cartProductsId;
            $item_quantity = $check_values->quantityAdded;
            $var = intval(preg_replace('/[^\d. ]/', '', $item_quantity));
            $res = $var + (int)$qty;
            $sql_update_quantity = mysqli_query($con, "UPDATE cartProducts SET quantityAdded = '$res' WHERE cartProductsId = '$cartId_'");
            if ($sql_update_quantity) {
                print_r('Successfully added to cart');
                header('location: ../../');
            }
            else {
                print_r('Failed to add to cart');
                header('location: ../../');
            }
            

        }

        else{

            echo '$cartId', '$ucart', '$prodId', '$qty', '$price';
            


            $sql = mysqli_query($con, "INSERT INTO `cartProducts` (`cartProductsId`, `cartId`, `productId`, `quantityAdded`, `productPrice`, `dateCreated`, `payStatus`) 
                                        VALUES ('$cartId', '$ucart', '$prodId', '$qty', '$price', NOW(), '0')");
            if($sql){
                print_r('Successfully added to cart');
                header('location: ../../');
            }
            else {
                print_r('failed to insert, check again');
                header('location: ../../');

            }
            
        }
    
    }