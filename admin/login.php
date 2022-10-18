<?php
session_start();
    $url = 'https://ovenda.omsao.health/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovenda - Your Online Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="<?= $url ?>static/images/favicon.png" type="image/x-icon">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        html{ 
            background: url('../static/images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        body { 
        min-height: 98.05vh; 
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Poppins", sans-serif;
        }
        img {
            width: 50%;
        }

        .group {
        margin: 20px 0px 20px 0px;
        }

        .signin {
            min-height: 240px;
            align-items: center;
            padding: 5px 50px 35px 50px;
            background-color: #828282d4;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);
        }

        .forgot-pass-link {
        float: right;
        }

        .group input {
        width: 300px;
        height: 35px;
        border: 0px;
        outline: none;
        font-size: 13px;
        padding: 0px 10px 0px 10px;
        border-bottom: 1px solid #aaa;
        font-family: "Poppins", sans-serif;
        transition: 0.5s;
        }

        .group input:hover {
        border-bottom: 1px solid #000;
        }

        .group button {
        width: 300px;
        height: 45px;
        outline: none;
        border: none;
        background-color: #c4a106;
        color: #fff;
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-size: 16px;
        border-radius: 5px;
        }

        .sign-up-link {
        padding-bottom: 10px;
        }

        a {
        text-decoration: none;
        color: #f9d14d;
        font-weight: 400;
        cursor: pointer;
        transition: 0.5s;
        }

        a:hover {
        color: #000000;
        }

        label {
        font-weight: 400;
        float: left;
        margin-bottom: 10px;
        }

        .head h2 {
            margin-top: 1px;
            color: #222429;
        }
        .head {
        float: left;
        margin-top: 0px;
        }

        .head p {
        margin-top: -20px;
        color: #f9d14d;
        font-weight: 400;
        float: left;
        }

        .field-icon {
            color: #c3a11c;
        float: right;
        margin-left: -30px;
        margin-top: 8px;
        position: absolute;
        z-index: 2;
        }

        .group button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .group button span:after {
        content: "\00bb";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .group button:hover span {
        padding-right: 25px;
        }

        .group button:hover span:after {
        opacity: 1;
        right: 0;
        }

        @media screen and (max-width: 400px) {
        .signin{
            border: 0;
            padding: 0px;
            border-radius: 10px;
            box-shadow: none;
        }
        }

    </style>

    </head>
<body>
    <div class="signin">

  <form action="../includes/admin/auth_file.inc.php" method="POST" autocomplete="on">

    <div class="group head">
        <img src="<?= $url ?>static/images/logow.png"  alt="" srcset="">

      <h2>Welcome Back,</h2>

      <p>Login In To Continue</p>

    </div>

    <div class="group">

      <label for="username-field">Email or Username</label><br>

      <input type="text" name="username" id="username-field" required>

    </div>

    <div class="group">

      <label for="password-field">Password</label><br>

      <input type="password" name="password" id="password-field" required>

      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

    </div>

    <div class="group forgot-pass-link">

      <a href="#">Forget Password?</a>

    </div>

    <div class="group">

      <button type="submit" name="admin-login"><span>Login</span></button>
      

    </div>
    <div class="form-group text-center" style="margin-top: 12px; color:#f9d14d; text-align:center;">
                                    <?php 
                                    if (isset($_SESSION['flash_message'])) {
                                        echo '<span class="color-red text-center" style="text-align:center;">' .
                                            $_SESSION['flash_message'] .
                                            '</span>';
                                    } 
                                    unset($_SESSION['flash_message']); 
                                    ?>
                                </div>
                                

  </form>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
    $(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");

  var input = $($(this).attr("toggle"));

  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>
</html>