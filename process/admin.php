<?php
include('../functions/validate.php');
require_once('../functions/indexDB.php');
session_start();



$errorCount = 0;

//Data validation
$fullname = $_POST['fullname'] != "" ? $_POST['fullname'] :  $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] :  $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] :  $errorCount++;








$password = password_hash($password, PASSWORD_DEFAULT);
 







	$sql = "insert into admin(name,email,password) values('$fullname', '$email','$password')";
$res=$conn->query($sql);
if ($res) {
	$_SESSION['message'] = "registeration successful you can now login";
	header('location: ../login.php');
  $conn->close();
	} else {
		echo "error: " . $sql . $conn->error;
	}



