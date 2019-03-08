<?php 
require_once('db_connect.php');

$val = "failure";
$name = "XXX";

$sql = "SELECT * FROM users WHERE user_name='".$_POST['user_name']."' AND password ='".$_POST['password']."'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result,MYSQLI_BOTH))
{
		$name = $row["name"];
		$val = "success";
		session_start();
		$_SESSION["user_name"]=$_POST['user_name'];
		$_SESSION["name"]=$name;
}
$arr = array("stats"=>$val,"name"=>$name);
echo json_encode($arr);
mysqli_close($con);
?>
