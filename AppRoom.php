<?php include "inc/apphead.php"; ?>
<?php include "inc/appbody.php"; ?>

<?php 
	
    
if (isset($_SESSION['username']) && isset($_SESSION['user_role'])) {

   $query = "SELECT * FROM post ORDER by rand()";
    
   $run_query = mysqli_query($db,$query);
    
while($row = mysqli_fetch_assoc($run_query)) {
   $joke_id = $row['post_id']; 
   $joke_title = $row['post_title'];
   $joke_author = $row['post_author'];
   $joke_date = $row['post_date'];
   $joke_image = $row['post_image'];
   $joke_content = substr($row['post_content'], 0,250);
   $joke_status = $row['post_status'];
   $joke_comment_count = $row['post_comment_count'];




 ?>

  <div class="container" style="">
  	  <br><span id="Latest"><h2>Latest Jokes</h2><br><small>posted today at 10:23pm</small></span>
	<div class="jokes" style="background-color: red;border-radius: 10px;">
		<span style="float: right;">
		<img src="img/photo.jpg" width="60" height="60" style="border-radius: 50%;float: right;margin-right: 20px;"><br>
		<p style="margin-left: 10px;color: orange;">Dalton</p>
			<a href="" style="font-size: 12px;">Delete</a>
			<a href="" style="font-size: 12px;">Edit</a>
		</span>
	   <div class="box" style="padding: 0px;background-image: url(img/desert.jpg);">
	     <p style="text-align: center;text-shadow: 2px 1px 3px grey;margin-top: 10px;padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	     cillum dolore eu fugiat nulla pariatur.</p>
	     <div style="color: white;border-top: 2px solid grey;background: #333;margin: 5px 0px 0px 0px;border-radius: 0px 0px 10px 10px;padding: 3px;">
	     	<p style="float: right;font-size: 10px;">From: Cameroon</p>
	     	<p style="font-size: 10px;">Posted By: Arnauld</p>
	     	<a href=""></a>
	     </div>
	   </div><br>
		<span style="float: right;">
		<img src="img/photo.jpg" width="60" height="60" style="border-radius: 50%;float: right;margin-right: 20px;"><br>
		<p style="margin-left: 10px;">Dalton</p>
			<a href="" style="font-size: 12px;">Delete</a>
			<a href="" style="font-size: 12px;">Edit</a>
		</span>
	   <div class="box" style="padding: 0px;background-image: url(img/desert.jpg);">
	     <p style="text-align: center;text-shadow: 2px 1px 3px grey;margin-top: 10px;padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	     cillum dolore eu fugiat nulla pariatur.</p>
	     <div style="color: white;border-top: 2px solid grey;background: #333;margin: 5px 0px 0px 0px;border-radius: 0px 0px 10px 10px;padding: 3px;">
	     	<p style="float: right;font-size: 10px;">From: Cameroon</p>
	     	<p style="font-size: 10px;">Posted By: Arnauld</p>
	     	<a href=""></a>
	     </div>
	   </div><br>

		<span style="float: right;">
		<img src="img/photo.jpg" width="60" height="60" style="border-radius: 50%;float: right;margin-right: 20px;"><br>
		<p style="margin-left: 10px;">Dalton</p>
			<a href="" style="font-size: 12px;">Delete</a>
			<a href="" style="font-size: 12px;">Edit</a>
		</span>
	   <div class="box" style="padding: 0px;background-image: url(img/desert.jpg);">
	     <p style="text-align: center;text-shadow: 2px 1px 3px grey;margin-top: 10px;padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	     cillum dolore eu fugiat nulla pariatur.</p>
	     <div style="color: white;border-top: 2px solid grey;background: #333;margin: 5px 0px 0px 0px;border-radius: 0px 0px 10px 10px;padding: 3px;">
	     	<p style="float: right;font-size: 10px;">From: Cameroon</p>
	     	<p style="font-size: 10px;">Posted By: Arnauld</p>
	     	<a href=""></a>
	     </div>
	   </div>
	   <br>
   </div>


 </body>
 </html>
