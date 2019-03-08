<?php 
$name = $_POST['name'];
$user_name = $_POST['user_name'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

require_once('../db_connect.php');

$val = "failure";
$sql =  "INSERT INTO `users`(name,user_name,password) VALUES('".$name."','".$user_name."','".$password1."')";
if(mysqli_query($con,$sql))
	$val = "success";
mysqli_close($con);
header("location:add_cust.php?msg=".$val);
?>