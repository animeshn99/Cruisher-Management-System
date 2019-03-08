<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];

require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `customer`(name,phone) VALUES('".$name."','".$phone."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_cust.php?msg=".$val);
?>