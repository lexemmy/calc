<?php
include('../functions/validate.php');
require_once('../functions/indexDB.php');
session_start();

$errorCount = 0;
$userid = $_SESSION['userid'];
$txref = generate_txref();

$network = $_POST['network'];
$number = $_POST['number'];
$amount = $_POST['amount'];

if (!preg_match("/^[0-9]*$/",$number) || (strlen($number) != 11 )) {
     $_SESSION['error'] = "enter valid phone number";
      $errorCount++;
    } else {
    $number = test_input($_POST["number"]);
    }

if ($amount < 100 || $amount > 20000) {
	$_SESSION['error'] = "min: N100 max: N20,000";
      $errorCount++;
    } else {
    	$amount = test_input($_POST["amount"]);
}


if($errorCount > 0){

header("Location: ../convert.php");
} else{
	$sql = "insert into convert_airtime(userid,txref,network,phone_number,amount) values('$userid','$txref','$network','$number','$amount')";
$res=$conn->query($sql);
$conn->close();
	$_SESSION['message'] = "Success! your order is awaiting confirmation";
	header("Location: ../convert.php");
}

?>