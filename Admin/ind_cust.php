<?php 
session_start();
if(!isset($_SESSION['name']))
	header("location:logout.php");
echo "Welcome ".$_SESSION['name'];
require_once("db_connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Transaction</title>z
</head>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>
<script type="text/javascript">
	function myfunc(){
		var name = document.getElementById('name').value;
		var total = 0;
		$.ajax({
	      url : "db_getData.php",
	      type : "post",
	      dataType : "JSON",
	      data : {name:name}, 
	      success : function(response){
	        $('#details').html('<tr><th>Vehicle Id</th><th>Cruisher</th><th>Address</th><th>Product</th><th>Quantity</th><th>Total</th><th>Date</th></tr>');
	        for (var i = 0; i < response.list.length; i++) {
				$('#details').append('<tr><td>'+response.list[i][0]+'</td><td>'+response.list[i][1]+'</td><td>'+response.list[i][2]+'</td><td>'+response.list[i][3]+'</td><td>'+response.list[i][4]+'</td><td>'+response.list[i][5]+'</td><td>'+response.list[i][6]+'</td></tr>');
				total = total + parseInt(response.list[i][5]);
	        }
	        $('#total').html("<strong>Total : "+total+"</strong>");
	      }
	    });
	}
</script>
<style type="text/css">
	th,td {
		align-self: center;
		padding: 10px;
	}
	tr:nth-child(even){background-color: #f2f2f2;}
</style>
<div class="btn btn-warning"><a href="index.php">Go Back</a></div>
<body>
<div class="container">
 		<?php 
 				$sql = "SELECT customer.name FROM customer order by name asc";
 				$result = mysqli_query($con,$sql);
 		?>
 		Customer Name : 	<select name="name" id="name" class="btn btn-primary" onchange="myfunc()" required><option>  - - Select - - </option><?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) echo "<option value='".$row['name']."'>".$row['name']."</option>";  ?></select><br>
 		<div class="container"><br><br>
 			<table id="details" border="1">
 				<tr><th>Vehicle Id</th><th>Cruisher</th><th>Address</th><th>Product</th><th>Quantity</th><th>Total</th><th>Date</th></tr>
 			</table>
 		</div>
 		<label id="total" style="padding-left: 50%;"></label>
</div>
</body>
</html>