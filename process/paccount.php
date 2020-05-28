<?php
require_once('../functions/indexDB.php');
session_start();
$userid = $_SESSION['userid'];


$bank_name = $_POST["bank_name"];
$account_name = $_POST["account_name"];
$account_number = $_POST["account_number"];

$sql1 = "update users set bankname='$bank_name', account_name='$account_name', account_number='$account_number' where userid='$userid'";
$res2=$conn->query($sql1);
if ($res2) {
	$_SESSION['info'] = "your bank account has been updated successfully";
	header("Location: ../settings.php");
} else{
	$_SESSION['error'] = "unable to update bank account, please try again";
	header("Location: ../settings.php");
}



?>