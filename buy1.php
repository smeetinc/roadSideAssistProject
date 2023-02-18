
<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
    $car_make = htmlspecialchars($_POST['car_make']);
    $car_year = htmlspecialchars($_POST['car_year']);
    $car_model = htmlspecialchars($_POST['car_model']);
    $car_transmission = htmlspecialchars($_POST['car_transmission']);
    $car_body = htmlspecialchars($_POST['car_body']);
    $car_use = htmlspecialchars($_POST['car_use']);
    $car_address = htmlspecialchars($_POST['car_address']);
    $car_distance = htmlspecialchars($_POST['car_distance']);
    $car_registration = htmlspecialchars($_POST['car_registration']);
    $customer_title = htmlspecialchars($_POST['customer_title']);
    $customer_name = htmlspecialchars($_POST['customer_name']);
    $customer_birthdate = htmlspecialchars($_POST['customer_birthdate']);
    $customer_phone = htmlspecialchars($_POST['customer_phone']);
    $customer_occupation = htmlspecialchars($_POST['customer_occupation']);
    $package_type = htmlspecialchars($_POST['package_type']);
    $invoice_limits = htmlspecialchars($_POST['invoice_limits']);
}

    session_start();
    $_SESSION['car_make']=$car_make;
    $_SESSION['car_year']=$car_year;
    $_SESSION['car_model']=$car_model;
    $_SESSION['car_transmission']=$car_transmission;
    $_SESSION['car_body']=$car_body;
    $_SESSION['car_use']=$car_use;
    $_SESSION['car_distance']=$car_distance;
    $_SESSION['car_address']=$car_address;
    $_SESSION['car_registration']=$car_registration;
    $_SESSION['customer_title']=$customer_title;
    $_SESSION['customer_name']=$customer_name;
    $_SESSION['customer_birthdate']=$customer_birthdate;
    $_SESSION['email']=$email;
    $_SESSION['customer_phone']=$customer_phone;
    $_SESSION['customer_occupation']=$customer_occupation;
    $_SESSION['package_type']=$package_type;
    $_SESSION['invoice_limits']=$invoice_limits;
    


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
        Confirm Order | Road Side Assist Nigeria
    </title>
    
    <meta property="og:title" content="RoadSideAssist"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.roadsideassist.com.ng"/>
    <meta property="og:image" content="www.roadsideassist.com.ng/img/logo.png"/>
    <meta property="og:description" content="RoadSideAssist is a website dedicated to providing any assistance for road users"/>

    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/payment.css">
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
    <!------------ Start Display Checkout Content---->
    <section class="second">

    	<h1>Order Summary</h1>
    	<h3>Please confirm that your details are correct before proceeding to pay</h3>
    	<!------- Costumers details here------>

        <div class="buy_summary">

        <p><strong> Name:</strong> <?php echo $customer_title." ".$customer_name; ?></p>
        <p><strong> Phone Number:</strong> <?php echo $customer_phone; ?></p>
        <p><strong> Email:</strong> <?php echo $email; ?> </p>
        <p><strong> Package type:</strong> <?php echo $package_type; ?></p>
        <p><strong> Subscription Duration:</strong> <?php echo $invoice_limits. "Months"; ?></p> 

        <?php
            if ($package_type=='basic'){
                $finalAmount = 350 * $invoice_limits;
                if($invoice_limits==6){
                    $finalAmount = 1890;
                } 
            }else if($package_type=='advance'){
                $finalAmount = 300 * $invoice_limits;
                if($invoice_limits==12){
                    $finalAmount = 3240;
                }
            }else{
                $finalAmount = 300 * $invoice_limits;
                 if($invoice_limits==24){
                    $finalAmount = 5400;

            }
        }

        ?>

        <p> <strong>Amount:</strong> <?php echo $finalAmount; ?></p>
        <p> <strong>Make of car:</strong> <?php echo $car_make; ?></p>
        <p> <strong>Year:</strong> <?php echo $car_year; ?> </p>
        <p> <strong>Model:</strong> <?php echo $car_model; ?></p>
        <p> <strong>Registration Number:</strong> <?php echo $car_registration; ?></p>
       <!-- <p> Transmission type: <?php /* echo $car_transmission; ?></p>
        <p> Body type: <?php echo $car_body; ?></p>
        <p> Main use for: <?php echo $car_use; ?></p>
        <p> How many kilometre: <?php echo $car_distance, ?></p> 
        <p> Occupation: <?php echo $customer_occupation; ?></p>
        <p> Current Overnight address: <?php echo $car_address; */ ?></p> -->

    </div> 

        
        
        
        

    	<!----------- Details end, Payment Integration start ------>
    	<form id="paymentForm">
    	
    	<button type="submit" onclick="payWithPaystack()" class="paybtn"> Pay Now </button>
    	
    </form>
    <script src="https://js.paystack.co/v1/inline.js"></script> 



	
	</section>
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



   



  <!--<script>
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit2", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_91a7b9764db859f7cead7b81abaa8d1ec69f2d6a', // Replace with your public key
    email: document.getElementById("email").value,
    car_make: document.getElementById("car_make").value,
    car_year: document.getElementById("car_year").value,
    car_model: document.getElementById("car_model").value,
    car_transmission: document.getElementById("car_transmission").value,
    car_body: document.getElementById("car_body").value,
    car_use: document.getElementById("car_use").value,
    car_distance: document.getElementById("car_distance").value,
    car_registration: document.getElementById("car_registration").value,
    car_address: document.getElementById("car_address").value,
    customer_title: document.getElementById("customer_title").value,
    customer_name: document.getElementById("customer_name").value,
    customer_birthdate: document.getElementById("customer_birthdate").value,
    customer_phone: document.getElementById("customer_phone").value,
    customer_occupation: document.getElementById("customer_occupation").value,
    package_type: document.getElementById("package_type").value,
    invoice_limits: document.getElementById("invoice_limits").value,
    amount: document.getElementById("amount").value * 100,
    ref: 'RSA'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location = "localhost/roadsideassist/payment.php?transaction=call";
      alert('Transaction cancelled');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "localhost/roadsideassist/verify_transaction.php?reference="+response.reference;
    }
  });
  handler.openIframe();
}
</script>

