<?php 
$veh_no = $_POST['v_no'];
$owner = $_POST['v_owner'];
$model = $_POST['v_model'];

require_once('db_connect.php');
$val = "failure";
$sql =  "INSERT INTO `vehicle`(v_no,v_owner,v_model) VALUES('".$veh_no."','".$owner."','".$model."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_veh.php?msg=".$val);
?>