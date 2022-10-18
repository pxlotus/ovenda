<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $db_root ="../../dbconnect/connect.inc.php";
    include $db_root;
    error_reporting(E_ALL^E_NOTICE);
      if(isset($_POST['account-create'])) {
        $usrId = "usr-".rand(10,500000);
        $cartId = "cart-".rand(10,500000);
        $usrprofId = "pf-".rand(10,500000);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $pic_name = explode(".", $_FILES["pic"]["name"]);
        $newpicname = round(microtime(true)) . '.' . end($pic_name);

        $check_user_email = mysqli_query($con, "SELECT * FROM `userLogin` WHERE email = '$email'");
        $check_user_username = mysqli_query($con, "SELECT * FROM `userLogin` WHERE username = '$username'");
        if ($check_user_email -> num_rows > 0) {
            session_start();
            $_SESSION['msgemail'] = 'Email is already taken';
            header('location: ../../register');
        }
        elseif ($check_user_username -> num_rows > 0) {
            session_start();
            $_SESSION['msguser'] = 'Username is already taken';
            header('location: ../../register');
            
        }
        
    else{
        echo $username.', '.$email.', '.$phone.', '.$address.', '.$password.', '.$cpassword.', '.$newpicname;
        $sql_user_login = mysqli_query($con, "INSERT INTO `userLogin` (`usrId`, `username`, `email`, `password`, `accStatus`, `dateCreated`) 
                            VALUES ('$usrId', '$username', '$email', '$password', '1', NOW())");
        if ($sql_user_login) {
            $create_user_cart = mysqli_query($con, "INSERT INTO `userCart` (`cartId`, `usrId`, `dateCreated`, `totalCartAmount`, `payStatus`) 
                                                    VALUES ('$cartId', '$usrId', NOW(), '0', '0')");

            echo "Successfully created user";
            $sql_user_profile = mysqli_query($con, "INSERT INTO `userProfile` (`usrProId`, `usrId`, `name`, `age`, `email`, `phone`, `address`, `photo`, `dateCreated`) 
                                VALUES ('$usrprofId', '$usrId', '$username', NULL, '$email', '$phone', '$address', '$newpicname', NOW())");
            if ($sql_user_profile) {
                move_uploaded_file($_FILES['pic']['tmp_name'],'../../uploads/users/'.$newpicname);
                session_start();    
                $_SESSION["usrId"] = $usrId;
                $_SESSION["user"] = $username;
                $_SESSION["cartId"] = $cartId ;
                echo "Everything went smoothly on to the next";
                header('location: ../../');
            }

        }


    //   // These variables are from the create account page
    //     $usrEmail = $_POST['email'];
    //     $usrPassword = md5($_POST['password']);
    //     $usrId = "usr-".rand(10,500000);
    //     $acc_type="Patient";
    //     $acstatus=true; 
    //     $add_user = mysqli_query($con, "INSERT INTO userLogin(`usrId`, `email`, `password`, `accStatus`, `accType`, `dateCreated`) 
    //                                 VALUES ('$usrId', '$usrEmail', '$usrPassword', '$acstatus', '$acc_type', NOW())");

    //     $usrProId = "usr-".rand(10,500000);
    //     $fullname=$_POST['fullname'];
    //     $address=$_POST['address'];
    //     $phone=$_POST['phone'];
    //     $dob=$_POST['dob'];
    //     $gender=$_POST['gender'];
    //     $nationality=$_POST['nationality'];
    //     $nin=$_POST['nin']; 
    //     $kin=$_POST['kin'];
    //     $relationship=$_POST['relationship'];

    //     $pic_name = explode(".", $_FILES["pic"]["name"]);
    //     $newpicname = round(microtime(true)) . '.' . end($pic_name);
                

    //     $query=mysqli_query($con,"INSERT INTO `userProfile` (`usrProId`, `usrId`, `fullName`, `email`, `phone`, `dateofBirth`, `sex`, `address`, `photo`, `nextOfkin`, `relationship`, `nationality`, `national_Id`, `weight`, `height`, `dateCreated`) 
    //                         VALUES ('$usrProId', '$usrId', '$fullname', '$usrEmail', '$phone', '$dob', '$gender', '$address', '$newpicname', '$kin', '$relationship', '$nationality', '$nin', NULL, NULL, NOW())");

    //             if ($query) {
    //               move_uploaded_file($_FILES['pic']['tmp_name'],'../uploads/users/'.$newpicname);
    //               session_start();
    //               $_SESSION["usrId"] = $usrId;
    //               header("Location: ../../epharmacy/signin");
    //             }
    //             else{
    //                   // echo "error occurred";
    //                   echo"<script>alert('Profile Submission failed found')</script>";
    //             }
              
      }
          
      
    }
    else {
        echo"<script>alert('No post submission found')</script>";
      }

     ?>