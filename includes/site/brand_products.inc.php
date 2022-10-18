<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
$brandId = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM product WHERE brandId = '$brandId'");
// print_r($query);
$q_brands = mysqli_query($con, "SELECT * FROM productBrand WHERE brandId = '$brandId'");
$cat = $q_brands->fetch_object();


$res= mysqli_query($con, "SELECT * FROM product WHERE topRated='1' AND brandId = '$brandId' LIMIT 2");

