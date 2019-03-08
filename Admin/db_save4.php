<?php 
$date = date('Y-m-d H:m:s');
$name = $_POST['name'];
$amt = $_POST['amt'];
$p_mode = $_POST['p_mode'];
$recieved = $_POST['recieved'];

require_once('../db_connect.php');

$val = "failure";
$sql2 =  "INSERT INTO `bill`(recieved,amt,p_mode,c_name,t_date) VALUES('".$recieved."','".$amt."','".$p_mode."','".$name."','".$date."')";
if(mysqli_query($con,$sql2))
	$val = "success";
mysqli_close($con);
header("location:bill.php?msg=".$val);
?>