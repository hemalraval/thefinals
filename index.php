<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rent</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html" class="logo">Car
                <i class="fas fa-car-side"></i>Rent
            </a>
            <div class="nav-links" id="navLinks">
                <!-- Reposnive bar open and close aas -->
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
            <!-- Reposnive bar open and close -->
        </nav>

        <div class="text_box">
            <h2>GET READY</h2>
            <p id="headtext">TO DISCOVER BRAND NEW CARS</p>
            <p>Rent a Car with us and Drive Happy
                <br> Ride with us to your destination
            </p>
            <a href="booking.html" class="hero_btn">SEE OUR CARS</a>
            <br>

            <?php
                if (isset($_SESSION['login'])) {
                    $name = substr($_SESSION['login'], 0, 5); // take hemal from hemal@gmail.com
                    echo '<p class="user_name_login_orange">Welcome back '. $name . '..</p>';
                } else {
                    echo '<a href="#" class="hero_btn loginbtn" onclick="loginjs();">LOGIN</a><br>
                    <a href="#" class="hero_btn signbtn" onclick="signupjs();">SIGN UP</a>';
                }
            ?>

        </div>
    </section>

    <!-- Details Section Start -->
    <section class="course">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>EXPLORE OUR <br> CAR BRANDS</h1>
        <p>Find great prices on car rental with us</p>

        <div class="row">
            <div class="course-col">
                <h3>Fuel Plans</h3>
                <p>For every rental, Self Refueling, and our own Refueling Service are available. Check out our Budget fuel plans to see which one is right for you.</p>
            </div>
            <div class="course-col">
                <h3>Mobile App</h3>
                <p>Download the free mobile app and rent a car easily from your device with the Car Rental app.</p>
            </div>
            <div class="course-col">
                <h3>Meeting & Group Rental Services</h3>
                <p>Car Rental has a variety of unique incentives to help you make your event a success. Learn about our unique services as well as our current discounts and special offers.</p>
            </div>
        </div>
    </section>
    <!-- Details Section End -->




    <!-- Facilities Section Start -->
    <section class="facilities">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>Absolutely in love with our new wheels.</h1>
        <p>Explore some of our brand new arrivals</p>

        <div class="row">
            <div class="facilities-col">
                <img src="img/home1.jpg" alt="">
                <h3>BMW</h3>
                </p>
            </div>
            <div class="facilities-col">
                <img src="img/home2.jpg" alt="">
                <h3>Honda Civic 2020</h3>
                </p>
            </div>
            <div class="facilities-col">
                <img src="img/home3.jpg" alt="">
                <h3>Range Rover</h3>
                </p>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Clients Section Start -->
    <section class="testimonials">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>What Our clients Says</h1>
        <p>Always give people more than what they expect to get.</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="img/client1.png" alt="Client image">
                <div>
                    <p>Great service throughout my journey with Car Rent.</p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="img/client2.jpg" alt="Client image">
                <div>
                    <p>Decent and clean car, easy process. </p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->

    <!-- Journey Section Start -->
    <section class="cta">
        <h1>GET READY FOR A BRIGHT JOURNEY</h1>
        <a href="contact.html" class="hero_btn">CONTACT US</a>
    </section>
    <!-- Journey Section End -->

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

    

    <!-- --------------------------------SIGNUP START------------------------------------------- -->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close close_signup" title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
      
            <label for="mobile"><b>Mobile</b></label>
            <input type="text" placeholder="Enter Mobile" name="mobile" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
      
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
            <div class="clearfix">
              <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
              <button type="submit" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
      <!-- --------------------------------SIGNUP END------------------------------------------- -->


      <!-- --------------------------------LOGIN START------------------------------------------- -->
      <div id="id02" class="modal">
  
        <form class="modal-content animate" action="logincheck.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="login_email" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="login_pass" required>
              
            <button type="submit" name="login_btn">Login</button>
          </div>
      
        </form>
      </div>
      <!-- --------------------------------LOGIN END------------------------------------------- -->


    <script src="js/script.js"></script>
</body>

</html>