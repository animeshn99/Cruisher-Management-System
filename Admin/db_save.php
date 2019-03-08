<?php 
//if (t_date = NULL) {
//	$date = date('Y-m-d H:m:s');
//} else {
//	$date = $_POST['t_date'];
//}

$date = date('Y-m-d H:m:s');
$from = $_POST['from'];
$unit = $_POST['unit'];
$to = $_POST['to'];
$prod = $_POST['prod'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];
$total = $_POST['total'];
$name = $_POST['name'];
$v_id = $_POST['v_id'];

require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `transaction`(c_name,v_id,cruisher,address,product,quantity,unit,rate,total,t_date) VALUES('".$name."','".$v_id."','".$from."','".$to."','".$prod."','".$qty."','".$unit."','".$rate."','".$total."','".$date."')";
	//$val = "animesh";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:trans.php?msg=".$val);
?>