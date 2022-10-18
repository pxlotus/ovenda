<?php 
$con = mysqli_connect("localhost","root","","ovenda_db");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
if (mysqli_connect_errno()) {
    echo"Connection failed.". mysqli_connect_error();
    # code...
}
 ?>