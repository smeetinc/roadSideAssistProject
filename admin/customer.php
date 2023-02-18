<?php
require("../includes/dbh.inc.php");



//Main action page for the admin activities
session_start();


//check if login is true

if ($_SESSION['logged_in'] != 1) {
    $_SESSION['message'] = "You must log in to view content";
    header("Location: error.php");
    
    
}else{
    //sorting data for easy readability

                $user_uid = $_SESSION['u_uid'];
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
       RECORDS | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/payment.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/extra.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="msapplication-TileColor" content="#c9cde3">
    <meta name="msapplication-config" content="images/browserconfig.xml">
    <meta name="theme-color" content="#ad5d5d">
    
    <script src="js/jquery-3.2.1.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <style>
        table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #000; 
  text-align: left; 
}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr { 
        display: block; 
    }
    
    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
    
    tr { border: 1px solid #ccc; }
    
    td { 
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%; 
    }
    
    td:before { 
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%; 
        padding-right: 10px; 
        white-space: nowrap;
    }
    
    /*
    Label the data
    */
    td:nth-of-type(1):before { content: "S/N"; }
    td:nth-of-type(2):before { content: "Make of car"; }
    td:nth-of-type(3):before { content: "Year"; }
    td:nth-of-type(4):before { content: "Model"; }
    td:nth-of-type(5):before { content: "Transmission type"; }
    td:nth-of-type(6):before { content: "Body type"; }
    td:nth-of-type(7):before { content: "Car use for"; }
    td:nth-of-type(8):before { content: "Distance covered"; }
    td:nth-of-type(9):before { content: "Car overnight address"; }
    td:nth-of-type(10):before { content: "Car registration number"; }
    td:nth-of-type(11):before { content: "Name"; }
    td:nth-of-type(12):before { content: "Birthdate"; }
    td:nth-of-type(13):before { content: "Email"; }
    td:nth-of-type(14):before { content: "Phone number"; }
    td:nth-of-type(15):before { content: "Occupation"; }
    td:nth-of-type(16):before { content: "Package paid for"; }
    td:nth-of-type(17):before { content: "Amount"; }
    td:nth-of-type(18):before { content: "Reference code"; }
    td:nth-of-type(19):before { content: "Duration /n (in months)"; }
    td:nth-of-type(20):before { content: "Payment status"; }
    td:nth-of-type(21):before { content: "Date paid"; }
    
}
    </style>

     
      

   
</head>
<body>
    <section class="navigation">
        <nav>
            <a href="index.php"><img src="img/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#offers">OFFERS</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <!------------ Start Success Page Content---->
    <section class="second">
        <table>
     <thead>
    <?php
         $sql_customer ="SELECT * FROM customer_records";

                $result_customer = mysqli_query($conn, $sql_customer);
                $queryResult_customer = mysqli_num_rows($result_customer);

                

            
            
echo "

    <tr>
        <th align='center'>S/N</th>
        <th align='center'>Make of car</th>
        <th align='center'>Year</th>
        <th align='center'>Model</th>
        <th align='center'>Transmission type</th>
        <th align='center'>Body type</th>
        <th align='center'>Car use for</th>
        <th align='center'>Distance covered</th>
        <th align='center'>Car overnight address</th>
        <th align='center'>Car registration number</th>
        <th align='center'>Name</th>
        <th align='center'>Birthdate</th>
        <th align='center'>Email</th>
        <th align='center'>Phone number</th>
        <th align='center'>Occupation</th>
        <th align='center'>Package paid for</th>
        <th align='center'>Amount</th>
        <th align='center'>Reference code</th>
        <th align='center'>Duration<br>(in months)</th>
        <th align='center'>Payment status</th>
        <th align='center'>Date paid</th>
    </tr>
</thead>
 <tbody>
";
    

                if ($queryResult_customer > 0){

                    while ($row_customer = mysqli_fetch_assoc($result_customer)){
                        echo "



                       
    <tr>
    
        <td align='left'>".$row_customer['id']."</td>
        <td 'left'>".$row_customer['car_make']."</td>
        <td 'left'>".$row_customer['car_year']."</td>
        <td 'left'>".$row_customer['car_model']."</td>
        <td 'left'>".$row_customer['car_transmission']."</td>
        <td 'left'>".$row_customer['car_body']."</td>
        <td 'left'>".$row_customer['car_use']."</td>
        <td 'left'>".$row_customer['car_distance']."</td>
        <td 'left'>".$row_customer['car_address']."</td>
        <td 'left'>".$row_customer['car_registration']."</td>
        <td 'left'>".$row_customer['customer_name']."</td>
        <td 'left'>".$row_customer['customer_birthdate']."</td>
        <td 'left'>".$row_customer['customer_email']."</td>
        <td 'left'>".$row_customer['customer_phone']."</td>
        <td 'left'>".$row_customer['customer_occupation']."</td>
        <td 'left'>".$row_customer['package_type']."</td>
        <td 'left'>".$row_customer['amount']."</td>
        <td 'left'>".$row_customer['reference_code']."</td>
        <td 'left'>".$row_customer['invoice_limits']."</td>
        <td 'left'>".$row_customer['status']."</td>
        <td 'left'>".$row_customer['date_paid']."</td>


        
    </tr>
   
    



                    
     
    ";

    }
    }
    ?>
</tbody>
   
</table>

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