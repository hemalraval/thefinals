<?php
require('mysqli_connect.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details - Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="Sub-header faq_header">
        <nav>
            <a href="index.html" class="logo">Car
                <i class="fas fa-car-side"></i>Rent
            </a>
            <div class="nav-links" id="navLinks">
                <!-- reposnive bar open and close -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="booking.html">Booking</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- reposnive bar open and close -->
        </nav>
    </section>

    <!-- Admin Dashboard UPDATE Start -->

    <div class="containercar">
        <div class="car">
            <form action="updatelogic.php" method="post">
                <h2>Update Car</h2>

                <?php
                    $getcarupdateid = $_REQUEST['carupdateid'];
                    // echo $getcarupdateid;

                    $sql = " SELECT * FROM cars WHERE carid= '$getcarupdateid' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $aaa =  $row["carname"];

                            echo "<input type='text' placeholder='Car ID' name='car_id' required value=".$row["carid"]." >
                            <input type='hidden' name='car_id' required value=".$row["carid"]." >
                            <input type='text' placeholder='Car Name' name='car_name' required value='".$row['carname']."' style='background:white;'>
                            <input type='text' placeholder='Update Car Model Year' name='car_year' required value=".$row["caryear"]." style='background:white;'>
                            <input type='text' placeholder='Update Car Image URL'  name='car_url' required value=".$row["carimage"]." style='background:white;'>
                            <input type='text' placeholder='Update Car Price' name='car_price' required value=".$row["carpriceperday"]." style='background:white;'>
                            <button type='submit'>UPDATE</button>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>

    <!-- Admin Dashboard UPDATE End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <hr>
        <h4>Hey there!</h4>
        <p>Apply online with a valid driver's license. Most people are approved instantly and can book a trip within minutes.
        </p>

        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <p>Made with <i class="fas fa-heart"></i> by <a href="index.html">Happy Customers</a></p>
        <p>Copyright © 2022 <a href="index.html">Car Rent</a>. All Rights Reserved</p>
    </section>
    <!-- Footer Section End -->
    <script src="js/script.js"></script>
</body>

</html>