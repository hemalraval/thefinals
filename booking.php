<?php
    session_start();

    require('mysqli_connect.php');
    error_reporting(0);

    // $sql = "SELECT * FROM cars";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "Carname: " . $row["carname"]. " - CarYear: " . $row["caryear"]. " " . $row["carimage"]. "<br>";
    //     }
    // }
    // else{
    //     echo "No car found";
    // }
    // mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rent - Book Here</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- reposnive bar open and close -->
        </nav>
        <h1>Booking Area</h1>
    </section>

    <!-- Booking Section Start -->
    <section class="facilities">
        <div class="PageBlock">
            <!-- <div class="verticalLine"></div>
            <div class="Clear"></div> -->
        </div>
        <h1>Absolutely in love with our new wheels.</h1>
        <p>Explore some of our brand new arrivals</p>

        <div class='booking_img' style='max-width: 960px;'>
        <?php
            $sql = "SELECT * FROM cars";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo $row;
                while($row = $result->fetch_assoc()) {
                    echo "
                            <a href=''>
                                <img src='./".$row["carimage"]."' alt='Car images' class='cars_db' style='display: inline-block;
                                max-width: 98%;
                                height: auto;
                                width: 50%;
                                margin: 1%;'>
                                <h3 style='margin-top:-15px;'>".$row['carname']."</h3>
                                <h6 style='margin-bottom:15px;'>Per day $".$row['carpriceperday']."</h6>
                            </a>
                        ";
                }
            }
            else{
                echo "No car found";
            }
            mysqli_close($conn);
        ?>
        </div>
       
    </section>
    <!-- Booking Section End -->

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