<?php
require('mysqli_connect.php');
error_reporting(0);


if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    $getadminemail = mysqli_real_escape_string($conn,trim($_POST['adminusername']));
    $getadminpass = mysqli_real_escape_string($conn,trim($_POST['adminpassword']));

    // echo $getadminemail;
    // echo $getadminpass;

    if($getadminemail == 'final' && $getadminpass == 'final'){
        header("Location: admin.php");
    }else{
        echo "<script>
        alert('Wrong ID or Password');
        window.location.replace('index.php');
        </script>";
        // header("Location: index.php");
    }
    
    mysqli_close($conn);
}
?>