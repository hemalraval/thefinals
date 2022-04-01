<?php
require('mysqli_connect.php');
error_reporting(0);


if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    // echo $_POST['login_pass'];
    $getemail = mysqli_real_escape_string($conn,trim($_POST['login_email']));
    $getpass = mysqli_real_escape_string($conn,trim($_POST['login_pass']));

    $sql = "SELECT * FROM users WHERE useremail = '$getemail' AND userpassword = '$getpass' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        
        $_SESSION["login"] = $getemail;
        header("Location: index.php");
    }
    else{
        echo "<script>
        alert('Wrong ID or Password');
        window.location.replace('index.php');
        </script>";
        // header("Location: index.php");
    }
    mysqli_close($conn);
}
?>