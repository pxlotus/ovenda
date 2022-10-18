<?php
    $db_root = '../../dbconnect/connect.inc.php';
    include $db_root;
    error_reporting(1);
    session_start();

    $mmId = 'MM-'.rand();
    $paymentId = 'Pay-'.rand();
    $usrId = $_SESSION['usrId'];
    $cartId = $_SESSION['cartId'];
    $paymenOption = $_SESSION['payOption'];

    $paymentStatus = "Payment Made";

    $fetch_billing = mysqli_query($con, "SELECT * FROM userBillingAddress WHERE usrId='$usrId'");
    $get_billId = $fetch_billing->fetch_object();
    $billId = $get_billId->billId;

    $fetch_userOrder = mysqli_query($con, "SELECT * FROM userOrder WHERE cartId='$cartId'");
    $get_orderId = $fetch_userOrder->fetch_object();
    $orderId = $get_orderId->orderId;
    $orderTotal = $get_orderId->total;

    $serviceProvider = $_POST['serviceProvider'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    echo $usrId.', '. $billId.', '. $orderId.', '.$orderTotal.', '.$paymenOption;
    echo $serviceProvider.', '. $name.', '. $phone.', '.$amount.', '.$mmId;

    if (isset($_POST['payment-button'])) {
    $make_payment = mysqli_query($con, "INSERT INTO `orderPayments` (`paymentId`, `orderId`, `usrId`, `billId`, `paymentOption`, `totalAmount`, `paymentStatus`, `dateCreated`) 
                                                    VALUES ('$paymentId ', '$orderId', '$usrId', '$billId', '$paymenOption', '$orderTotal', '$paymentStatus', NOW())");
    if ($make_payment) {
        $payed_cart = mysqli_query($con, "UPDATE userCart SET `payStatus`='1'"); 

        $check_mm_details = mysqli_query($con, "SELECT * FROM userMobileMoneyDetails WHERE usrId = '$usrId'");
        if ($check_mm_details -> num_rows > 0) {
            $update_mm_details = mysqli_query($con, "UPDATE userMobileMoneyDetails SET `serviceProvider`='$serviceProvider', `registeredName`='$name', `mobileMoneyContact`='$phone', `dateCreated`=NOW()");
            if($update_mm_details){
                echo "Update was successfull";
                
            }
        }
        else{
            $save_mm_details = mysqli_query($con, "INSERT INTO `userMobileMoneyDetails` (`id`, `usrId`, `serviceProvider`, `registeredName`, `mobileMoneyContact`, `dateCreated`) 
            VALUES ('$mmId', '$usrId', '$serviceProvider', '$name', '$phone', NOW())");

            if ($save_mm_details) {
                echo 'Lets start here tomorrow, Rest now';
            }
        }
    }
    else {
        'Boss, kibulamu';
    }

}