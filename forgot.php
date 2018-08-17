  <?php session_start(); ?>
 <?php include "db.php"; ?>

 <?php 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$email = mysqli_escape_string($_POST['email']);
 	$result = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");
 	if ($result->num_rows == 0)
   {
 		$_SESSION['e_error'] = "User with that email doesn't exist!";
 		header('location: error.php');
 	}
 	else {//user exists (num_rows != 0)

 		$user = $result->fetch_assoc();

 		$email = $user['email'];
 		$hash  = $user['hash'];
 		$firstname = $user['firsname'];

 		//session message to display on success.php
 		$_SESSION['e_error'] = "<p>Please check your email <span>$email</span>"." for a confirmation link to complete your password reset!</p>";

 		//send registration link (reset.php)
 		$to  = $email;
 		$subject = 'Password Reset Link ( J4Fun.com )';
 		$message_body = 'Hello'.$firstname.', 
 		You have requested for password reset!
 		Please click this link to reset your password:
 		http://localhost/contract/JokeApp/reset.php?email='.$email.'$hash='.$hash;
 		mail($to, $subject, $message_body);
 		header('location: success.php');
 		

 	}
 }


 ?>