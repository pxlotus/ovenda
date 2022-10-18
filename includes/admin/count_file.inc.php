<?php
    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;
    $categories_sql = mysqli_query($con, "SELECT COUNT(*) FROM productMainCategory");
    $mc_count = $categories_sql->num_rows;

    $prod_sql = mysqli_query($con, "SELECT * FROM product");
    $products_count = $prod_sql->num_rows;

    $pc_sql = mysqli_query($con, "SELECT * FROM productCategory");
    $pc_count = $pc_sql->num_rows;

    $feeds_sql = mysqli_query($con, "SELECT * FROM productSubcategory");
    $feeds_count = $feeds_sql->num_rows;

    $payments_sql = mysqli_query($con, "SELECT * FROM userBillingAddress");
    $payments_count = $payments_sql->num_rows;

    $orders_sql = mysqli_query($con, "SELECT * FROM userLogin");
    $orders_count = $orders_sql->num_rows;