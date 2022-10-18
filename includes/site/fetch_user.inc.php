<?php
$db_root = 'dbconnect/connect.inc.php';
    include $db_root;

    if (isset($_SESSION['usrId'])) {
        # code...
    
    $usremail = $_SESSION['usrId'];
    $sql = "SELECT * FROM userProfile WHERE usrId='$usremail'";
    $results = mysqli_query($con, $sql);
    if($results->num_rows>0){
        $user = $results->fetch_object();
        $username = $user->name;
        $useremail = $user->email;
        $userphone = $user->phone;
        $useraddress = $user->address;
    }
}