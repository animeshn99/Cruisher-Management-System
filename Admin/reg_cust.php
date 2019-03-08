<?php 
echo "Welcome ".$_SESSION['name'];
 ?>
 <html>
 <head>
 	<title>Register</title>
 </head>
 <body>
 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:DodgerBlue; height: 108px;">
        <div class="col-sm-12" style="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-sm-12">
                           <div class="col-sm-6" style="color:white;font-weight:bold;font-size:24px; margin-top: 0px; " align="right">
                	<span style="text-align: right;font-family: sans-serif">Welcome to Maa Ambica Enterprises</span> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php
    echo "Welcome ".$_SESSION['name'];
     ?>
    <ol>
 	<li><a href="trans.php">Create Transaction</a></li>
 	<li><a href="bill.php">Add Payments</a></li>
    <li><a href="ind_fuel.php">fuel</a></li>
 	<li><a href="ind_cust.php">Individual Customer</a></li>
 	<li><a href="#">Daily Statics</a></li>
 	<li><a href="#">xxxxxxProduct Rate</a></li>
 	<li><a href="ind_crus.php">Individual Crushier</a></li>
 	<li><a href="add_cust.php">Add Customers</a></li>
 	<li><a href="add_veh.php">Add Vehicle</a></li>
    <li><a href="#">Track Vehicle Location   (Under Development)</a></li>
    <li><a href="#">Vehicle Insurance/Pollution Expiry   (Under Development)</a></li>
    <li><a href="logout.php">Logout</a></li>
 	</ol>
 </body>
 </html>