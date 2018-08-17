  <?php session_start(); ?>
 <?php include "db.php"; ?>

  <?php 

  $email = mysqli_real_escape_string($_POST['email']);
  $result = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");

  if ($result->num_rows == 0) {
    $_SESSION['e_error'] = "User with that email doesn't exist!";
    header("location: error.php");
  } else {
    $user = $result->fetch_assoc();

    if (password_verify($_POST['password'], $user['password'])) {
       $_SESSION['firstname'] = $user['firstname'];
       $_SESSION['name']    = $user['username'];
       $_SESSION['country'] = $user['country'];
       $_SESSION['gender']  = $user['gender'];
       $_SESSION['image']   = $user['image'];
       $_SESSION['status']  = $user['status'];

       $_SESSION['logged_in'] = true;
      header('location: welcomenote.php');
    } else {
      $_SESSION['e_error'] = "You have entered a wrong password, try again!";
      header('location: error.php');
    }
  }
//     if (isset($_POST['btn_sub'])) {
//       $name     = $_POST['name'];
//       $password = $_POST['password'];
      
    
//     $query     = "SELECT * FROM users WHERE username = '{$name}' AND password='{$password}' ";
//     $run_query = mysqli_query($db, $query);
    
//     if (!$run_query) {
//     die("QUERY FAILED" . mysqli_error($db));
//     }

//    while ($row = mysqli_fetch_assoc($run_query)) {
//          $db_name      = $row['username'];
//          $db_password  = $row['password'];
//          $db_image     = $row['image'];
//          $db_email     = $row['email'];
//          $db_status    = $row['status'];

     
//    if ($name === $db_name && $password === $db_password) {
      //  $_SESSION['name']    = $db_name;
      //  $_SESSION['image']   = $db_image;
      //  $_SESSION['email']   = $db_email;
      //  $_SESSION['status']  = $db_status;
      // header('location: welcomenote.php');
//   } 
//  }
// } 
?>
<?php echo "<div style='text-align: center;position:absolute;top: 40%;left: 40%;'><h2>Oops! incorrect username/password.</h2>"."<br>"."<a href='login.php' style='text-align:center;padding:7px;font-size:18px;'>Retry</a></div>";?>
