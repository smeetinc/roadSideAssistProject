<?php
  require 'includes/autoload.php'; 
 
  
 
     
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="RoadSideAssist is a website dedicated to providing any assistance for road users">
    <meta name="keywords" content="Road, road, assist, assistance, car, tyre, battery, fix, fix-your-car, car-maintenance, repair, car-repair">
    <meta name="author" content="www.roadsideassist.com.ng">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <title>
        Register | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist.com.ng/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    
    <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/register3.css" />
    <script src="js/register.js" defer></script>
    
    
    
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

    <div id="body">

    <form method="GET" action="includes/show.inc.php" class="form">
      <h1 class="text-center">Register with Us</h1>

      <!----- Display any form Error---->

      <div>
        <?php

            if(isset($_GET['error'])){

        $error = htmlspecialchars($_GET['error']);

        echo $error;

                }
        ?>
      </div>
      
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div class="progress-step progress-step-active"
          data-title="Car info 1"></div>
        <div class="progress-step" data-title="Car info 2"></div>
        <div class="progress-step" data-title="Owner"></div>
        <div class="progress-step" data-title="Payment"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="car_make">Make of car</label>
          <input type="text" name="car_make" id="car_make" required="Field must not be empty"/>
        </div>
        <div class="input-group">
          <label for="car_year">Year</label>
          <input type="text" name="car_year" id="car_year" required="Field must not be empty" />
        </div>
        <div class="input-group">
          <label for="car_model">Model</label>
          <input type="text" name="car_model" id="car_model" required="Field must not be empty"/>
        </div>
        <div class="input-group">
          <label for="car_transmission">Transmission Type</label>
         <select id="car_transmission" name="car_transmission" required>
          <option value="automatic">Automatic</option>
          <option value="manual">Manual</option>
        </select>
        </div>
        <div class="input-group">
          <label for="car_body">Body Type</label>
          <select id="car_body" name="car_body" required>
            <option value="wagon">Wagon</option>
            <option value="suv">SUV</option>
            <option value="sedan">Sedan</option>
            <option value="bus">Bus</option>
          </select>
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="car_use">Main use for?</label>
           <select id="car_use" name="car_use" required>
            <option value="private and commuting">Private and commuting</option>
            <option value="commercial">Commercial</option>
            <option value="private and sometimes commercial">Private and sometimes commercial</option>
          </select>
        </div>
        <div class="input-group">
          <label for="car_distance">How many Kilometre:</label>
          <select id="car_distance" name="car_distance" required>
            <option value="Under 200k">Under 200K</option>
            <option value="Over 200k">Over 200K</option>
          </select>
        </div>
        <div class="input-group">
          <label for="car_address">Current overnight address</label>
          <input type="text" name="car_address" id="car_address" required="Field must not be empty">
      
        </div>
        <div class="input-group">
          <label for="car_registration">Registration number</label>
          <input type="text" name="car_registration" id="car_registration" required="Field must not be empty">
          
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="customer_title">Title (Mr./ Mrs./ Miss ...)</label>
          <input type="text" name="customer_title" id="customer_title" required="Field must not be empty">
        </div>
        <div class="input-group">
          <label for="customer_name">Full name</label>
          <input type="text" name="customer_name" id="customer_name" required="Field must not be empty">
        </div>
        <div class="input-group">
          <label for="customer_birthdate">Date of Birth (dd/mm/yy)</label>
          <input type="text" name="customer_birthdate" id="customer_birthdate" required="Field must not be empty">
        </div>
        <div class="input-group">
          <label for="customer_email">Email address:</label>
          <input type="text" name="customer_email" id="customer_email" required="Field must not be empty">
        </div>
        <div class="input-group">
          <label for="customer_phone">Phone number</label>
          <input type="text" name="customer_phone" id="customer_phone" required="Field must not be empty">
        </div>
        <div class="input-group">
          <label for="customer_occupation">Occupation</label>
          <input type="text" name="customer_occupation" id="customer_occupation" required="Field must not be empty">
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="package_type">Select Package:</label>
          <select id="package_type" name="package_type" required>
            <option value="basic">Basic</option>
            <option value="advance">Advance</option>
            <option value="premium">Premium</option>
          </select>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" name="submit1" class="btn" />
        </div>
      </div>
    </form>

  <div style="color: crimson; padding: 10px; font-size: 12;">
    <p>Please note! The submit button will not work if you leave any field empty</p>
  </div>
  </div>
  

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
                    <small>&copy; 2021 | RoadSideAssist</small>
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


  </body>
</html>