<?php
include 'includes/autoload.php';

  if(!$_GET['reference']){

  header('Location: register1.php');
  exit;

 }else{
  
  $reference = $_GET['reference']; 
  session_start();

  $_SESSION['reference']=$reference;
    

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" .rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer XXXXXXXXX", //replace the XXXXXX with your private key from paystack
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);

  }
  if($result->data->status == 'success'){

    $status = $result->data->status;
    $reference =$result->data->reference;
    $customer_name = $result->data->metadata->custom_fields[0]->value;
    $email = $result->data->customer->email;
    date_default_timezone_set('Africa/Lagos');
    $Date_time = date('m/d/Y h:i:s a', time());
    $amount =$result->data->amount;
    //$paidAt = $result->data->paid_at;
    $customer_phone = $result->data->metadata->custom_fields[1]->value;
    $customer_birthdate = $result->data->metadata->custom_fields[2]->value;
    $customer_occupation = $result->data->metadata->custom_fields[3]->value;
    $car_make = $result->data->metadata->custom_fields[4]->value;
    $car_year = $result->data->metadata->custom_fields[5]->value;
    $car_model = $result->data->metadata->custom_fields[6]->value;
    $car_transmission = $result->data->metadata->custom_fields[7]->value;
    $car_body = $result->data->metadata->custom_fields[8]->value;
    $car_registration = $result->data->metadata->custom_fields[9]->value;
    $car_address = $result->data->metadata->custom_fields[10]->value;
    $car_distance = $result->data->metadata->custom_fields[11]->value;
    $car_use = $result->data->metadata->custom_fields[12]->value;
    $package_type = $result->data->metadata->custom_fields[13]->value;
    $invoice_limits = $result->data->metadata->custom_fields[14]->value;
    $finalAmount = $amount/100;
    
    
    /*

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
    //$email = $_SESSION['email'];
    $customer_phone = $_SESSION['customer_phone'];
    $customer_occupation = $_SESSION['customer_occupation'];
    $package_type = $_SESSION['package_type'];
    $invoice_limits = $_SESSION['invoice_limits'];
    $finalAmount = $amount/100;
    */

    $_SESSION['finalAmount']=$finalAmount;
    $_SESSION['car_make']=$car_make;
    $_SESSION['car_year']=$car_year;
    $_SESSION['car_model']=$car_model;
    $_SESSION['car_transmission']=$car_transmission;
    $_SESSION['car_body']=$car_body;
    $_SESSION['car_use']=$car_use;
    $_SESSION['car_distance']=$car_distance;
    $_SESSION['car_address']=$car_address;
    $_SESSION['car_registration']=$car_registration;
    $_SESSION['customer_name']=$customer_name;
    $_SESSION['customer_birthdate']=$customer_birthdate;
    $_SESSION['email']=$email;
    $_SESSION['customer_phone']=$customer_phone;
    $_SESSION['customer_occupation']=$customer_occupation;
    $_SESSION['package_type']=$package_type;
    $_SESSION['invoice_limits']=$invoice_limits;
    $_SESSION['status']=$status;
    $_SESSION['Date_time']=$Date_time;


    //Insert into database

  $save = "INSERT INTO customer_records (car_make, car_year, car_model, car_transmission, car_body, car_use, car_distance, car_address, car_registration, customer_name, customer_birthdate, customer_email, customer_phone, customer_occupation, package_type, amount, reference_code, invoice_limits, status, date_paid) VALUES ('$car_make', '$car_year', '$car_model', '$car_transmission', '$car_body', '$car_use', '$car_distance', '$car_address', '$car_registration', '$customer_name', '$customer_birthdate', '$email', '$customer_phone', '$customer_occupation', '$package_type', '$finalAmount', '$reference', '$invoice_limits', '$status', '$Date_time');";

  $result = mysqli_query($conn, $save);
 

    
    
    if(!$result){
      echo"Error!".mysqli_error($conn);

      exit;
    }else{
      header("Location: success.php?status=success");
      exit;
    }
   

    $conn->close();


  }else{
    header("Location: error.php");
    exit;
  }
}
?>
