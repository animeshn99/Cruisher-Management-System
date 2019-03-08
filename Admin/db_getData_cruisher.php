<?php 
require_once('db_connect.php');

$val = "failure";
$name = "XXX";

$sql = "SELECT * FROM `transaction` WHERE cruisher='".$_POST['name']."'";
$result = mysqli_query($con,$sql);
$list = array();
while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
{
	$each = array();
	$val = "success";
	array_push($each, $row['v_id']);
	array_push($each, $row['c_name']);
	array_push($each, $row['address']);
	array_push($each, $row['product']);
	array_push($each, $row['quantity']." ".$row['unit']);
	array_push($each, $row['rate']);
	array_push($each, $row['t_date']);
	array_push($list, $each);
}
$arr = array("stats"=>$val,"list"=>$list);
echo json_encode($arr);
mysqli_close($con);
?>
