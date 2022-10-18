  <?php
    $db_root = '../../dbconnect/connect.inc.php';
    include $db_root;
    error_reporting(1);
    session_start();
    $usrId = $_SESSION['usrId'];
    
    $get_user_details = mysqli_query($con, "SELECT * FROM userProfile WHERE usrId = '$usrId'");
    $user = $get_user_details -> fetch_object();

    $orderId = 'Ord_'.rand(10,500000);
    $bill_addId ='Ad-'.rand(10,500000);
    $orderRef = "ref-".rand(10,500000);
    $cartId = $_SESSION['cartId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $division = $_POST['division'];
    $street = $_POST['street'];
    $orderTotal = $_POST['orderTotal'];
    $status = 0;
    $progress = 'Pending';
    $deliveryPref = "Delivery";
    $paymentOption = $_POST['payment-method'];



    $check_bill_address = mysqli_query($con, "SELECT * FROM userBillingAddress WHERE usrId = '$usrId'");
    if ($check_bill_address->num_rows > 0) {
        $check_order = mysqli_query($con, "SELECT * FROM userOrder WHERE usrId = '$usrId' AND cartId ='$cartId' AND status='$status'");
        if ($check_order->num_rows > 0) {
            $upadte_order_amount = mysqli_query($con, "UPDATE `userOrder` SET `total` = '$orderTotal', `paymentOption`='$paymentOption' WHERE `userOrder`.`cartId` = '$cartId'");
            if($upadte_order_amount) {
                $userCart_update = mysqli_query($con, "UPDATE `userCart` SET `totalCartAmount` = '$orderTotal' WHERE `cartId` = '$cartId';");
                session_start();
                $_SESSION['payOption'] = $paymentOption;
                if ($paymentOption=='Mobile Money') {
                    header('location:../../mobile-money');
                }
                else if ($paymentOption=='Visa Card') {
                    header('location:../../visa-card');
                }
                else{
                    header('location:../../success');

                }
            }
            
        }
        else{
            $place_order = mysqli_query($con, "INSERT INTO `userOrder` (`orderId`, `orderRef`, `cartId`, `usrId`, `total`, `status`, `orderProgress`, `dateCreated`, `paymentOption`) 
                        VALUES ('$orderId', '$orderRef', '$cartId', '$usrId', '$orderTotal', '$status', '$progress', NOW(), '$paymentOption')");
            if ($place_order){
                $userCart_update = mysqli_query($con, "UPDATE `userCart` SET `totalCartAmount` = '$orderTotal' WHERE `cartId` = '$cartId';");
                session_start();
                $_SESSION['payOption'] = $paymentOption;
                if ($paymentOption=='Mobile Money') {
                    header('location:../../mobile-money');
                }
                else if ($paymentOption=='Visa Card') {
                    header('location:../../visa-card');
                }
                else{
                    header('location:../../success');

                }
            }
            else{
                echo "Kyokiganye Papa";
                echo $orderId.', '.$usrId.', '. $orderRef.', '.$cartId.', '.$orderTotal.', '.$progress;
            
            } 

        }

        // $sql_update = mysqli_query($con, "UPDATE `userBillingAddress` SET `location`= '$address', `street`='$street', `district`='$division', `deliveryPreference`='$deliveryPref' WHERE billId='$bId' AND usrId='$usrId'");
        // if ($sql_update->num_rows > 0) {
        //     echo 'Update Kyeko';
        //     # code...
        // }
        // else{
        //     print_r($bId);
        //     echo 'Update Mayasi';
        // }
    }
    else{
        $add_billing_address =  mysqli_query($con,"INSERT INTO `userBillingAddress` (`billId`, `usrId`, `location`, `street`, `district`, `phone`, `deliveryPreference`, `dateCreated`) 
        VALUES ('$bill_addId', '$usrId', '$address', '$street', '$division', '$phone', '$deliveryPref', NOW())");
        if ($add_billing_address) {
            $place_order = mysqli_query($con, "INSERT INTO `userOrder` (`orderId`, `orderRef`, `cartId`, `usrId`, `total`, `status`, `orderProgress`, `dateCreated`, `paymentOption`) 
                        VALUES ('$orderId', '$orderRef', '$cartId', '$usrId', '$orderTotal', '$status', '$progress', NOW(), '$paymentOption')");
            if ($place_order){
                $userCart_update = mysqli_query($con, "UPDATE `userCart` SET `totalCartAmount` = '$orderTotal' WHERE `cartId` = '$cartId';");
                echo'Tukomye wano papa';
                session_start();
                $_SESSION['payOption'] = $paymentOption;
                if ($paymentOption=='Mobile Money') {
                    header('location:../../mobile-money');
                }
                else if ($paymentOption=='Visa Card') {
                    header('location:../../visa-card');
                }
                else{
                    header('location:../../success');

                }
            }
        }
        else{
            echo'Location Eganye';
        }

    }

    