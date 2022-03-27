<?php
require('mysqli_connect.php');
error_reporting(0);


if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    // echo $_POST['login_pass'];
    $getemail = mysqli_real_escape_string($conn,trim($_POST['login_email']));
    $getpass = mysqli_real_escape_string($conn,trim($_POST['login_pass']));

    echo $getemail;
    echo $getpass;

    $sql = "SELECT * FROM users WHERE useremail = '$getemail' AND userpassword = '$getpass' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        
        $_SESSION["login"] = $getemail;
        header("Location: checkout.php");
    }
    else{
        // header("Location: checkout.php");
        echo "error";
    }
    mysqli_close($conn);
}
?>