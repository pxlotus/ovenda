                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <?php
    $db_root = 'dbconnect/connect.inc.php';
    include $db_root;
    $productId = $_GET['id'];

    // Fetch from drugs table where the Id equals that is passed to the page
    $sql = mysqli_query($con, "SELECT * FROM product WHERE productId='$productId'");
    $prod = $sql->fetch_object();
    $subId = $prod->subcategoryId;
    $main_img = $prod->main_pic;

    // Fetch from category where category id is the same as that on the drug
    $sql_category_name_fetch = mysqli_query($con, "SELECT * FROM productSubcategory WHERE subcategoryId='$subId'");
    $subcat = $sql_category_name_fetch->fetch_object();

    // Fetch from drugs related to the product above where they share the same category
    $sql_related_items = mysqli_query($con, "SELECT * FROM product WHERE subcategoryId = '$subId' AND productId != '$productId' LIMIT 8");
    $related_items =[];
    if ($sql_related_items->num_rows) {
        while($items = $sql_related_items->fetch_object()){
            $related_items[] = $items;
        }
    }
    $related = $sql_category_name_fetch->fetch_object();

    // Fetch Images from the database with the same id as the drug
    $getproductImages  = $con->query("SELECT * FROM productImages WHERE productId = '$productId'");
    $prodImages = [];
    if($getproductImages->num_rows){
        while($imgs = $getproductImages->fetch_object()){
            $prodImages[] = $imgs;
        }
    }

    // Fetch categories to be used as tags on the product deatils page
    $cat_tags = $con->query("SELECT * FROM productSubcategory LIMIT 3");

   