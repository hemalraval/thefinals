<?php
    require('mysqli_connect.php');
    error_reporting(0);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $aa = $_REQUEST['car_id'];

        $bb = $_REQUEST['car_name'];

        $cc = $_REQUEST['car_year'];

        $dd = $_REQUEST['car_url'];

        $ee = $_REQUEST['car_price'];

        // echo $aa;
        // echo $bb;

        // echo $cc;

        // echo $dd;

        // echo $ee;

        $sql = "UPDATE cars SET carname='$bb', caryear='$cc', carimage='$dd', carpriceperday='$ee' WHERE carid='$aa'";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Requested Car details updated');
            window.location.replace('admin.php');
            </script>";
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }


    }
?>