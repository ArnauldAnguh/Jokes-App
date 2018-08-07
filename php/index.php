<!DOCTYPE html>
<html>
<head>
	<title>Joke Portals</title>
	<meta name="viewport" content="width=device-width,initial-scale="1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <style type="text/css">
#part3::-webkit-scrollbar {
     width: 10px;
}
#part3::-webkit-scrollbar-thumb{
  border-radius: 5px;
  background: rgba(0, 0, 0, .1);
}
#input
 {
  padding: 10px;
  height: 50px;
  width: 410px;
  color: #666;
  box-sizing: border-box;
  outline: none;
  border: 1px solid lightblue;
  border-radius: 3px;
  background-color: #fff;
  position: absolute;
  top: 83%;
  left: 15%;
  resize: none;
   }
#input::-webkit-scrollbar {
     width: 10px;
}
#input::-webkit-scrollbar-thumb{
  border-radius: 5px;
  background: rgba(0, 0, 0, .1);
}
.section2::-webkit-scrollbar {
     width: 10px;
}
.section2::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background: rgba(0, 0, 0, .1);
}
#table::-webkit-scrollbar{
     width: 10px;
}
#table::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background: rgba(0, 0, 0, .1);
}
#logo{
  width: 350px;
  opacity: .6;
  height: 80px;
  padding-left: 0px;
}

.bubble-right{
  border-radius: 5px;
  color: #fff;
  width: 90%;
  font-size: 14px;
  left: 40px;
  display: flex;
  float: left;
  flex-flow: row wrap;
  align-items: flex-start;
  margin-bottom: 5px;
  background: rgba(52, 185, 96, 0.9);   
  border-radius: 5px;
  padding: 7px;
  position: relative;
  cursor: pointer;
}
.col-md-9{
  padding: 0px;
}
/*.col-md-9:hover .dropdown {
  display: block;
}*/

.bubble-left {
  float: right;
  background: #444;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  right: 67px;
  width: 85%;
  padding: 7px;
  margin-bottom: 10px;
  margin-right: 0px;
  position: relative;
}

#first .dropdown {
    display: inline-block;
    position: relative;
    float: left;
    width: 27px;
    height: 27px;
    padding: 2px;
    top: 39px;
    left: 28px;
    background-color: transparent;
    border-radius: 5px;
}

#first .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 70px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
    padding: 5px 6px;
    border-radius: 5px;
    text-decoration: none;
    z-index: 1;
}

#first .dropdown:hover .dropdown-content {
    display: block;
    color: red;
}

#second .dropdown {
    display: inline-block;
    position: relative;
    float: right;
    width: 27px;
    height: 27px;
    padding: 2px;
    top: 39px;
    right: 60px;
    background-color: transparent;
    border-radius: 5px;
}
#second .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 65px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
     padding: 5px 6px;
    border-radius: 5px;
    text-decoration: none;
    z-index: 1;
}
#second .dropdown:hover .dropdown-content {
    display: block;
    color: red;
}

#table {
  border: 0px;
  padding: 5px; 
  background: white;
  height: 300px;
}

/* Tooltip container */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}

#section3des .section3 {
  width: 610px;
  height: 600px;
  position: fixed;
  margin-bottom: 100%;
  opacity: 1;
  padding: 10px;
  background: white;
  border: 1px flex gray;
  box-shadow: 0px 4px 5px grey;
}
#section3des{
  margin: 0;
  padding: 3px;
  width: 620px;
  padding: 4px;
  height: 100%;
  position: fixed;
  scroll-behavior: smooth;
  top: 12%;
  left: 29%;
  
}
.section1{
  width: 340px;
  position: fixed;
  top: 13%;
  left: 75%;
  padding: 10px;
  background: white;
  border: 0px;
}
</style>

</head>

<body>

<div>
  <div class="leftside">
   <ul>
    <li><a href=""><i class="fa fa-facebook"></i></a></li>
    <li><a href=""><i class="fa fa-twitter"></i></a></li>
    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
   </ul>
