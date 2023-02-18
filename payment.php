<?php
include 'includes/autoload.php';
/* if(isset($_POST['submit2'])){
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




   // Initialise split payment

    $url = "https://api.paystack.co/transaction/initialize";
  $fields = [
    'email' => $email,
    'amount' => $amount,
    'subaccount' => "ACCT_2g2qoechol538jt",
    'bearer' => "subaccount",
    'callback_url' => 'http://localhost/roadsideassist/verify.php',
    'metadata' => [
  'custom_fields' => [
    [
      "display_name"=>"Car make",
      "variable_name"=>"Car year",
      "value"=>$car_make
    ],
    [
      "car_make"=>$car_make,
      "car_year"=>$car_year,
      "car_model"=>$car_model
    ]
  ]
]
   /* 'car_make' => $car_make,
    'car_year' => $car_year,
    'car_model' => $car_model,
    'car_transmission'=> $car_transmission,
    'car_body'=> $car_body,
    'car_use'=> $car_use,
    'car_address'=> $car_address,
    'car_distance' => $car_distance,
    'car_registration' => $car_registration,
    'customer_title' => $customer_title,
    'customer_name' => $customer_name,
    'customer_birthdate' => $customer_birthdate,
    'customer_phone' => $customer_phone,
    'customer_occupation' => $customer_occupation,
    'package_type' => $package_type,
    'invoice_limits' => $invoice_limits,
    
    
  ];

  $fields_string = http_build_query($fields);
  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_5f1fcaf1add8b0b13a0501008ecb892abeb9589e",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  $result = curl_exec($ch);
  var_dump($result);

  /*$initialize_data = json_decode($result);
  $initialization_url = $initialize_data->data->authorization_url;
  if($result){
  header("Location:".$initialization_url);
  }
  
}

else 

    if(isset($_POST['submit3'])){
    $email = htmlentities(mysqli_real_escape_string($conn, $_GET['email']));
    $limits = htmlentities(mysqli_real_escape_string($conn, $_POST['invoice_limits']));
    $amount = htmlspecialchars($_POST['amount']);

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/plan",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => [
      "name"=> "Road Side Assist Basic Package Subscription",
      "interval"=> "monthly",
      "amount"=> $amount,
      "subaccount" => "ACCT_2g2qoechol538jt",
    "bearer" => "subaccount",
      "invoice_limit"=> $limits
    ],
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_5f1fcaf1add8b0b13a0501008ecb892abeb9589e",
      "Cache-Control: no-cache"
    ),
  ));
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $data = json_decode($response);
    $plan_code = $data->data->plan_code;
    include_once("initialize.php");
  }
}else if(isset($_POST['submit5'])){
    $email = htmlentities(mysqli_real_escape_string($conn, $_GET['email']));
    $limits = htmlentities(mysqli_real_escape_string($conn, $_POST['invoice_limits']));

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/plan",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => [
      "name"=> "Road Side Assist Advance Package Subscription",
      "interval"=> "monthly",
      "amount"=> "30000",
      "invoice_limit"=> $limits
    ],
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_5f1fcaf1add8b0b13a0501008ecb892abeb9589e",
      "Cache-Control: no-cache"
    ),
  ));
  $response = curl_exec($curl);
   $err = curl_error($curl);
  curl_close($curl);
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $data = json_decode($response);
    $plan_code = $data->data->plan_code;
    include_once("initialize.php");
  }
}else if(isset($_POST['submit7'])){
    $email = htmlentities(mysqli_real_escape_string($conn, $_GET['email']));
    $limits = htmlentities(mysqli_real_escape_string($conn, $_POST['invoice_limits']));

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/plan",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => [
      "name"=> "Road Side Assist Premium Package Subscription",
      "interval"=> "monthly",
      "amount"=> "25000",
      "invoice_limit"=> $limits
    ],
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_5f1fcaf1add8b0b13a0501008ecb892abeb9589e",
      "Cache-Control: no-cache"
    ),
  ));
  $response = curl_exec($curl);
   $err = curl_error($curl);
  curl_close($curl);
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $data = json_decode($response);
    $plan_code = $data->data->plan_code;
    include_once("initialize.php");
  }
}elseif (isset($_POST['submit5'])){
 echo "<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit2', payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_91a7b9764db859f7cead7b81abaa8d1ec69f2d6a', // Replace with your public key
    email: document.getElementById('email').value,
    amount: 1890 * 100,
    ref: 'RSA'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: 'Optional string that replaces customer email'
    onClose: function(){
        window.location = 'http://localhost/roadsideassist/index.php?transaction=cancelled'
      alert('Transaction Cancelled!');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = 'http://localhost/roadsideassist/verify_transaction.php?reference=' + r esponse.reference;
    }
  });
  handler.openIframe();
}
</script>";
}
*/
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
        Payment | Road Side Assist Nigeria
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

    <?php
    if(isset($_GET['email'])){

        $email = htmlspecialchars($_GET['email']);
    

        $get_package_type = "SELECT * from customer WHERE customer_email='$email' AND id=(SELECT max(id) FROM customer)";
        $run_package_type = mysqli_query($conn, $get_package_type);
        while ($row_package_type=mysqli_fetch_array($run_package_type)) {
                $car_make = htmlspecialchars($row_package_type['car_make']);
                $car_year = htmlspecialchars($row_package_type['car_year']);
                $car_model = htmlspecialchars($row_package_type['car_model']);
                $car_transmission = htmlspecialchars($row_package_type['car_transmission']);
                $car_body = htmlspecialchars($row_package_type['car_body']);
                $car_use = htmlspecialchars($row_package_type['car_use']);
                $car_distance = htmlspecialchars($row_package_type['car_distance']);
                $car_address = htmlspecialchars($row_package_type['car_address']);
                $car_registration = htmlspecialchars($row_package_type['car_registration']);
                $customer_title = htmlspecialchars($row_package_type['customer_title']);
                $customer_name = htmlspecialchars($row_package_type['customer_name']);
                $customer_birthdate = htmlspecialchars($row_package_type['customer_birthdate']);
                $customer_email = htmlspecialchars($row_package_type['customer_email']);
                $customer_phone = htmlspecialchars($row_package_type['customer_phone']);
                $customer_occupation = htmlspecialchars($row_package_type['customer_occupation']);
                $package_type = htmlspecialchars($row_package_type['package_type']);

/*
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
    $_SESSION['customer_email']=$customer_email;
    $_SESSION['customer_phone']=$customer_phone;
    $_SESSION['customer_occupation']=$customer_occupation;
    $_SESSION['package_type']=$package_type;
    
  */          
           
        
    
        if($package_type=="basic"){
            // Payment Setup for Basic Package
            $amount=350;
        echo "<h1 class='payTitle'>Basic Package Selected </h1>
        <div class='mytabs'>
            <input type='radio' id='tabfree' name='mytabs'>
            <label for='tabfree'>Credit/Debit Card Payment</label>
           <div class='tab'>
              <h2>Credit/Debit Card Payment</h2>
              <strong><p> Price: #2,100 (350 Naira per month for 6 months)</strong>
              <br><span class='promo'>[Enjoy 10% off on full payment at once]</span></p>
              <div class='payForm'>
                 <form id='paymentForm' method='POST' action='buy1.php'>
                     <input type='hidden' id='email' value='$email' name='email'>
                     <input type='hidden' id='amount' value='$amount' name='amount'>
                     <input type='hidden' id='car_make' value='$car_make' name='car_make'>
                     <input type='hidden' id='car_year' value='$car_year' name='car_year'>
                     <input type='hidden' id='car_model' value='$car_model' name='car_model'>
                     <input type='hidden' id='car_body' value='$car_body' name='car_body'>
                     <input type='hidden' id='car_transmission' value='$car_transmission' name='car_transmission'>
                     <input type='hidden' id='car_use' value='$car_use' name='car_use'>
                     <input type='hidden' id='car_address' value='$car_address' name='car_address'>
                     <input type='hidden' id='car_distance' value='$car_distance' name='car_distance'>
                     <input type='hidden' id='car_registration' value='$car_registration' name='car_registration'>
                     <input type='hidden' id='customer_title' value='$customer_title' name='customer_title'>
                     <input type='hidden' id='customer_name' value='$customer_name' name='customer_name'>
                     <input type='hidden' id='customer_phone' value='$customer_phone' name='customer_phone'>
                     <input type='hidden' id='customer_birthdate' value='$customer_birthdate' name='customer_birthdate'>
                     <input type='hidden' id='customer_occupation' value='$customer_occupation' name='customer_occupation'>
                     <input type='hidden' id='package_type' value='$package_type' name='package_type'>
                     <label for='selectbox1' class='formLabel'>Select Number of Months to be charged:</label>
                     <select id='selectbox1' name='invoice_limits' value='' required>
                        <option value='' selected='selected'>Please Select:</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                     </select> 

                    <button type='submit' name='submit2' id='submit2' class='paybtn'>Proceed to Checkout</button>
                </form>
            </div>
         </div>

        <input type='radio' id='tabsilver' name='mytabs'>
        <label for='tabsilver'>Direct Deposit</label>
        <div class='tab'>
        <h2>Bank Depost</h2>
        <strong><p> Price: #2,100 (350 Naira per month for 6 months)</strong>
        <p>Account Name:  Oreoluwa Enakhe-Bini</p>
        <p>Account Number: 2158935290</p>
        <p>Bank Name: United Bank of Africa | UBA</p>

        <p>Send your payment proof to this email: <a href='mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng'>3riplescoops@gmail.com</a> or Send to <a href='https://api.whatsapp.com/send/?phone=2348178573884&text&app_absent=0'>+2348178573884</a> on WhatsApp for confirmation</p>

        </div>

        <input type='radio' id='tabgold' name='mytabs'>
        <label for='tabgold'>Pay with Cryptocurrency</label>
        <div class='tab'>
        <h2>Crypto Payment</h2>
        <h3>Coming soon!!!</h3>
        

        </div>



        </div>";

        //header(Location: ../)
    }elseif ($package_type == "advance") {

        // Advance Payment Package Setup
        $amount=300;
        echo "<h1 class='payTitle'>Advance Package Selected </h1>
        <div class='mytabs'>
        <input type='radio' id='tabfree' name='mytabs'>
        <label for='tabfree'>Credit/Debit Card Payment</label>
        <div class='tab'>
        <h2>Credit/Debit Card Payment</h2>
        <strong><p> Price: #3,600 (300 Naira per month for 12 months)</strong>
        <br><span class='promo'>[Enjoy 10% off on full payment at once]</span></p>

        <div class='payForm'>
                 <form id='paymentForm' method='POST' action='buy1.php'>
                     <input type='hidden' id='email' value='$email' name='email'>
                     <input type='hidden' id='amount' value='$amount' name='amount'>
                     <input type='hidden' id='car_make' value='$car_make' name='car_make'>
                     <input type='hidden' id='car_year' value='$car_year' name='car_year'>
                     <input type='hidden' id='car_model' value='$car_model' name='car_model'>
                     <input type='hidden' id='car_body' value='$car_body' name='car_body'>
                     <input type='hidden' id='car_transmission' value='$car_transmission' name='car_transmission'>
                     <input type='hidden' id='car_use' value='$car_use' name='car_use'>
                     <input type='hidden' id='car_address' value='$car_address' name='car_address'>
                     <input type='hidden' id='car_distance' value='$car_distance' name='car_distance'>
                     <input type='hidden' id='car_registration' value='$car_registration' name='car_registration'>
                     <input type='hidden' id='customer_title' value='$customer_title' name='customer_title'>
                     <input type='hidden' id='customer_name' value='$customer_name' name='customer_name'>
                     <input type='hidden' id='customer_phone' value='$customer_phone' name='customer_phone'>
                     <input type='hidden' id='customer_birthdate' value='$customer_birthdate' name='customer_birthdate'>
                     <input type='hidden' id='customer_occupation' value='$customer_occupation' name='customer_occupation'>
                     <input type='hidden' id='package_type' value='$package_type' name='package_type'>
                     <label for='selectbox1' class='formLabel'>Select Number of Months to be charged:</label>
                     <select id='selectbox1' name='invoice_limits' value='' required>
                        <option value='' selected='selected'>Please Select:</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                     </select> 

                    <button type='submit' name='submit2' id='submit2' class='paybtn'>Proceed to Checkout</button>
                </form>
            </div>
         </div>

        <input type='radio' id='tabsilver' name='mytabs'>
        <label for='tabsilver'>Direct Deposit</label>
        <div class='tab'>
        <h2>Bank Depost</h2>
        <strong><p> Price: #3,600 (300 Naira per month for 12 months)</strong>
        <p>Account Name:  Oreoluwa Enakhe-Bini</p>
        <p>Account Number: 2158935290</p>
        <p>Bank Name: United Bank of Africa | UBA</p>

        <p>Send your payment proof to this email: <a href='mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng'>3riplescoops@gmail.com</a> or Send to <a href='https://api.whatsapp.com/send/?phone=2348178573884&text&app_absent=0'>+2348178573884</a> on WhatsApp for confirmation</p>

        </div>

        <input type='radio' id='tabgold' name='mytabs'>
        <label for='tabgold'>Pay with Cryptocurrency</label>
        <div class='tab'>
        <h2>Crypto Payment</h2>
        <h3>Coming soon!!!</h3>
        

        </div>
        </div>";        ;
    }else{
        //Premium Package payment setup
        $amount=250;
        echo "<h1 class='payTitle'>Premium Package Selected </h1>
        <div class='mytabs'>
        <input type='radio' id='tabfree' name='mytabs'>
        <label for='tabfree'>Credit/Debit Card Payment</label>
        <div class='tab'>
        <h2>Credit/Debit Card Payment</h2>
        <strong><p> Price: #6,000 (250 Naira per month for 24 months)</strong>
        <br><span class='promo'>[Enjoy 10% off on full payment at once]</span></p>

        <div class='payForm'>
                 <form id='paymentForm' method='POST' action='buy1.php'>
                     <input type='hidden' id='email' value='$email' name='email'>
                     <input type='hidden' id='amount' value='$amount' name='amount'>
                     <input type='hidden' id='car_make' value='$car_make' name='car_make'>
                     <input type='hidden' id='car_year' value='$car_year' name='car_year'>
                     <input type='hidden' id='car_model' value='$car_model' name='car_model'>
                     <input type='hidden' id='car_body' value='$car_body' name='car_body'>
                     <input type='hidden' id='car_transmission' value='$car_transmission' name='car_transmission'>
                     <input type='hidden' id='car_use' value='$car_use' name='car_use'>
                     <input type='hidden' id='car_address' value='$car_address' name='car_address'>
                     <input type='hidden' id='car_distance' value='$car_distance' name='car_distance'>
                     <input type='hidden' id='car_registration' value='$car_registration' name='car_registration'>
                     <input type='hidden' id='customer_title' value='$customer_title' name='customer_title'>
                     <input type='hidden' id='customer_name' value='$customer_name' name='customer_name'>
                     <input type='hidden' id='customer_phone' value='$customer_phone' name='customer_phone'>
                     <input type='hidden' id='customer_birthdate' value='$customer_birthdate' name='customer_birthdate'>
                     <input type='hidden' id='customer_occupation' value='$customer_occupation' name='customer_occupation'>
                     <input type='hidden' id='package_type' value='$package_type' name='package_type'>
                     <label for='selectbox1' class='formLabel'>Select Number of Months to be charged:</label>
                     <select id='selectbox1' name='invoice_limits' value='' required>
                        <option value='' selected='selected'>Please Select:</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                     </select> 

                    <button type='submit' name='submit2' id='submit2' class='paybtn'>Proceed to Checkout</button>
                </form>
            </div>
         </div>


        <input type='radio' id='tabsilver' name='mytabs'>
        <label for='tabsilver'>Direct Deposit</label>
        <div class='tab'>
        <h2>Bank Depost</h2>
        <strong><p> Price: #6,000 (250 Naira per month for 24 months)</strong>
        <p>Account Name:  Oreoluwa Enakhe-Bini</p>
        <p>Account Number: 2158935290</p>
        <p>Bank Name: United Bank of Africa | UBA</p>

        <p>Send your payment proof to this email: <a href='mailto:3riplescoops@gmail.com?subject=Mail from our Website - roadsideassist.com.ng'>3riplescoops@gmail.com</a> or Send to <a href='https://api.whatsapp.com/send/?phone=2348178573884&text&app_absent=0'>+2348178573884</a> on WhatsApp for confirmation</p>

        </div>

        <input type='radio' id='tabgold' name='mytabs'>
        <label for='tabgold'>Pay with Cryptocurrency</label>
        <div class='tab'>
        <h2>Crypto Payment</h2>
        <h3>Coming soon!!!</h3>
        </div>
        </div>";
    }
}
}else{
    echo "nothing to display";
};


?>

</section>
    <!---------- End Display Checkout Content------>
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

  <!-- <script>
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


</body>
</html>