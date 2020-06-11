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
$date = date("Y-m-d h:i:s");
$status = "Pending";

$q="select wallet from users where userid ='$userid'";
$result=$conn->query($q);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
$wallet = $row['wallet'];
$new = $wallet - $amount;


if (!preg_match("/^[0-9]*$/",$number) || (strlen($number) != 11 )) {
     $_SESSION['error'] = "enter valid phone number";
      $errorCount++;
    } else {
    $number = test_input($_POST["number"]);
    }

if ($amount < 1000) {
	$_SESSION['error'] = "min amount: N1000";
      $errorCount++;
    } else {
    	$amount = test_input($_POST["amount"]);
}


if($errorCount > 0){

header("Location: ../buyairtime.php");
} else{

  if ($wallet > $amount) {
      $sql = "insert into buy_airtime(userid,txref,network,phone_number,amount,status,date) values('$userid','$txref','$network','$number','$amount','$status','$date')";
$res=$conn->query($sql);
  $sql1 = "update users set wallet='$new' where userid='$userid'";
  $res2=$conn->query($sql1);

$conn->close();
  $_SESSION['message'] = "Success! your order is awaiting confirmation";
  header("Location: ../buyairtime.php");
  } else{
    $_SESSION['error'] = "insuffecient fund! please fund your wallet";
  header("Location: ../buyairtime.php");
  }

}

?>