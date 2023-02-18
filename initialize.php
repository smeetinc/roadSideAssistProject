<?php
  $url = "https://api.paystack.co/transaction/initialize";
  $fields = [
    'email' => $email,
    'amount' => $amount,
    'plan' => $plan_code,
    'subaccount' => "ACCT_2g2qoechol538jt",
    'bearer' => "subaccount"
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
  //echo $result;
  $initialize_data =json_decode($result);
  $initialization_url = $initialize_data->data->authorization_url;
  if ($result) {
    // code...
    header("Location: ".$initialization_url);
    exit;
  }

?>
