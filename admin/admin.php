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

    <!-- Admin Dashboard INSERT Start -->

    <div class="containercar">
        <div class="car">
            <form action="insertcar.php" method="post">
                <h2>Enter New Car</h2>
                <input type="text" placeholder="Enter Car Name" name="car_name">
                <input type="text" placeholder="Enter Car Model Year" name="car_year">
                <input type="text" placeholder="Enter Car Image URL"  name="car_url">
                <input type="text" placeholder="Enter Car Price" name="car_price">
                <button type="submit">INSERT</button>
            </form>
        </div>
    </div>

    <div class="PageBlock" style='margin-top: 25px !important;'>
        <div class="verticalLine"></div>
        <div class="Clear"></div>
    </div>

    <!-- Admin Dashboard INSERT END -->


    <!-- Admin Dashboard Section Start -->

    <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);

        echo "
            <table class='table table-condensed'>
                <thead>
                <tr>
                    <th>Car ID</th>
                    <th>Car Name</th>
                    <th>Car Year</th>
                    <th>Car Image</th>
                    <th>Car Price</th>
                    <th>MODIFY</th>
                    <th>DELETE</th>
                </tr>
                </thead>
                <tbody>";
        if ($result->num_rows > 0) {
            echo $row;
            while($row = $result->fetch_assoc()) {
                echo "
                    
                    <tr>
                        <td>".$row["carid"]."</td>
                        <td>".$row["carname"]."</td>
                        <td>".$row["caryear"]."</td>
                        <td>".$row["carimage"]."</td>
                        <td>".$row["carpriceperday"]."</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                     ";
            }
            echo "</tbody>
            </table>";
        }
        else{
            echo "No car found";
        }
        mysqli_close($conn);
    ?>

    <!-- ===================================================================== -->
    
  

    <!-- Admin Dashboard Section Ends -->

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