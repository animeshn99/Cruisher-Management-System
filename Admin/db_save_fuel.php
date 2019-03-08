<?php 
$date = date('Y-m-d H:m:s');
$fuel = $_POST['fuel'];
$v_id = $_POST['v_id'];
$to = $_POST['to'];
$reading = $_POST['reading'];
$by_whom = $_POST['by_whom'];

require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `fuel`(t_date,fuel,v_id,to,reading,by_whom) VALUES('".$date."','".$fuel."','".$v_id."','".$to."','".$reading."','".$by_whom."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_fuel.php?msg=".$val);
?>