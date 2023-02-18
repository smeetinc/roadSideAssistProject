<?php
if($_GET['status'] !="success"){
  header("Location:javascript://history.go(-1)");
}



 else{
  include 'includes/autoload.php';

 session_start();
  
    $car_make = $_SESSION['car_make'];
    $car_year = $_SESSION['car_year'];
    $car_model = $_SESSION['car_model'];
    $car_transmission = $_SESSION['car_transmission'];
    $car_body = $_SESSION['car_body'];
    $car_use = $_SESSION['car_use'];
    $car_distance = $_SESSION['car_distance'];
    $car_address = $_SESSION['car_address'];
    $car_registration = $_SESSION['car_registration'];
    $customer_title = $_SESSION['customer_title'];
    $customer_name = $_SESSION['customer_name'];
    $customer_birthdate = $_SESSION['customer_birthdate'];
    $email = $_SESSION['email'];
    $customer_phone = $_SESSION['customer_phone'];
    $customer_occupation = $_SESSION['customer_occupation'];
    $package_type = $_SESSION['package_type'];
    $invoice_limits = $_SESSION['invoice_limits'];
    $finalAmount = $_SESSION['finalAmount'];
    $reference = $_SESSION['reference'];

    //Insert into database
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="RoadSideAssist is a website dedicated to providing any assistance for road users">
    <meta name="keywords" content="Road, road, assist, assistance, car, tyre, battery, fix, fix-your-car, car-maintenance, repair, car-repair">
    <meta name="author" content="www.roadsideassist.com.ng">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
       SUCCESS | Road Side Assist Nigeria
    </title>

    <meta http-equiv="refresh" content="60; url='index.php'" />
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist.com.ng/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/success.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/extra.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-TileColor" content="#c9cde3">
    <meta name="msapplication-config" content="img/browserconfig.xml">
    <meta name="theme-color" content="#ad5d5d">
    
    <script src="js/jquery-3.2.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

     
      

   
</head>
<body>
    <section class="navigation">
        <nav>
            <a href="index.php"><img src="img/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#offers">OFFERS</a></li>
                    <li><a href="index.php#pricing">PRICING</a></li>
                    <li><a href="index.php#faqs">FAQs</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <!------------ Start Success Page Content---->
    <section class="second">

      <h2>You have successfully made your payment, you will be redirected to the homepage in less than a minute</h2>
      <br>
      <p>If nothing happened, click <a href="index.php">here</a> to go back to the homepage</p>

      <table>
        <tr>
          <th>Summary</th>
        </tr>
        <tr>
          <td>Full Name : <?php echo $customer_title.' '.$customer_name; ?></td>
        </tr>
        <tr>
          <td>Email : <?php echo $email; ?></td>
        </tr>
        <tr>
          <td>Phone Number : <?php echo $customer_phone; ?></td>
        </tr>
        <tr>
          <td>Birthdate : <?php echo $customer_birthdate; ?></td>
        </tr>
        <tr>
          <td>Occupation : <?php echo $customer_occupation; ?></td>
        </tr>
        <tr>
          <td>Make of car : <?php echo $car_make; ?></td>
        </tr>
        <tr>
          <td>Year : <?php echo $car_year; ?></td>
        </tr>
        <tr>
          <td> Car Model : <?php echo $car_model; ?></td>
        </tr>
        <tr>
          <td>Transmission type : <?php echo $car_transmission; ?></td>
        </tr>
        <tr>
          <td>Car Body type : <?php echo $car_body; ?></td>
        </tr>
        <tr>
          <td>Car Registration Number : <?php echo $car_registration ?></td>
        </tr>
        <tr>
          <td>Car Overnight address : <?php echo $car_address; ?></td>
        </tr>
        <tr>
          <td>Distance covered : <?php echo $car_distance; ?></td>
        </tr>
        <tr>
          <td>Car main use : <?php echo $car_use; ?></td>
        </tr>
        <tr>         
          <td>Package Bought : <?php echo $package_type; ?></td>
        </tr>
        <tr>
          <td>Duration : <?php echo $invoice_limits; ?></td>
        </tr>
        <tr>
          <td>Amount Paid : <?php echo $finalAmount; ?></td>
        </tr>
        <tr>
          <td>Reference Code : <?php echo $reference; ?></td>       
        </tr>
      </table>

   <?php

      session_unset();
      session_destroy();

   ?>

    </section>
    <!---------- End Success Page Content------>
    <!-------Footer------>
   <footer>
       <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <div class="footer-links">
                <div class="link-title">
                    <h4>Product</h4><br>
                    <small>Our Plan</small>
                    <small>Free Trial</small>
                </div>
                <div class="link-title">
                    <h4>About Us</h4><br>
                    <small>Request Demo</small>
                    <small>FAQs</small>
                </div>
                <div class="link-title">
                    <h4>Support</h4><br>
                    <small>Features</small>
                    <small>Contact Us</small>
                </div>
               
            </div>
        </div>
        <div class="footer-right-col">
            <div class="footer-info">
                <div class="copyright-text">
                    <small>support@roadsideassist.com.ng</small>
                    <small>&copy; <?php echo date('Y'); ?> | RoadSideAssist</small>
                </div>
                <div class="footer-logo">
                    <img src="img/logo1.png">
                    <br>
                    <img src="img/ng.png">
                </div>
            </div>
        </div>
       </div>
   </footer>

<script src="js/faq.js"></script>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right="0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: false
    });

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        once: true,
    });
</script>


</body>
</html>