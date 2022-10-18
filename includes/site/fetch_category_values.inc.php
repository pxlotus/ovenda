<?php
 error_reporting(E_ALL);

    $db_root = '../dbconnect/connect.inc.php';
    include $db_root;

    $Id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM drugs WHERE categoryId='$Id'");
    $cat_items =[];
    if ($query->num_rows) {
        while($items = $query->fetch_object()){
            $cat_items[] = $items;
        }
    }

    $query_all = mysqli_query($con, "SELECT * FROM drugCategories");
    // $categories = $query_all->fetch_array();s

