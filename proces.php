<?php


session_start();
include('process/indexDB.php');
include('functions/validate.php');

$userid = $_SESSION['userid'];
$txref = generate_txref();

$q="select wallet from users where userid ='$userid'";
$result=$conn->query($q);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
$wallet = $row['wallet'];

$obj = $_POST['myData'];


$price = ($obj['price']);
$mobile_data = ($obj['mobile_data']);
$mobile_data_type = ($obj['mobile_data_type_name']);
$phone = ($obj['phone']);
$status = "pending";
$date = date("Y-m-d h:i:s");




if ( $wallet > $price ) {

	$new = $wallet - $price;

	$sql = "insert into data_orders(userid,txref,price,mobile_data,mobile_data_type,phone,status,date) values('$userid','$txref','$price','$mobile_data','$mobile_data_type','$phone','$status','$date')";
$res=$conn->query($sql);

	$sql1 = "update users set wallet='$new' where userid='$userid'";
	$res2=$conn->query($sql1);

	echo "Success! your request is awaiting confirmation";
  $conn->close();


} else{
	echo "you cannot buy data, insufficient fund";
}

?>
