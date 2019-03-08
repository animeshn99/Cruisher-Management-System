<?php 
session_start();
if(!isset($_SESSION['name']))
	header("location:logout.php");
//echo "Welcome ".$_SESSION['name'];
 ?>
 <html>
 <head>
 	<title>Dashboard</title>
 </head>
 <body>
 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:DodgerBlue; height: 108px;">
        <div class="col-sm-12" style="">
            <div class="navbar-header col-sm-12">
                           <div class="col-sm-10" style="color:white;font-weight:bold;font-size:62px; margin-top: 0px; " align="right">
                	<span style="text-align: right; font-family: sans-serif">Maa Ambika Enterprises</span> 
                </div>
            </div>

        </div>
    </nav>
    <?php
    echo "Welcome ".$_SESSION['name'];
     ?>
    <ol>
    <li><a href="newuser.php">New User ID</a></li>
 	<li><a href="trans.php">Add Transaction</a></li>
    <li><a href="add_fuel.php">Fuel Consumed</a></li>
    <li><a href="add_cruisher.php">Cruisher Registration</a></li>
    <li><a href="add_cust.php">Customer Registration</a></li>
    <li><a href="add_veh.php">Vehicle Registration</a></li>
 	<li><a href="ind_cust.php">Individual Customer</a></li>
    <li><a href="ind_cruisher.php">Individual Crushier</a></li>
 	<li><a href="#">Daily Statics</a></li>
    <li><a href="bill.php">Add Payments</a></li><br>
    <li><a href="add_prod.php">Add/Update Product Rate</a></li>
    <li><a href="#">Track Vehicle Location   (Under Development)</a></li>
    <li><a href="#">Vehicle Insurance/Pollution Expiry   (Under Development)</a></li>
    <li><a href="logout.php">Logout</a></li>
 	</ol>
 </body>
 </html>