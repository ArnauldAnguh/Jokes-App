<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/style1.css"> -->
  <style type="text/css">
  body {
  height: 500px;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
}
  .box {
    width: 35%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #262626;
    padding: 40px;
    box-sizing: border-box;
    z-index: 2;
    opacity: .9;
    border: none;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.box h2{
  margin: 0 0 40px;
  padding: 0;
  color: #f7497d;
  font-family: cursive;
  text-transform: uppercase;
}
.box input {
  padding: 10px 0;
  margin-bottom: 30px;
  border-radius: 5px;
}
.box textarea {
  height: 80px;
  padding: 10px 0;
  margin-bottom: 40px;
}
.box input,
.box textarea {
  width: 100%;
  box-sizing: border-box;
  box-shadow: none;
  outline: none;
  border: none;
  border-bottom: 2px solid #999;
}
.box input[type="submit"] {
  border-bottom: none;
  cursor: pointer;
  background: #f7497d;
  color: #fff;
  opacity: .8;
  margin-bottom: 0;
  text-transform: uppercase;
}
.box form div {
  position: relative;
}
.box form div label {
  position: absolute;
  top: 10px;
  left: 0;
  color: #999;
  transition: .5s;
  pointer-events: none;
}
.box input:focus ~ label,
.box textarea:focus ~ label {
  top: -12px;
  left: 0;
  color: #f7497d;
  font-size: 12px;
  font-weight: bold;
}
.box input:valid ~ label,
.box textarea:valid ~ label {
  top: -12px;
  left: 0;
  color: #f7497d;
  font-size: 12px;
  font-weight: bold;
}
.box input:focus,
.box textarea:focus, 
.box input:valid,
.box textarea:valid {
  border-bottom: 2px solid #f7497d;
}

  .img{
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 1;
  }
  </style>
</head>
<body style="">
  <img src="../img/babe.png" class="img">
   <div class="box">
   	 <h2>Login To Joke Portals</h2>
  	 <form method="post" action="">
  		<div>
  			<input type="text" name="user_name" required="">
  			<label>Name</label>
  		</div>
  		 <div>
  			<input type="email" name="user_email" required="">
  			<label>Email</label>
  		</div>
  		<div>
  			<input type="password" name="user_password" required="">
  			<label>Password</label>
  		</div>
      <input type="submit" name="" value="Login ">
     </form>
     <h4 style="color: #fff;font-size: 15px;font-family: Aria;">Not yet a joker?  <a href="register.php">Register now</a></h4>
   </div>
 </body>
</html>