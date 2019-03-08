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
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Payment Zone</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Saved Successfully');"; ?>
 </script>
<div class="btn btn-warning"><a href="index.php">Go Back</a></div>
 <body>
 	<div class="container">
 		<?php 
 			$sql1 = "SELECT customer.name FROM customer order by name asc";
 			$result1 = mysqli_query($con,$sql1);
 		?>
 	<form id="bill" method="post" action="db_save4.php">
 		<pre>
 			Customer Name : 	<select name="name" id="name" required><?php while($row = mysqli_fetch_array($result1,MYSQLI_BOTH)) echo "<option value='".$row['name']."'>".$row['name']."</option>";  ?></select><br>		
 			Amount : 		<input type="text" name="amount" id="amt" required ><br>
 			Payment Mode :		<input type="radio" name="p_mode" value="cash" required>CASH<input type="radio" name="p_mode" value="online">ONLINE<br>
 			Recieved By : 		<input type="text" name="recieved" id="recieved" required><br>
 			<input type="submit" name="Add" class="btn-btn-success">	<input type="reset" name="reset" class="btn-btn-danger">
 	</pre>
 	</form>
 	<?php mysqli_close($con); ?>
 </body>
 </html>