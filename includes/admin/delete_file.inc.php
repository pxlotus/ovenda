<?php
if($_GET['fn'] == 'category'){
    delete_categories();
}
elseif($_GET['fn'] == 'drug'){
    delete_drug();
}
elseif($_GET['fn'] == 'order'){
    delete_order();
}
function delete_categories(){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $db_root ="../dbconnect/connect.inc.php";
    include $db_root;
    $id = $_GET['id'];

    $query1 = $con->query("SELECT * FROM drugs WHERE categoryId = '$id'");
    $all_drugs = [];
    if ($query1->num_rows) {
        while ($row_drug = $query1->fetch_object()){
            $all_drugs[] = $row_drug;
            $i=1;
            foreach ($all_drugs as $drug) {
                # code...
                $drug_image = $drug->main_pic;
                $drugId = $drug->drugId;
                $storage= "../uploads/medicine/mainImages/";
                @unlink($storage.$drug_image);
                $i++;
            }
        }
    }
    
    

    $query2 = mysqli_query($con, "SELECT * FROM drugCategories WHERE categoryId = '$id'");
    while ($row_drug = mysqli_fetch_array($query2)){
        $category_image = $row_drug['categoryPhoto'];
        $storage= "../uploads/categories/";
        @unlink($storage.$category_image);
    }

    $query = mysqli_query($con, "SELECT * FROM drugImages WHERE drugId = '$drugId'");
    while ($row = mysqli_fetch_array($query)){

        $image = $row['file_name'];
        $imageUrl = "../uploads/medicine/";
        @unlink($imageUrl.$image);
    }

    

    

    $del_Images = mysqli_query($con, "DELETE FROM drugImages WHERE drugId = '$drugId'");
        if($del_Images){
            $del_drug = mysqli_query($con, "DELETE FROM drugs WHERE drugId = '$drugId'");
            if($del_drug){
                $del_category = mysqli_query($con, "DELETE FROM drugCategories WHERE categoryId = '$id'");
                if($del_category){
                    $_SESSION['statusMsg'] = "Category deleted successfully";
                    header('Location: ../admin/all-categories');
                }
            }
        }
}
function delete_drug(){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $db_root ="../dbconnect/connect.inc.php";
    include $db_root;
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM drugImages WHERE drugId = '$id'");
    while ($row = mysqli_fetch_array($query)){

        $image = $row['file_name'];
        $imageUrl = "../uploads/medicine/";
        @unlink($imageUrl.$image);
    }

    $query1 = mysqli_query($con, "SELECT * FROM drugs WHERE drugId = '$id'");
    while ($row_drug = mysqli_fetch_array($query1)){
        $drug_image = $row_drug['main_pic'];
        $storage= "../uploads/medicine/mainImages/";
        @unlink($storage.$drug_image);
    }

    $del_Images = mysqli_query($con, "DELETE FROM drugImages WHERE drugId = '$id'");
        if($del_Images){
            $del_drug = mysqli_query($con, "DELETE FROM drugs WHERE drugId = '$id'");
            if($del_drug){
                $_SESSION['statusMsg'] = "Drug deleted successfully";
                header('Location: ../admin/all-products');
            }
        }
}
function delete_payment(){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $db_root ="../dbconnect/connect.inc.php";
    include $db_root;
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM pharmacyOrderPayments WHERE paymentId = '$id'");
    if($query){
                session_start();
                $_SESSION['statusMsg'] = "Payment deleted successfully";
                header('Location: ../payments');
            }

}
function delete_order(){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $db_root ="../dbconnect/connect.inc.php";
    include $db_root;
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM orders WHERE orderId = '$id'");
    if($query){
                session_start();
                $_SESSION['statusMsg'] = "Order deleted successfully";
                header('Location: ../admin/orders');
            }

}