</div>

<div class="section1" style="background-image:url(../img/fighter.png);padding: 0px;">
	<div id="part1" style="padding: 0px;background-color: #F4F4F4;">
		<div class="search" style="border:none;background-color: #F4F4F4;">
         	<h1 style="text-shadow: 0px 10px 30px rgba(0,0,0,0.5);padding: 5px;margin-top: 0px;">Masters Of Joke Mania</h1><hr>
         <form method="post" action="search.php">
           <div class="input-group" >
               <input type="text" name="search" placeholder="Search previous Messages" class="form-control">
                <span class="input-group-btn">
                   <button class="btn btn-default" type="submit" name="submit">
                      Search</span>
                    </button>
                </span>
               </div>
            </form>
        </div>
          <div style="padding-left: 40px;text-shadow: 2px 2px 3px white, 1px 2px 2px blue;background:white;height: 40px;margin-top: 10px;">
            <h2>Recent Messages</h2>
          </div>

        <div id="table" style="overflow-x: hidden;">
           <div id="part2">
              <ul>
                <li><a href=""><img src="../img/home.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/study.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/wall.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/backg.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/tea.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
                <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
              </ul>
           </div>
        </div>

        <br>
       <footer style="position: relative;bottom: 10px;text-align: center;">
        <div>
          <span style="color: #fff;text-shadow: 10px 8px 80px #999;color: grey;">Ladies Styling Saloon &amp; Shopping Site &copy; 2018</span>
        </div>
       </footer>
    </div>
</div>
<div class="section2" style="top: 36%;position: fixed;overflow-x: hidden;bottom: 170px;border-radius: 5px;">
  <div id="user"><h2>Online Users</h2></div><br>
   <div id="part">
      <ul>
      	<li><a href=""><img src="../img/home.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      	<li><a href=""><img src="../img/study.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      	<li><a href=""><img src="../img/wall.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      	<li><a href=""><img src="../img/backg.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      	<li><a href=""><img src="../img/tea.jpg" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
        <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
        <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
        <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
        <li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      	<li><a href=""><img src="../img/babes.png" id="ssid">Home sweet</a> <i class="fa fa-circle" style="color: green;font-size: 10px;"></i></li>
      </ul>
   </div>
</div>

<div id="section3des">
  <div class="section3">
     <div id="part3" style=" background-color: #F4F4F4;padding: 10px;">
      <div class="row bubble-holder" style="padding: 5px;background-color: ;" id="first">
       <div class="col-md-9">
        <div class="dropdown">
          <i class="fa fa-edit" style="color: #ccc;font-size: 25px;"></i>
          <div class="dropdown-content">
            <a href="" style="float: left;color: #CC6666;font-size: 25px;"><i class="fa fa-trash"></i></a> 
            <a href="" style="font-size: 25px;float: right;"><i class="fa fa-edit" ></i></a>
          </div>
        </div>
      <div class="bubble-right">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in 
        </div>
      </div>
       <div class="col-md-3">
          <img src="../img/study.jpg" class="img-circle" style="float: right;" width="50" height="50" alt="profile-image"><br><br><br>
        <time style="float: right;color: #999;font-weight: bold;">12:30 am</time>
     </div>
   </div>
