<?php
    error_reporting(E_ALL);
if(isset($_POST['add_product']))
{
   create_product();
}
if(isset($_POST['add_category']))
{
   create_category();
}
if(isset($_POST['add_blog']))
{
   create_blog();
}
if(isset($_POST['add_subcategory']))
{
   create_subcategory();
}
if(isset($_POST['add_main_category']))
{
   create_main_category();
}
if(isset($_POST['add_brand']))
{
   create_brand();
}
function create_brand(){
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   $brandId = uniqid('B-');
   $brandName = $_POST['b_name'];
   $pic_name = explode(".", $_FILES["b_pic"]["name"]);
   $newimagename = round(microtime(true)) . '.' . end($pic_name);

    $sql = mysqli_query($con, "INSERT INTO `productBrand` (`brandId`, `brandName`, `brandPic`, `date_created`)
                    VALUES('$brandId','$brandName','$newimagename', NOW())");
    if($sql){
        session_start();
        move_uploaded_file($_FILES['b_pic']['tmp_name'],'../../uploads/brands/'.$newimagename);
        $_SESSION['msg'] ="Brand added successfully";
        header('Location: ../../admin/add-brand');
    }
    else{
        $_SESSION['msg'] = "Failed to insert category";
        header('Location: ../../admin/add-brand');
    }
   
}


function create_category(){
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   $categoryId = uniqid('C-');
   $categoryName = $_POST['c_name'];
   $mcId = $_POST['mcId'];

    $sql = mysqli_query($con, "INSERT INTO `productCategory` (`categoryId`, `mcId`, `categoryName`, `date_created`) 
    VALUES('$categoryId','$mcId','$categoryName', NOW())");
    if($sql){
        session_start();
        $_SESSION['msg'] ="Category added successfully";
        header('Location: ../../admin/add-category');
    }
    else{
        $_SESSION['msg'] = "Failed to insert category";
        header('Location: ../../admin/add-category');
    }
   
}

function create_subcategory(){
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   $subId = uniqid('SC-');
   $categoryName = $_POST['c_name'];
   $cId = $_POST['cId'];
   $pic_name = explode(".", $_FILES["c_pic"]["name"]);
   $newimagename = round(microtime(true)) . '.' . end($pic_name);

    $sql = mysqli_query($con, "INSERT INTO `productSubcategory` (`subcategoryId`, `categoryId`, `subName`, `subPic`, `date_created`)
    VALUES('$subId','$cId','$categoryName','$newimagename', NOW())");
    if($sql){
        session_start();
        move_uploaded_file($_FILES['c_pic']['tmp_name'],'../../uploads/subcategories/'.$newimagename);
        $_SESSION['msg'] ="Sub-category added successfully";
        header('Location: ../../admin/add-subcategory');
    }
    else{
        $_SESSION['msg'] = "Failed to insert category";
        header('Location: ../../admin/add-subcategory');
    }
   
}

function create_main_category(){
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   $categoryId = uniqid('M-');
   $categoryName = $_POST['c_name'];

    $sql = mysqli_query($con, "INSERT INTO `productMainCategory` (`mcId`, `name`, `date_created`) 
                                VALUES('$categoryId','$categoryName', NOW())");
    if($sql){
        session_start();
        $_SESSION['msg'] ="Main category added successfully";
        header('Location: ../../admin/add-main-category');
    }
    else{
        $_SESSION['msg'] = "Failed to insert category";
        header('Location: ../../admin/add-main-category');
    }
   
}

function create_blog(){
    $db_root ="../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', -1);
    ini_set('display_startup_errors', -1);
    error_reporting(E_ALL);
   $blogId = "blog-".rand(10,500000);
   $blogTitle = $_POST['title'];
   $blogTags = $_POST['tags'];
   $blogAuthor = $_POST['author'];
   $main_pic = explode(".", $_FILES["main_pic"]["name"]);
   $new_main_pic_name = round(microtime(true)) . '.' . end($main_pic);

   $other_pic = explode(".other", $_FILES["other_pic"]["name"]);
   $new_other_pic_name = round(microtime(true)) . '.' . end($other_pic);
   
   $blog_desc = $_POST['blog_desc'];
   $category = $_POST['category'];
    echo $blog_desc;

    $sql = mysqli_query($con, "INSERT INTO `pharmacyBlogs` (`blogId`, `title`, `category`, `details`, `tags`, `blogpic`, `otherpic`, `author`, `date_created`)
    VALUES('$blogId','$blogTitle ', '$category', '$blog_desc', '$blogTags', '$new_main_pic_name', '$new_other_pic_name', '$blogAuthor', NOW())");
    if($sql){
        session_start();
        move_uploaded_file($_FILES['main_pic']['tmp_name'],'../uploads/blogs/'.$new_main_pic_name);
        move_uploaded_file($_FILES['other_pic']['tmp_name'],'../uploads/blogs/'.$new_other_pic_name);
        $_SESSION['statusMsg'] ="Blog created successfully";
        header('Location: ../admin/add-blog');
    }
    else{
        $_SESSION['statusMsg'] = "Failed to insert category";
        header('Location: ../admin/add-blog');
    }
   
}

function create_product(){
    $db_root ="../../dbconnect/connect.inc.php";
    include $db_root;
   $proId = uniqid('Prod-');
   $scId = $_POST['scId'];
   $brandId = $_POST['brandId'];
   $prod_name = $_POST['prod_name'];
   $price = $_POST['price'];
   $qty = $_POST['qty'];
    $avis = 0;
    $topsales = 0;
    $toprated = 0;
    $flashsales = 0;
    $weekdeals = 0;
   if (isset($_POST['avis']) && strtolower($_POST['avis']) == 'true'){
        $avis = 1;
    }

    if (isset($_POST['topsales']) && strtolower($_POST['topsales']) == 'true'){
        $topsales = 1;
    }

    if (isset($_POST['toprated']) && strtolower($_POST['toprated']) == 'true'){
        $toprated = 1;
    }

    if (isset($_POST['flashsales']) && strtolower($_POST['flashsales']) == 'true'){
        $flashsales = 1;
    }

    if (isset($_POST['weekdeals']) && strtolower($_POST['weekdeals']) == 'true'){
        $weekdeals = 1;
    }

   $prod_desc = $_POST['prod_desc'];

   $main_pic_name = explode(".", $_FILES["main_pic"]["name"]);
   $main_pic = round(microtime(true)) . '.' . end($main_pic_name);

   $hover_pic_name = explode(".", $_FILES["hov_img"]["name"]);
   $hover_pic = round(microtime(true)) . '.' . end($hover_pic_name);

   $query = "INSERT INTO `product` (`productId`, `brandId`, `subcategoryId`, `pName`, `price`, `description`, `availability`, `quantity`, `main_pic`, `hover_pic`, `topSales`, `newArrival`, `topRated`, `weekDeals`, `date_created`)
                       VALUES('$proId', '$brandId', '$scId', '$prod_name', '$price', '$prod_desc', '$avis', '$qty', '$main_pic', '$hover_pic', '$topsales', '$flashsales', '$toprated', '$weekdeals', NOW())";
   
//    print_r($query);
   $sql = mysqli_query($con, $query);
    if ($sql) {

        move_uploaded_file($_FILES['main_pic']['tmp_name'],'../../uploads/products/main/'.$main_pic);
        move_uploaded_file($_FILES['hov_img']['tmp_name'],'../../uploads/products/hover/'.$hover_pic);
        $targetDir = "../../uploads/products/others/"; 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
                foreach($_FILES['files']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName; 
                    
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            // $insertValuesSQL .= "('$drugId','".$fileName."', NOW(), NULL),"; 
                            $insertValuesSQL .= "('$proId','".$fileName."', NOW(), '1'),"; 

                        }else{ 
                            $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                    } 
                } 
                
                // Error message 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                
                if(!empty($insertValuesSQL)){ 
                    $insertValuesSQL = trim($insertValuesSQL, ','); 
                    // Insert image file name into database 
                    $insert = $con->query("INSERT INTO `productImages` (`productId`, `file_name`, `date_created`, `status`) VALUES $insertValuesSQL"); 
                    if($insert){ 
                        session_start();
                        $_SESSION['statusMsg'] = "Medicine uploaded successfully.";
                        header('Location: ../../admin/add-product');
                    }else{ 
                        session_start();
                        $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file."; 
                        header('Location: ../../admin/add-product');
                    } 
                }else{ 
                        session_start();
                    $_SESSION['statusMsg'] = "Upload failed! ".$errorMsg; 
                    header('Location: ../../admin/add-product');
                } 
            }
            else{ 
                        session_start();
                $_SESSION['statusMsg'] = 'Please select a file to upload.';
                header('Location: ../../admin/add-product'); 
            } 
    }else{
        echo'Failed to insert a drug';
        header('Location: ../../admin/add-product');
    }

   

}
