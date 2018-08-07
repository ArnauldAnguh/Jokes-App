
<?php
  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($message)) {
  if(!isset($_POST["terms"])) {
  $message = "Accept Terms and conditions before submit";
  }
  }

?>


<?php
if(!empty($_POST["register-user"])) {

  /* Password Matching Validation */
  if($_POST['user_password'] != $_POST['Confirmpassword']){ 
  $error_message = 'Passwords do not match<br>'; 
  }

  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($error_message)) {
    if(!isset($_POST["terms"])) {
    $error_message = "Accept Terms and Conditions to Register";
    }
  }

  if(!isset($error_message)) {
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $query = "INSERT INTO users (user_name, user_password, user_firstname,user_lastname, user_email,user_image,user_role,user_gender) 
    VALUES('" . $_POST["user_name"] . "', '" . $_POST["user_password"] . "', 
      '" . $_POST["user_firstname"] . "','" . $_POST["user_lastname"] . "', '" . $_POST["user_email"] . "',
      '" . $_POST["user_image"] . "','" . $_POST["user_role"] . "', '".subscriber."', '" . $_POST["gender"] . "')";
    $result = $db_handle->insertQuery($query);
    if(!empty($result)) {
      $error_message = "";
      $success_message = "You have registered successfully!"; 
      unset($_POST);
    } else {
      $error_message = "Problem in registration.<a href='register.php'>Click to Try Again!</a>"; 
    }
  }
}
?>
<?php require_once "activate.php"; ?>


    <!--blog entries column-->
<div class="col-md-8" style="margin-top:80px;">
<form method="post" action="" name="frmRegistration">
  
<?php if(!empty($success_message)) { ?> 
<div class="success-message"><?php if(isset($success_message)) 
echo $success_message . " " . "<a href='../index.php'>Homepage</a>;" ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?> 
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>

<?php if(isset($message)) { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>

 <div class="page-header">
  <h2>Register</h2>
</div>
  <div class="form-group">
    <label style="font-size:20px;">Firstname</label>
    <input type="text" name="user_firstname" required  class="form-control" value="<?php if(isset($_POST['user_firstname'])) echo $_POST['user_firstname']; ?>">
  </div>
  <div class="form-group">
    <label style="font-size:20px;">Lastname</label>
    <input type="text" name="user_lastname"  required class="form-control" value="<?php if(isset($_POST['user_lastname'])) echo $_POST['user_lastname']; ?>">
  </div>
  <div class="form-group">
    <label style="font-size:20px;">Username</label>
    <input type="text" name="user_name" required  class="form-control" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?>">
  </div>

  <div class="form-group">
    <label style="font-size:20px;margin-right:30px;">Sexe</label><br>

      <input type="radio" name="gender" required value="Male"  <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> <span style="margin-right:20px;font-size:18px;">Male</span>
  
      <input type="radio" name="gender" required value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> <span style="font-size:18px;">Female</span> 
  </div>


  <div class="form-group">
    <label style="font-size:20px;">Image</label>
    <input type="file" name="user_image"  class="form-control" size="30" 
    value="<?php if(isset($_POST['user_image']))
          {  
          $user_image   = $_FILES['user_image']['name'];
         $user_image_temp  = $_FILES['user_image']['tmp_name'];
 
          move_uploaded_file($user_image_temp, '../img/$user_image');
          echo $_POST['user_image'];
          } ?>">

  </div>

  <div class="form-group">
    <label style="font-size:20px;">Password</label>
    <input type="password" required name="user_password" class="form-control">
  </div>
  <div class="form-group">
    <label style="font-size:20px;">Confirm password</label>
    <input type="password" required name="Confirmpassword" class="form-control">
  </div>
  <br>
   <p style="margin:20px;padding:8px;">
     <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister">
   </p>
    <p style="font-size:20px;">
    Already a member? <a href="../index.php" style="text-decoration:none;">Sign in</a>
  </p>
</form>
</div>
      
  <hr>
   <?php include "footer.php"; ?>
</div>
<!--/.container-->

</body>
</html>
     