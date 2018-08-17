<?php session_start(); ?>
<?php include "db.php"; ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>AppRoom</title>
 	<link rel="stylesheet" type="text/css" href="css/app.css">
  <style type="text/css">
  .post{
    width: 600px;
    background: red;
    height: 300px;
    position: relative;
    left: 10%;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin-top: 100px;
  }
    .nav{
      width: 100%;
      background: orange;
      float: right;
      margin: 0px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .nav a{
      display: block;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      padding: 10px;
      border-right: 2px solid grey;
      float: left;
    }
    .textarea{
      min-width: 100%;
      min-height: 160px;
      width: auto;
      height: auto;
      resize: none;
      outline: none;
      font-family: monospace;
      margin-bottom: 20px;
      background-image: url(img/desert.jpg);
    }
    .default{
      position: relative;
      left: 40%;
      color: #fff;
      font-size: 20px;
      text-decoration: none;
      transition: 3s;
      min-width: 100%;
      width: auto;
      height: auto;
      background-color: #A4E14F;
      font-family: cyrillic-ext;
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;

    }
</style>
 </head>
 <body style="background: #EBEBEB;">
   <div class="header">
  	<div id="img" style="float: left;">
   	<i style="color: lightgreen;position: absolute;top: 92%;left: 10%;">active</i>	<img src="img/love.jpg">
   	</div>
   	 	<h1 style="color: #add;"><span id="left" style="color:;"><i>J<small style="font-size: 24px;">okes</small></i></span> ~<i class="four" style="color: red;">4</i><span id="right">Fun</span></h1>

   	 	<h4 style="color: #888;margin:0px 10px 20px 10px;float: right;">Joke Platform</h4>
   </div>
   <div class="well">
     <div id="name" style="color: lightgreen;margin-bottom: 30px;"><h2> Arnauldas </h2></div>
   	<hr>
   </div>
   <ul>
   	<li><a href="profile.php">Profile</a></li>
   	<li><a href="AppRoom.php">Jokes</a></li>
   	<li><a href="new_joke.php">Add joke</a></li>
   	<li><a href="">groups</a></li>
   	<li><a href="">Accounts</a></li>
   	<li><a href="">Friends</a></li>
   	<li><a href="logout.php">Logout</a></li><br>
   	<p style="color: white;">User From Cameroon</p>
   	<span style="color: white;">share</span><br>
   	<a style="width: 70px;height: 60px;"><img src="img/bba.jpg"  style="width: 50px;height: 40px;border-radius: 50%;"></a>
   	<a style="width: 70px;height: 60px;"><img src="img/bba.jpg"  style="width: 50px;height: 40px;border-radius: 50%;"></a>
   	<a style="width: 70px;height: 60px;"><img src="img/bba.jpg"  style="width: 50px;height: 40px;border-radius: 50%;"></a>
   </ul>

  <div class="recent">
 
   <ul style="position: relative;">
    <br>
   	<li><h3>Recent Jokes</h3></li><br><hr>
   	<li><a href="" id="pages"><img src="img/study.jpg">People</a></li>
   	<li><a href="" id="pages"><img src="img/study.jpg">groups</a></li>
    <li><a href="" id="pages"><img src="img/study.jpg">Accounts</a></li>
    <li><a href="" id="pages"><img src="img/study.jpg">Friends</a></li>
    <li><a href="" id="pages"><img src="img/study.jpg">Logout</a></li>
   	<li><a href="" id="pages"><img src="img/study.jpg">Profile</a></li>
   	<li><a href="" id="pages"><img src="img/study.jpg">Profile</a></li>
   	<li><a href="" id="pages"><img src="img/study.jpg">Profile</a></li>
   	<li><a href="" id="pages"><img src="img/study.jpg">Profile</a></li>
  </ul>
</div>

  <div class="container" style="min-height: 100%;">
  	<div class="post">
     <div class="nav">
      <a href=""> <i class="fa fa-photo"></i>  Profile </a> 
      <a href=""> <i class="fa fa-folder"></i>  Photos</a> 
      <a href=""> <i class="fa fa-users"></i>  Friends</a>  
      <a href=""> <i class="fa fa-telegram"></i>  Add Post</a>
     </div>

     <textarea  class="textarea" rows="*"></textarea>
     
      <a href="" class="default">Post <i>J</i>oke</a>

      <input type="file" name="image" style="float: left;">
        
    </div>

  </div>
 </body>
 </html>
