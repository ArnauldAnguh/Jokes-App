<?php session_start(); ?>
<?php include "db.php"; ?>

<!DOCTYPE html>
   <html>
   <head>
   	<title>Welcoming page</title>
   	<style type="text/css">
   		body{
   			margin: 0px;
   			padding: 0px;
   			background-color: #333333;
   		}
   		.container{
   			position: absolute;
   			top: 50%;
   			left: 45%;
   			width: 500px;
   			border-radius: 5px;
   			text-align: center;
   			padding: 20px;
   			transform: translate(-45%,-70%);
   			color: white;
   			/*background-color: #FF6666;*/
   		}
   		h1{
   			color: white;
   			font-size: 30px;
   			font-family: cyrillic-ext;
   		}
   		.link{
   			margin-top: 10px;
   		}
   		.link a {
   			color: white;
   			font-size: 25px;
   		}

   	</style>
   </head>
   <body>
   	<div class="container">
   	<h1><?php echo $_SESSION['name']; ?></h1>
   	<img src="img/<?php echo $_SESSION['image']; ?>" width="60" height="70" style="border-radius: 50%;">
	<div><br>
		By clicking on <a href="AppRoom.php" style="color: #6666CC;">join now</a> you accept to our <a href="" style="color: #6666CC;">terms,</a> <a href="" style="color: #6666CC;">policies,</a> and <a href="" style="color: #6666CC;">conditions.</a><br> To Continue, Click on the Link below.
	</div>
	<div class="link">
		<a href="AppRoom.php">Join Now</a>
	</div>
    </div>
  </body>
 </html>
