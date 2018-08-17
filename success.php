<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/e-s.css"> -->
    <style type="text/css">
     body {
    background-color: #333333;
    margin: 0px;
    padding: 0px;
  }
  .form {
    position: absolute;
    top: 47%;
    left: 50%;
    min-width: 400px;
    text-align: center;
    width: auto;
    color: #fff;
    height: auto;
    transform: translate(-50%,-50%);
    /*background-color: #FF6666;*/
    border-radius: 10px;
    z-index: 1000px;
    box-shadow: 0px 4px 8px #262626;
  }
  
  h1 {
    color: #fff;
    background: #66FF66;
    margin-top: 0px;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
  }
  .button{
      position: relative;
      color: #fff;
      border:none;
      font-size: 20px;
      min-width: 10%;
      width: auto;
      height: auto;
      background: #333333;
      font-family: cyrillic-ext;
      padding: 15px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="form">
  	<h1><?= 'Success'; ?></h1>
  	<p>
  		<?php 
  		  if (isset($_SESSION['e_error']) AND !empty($_SESSION['e_error'])): 
          echo $_SESSION['e_error'];
  		  else:
  		  	header('location: login.php');
        endif;
  		  ?>
  	</p>
  	<a href="login.php"><button class="button">Login</button></a>
  </div>
</body>
</html>