<?php
require('mysqli_connect.php');
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    // echo $_POST['login_pass'];
    $getcarname = mysqli_real_escape_string($conn,trim($_POST['car_name']));
    $getcaryear = mysqli_real_escape_string($conn,trim($_POST['car_year']));

    $getcarurl = mysqli_real_escape_string($conn,trim($_POST['car_url']));
    $getcarprice = mysqli_real_escape_string($conn,trim($_POST['car_price']));


    // echo $getcarname;
    // echo $getcarprice;
    // echo $getcarurl;
    // echo $getcaryear;

    
}
?>