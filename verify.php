<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 
  if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
  	$email = mysqli_real_escape_string($_GET['email']);
  	$hash = mysqli_real_escape_string($_GET['hash']);

  	$results = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND hash='$hash' AND status='0'");
  	if ( $results->num_rows == 0 ) {
  		$_SESSION['e_error'] = "Account has already been activated or the URL is Invalid!";
  		header('location: error.php');
  	} else {
  		$_SESSION['e_error'] = "Your account has been activated";

  		//set user status to active (active = 1)
  		mysqli_query($db, "UPDATE users SET status='1' WHERE email='$email'" ) or die(mysqli_error());
  		$_SESSION['status'] = 1;

  		header('location: success.php');
  	}
  }
  else {
  	$_SESSION['e_error'] = "Invalid Parameters provided for account verification!";
  	header('location: error.php');
  }
?>