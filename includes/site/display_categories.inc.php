<?php
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    try {
        $query = mysqli_query($con, 'SELECT * FROM productMainCategory LIMIT 8');
        if (mysqli_num_rows($query) > 0) {
            $i = 1;
            foreach ($query as $mc) {
                $mId = $mc['mcId'];
                $sql_cat = mysqli_query($con, "SELECT * FROM productCategory WHERE mcId = '$mId'");
                $x = 1;
                foreach($sql_cat as $cat){
                    $cId = $cat['categoryId'];
                    $sql_sc = mysqli_query($con, "SELECT * FROM productSubcategory WHERE categoryId = '$cId'");
                    $y = 1;
                }
                
                $i++;
            }
        } else {
            echo ' 
                <h2 class="m-auto not-available">No categories available for now.</h2>
            ';
        }
    } catch (Exception $e) {
    }
