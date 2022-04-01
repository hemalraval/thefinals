<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rent - ADMIN</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="Sub-header faq_header">
        <nav>
            <a href="index.php" class="logo">Car
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
        <h1>ADMIN LOGIN</h1>
    </section>

    <!-- ADMIN LOGIN Section Start -->
    <div class="container">
        <div class="myform">
            <form action="adminlogincheck.php" method="post">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Enter Username" name="adminusername" required>
                <input type="password" placeholder="Enter Password" name="adminpassword" required>
                <button type="submit" name="adminlogin" onclick="adminloginjs();">ADMIN LOGIN</button>
            </form>
        </div>
    </div>
    <!-- ADMIN LOGIN Section End -->

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
    <script src="../js/admin.js"></script>
</body>

</html>