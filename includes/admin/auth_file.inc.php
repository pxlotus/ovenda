<?php
    session_start();
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
   ini_set('display_errors', -1);
    ini_set('display_startup_errors', -1);
    error_reporting(E_ALL);
try {
    if (isset($_POST['admin-login'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM usrAdmin WHERE username='$user' && password='$password'");
        // print_r($query);
        if (mysqli_num_rows($query)  > 0) {
            $row = mysqli_fetch_assoc($query);
            $pass = $row['password'];
            $user_ = $row['username'];
            if(($user_ === $user) && ($pass === $password)){
                session_start();
                $_SESSION['user'] = $user;
                header('location: ../../admin');
            }
            else {
            $_SESSION['flash_message'] = 'Invalid Verifications';
            header('location: ../../admin/login');
        }
            
        } else {
            $_SESSION['flash_message'] = 'Invalid Verifications';
            header('location: ../../admin/login');
        }
    }
} catch (Exception $ex) {
    echo "<script>alert('Button wasn't at all')</script>" . $ex;
}
