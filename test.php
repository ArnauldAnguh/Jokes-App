<!DOCTYPE html>
<html>
<head>
	<title>Love</title>
	<style type="text/css">
		  body {
        height: 677px;
        /*background-color: #262626;*/
        padding: 0px;
        margin: 0px;
        background: linear-gradient(to bottom right, red);
        z-index: 1;
        overflow: hidden;
        animation: animate1 2s ease-in-out;

      }
        @keyframes animate1 {
      	0% {
      		background: lightgreen;
      	}

      	100% {
      		background: fixed;
      	}
      }

      h1 {
  	    position: absolute;
	    top: 50%;
	    left: 50%;
	    min-width: 80%;
	    width: auto;
	    display: ruby-text-container;     	
	    background: red;
	    opacity: .5;
	    font-family: fantasy;
	    font-size: 70px;
	    text-align: center;
	    transform: translate(-50%,-50%);
	    border-radius: 10px;
	    animation: animate 2s forwards;
      }
      @keyframes animate{
      	0% {
      	   color:  red;;
      	   opacity: 0;
      	   transition: 3s;
  	       position: absolute;
  		   left: 40%;
  		   animation-fill-mode: forwards;
  		   font-size: 20px;
      	}
      	20% {
      		color: #add;
      		position: absolute;
      		left: 20%;
      		background: red;
      		opacity: .2;
      		transition: 3s;
      		left: 10%;
      		animation-fill-mode: forwards;
      		transform: rotate(360deg) skewX(60deg) translateX(20px);
      	}
      	40% {
      		color: #adf;
      		position: absolute;
      		left: 40%;
      		opacity: .5;
      		transition: 3s;
      	}
       
      	60% {
      		color: #adf;
      		position: absolute;
      		left: 40%;
      		opacity: .5;
      		transition: 3s;

      	}
       
      	100% {
      		color: white;
      		position: fixed;
      		left: 40%;
      		font-size: 70px;
      		opacity: 1;
      		animation-play-state: paused;
      		animation-fill-mode: inherit;
      		transition: 5s;
      		animation-iteration-count: infinite;
      		animation-duration: 5s;
      	}
      }

      .container{
      	height: 100px;
      	width: 140px;
      	border: 30px solid #B9DDD3;
      	border-radius: 50%;
      	border-width: 30px;
      	background: transparent;
      	position: absolute;
	    top: 44%;
	    left: 81%;
	    animation: eye 3s forwards 0s;

      }
      .sec{
      	height: 40px;
      	width: 50px;
      	margin-top: 8px;
      	border: 10px solid #724216;
      	border-radius: 50%;
      	border-width: 15px;
      	opacity: .7;
      	background: #262626;
	    animation: eye 3s forwards 0s;
	    animation-direction: reverse;
      }
      @keyframes eye {
      	0% {
      		position: absolute;
      		top: 3%;
	        left: 30%;
	        height: 40px;
      	}
      	10% {
      		position: absolute;
      		top: 3%;
	        left: 31%;
	        height: 38px;
      	}
      	40% {
      		position: absolute;
      		top: 6%;
	        left: 33%;
	        height: 38px;
      	}
      	60% {
      		position: absolute;
      	    top: 9%;
	        left: 36%;
	        height: 27px;
      	}
      	80% {
      		position: absolute;
      		top: 12%;
	        left: 39%;
      	}
      	100% {
      	    top: 15%;
	        left: 41%;
	        height: 30px;
      		position: absolute;
      		box-shadow: 20px 80px 80px #000;
      	}
      }
    .line {
      	width: 100%;
      	height: 5px;
      	background: green;
      	position: absolute;
      	top: 80%;
      	left: 0%;
      	opacity: 0;
      	animation: animat 5s linear 4s;
      	animation-direction: reverse;
      	animation-timing-function: step-end;
      	margin-left: 20px;
      }

      @keyframes animat{
      	0% {
      		color: white;
      		width: 100%;
      		position: fixed;
      		opacity: 1;
      		
      	}
      	10% {
      		width: 80%;
      		position: fixed;
      	}
      	20% {
      		transition: 5s;
      		width: 60%;
      		position: fixed;
      	}
      	30% {
      		transition: 5s;
      		width: 40%;
      		position: fixed;
      	}
      	40% {
      		transition: 5s;
      		width: 30%;
      		position: fixed;
      	}
      	50% {
      		transition: 5s;
      		width: 20%;
      		position: fixed;
      	}
      	60% {
      		transition: 2s;
      		width: 10%;
      		position: fixed;
      	}
      	100% {
      		transition: 2s;
      		width: 5%;
      		opacity: 0;
      		position: fixed;
      	}
      }
      .love{
      	position: absolute;
      	top: 56%;
	    left: 85%;
	    width: 20%;
	    height: 10px;
	    background: purple;  
	    animation: arrow 4s linear 0s;
	   
      }
      @keyframes arrow{
      	0%{
      		position: fixed;
	        left: 100%;
	        
      	}
      	10% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	20% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	30% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	40% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	50% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	60% {
      		position: fixed;
	        left: 0%;
	        
      	}
      	100% {
      		position: fixed;
	        left: 0%;
	        right: 100%;
	        
      	}
      }
      .l1{
      	position: absolute;
      	top: 53%;
	    left: 80%;
	    width: 6%;
	    height: 10px;
	    background: purple;
	    transform: skewY(-30deg) rotateY(-30deg);  
	    animation: arrow 3s linear 0s;
      }
      @keyframes arrow {
      	0%{

      	}
      }
      .l2{
      	position: absolute;
      	top: 59%;
	    left: 80%;
	    width: 6%;
	    height: 10px;
	    background: purple;
	    transform: skewY(30deg) rotateY(30deg);  
	    animation: arrow 3s linear 0s;
      }
      @keyframes arrow {
      	0%{

      	}
      }
      .l3{
      	position: absolute;
      	top: 51.5%;
	    left: 85%;
	    width: 8px;
	    height: 70px;
	    background: purple; 
	    animation: arrow 3s linear 0s;
      }

	</style>
</head>
<body style="background: #DDEEA8;">

  <div class="container">
   <div class="sec">
   </div>  
  </div>
    <div class="love"></div>
    <div class="l1"></div>
    <div class="l2"></div>
    <div class="l3"></div>
  	<h1>LOVER'S ~ DAY</h1>
    
  	<div class="line">
  	</div>
</body>
</html>