<?php
require_once('../functions/indexDB.php');
session_start();
$userid = $_SESSION['userid'];


$current_password = $_POST["current_password"];
$new_password = $_POST["new_password"];
$new_password2 = $_POST["new_password2"];

if ($new_password != $new_password2) {
	$_SESSION['error'] = "password do not match";
	header("Location: ../settings.php");
} else{

          $q="select password from users where userid ='$userid'";
          $result=$conn->query($q);;
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $password_db = $row['password'];
          if (password_verify($current_password, $password_db)) {
          	$new_password = password_hash($new_password, PASSWORD_DEFAULT);
          	$sql1 = "update users set password='$new_password' where userid='$userid'";
			$res2=$conn->query($sql1);
				$_SESSION['message'] = "password changed successfully";
				header("Location: ../settings.php");
				$conn->close();
			$conn->close();
          } else{
          	$_SESSION['error'] = "current password is incorrect";
	header("Location: ../settings.php");
	$conn->close();
          }
}

?>