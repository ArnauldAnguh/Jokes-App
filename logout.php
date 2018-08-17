<?php session_start(); ?>

<?php  

     $_SESSION['name'] = null;
     $_SESSION['image'] = null;
     $_SESSION['email'] = null;
     $_SESSION['user_status'] = null;

  header('Location: login.php');


?>