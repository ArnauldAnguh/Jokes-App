<?php session_start(); ?>
<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
	  <div class="front">
  	     <div class="header">
  	        <h1>Registration</h1>
          </div>

  <?php 
  if (isset($_POST['btn_sub'])) {
    $firstname    = mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname     = mysqli_real_escape_string($db,$_POST['lastname']);
    $username     = mysqli_real_escape_string($db,$_POST['name']);
    $password     = mysqli_real_escape_string($db,password_hash($_POST['password'], PASSWORD_BCRYPT));
    $hash         = mysqli_real_escape_string($db,md5(rand(0, 1000)));
    $gender       = mysqli_real_escape_string($db,$_POST['gender']);
    $country      = mysqli_real_escape_string($db,$_POST['country']);
    $user_image   = mysqli_real_escape_string($db,$_FILES['image']['name']);
    $image_temp   = mysqli_real_escape_string($db,$_FILES['image']['tmp_name']);
    $email        = mysqli_real_escape_string($db,$_POST['email']);

      move_uploaded_file($image_temp, 'img/$user_image');

$email_check = mysqli_query($db,"SELECT * FROM users WHERE email='$email' ") or die(mysqli_error($db));  

   if ($email_check->num_rows > 0) {
      $_SESSION['e_error'] = "User with this email already exists!";
      header('location: error.php');
    } else {

$query = "INSERT INTO users (firstname,lastname,username,email,image,password,hash,gender,status) ";
$query.= "VALUES('$firstname','$lastname','$username','$email','$user_image','$password','$hash','$gender','$status')";
    
    if ( mysqli_query($db,$query)) { 
      $_SESSION['active']    = 0;
      $_SESSION['logged_in'] = true;
      $_SESSION['e_error']   = 
      " Confirmation link has been sent to $email, please verify your account by clicking on the link in the message!";

      //send registration confirmation link 

      $to = $email;
      $subject = 'Account Verification ( J4Fun.com )';
      $message_body = 'Hello '.$firstname.',  
      Thank you for signing up!
      Please click this link to activate your account: http://localhost/contract/JokeApp/inc/verify.php?email='.$email.'&hash='.$hash;

      mail($to, $subject, $message_body);
      header("location: success.php");
    }

 $country = mysqli_real_escape_string($db,$_POST['country']);

switch($country) {

case 'united_states':

 $query = "UPDATE users SET country = '{$country}'";
 $run_query = mysqli_query($db,$query);

     if(!$run_query) {
       echo "query failed" . mysqli_error($db);
     }
break; 

case 'cameroon':
    $query = "UPDATE users SET country = '{$country}'";
       $run_query = mysqli_query($db,$query);

     if(!$run_query) {
       echo "query failed" . mysqli_error($db);
     }

break;      

case 'nijeria':
    $query = "UPDATE users SET country = '{$country}'";
       $run_query = mysqli_query($db,$query);

     if(!$run_query) {
       echo "query failed" . mysqli_error($db);
     }

break;

case 'canada':
    $query = "UPDATE users SET country = '{$country}'";
       $run_query = mysqli_query($db,$query);

   if(!$run_query) {
     echo "query failed" . mysqli_error($db);
   }

break; 

      }
    }
  }
 else {
      $_SESSION['e_error'] = 'Registration failed!';
    }
  

?>        
<form method="POST" action="" name="checkBoxArray"  enctype="multipart/form-data">
    <div class="fields">
        <input type="text" required accept name="firstname"  translate="" placeholder="firstname">
    </div>
    <div class="fields">
      <input type="text" required accept name="lastname" placeholder="lastname"  translate="">
    </div>

   <div class="fields">
    	<input type="text" required  name="name"  translate="" placeholder="Username">
    </div>
    <div class="field">
     <label style="margin-left: 20px;">Gender :</label>
      <input type="radio" required name="gender" value="Male"  <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?> > Male
      <input type="radio" required name="gender" value="Female"  <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?> >Female
    </div>
    
    <select name="country" id="country" required="">
      <option name="">Country</option>";
      <option value="united_states">United states</option>";
      <option value="cameroon">Cameroon</option>";
      <option value="nijeria">Nijeria</option>";
      <option value="canada">Canada</option>";
    </select>

  <input type="file" title="Select Image" class="inp1" style="color: red;font-family: cursive;" name="image">
   <div class="fields">
    <input type="password" required name="password" placeholder="Password">
   </div>     
   <div class="fields">
  	<input type="email" required="" name="email" placeholder="Email">
   </div>
   <button type="submit" name="btn_sub" id="btn">Register</button>
  <br>
  <p style="color:#fff;">Already have an account? <span><a href="login.php" style="color: #7FD4FF;">Sign in</a></span></p>

</form>
          
</body>
</html>