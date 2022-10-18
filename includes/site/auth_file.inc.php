<?php
    $db_root ="../../dbconnect/connect.inc.php";
   include $db_root;
try {
    if (isset($_POST['login'])) {
        echo 'here were are';
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        echo $email ." ". $password;
        $query = mysqli_query($con, "SELECT * FROM userLogin WHERE email='$email' AND password='$password'");
        if ($query) {
            // print_r($query);
            $user = $query->fetch_object();
            if($user->password == $password){
                $userId =$user->usrId;
                $userId = mysqli_query($con, "SELECT * FROM userCart WHERE usrId = '$userId'");
                $fetchcart = $userId -> fetch_object();
                $cartId = $fetchcart->cartId;

                session_start();
                $_SESSION["usrId"] = $user->usrId;
                $_SESSION["user"] = $user->username;
                $_SESSION["cartId"] = $cartId;
                setcookie("user", $_SESSION['user'], time()+3600);
                header('location: ../../');
            }else{
                session_start();
               $_SESSION['msg'] = 'Incorrect email / password';
                header('location: ../../login'); 
            }
            
        } 
        else {
            $_SESSION['msg'] = 'Incorrect email / password';
            header('location: ../../login');
        }

    }
    else {
            echo'button failure';
            // $_SESSION['msg'] = 'No post method found';
            // header('location: ../../login');
    }
} catch (Exception $ex) {
    echo "<script>alert('Button wasn't at all')</script>" . $ex;
}

if (isset($_GET['logout'])) {
    session_start();
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
    header('location: ../../'); 
        # code...
}
