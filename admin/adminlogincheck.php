<?php
require('mysqli_connect.php');
error_reporting(0);


if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    $getadminemail = mysqli_real_escape_string($conn,trim($_POST['adminusername']));
    $getadminpass = mysqli_real_escape_string($conn,trim($_POST['adminpassword']));

    echo $getadminemail;
    echo $getadminpass;

    if($getadminemail == 'final' && $getadminpass == 'final'){
        header("Location: admin.php");
        // echo "yes";
    }else{
        // header("Location: index.php");
        // echo "no";
    }
    // $sql = "SELECT * FROM users WHERE useremail = '$getemail' AND userpassword = '$getpass' ";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     session_start();
        
    //     $_SESSION["login"] = $getemail;
    //     header("Location: index.php");
    // }
    // else{
    //     header("Location: index.php");
    // }
    // mysqli_close($conn);
}
?>