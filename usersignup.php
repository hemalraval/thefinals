<?php
require('mysqli_connect.php');
error_reporting(0);



if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    $getsignupemail = mysqli_real_escape_string($conn,trim($_POST['signupemail']));
    $getsignupmobile = mysqli_real_escape_string($conn,trim($_POST['signupmobile']));
    $getsignuppass = mysqli_real_escape_string($conn,trim($_POST['signuppsw']));

    $sql = "INSERT INTO users (userid, useremail, userpassword, userphone, usertype)
    VALUES (DEFAULT, '$getsignupemail', '$getsignuppass' , '$getsignupmobile', DEFAULT)";
    
    if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Account Created. You can login now.');
        window.location.replace('index.php');
    </script>";

    
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
    
    mysqli_close($conn);
}
?>