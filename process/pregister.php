<?php
include('../functions/validate.php');
require_once('../functions/indexDB.php');
session_start();



$errorCount = 0;

//Data validation
$fullname = $_POST['fullname'] != "" ? $_POST['fullname'] :  $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] :  $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] :  $errorCount++;
$phone_number = $_POST['phone_number'] != "" ? $_POST['phone_number'] :  $errorCount++;
$role = $_POST['role'] != "" ? $_POST['role'] :  $errorCount++;

$wallet = 0.00;
$regdate = date("Y-m-d");






	if (!preg_match("/^[ a-zA-Z]*$/",$fullname) ) {
     $_SESSION['error'] = "enter valid characters";
      $errorCount++;
    } else {
    $fullname = test_input($_POST["fullname"]);
    }

    if (!preg_match("/^[0-9]*$/",$phone_number) || (strlen($phone_number) != 11 )) {
     $_SESSION['error'] = "enter valid phone number";
      $errorCount++;
    } else {
    $phone_number = test_input($_POST["phone_number"]);
    }

   if (empty($_POST["email"])) {
    $_SESSION['error'] =  "*Email is required";
   $errorCount++;
  } else {
    $email = test_input($_POST["email"]);
     if (!preg_match("/^[a-zA-Z0-9\.]*@[a-z\.]{1,}[a-z]*$/",$email) || $email=='') {
      $_SESSION['error'] =  "*Enter a valid email"; 
      $errorCount++;
    }
}
if (empty($_POST["role"])) {
    $_SESSION['error'] =  "*role is required";
   $errorCount++;
  } else {
    $role = test_input($_POST["role"]);
     
}

$password = password_hash($password, PASSWORD_DEFAULT);
 



if($errorCount > 0){
header("Location: ../register.php");
}else{
  echo "yes";

	$check = "select * from users where email='$email'";
	$res_c = $conn->query($check);

	if (mysqli_num_rows($res_c) > 0) {
		$_SESSION['error'] =  "email already exist";
		header("Location: ../register.php");
		$conn->close();
	}else{



	$sql = "insert into users(fullname,email,role,phone_number,password,wallet,reg_date) values('$fullname', '$email','$role','$phone_number','$password','$wallet','$regdate')";
$res=$conn->query($sql);
if ($res) {
	$_SESSION['message'] = "registeration successful you can now login";
	header('location: ../login.php');
  $conn->close();
	} else {
		echo "error: " . $sql . $conn->error;
	}

}

}