-->

   
  

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

<script>
    paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_91a7b9764db859f7cead7b81abaa8d1ec69f2d6a', // Replace with your public key
    email: '<?php echo $email; ?>',
    amount: '<?php echo $finalAmount*100; ?>',
    subaccount: 'ACCT_2g2qoechol538jt',
    bearer: 'subaccount',
    ref: 'RSA'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    firstname: '<?php echo $customer_name; ?>',
            metadata: {
                custom_fields: [
                    {
                        display_name: "Full Name",
                        variable_name: "customer_name",
                        value: "<?php echo $customer_title.' '.$customer_name; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Phone Number",
                        variable_name: "customer_phone",
                        value: "<?php echo $customer_phone; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Birthdate",
                        variable_name: "customer_birthdate",
                        value: "<?php echo $customer_birthdate; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Occupation",
                        variable_name: "customer_occupation",
                        value: "<?php echo $customer_occupation; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Make of car",
                        variable_name: "car_make",
                        value: "<?php echo $car_make; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Year",
                        variable_name: "car_year",
                        value: "<?php echo $car_year; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Car Model",
                        variable_name: "car_model",
                        value: "<?php echo $car_model; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Transmission type",
                        variable_name: "car_transmission",
                        value: "<?php echo $car_transmission; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Car Body type",
                        variable_name: "car_body",
                        value: "<?php echo $car_body; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Car Registration Number",
                        variable_name: "car_registration",
                        value: "<?php echo $car_registration; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Car overnight address",
                        variable_name: "car_address",
                        value: "<?php echo $car_address; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Distance covered",
                        variable_name: "car_distance",
                        value: "<?php echo $car_distance; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Car main use",
                        variable_name: "car_use",
                        value: "<?php echo $car_use; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Package Bought",
                        variable_name: "package_type",
                        value: "<?php echo $package_type; ?>"
                    }
                ],
                 custom_fields: [
                    {
                        display_name: "Duration",
                        variable_name: "invoice_limits",
                        value: "<?php echo $invoice_limits.' Months'; ?>"
                    }
                ]


            },
        

        onClose: function(){
        //window.location = "http://localhost/roadassist/buy1.php?transaction=call";
      alert('Transaction cancelled');
    },
    callback: function(response){
      //  const referenced = response.reference;
        //window.location.href='success.php?successfullypaid='+referenced;
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/roadassist/verify.php?reference="+response.reference;
    }
  });
  handler.openIframe();

}
    
   </script>
</body>
</body>
</html>