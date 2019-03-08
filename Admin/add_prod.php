<?php 
session_start();
if(!isset($_SESSION['name']))
	header("location:logout.php");
echo "Welcome ".$_SESSION['name'];
?>
 <link href="../bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>
 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add Customers</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Saved Successfully');"; ?>
 </script>
<div class="btn btn-warning"><a href="index.php">Go Back</a></div>
 <body>
 	<form id="products" method="post" action="db_save_prod.php">
 	<pre>
 		Product Name :		<input type="text" name="p_name" id="p_name" placeholder="Product Name" required><br>
 		Rate @ TON :		<input type="text" name="p_rate" id="p_rate" placeholder="Rate per TON" pattern="[0-9]+" ><br>
 			<input type="submit" name="Add" class="btn-btn-success">	<input type="reset" name="reset" class="btn-btn-danger">
 	</pre>
 	</form>
 </body>
 </html>
