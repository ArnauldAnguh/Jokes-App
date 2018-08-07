   
<?php include "db.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Room</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/inbox.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="../jquery/jquery.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>

	<style type="text/css">
  body {
  	margin: 0px;
  	padding: 0px;
  	overflow: hidden;
  	height: 1000px;
  	/*background-color: lightgreen;*/

  }

 .container-fluid{
 	position: absolute;
 	margin: 0px;
 	padding:  0px;
 	top: 50%;
 	left: 50%;
 	opacity: ;
 	min-width: 100%;
 	min-height: 100%;
 	width: auto;
 	height: auto;
 	transform: translate(-50%,-50%);
	background-image: url(../img/capture6.png);
	background-size: cover;
	z-index: 1px;
	border: none;
}
#chatbox {
	position: absolute;
	width: 40%;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	z-index: 2px;
	height: 460px;
	border-radius: 4px 6px;
	background-color: #EEFBF3;
	opacity: 1;
	overflow-x: hidden; 
	padding: 10px;
}

#myChatform {
	text-align: center;

}
/*input[type = "text"] {
	width: 40%;
	padding: 2px;
	position: absolute;
	width: 40%;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);
	z-index: 2px;
	margin: 3px;

}*/

#myChatform textarea {
	width: 40%;
	padding: 5px;
	margin: 0px;
	position: absolute;
	width: 40%;
	top: 89%;
	left: 50%;
	height: 63px;
	transform: translate(-50%,-50%);
	z-index: 2px;
	resize: none;
}

#sendsms {
	position: absolute;
	width: 40%;
	top: 94%;
	left: 30%;
}
.text-center {
	color: orange;
	z-index: 2px;
	font-weight: ;
	line-height: 50px;
	font-stretch: ultra-condensed;
	font-family: cursive;
	font-size: 80px;
	opacity: .6;
}	

#first {
	position: absolute;
    min-width: 400px;
    min-height: 90%;
    top: 15%;
    width: auto;
    height: auto;
    opacity: 1;
    background-color: #EBF3E6;
}
	</style>
</head>
<body>
      <!-- <div class="row bubble-holder" style="background-color: red;">  -->
          <div class="col-md-3" id="me">
             <!-- <a href=""><img src="../img/study.jpg" alt="profile-image"></a> -->
               </div>
                 <div class="bubble-right">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in 
                </div>
             <!-- </div><hr> -->
          <!-- <div class="row bubble-holder" style="background-color: red;"> -->
            <div class="col-md-3" id="friend" style="background-color: red;float: left;position: absolute;top: 23%;">
              <!-- <a href=""><img src="../img/wall.png" alt="profile-image"></a> -->
                </div>
                 <div class="bubble-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor 
                 </div>
               <!-- </div> --><br>
      <!-- <div class="row bubble-holder" style="background-color: red;">  -->
          <div class="col-md-3" id="me">
             <!-- <a href=""><img src="../img/study.jpg" alt="profile-image"></a> -->
               </div>
                 <div class="bubble-right">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in 
                </div>
             <!-- </div><hr> -->
          <!-- <div class="row bubble-holder" style="background-color: red;"> -->
            <div class="col-md-3" id="friend" style="background-color: red;float: left;position: absolute;top: 23%;">
              <!-- <a href=""><img src="../img/wall.png" alt="profile-image"></a> -->
                </div>
                 <div class="bubble-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor 
                 </div>
               <!-- </div> --><br>
      <!-- <div class="row bubble-holder" style="background-color: red;">  -->
          <div class="col-md-3" id="me">
             <a href=""><img src="../img/study.jpg" alt="profile-image"></a>
               </div>
                 <div class="bubble-right">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in 
                </div>
             <!-- </div><hr> -->
          <!-- <div class="row bubble-holder" style="background-color: red;"> -->
            <div class="col-md-3" id="friend" style="background-color: red;float: left;position: absolute;top: 23%;">
              <a href=""><img src="../img/wall.png" alt="profile-image"></a>
                </div>
                 <div class="bubble-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor 
                 </div>
               <!-- </div> --><br>
      <!-- <div class="row bubble-holder" style="background-color: red;">  -->
          <div class="col-md-3" id="me">
             <a href=""><img src="../img/study.jpg" alt="profile-image"></a>
               </div>
                 <div class="bubble-right">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in 
                </div>
             <!-- </div><hr> -->
          <!-- <div class="row bubble-holder" style="background-color: red;"> -->
            <div class="col-md-3" id="friend" style="background-color: red;float: left;position: absolute;top: 23%;">
              <a href=""><img src="../img/wall.png" alt="profile-image"></a>
                </div>
                 <div class="bubble-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor 
                 </div>
               <!-- </div> -->
             </div>   


