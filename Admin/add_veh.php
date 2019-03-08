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
 	<title>Add Vehicle</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Added Successfully');"; ?>
 </script>

 <body>
 	 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: rgb(5,2,3,1); height: 105px;">
        <div class="col-sm-12" style="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-sm-12">
                           <div class="col-sm-6" style="color:white;font-weight:bold;font-size:62px; margin-top: 0px; " align="right">
                	<span style="text-align: center;font-family: sans-serif">      Add Vehicle</span>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
	    </nav>
 	<form id="vehicle" method="post" action="db_save3.php">
 	<pre>




<?php
echo "Welcome ".$_SESSION['name'];
?><div class="btn btn-warning"><a href="index.php">Go Back</a></div>


 			Vehicle No. :		<input type="text" name="v_no" id="v_no" required><br>
 			Owner Name :		<input type="text" name="v_owner" id="v_owner" required><br>
 			Model :			<input type="text" name="v_model" id="v_model" required><br>
 		 			<input type="submit" name="Add" class="btn-btn-success">	<input type="reset" name="reset" class="btn-btn-danger">
 	</pre>
 	</form>
 </body>
 </html>