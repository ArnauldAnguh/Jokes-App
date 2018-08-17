<?php session_start(); ?>
<?php include "db.php"; ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>AppRoom</title>
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <style type="text/css">
  .header h1{
    margin-left: 99px;
    border: 1px solid;
    animation: animate 1s ease-in infinite; 
  }
  @keyframes animate{
    0%{
      border-color: red;
      transition: 1s;
    }
    100%{
      border-color: green;
      transition: 1s;
    }
  }

  .front {
    position: relative;
    top: 50%;
    left: 50%;
    min-width: 400px;
    width: auto;
    height: auto;
    transform: translate(-50%,-50%);
    border-radius: 10px;
    z-index: 1000px;

  }
  
    form{
      padding: 15px;
    }
    form .fields{
      padding: 15px;
      border: none;
    }
   
    form .fields input{
      min-width: 98%;
      width: auto;
      height: auto;
      padding: 8px;
      text-align: center;
      border:none;
      color: #999;
      border-radius: 20px;
    }
    form .fields input:active,
    form .fields input:focus{
      text-align: center;
      
    }
    form .fields input:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.095), 0 0 10px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.095), 0 0 10px rgba(102, 175, 233, .6);
  }  
  #btn:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
  }
    form .fields input::-moz-placeholder {
      color: #999;
      opacity: 1;
    }
  
   
    #btn{
      position: relative;
      left: 45%;
      color: #fff;
      font-size: 20px;
      min-width: 10%;
      width: auto;
      height: auto;
      background: transparent;
      font-family: cyrillic-ext;
      padding: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      cursor: pointer;
    }
    .field {
      color: white;
    }
    .inp1{
      padding: 13px;
      font-family:cursive;
      border: none;
      margin-left: 140px;
      border-radius: 20px;
      margin-top: 4px;
      width: 200px;
    }
   
    #country{
      float: right;
      margin-right: 10px;
    }
  </style>

 </head>
 <body style="background: #ebebeb;">
   <div class="header" style="background: #262626;">
  	<h1 style="color: #add;"><span id="left" style="color:;"><i>M<small style="font-size: 24px;">y</small></i></span> ~<i class="four" style="color: red;">Profile</i><span id="right">Room</span></h1>

   	 	<h4 style="color: #888;margin:0px 10px 20px 10px;float: right;">Joke Platform</h4>
   </div>
   <div class="well">

   </div>
   <ul>
   	<li><a href="">Profile</a></li>
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

<style type="text/css">
	
</style>
  <div class="container" style="min-height: 100%;top: 40%;">
    <span style="text-align: center;"><h2>User Profile</h2></span>
    <form method="post" action="" enctype="multipart/data-form">
         <div class="fields">
        <input type="text" required accept name="firstname"  translate="" placeholder="firstname">
    </div>
    <div class="fields">
      <input type="text" required accept name="lastname" placeholder="lastname"  translate="">
    </div>

   <div class="fields">
      <input type="text" required  name=" name"  translate="" placeholder="Username">
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

    <img src="img/koala.jpg" class="inp1" >
   <input type="file" required name="image"><br><br>

   <div class="fields">
    <input type="password" required name="password" placeholder="Password">
   </div>     
   <div class="fields">
    <input type="email" required="" name="email" placeholder="Email">
   </div>      
      <div >
        <input type="submit" id="btn" name="" value="Update">
      </div>
    </form>
  </div>
 </body>
 </html>