<div class="container-fluid">
  <div class="nav navbar-default" style="position: fixed;top: 0px;width: 100%;height: 100px;background-image: url(../img/images.jpg);box-shadow: 0px 3px 4px #fff;">
		<a href="index.php" class="btn btn-default" style="height: 100px;line-height: 100px; ;font-family: cursive;float: left;position: absolute;"><i class="fa fa-home fa-2x" style="color: #AA3214;"></i></a>
		<h3 class="text-center">Live Chat Room</h3>
	</div>

     <div style="position: absolute;top: 15%;right: 160px;border-radius: 50%;box-shadow: 0px 80px 80px rgba(0,0,0,0.4)border: 2px solid gray;">
      	<img src="../img/freechat.jpg" style="opacity: .9;border-radius: 50%;">
      </div>

      <div class="well" id="first">
      	 <div class="jumbotron" style="padding: 5px;background-color: lightgreen;">
      		<a href=""><img src="../img/study.jpg" class="img-circle" width="100" height="80">
      		<span>Arnauldas Chanchad <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></span></a>
      	 </div>
       <hr>
         <img src="../img/side.png" style="min-width: 100%;min-height: 100%; opacity: .8;">
       <footer>
       	 <div>
       		<span style="color: #fff;text-shadow: 10px 8px 80px #999;color: grey;">Ladies Styling Saloon &amp; Shopping Site &copy; 2018</span>
       	 </div>
       </footer>
      </div>

      <div id="chatbox">
        <?php 
		if (isset($_POST['sendsms'])) {
		
		  $uname    = $_POST['name'];
		  $umessage = $_POST['message'];

		  $query = "INSERT INTO chatroom (username, usermessage) VALUES ('$uname','$umessage') ";
		  $run   = mysqli_query($db,$query);
		  header('location: privatechat.php');
		  }
            
		    $query   = "SELECT * FROM chatroom ";
		    $run     = mysqli_query($db,$query);
		 while ($row = mysqli_fetch_assoc($run)) {
		 	$name    = $row['username'];
		 	$message = $row['usermessage'];
		 	$time    = $row['time']; 
		?> -->
	    <?php } ?> 

		
		<span style="color: red;"><?php echo $name . " : ";  ?>Arnauldas :</span>
		<span style="color: blue;"><?php echo $message;      ?></span>
		<span style="float: right;color:#999;font-size: 14px;"><?php echo $time; ?></span>
		<br> 
		<span style="color: blue;"><?php echo $name . " : ";  ?> Arnauldas :</span>
		<span style="color: lightgreen;"><?php echo $message;      ?>Where are you going young man
		</span>
		<span style="float: right;color:#999;font-size: 14px;"> 12:30 am<?php echo $time; ?></span>
      </div>

	  <form id="myChatform" method="POST">
	  	<br>
	  	<textarea name="message" id="message" class="well" style="background-color: #EFEFEF;font-family: cursive;" required="" placeholder="Enter message here..." cols="25" rows="3"></textarea>
	  	<br>
	  	<button type="submit" class="btn btn-success btn-lg" id="sendsms" name="sendsms">Send Message </button>
	  </form>

     </div>


</body>
</html>