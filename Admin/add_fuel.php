<?php 
session_start();
if(!isset($_SESSION['name']))
	header("location:logout.php");
echo "Welcome ".$_SESSION['name'];
require_once('../db_connect.php');
 ?>
 <link href="../bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add fuel</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Saved Successfully');"; ?>
 </script>
 <div class="btn btn-warning"><a href="index.php">Go Back</a></div>
 <body> 
 	<div class="container">
 		<?php 
 			$sql2 = "SELECT v_no FROM vehicle";
 			$result2 = mysqli_query($con,$sql2);
 		?>
 	<form id="fuel" method="post" action="db_save_fuel.php">
 		<pre>
 			Vehicle Number : 	<select name="v_id" id="v_id" required><?php while($row = mysqli_fetch_array($result2,MYSQLI_BOTH)) echo "<option value='".$row['v_no']."'>".$row['v_no']."</option>";  ?></select><br>
 			To : 			<input type="text" name="to" id="to" placeholder="Address " required><br>
 			Fuel : 			<input type="text" name="fuel" id="fuel" placeholder="In Litres" pattern="[0-9]+" required ><br>
 			Reading : 		<input type="text" name="rate" id="rate" placeholder="Current Reading"><br>
 			By whom : 		<input type="text" name="by_whom" id="by_whom" placeholder="Your Name"><br>
 					<input type="submit" name="submit" class="btn btn-success">		<input type="reset" name="reset" class="btn btn-danger">
 		</pre>
 	</form>
 	</div>
  </body>
 </html>