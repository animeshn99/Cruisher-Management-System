<?php 
session_start();
if(!isset($_SESSION['name']))
	header("location:logout.php");
echo "Welcome ".$_SESSION['name'];
?><link href="../bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>
 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Create User</title>
 </head>
 <script type="text/javascript">
 	<?php if(isset($_GET['msg'])) if($_GET['msg'] == 'success')echo "window.alert('Saved Successfully');"; ?>
 </script>
<div class="btn btn-warning"><a href="index.php">Go Back</a></div>
 <body>

 <center><h1 style="color:white">User SignUp</h1></center>
  <div class="signup__container">

  <div class="container__child signup__form">
    <form name="form" method="post" action="db_save_userid.php" >
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" id="username" name="user_name"  placeholder="Enter Username..." required />
      </div>
	  <div class="form-group">
        <label for="mobile">Full Name</label>
        <input class="form-control" type="text"  name="name" placeholder="Enter Full Name Here ...." required/>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" id="password1" name="password1"  placeholder="********" required />
      </div>
      <div class="form-group">
        <label for="Confirm Password">Repeat Password</label>
        <input class="form-control" type="password" id="password2" name="password2" placeholder="********" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" onclick='Javascript:return validate();'/>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  

 </body>
 </html>