<?php
require('mysqli_connect.php');
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    $getcarname = mysqli_real_escape_string($conn,trim($_POST['car_name']));
    $getcaryear = mysqli_real_escape_string($conn,trim($_POST['car_year']));

    $getcarurl = mysqli_real_escape_string($conn,trim($_POST['car_url']));
    $getcarprice = mysqli_real_escape_string($conn,trim($_POST['car_price']));

    $modify_carurl = "image/" .$getcarurl;
    echo $modify_carurl;

    // **********************
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO cars (carid, carname, caryear, carimage, carpriceperday)
        VALUES (DEFAULT, '$getcarname', '$getcaryear' , '$modify_carurl', '$getcarprice')";
        
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }    
    }
    
    mysqli_close($conn);
    header("Location: admin.php");
}
?>