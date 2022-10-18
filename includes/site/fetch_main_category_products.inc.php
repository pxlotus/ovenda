<?php
$db_root = 'dbconnect/connect.inc.php';
include $db_root;
$catId = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM product p inner join 
productSubcategory sc on sc.subcategoryId = p.subcategoryId
inner join productCategory c on c.categoryId = sc.categoryId
inner join productMainCategory mc on mc.mcId = c.mcId
where mc.mcId = '$catId '");
// print_r($query);

$res= mysqli_query($con, "SELECT * FROM product WHERE topRated='1' AND subcategoryId = '$catId'");
