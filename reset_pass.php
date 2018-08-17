 <?php session_start(); ?>
 <?php include "db.php"; ?>
<?php

  if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) 
  {
  	$email = mysqli_escape_string($_GET['email']);
  	$hash  = mysqli_escape_string($_GET['hash']);

  	$result = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND hash='$hash'");
  	if( $result->num_rows == 0) 
  	{
  	  $_SESSION['e_error'] = "You have entered an Invalid URL for password reset!";
  	  header('location: error.php');
  	}
  }
  else {
  	$_SESSION['e_error'] = "Sorry verification failed, try again!";
  	header('location: error.php');
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Reset</title>
  </head>
  <body>
    <div class="form">
    	<h1>Chose Your New Password</h1>

    	<form method="post" action="reset_pass.php">
    		<div class="field-wrap">
    			<label>
    				New Password<span class="req">*</span>
    			</label>
    			<input type="password" name="newpassword" required="" />
    		</div>
    		<div class="field-wrap">
    			<label>
    				Confirm New Password<span class="req">*</span>
    			</label>
    			<input type="password" name="cpassword" required="" />
    		</div>
    		<div class="btn">
    			<input type="submit" name="submit" value="Apply">
    		</div>
    	</form>
    </div>
  </body>
  </html>








?>