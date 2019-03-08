<?php 
session_start();
if(!isset($_SESSION['name']))
    header("location:logout.php");
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
     <form form method="post" action="#">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <hr>

     <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
     <button type="submit" class="registerbtn">Register</button>
    </div>

   <div class="container signin">
     <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </form>
 </body>
 </html>