<?php
require('mysqli_connect.php');
error_reporting(0);
    

$getid = $_REQUEST['cardeleteid'];

$sql = "DELETE FROM cars WHERE carid = '$getid' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: admin.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
  
mysqli_close($conn);
// header("Location: admin.php");
?>