 <?php

 include('../functions/validate.php');

 $trxref = generate_txref();

 session_start();

      if (isset($_POST['submit'])) {

        $amount = $_POST['amount'];
        $option = $_POST['option'];
        $email = $_SESSION['email'];
        $_SESSION['amount'] = $amount;



     if (!preg_match("/^[0-9]*$/",$amount)) {
     $_SESSION['error'] = "enter valid phone number";
        header('location: ../fundwallet.php');
        die();
    } elseif ($amount < 100 || $amount > 50000) {
       $_SESSION['error'] = "minimum: N100  maximum: N50,000";
        header('location: ../fundwallet.php');
        die();
    } 
    if (empty($option)) {
      $_SESSION['error'] = "select payment option";
        header('location: ../fundwallet.php');
        die();
    }

    if ($option == "flutterwave") {
  
$curl = curl_init();

$customer_email = $email;  
$currency = "NGN";
$txref = $trxref; // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-275c7143d28870c790cadd7f70043d35-X"; // get your public key from the dashboard.
$redirect_url = "http://localhost/b/payment.php";


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url,

  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}


$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
    } elseif ($option == "Bank") {
      $_SESSION['info'] = "send to account number 0141****** using **** as yor transaction reference";
      header('location: ../fundwallet.php');
      die();
    }
      }

      ?>