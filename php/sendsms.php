<?php 
  $uname    = $_POST['username'];
  $umessage = $_POST['usermessage'];

  $query = "INSERT INTO chatroom (username, usermessage) VALUES ('$uname','$umessage') ";
  $run   = mysqli_query($db,$query);
?>