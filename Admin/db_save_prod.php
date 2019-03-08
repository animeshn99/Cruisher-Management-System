<?php 
$p_name = $_POST['p_name'];
$p_rate = $_POST['p_rate'];

require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `products`(p_name,p_rate,p_id) VALUES('".$p_name."','".$p_rate."','".$p_id."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_prod.php?msg=".$val);
?>