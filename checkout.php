<?php
    session_start();

    require('mysqli_connect.php');
    error_reporting(0);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rent - Checkout</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
        <h1>Enjoy your journey</h1>
    </section>
    <div class="car_details">
    <?php
        $getid = $_REQUEST['carid'];

        $sql = "SELECT * FROM cars WHERE carid = '$getid' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "
                        <div class='car_img' style='width:100%;text-align:center;'>
                            <img src='./".$row["carimage"]."' alt='Car images' class='cars_db' style='display: inline-block;
                            max-width: 100%;
                            height: auto;
                            width: 40%;
                            margin: 1%;'>
                            <h3 style='margin-top:-15px;margin-left:10px;'>".$row['carname']."</h3>
                            <h5 style='margin-bottom:15px;margin-left:10px;display:inline-block;' class='car_price'>Per day</h5><p style='display:inline-block;' class='carprice_ptag'>".$row['carpriceperday']."</p>
                        </div>

                        <div class='payment_code' style='width:100%;text-align:center;'>
                        Select booking days: <input type='number' id='quantity' class='days_change' name='quantity' min='1' max=5' value='1' style='border:2px solid #24f8c7;border-radius: 4px;padding: 5px;'>

                        <br>
                        <h5 style='display:inline-block; margin-top:20px;'>Payment required with tax:</h5>
                        <p class='total_amount' style='display:inline-block;'>".$row['carpriceperday']."</p>

                        <br>
                        </div>

                    ";

                    if (isset($_SESSION['login'])) {
                        $name = substr($_SESSION['login'], 0, 5); // take hemal from hemal@gmail.com
                        echo "<div class='payment_btn' style='text-align:center;'>
                        <a href='booking.html' class='book_btn' style='position: relative;
                        display: inline-block;
                        border: 1px solid #000;
                        border-radius: 5px;
                        padding: 12px 34px;
                        font-size: 13px;
                        background: transparent;
                        cursor: pointer;
                        text-decoration: none;margin-top: 20px;background-color: #24f8c7;
                        color: black;font-weight:bold;'>PAYMENT</a>
                        </div>";
                    }
                    
                    else {
                        echo '
                        <div class="payment_btn" style="text-align:center;">
                            <a href="#" class="loginbtn" onclick="loginjs();" style="position: relative;
                            display: inline-block;
                            border: 1px solid #000;
                            border-radius: 5px;
                            padding: 12px 34px;
                            font-size: 13px;
                            background: transparent;
                            cursor: pointer;
                            text-decoration: none;margin-top: 20px;background-color: #24f8c7;
                            color: black;font-weight:bold;">LOGIN</a>
                            <br>
                            <a href="#" class="hero_btn signbtn" onclick="signupjs();" style="position: relative;
                            display: inline-block;
                            border: 1px solid #000;
                            border-radius: 5px;
                            padding: 12px 34px;
                            font-size: 13px;
                            background: transparent;
                            cursor: pointer;
                            text-decoration: none;margin-top: 20px;background-color: #24f8c7;
                            color: black;font-weight:bold;">SIGN UP</a>
                        </div>';
                    }

            }
        }
        else{
            header("Location: index.php");
        }
        mysqli_close($conn);
    ?>
    </div>
    


    
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
  
        <form class="modal-content animate" action="checkout_login.php" method="post">
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