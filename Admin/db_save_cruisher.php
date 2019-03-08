<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$Products = $_POST['Products'];
require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `cruisher`(name,phone,address,Products) VALUES('".$name."','".$phone."','".$address."','".$Products."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_cruisher.php?msg=".$val);
?>