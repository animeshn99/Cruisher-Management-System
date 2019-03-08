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
 <!-- Ionicons -->
<link href="../tools/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

<!-- Date Picker -->
<link href="../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

<!-- fullCalendar -->
<link href="../tools/fullcalendar-2.3.1/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../tools/fullcalendar-2.3.1/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />

<!--Jquery UI-->
<link href="../tools/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Transaction</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Saved Successfully');"; ?>
 </script>
 <div class="btn btn-warning"><a href="index.php">Go Back</a></div>
 <body> 
 	<div class="container">
 		<?php 
 			$sql1 = "SELECT customer.name FROM customer order by name asc";
 			$sql2 = "SELECT v_no FROM vehicle";
 			$sql3 = "SELECT name FROM cruisher";
 			$result1 = mysqli_query($con,$sql1);
 			$result2 = mysqli_query($con,$sql2);
 			$result3 = mysqli_query($con,$sql3);
 		?>
 	<form id="transaction" method="post" action="db_save.php">
 		<pre>

 			Vehicle Number : 	<select name="v_id" id="v_id" placeholder="vehicle no " required>
 										<option value="">- Select -</option>
 										<?php while($row = mysqli_fetch_array($result2,MYSQLI_BOTH)) echo "<option value='".$row['v_no']."'>".$row['v_no']."</option>";  ?>
 								</select><br>
 			Customer Name : 	<select name="name" id="name" required>
 										<option value="">- Select -</option>
 										<?php while($row = mysqli_fetch_array($result1,MYSQLI_BOTH)) echo "<option value='".$row['name']."'>".$row['name']."</option>";  ?> 
 								</select><br>
 			Date : 			<input type="date" name="t_date" id="t_date" value="<?php echo(date('Y-m-d')) ?>" placeholder="Date" ><br>
 			From : 			<select name="from" id="from" ><?php while($row = mysqli_fetch_array($result3,MYSQLI_BOTH)) echo "<option value='".$row['name']."'>".$row['name']."</option>";  ?></select><br>
 			To : 			<input type="text" name="to" id="to" placeholder="Address" ><br>
 			Product : 		<input type="text" name="prod" id="prod" placeholder="Product type"  ><br>
 			Quantity :		<input type="text" name="qty" id="qty" pattern="[0-9]+" placeholder="Enter Quantity" ><input type="radio" name="unit" value="cft" >CFT<input type="radio" name="unit" value="ton">TON<br>
 			Cruisher_Total :	<input type="text" name="rate" id="rate" placeholder="cruisher Price" ><br>
 			Total : 		<input type="text" name="total" id="total" placeholder="Customer Price" ><br>
 					<input type="submit" name="submit" class="btn btn-success">		<input type="reset" name="reset" class="btn btn-danger">
 		</pre>
 	</form>
 	<div></div>
 	</div>
 <?php mysqli_close($con); ?>
 </body>
 </html>