<div class="row bubble-holder" style="padding: 5px;background-color: ;" id="second">
  <div class="col-md-3">
   <img src="../img/believe.jpg" class="img-circle" width="50" height="50" alt="profile-image">
     <br>
       <time style="color: #999;font-weight: bold;">12:30 am</time>
     </div>
    <div class="col-md-9">
        <div class="dropdown">
          <i class="fa fa-edit" style="color: #ccc;font-size: 25px;"></i>
          <div class="dropdown-content">
            <a href="" style="float: left;color: #CC6666;font-size: 25px;"><i class="fa fa-trash"> </i></a>
            <a href="" style="font-size: 25px;float: right;"><i class="fa fa-edit"></i></a>
          </div>
        </div>

        <div class="bubble-left">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor 
       </div>
    </div>
  </div>
      <div class="row bubble-holder" style="padding: 5px;background-color: ;" id="first">
       <div class="col-md-9">
        <div class="dropdown">
          <i class="fa fa-edit" style="color: #ccc;font-size: 25px;"></i>
          <div class="dropdown-content">
            <a href=""  class="keys">
              <i class="fa fa-trash" id="delete" style="color: #262626;font-size: 21px;"></i></a> | <a href="" id="keys"><i class="fa fa-edit" id="edit" style="color: #262626;font-size: 21px;"></i></a>
          </div>
        </div>
    <div class="bubble-right">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in 
         </div>
        </div>
       <div class="col-md-3">
       <img src="../img/study.jpg" class="img-circle" style="float: right;" width="50" height="50" alt="profile-image"><br><br><br>
       <time style="float: right;color: #999;font-weight: bold;">12:30 am</time>
     </div>
   </div>
<div class="row bubble-holder" style="padding: 5px;background-color: ;" id="second">
  <div class="col-md-3">
   <img src="../img/believe.jpg" class="img-circle" width="50" height="50" alt="profile-image">
  <br>
       <time style="color: #999;">12:30 am</time>
     </div>
    <div class="col-md-9">
        <div class="dropdown">
          <i class="fa fa-edit" style="color: #ccc;font-size: 25px;"></i>
          <div class="dropdown-content">
            <a href=""><i class="fa fa-trash" style="color: #262626;font-size: 21px;"> </i></a> | <a href=""><i class="fa fa-edit" style="color: #262626;font-size: 21px;"></i></a>
          </div>
        </div>

        <div class="bubble-left">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor 
       </div>
    </div>
  </div>

   
  <form method="post" action="" enctype="multipart/data-group">
     <img src="../img/study.jpg" width="70" height="60" style="border-radius: 50%;position: absolute;background: #444;top: 82%;left: 2%;border:1px solid yellow;">

    		<textarea type="text" name="" id="input" placeholder="Reply message"></textarea>              
    		     <span style="position: absolute;top: 84%;left: 84%;">
                   <button  type="submit" name="submit" style="padding: 6px;color: white;cursor: pointer;border: 1px solid teal;border-radius: 4px;background: teal;font-family: cursive;font-size: 18px;width: 60px;">Send
                    </button>
              </span>
    	  </form>
      </div>
   </div>
 </div>

<div class="section4" style="border-radius: 20px;">
   <div id="part4" style="border-radius: 20px;padding: px;background-color: #F4F4F4;">
      <ul style="background-color: red;border-radius: 20px 0px;">
      	<li  style="border-radius: 20px 0px;"><a href="">User  <i class="fa fa-caret-down"></i>
         </a>
        </li>
      <li style="border-radius: 20px 0px;width: 135.5px;"><a href="">Profile</a></li>
    </ul> 
      <div style="background-color: #fff;border-radius: 20px;padding: 5px;opacity: ;">
        <img src="../img/study.jpg" width="76" height="60" style="border-radius: 50%;"><i class="fa fa-circle" style="color: lightgreen;font-size: 10px;"></i>

          <P style="float: right;font-weight: bold;background-color: #999;border-radius: 7px;padding: 3px;"><a href="" style="float: right;text-decoration: none;color: #fff;"><i class="fa fa-fw fa-power-off"></i>Logout</a></P>
        <span style="color: #999;font-size: 18px;font-family: comic sans-serif;">
          Arnauld Anguh  </span>
        </div>     
     </div>
  </div>
</div>
<div class="header">
  <img src="../img/ret.png" id="logo">
  <ul id="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="privatechat.php">Private room</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contactus.php"><i class="fa fa-phone"></i> Contact Us</a></li>
    <li><a href="login.php">Login now</a></li>
  </ul>
  </div>


</body>
</html>