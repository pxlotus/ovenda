<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
$catId = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM product WHERE subcategoryId = '$catId'");
// print_r($query);
$cat_query = mysqli_query($con, "SELECT * FROM productSubcategory WHERE subcategoryId = '$catId'");
$cat = $cat_query->fetch_object();
// print_r($query);

$res = mysqli_query($con, "SELECT * FROM product WHERE topRated='1' AND subcategoryId = '$catId' LIMIT 2");

