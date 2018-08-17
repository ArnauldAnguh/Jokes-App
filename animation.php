<!DOCTYPE html>
<html>
<head>
	<title>Animations</title>
	<style type="text/css">
		body {background: #000;opacity: .8;margin: 0px;border-radius: 20px;overflow-x: hidden;}
		.font1 {width: 290px;height: 12px;background: #ebb;position: absolute;left: 79%;top: 14.2%;border-radius: 10px;transform: skewY(30deg);}

		.fon1 {width: 10px;height: 180px;background: #ebb;position: absolute;left: 20.6%;top: 3%;border-radius: 10px;transform: skewX(20deg);}

		.font2 {width: 240px;height: 10px;background: #ebe;position: absolute;left: 1%;top: 14.5%;border-radius: 20px;transform:  skewY(-36deg) ;}

		.font3 {width: 100px;height: 10px;background: #ebe;position: absolute;left: 53%;top: 30%;border-radius: 20px;}

		.font4 {width: 30px;height: 50px;background: #FFFFAA;position: absolute;left: 56%;top: 31.4%;border-radius: 50%;box-shadow: 0px 80px 80px #FFFFAA;}

		.font5 {width: 10px;height: 170px;background: #ebe;position: absolute;left: 32%;top: 73%;border-radius: 20px;}

		.font6 {width: 17px;height: 19px;background: #ebe;position: absolute;left: 31.7%;top: 70%;border-radius: 20px;}

		.font7 {width: 10px;height: 165px;background: #ebe;position: absolute;left: 57%;top: 73.7%;border-radius: 20px;}

		.font8 {width: 17px;height: 19px;background: #ebe;position: absolute;left: 56.7%;top: 70.8%;border-radius: 20px;}
		
		.fon5 {width: 10px;height: 170px;background: #ebe;position: absolute;left: 40%;top: 73.4%;border-radius: 20px;}

		.fon6 {width: 17px;height: 19px;background: #ebe;position: absolute;left: 39.7%;top: 70.5%;border-radius: 20px;}

		.fon7 {width: 10px;height: 163px;background: #ebe;position: absolute;left: 68%;top: 74.1%;border-radius: 20px;}

		.fon8 {width: 17px;height: 19px;background: #ebe;position: absolute;left: 67.8%;top: 71.4%;border-radius: 20px;}
		
		.font9 {width: 82.5%;height: 6px;background: #ebe;position: absolute;left: 2.9%;top: 90.5%;border-radius: 20px;}

		/*.font{width: 10px;height: 445px;background: #ebe;position: relative;left: 30px;top: 190px;border: 3px dashed #fff;}*/

		.front{width: 10px;height: 441px;background: #ebe;position: absolute;left: 312px;top: 200px;}

		.fon{width: 7px;height: 490px;background: #ebe;position: absolute;left: 97%;top: 190px;border: 2px dashed #fff;border-radius: 5px;}

		.zinc{width: 100%;height: 5px;background: #ebe;position: absolute;left: 0%;top: 190px;border: 3px dashed #fff;border-radius: 20px;}

		.zinc1{width: 10px;height: 435px;background: #ebe;position: absolute;left: 85%;top: 201px;border: 2px dashed #fff;}

		.zinc2 {width: 60.5%;height: 10px;background: #ebe;position: absolute;left: 18.5%;top: 17px;border-radius: 20px;transform: skewX(30deg);}

         .d1{width: 29%;height: 5px;background: #ebe;position: absolute;right: 2.5%;top: 96.6%;border-radius: 20px;}

         .d1a{width: 26%;height: 5px;background: #ebe;position: absolute;right: 42.3%;top: 96.5%;border-radius: 20px;}

         .d2{width: 5%;height: 200px;background: ;position: absolute;left: 54%;top: 60%;border: 3px dashed #fff;border-radius: 20px;}

         .d3{width: 5%;height: 100px;position: absolute;left: 30%;top: 55%;border: 3px dashed #fff;border-radius: 20px;}

         .fonts {width: 170px;height: 10px;background: #ebe;position: absolute;left: 85%;top: 93%;border-radius: 20px;transform: skewY(14deg);}

         .fons {width: 123px;height: 10px;background: #ebe;position: absolute;left: 23%;top: 93%;border-radius: 20px;transform: skewY(17deg);}

         .line5 {width: 123px;height: 7px;background: #ebe;position: absolute;left: 23%;top: 73%;border-radius: 20px;transform: skewY(-3deg);}

         .line1 {width: 351px;height: 3px;background: #ebe;position: absolute;left: 32%;top: 73.3%;}
         .line2 {width: 390px;height: 3px;background: #ebe;position: absolute;right: 2.9%;top: 74%;}
         .line3{width: 20%;height: 3px;background: #ebe;position: absolute;left: 2.9%;top: 75%;}
         .line4{width: 83%;height: 3px;background: #ebe;position: absolute;left: 2.9%;top: 40%;}
         .note{color: white;font-size: 27px;font-synthesis: weight;quotes: inherit;position: absolute;background:;left: 50%;top: 10%;}
         .note1{color: white;position: absolute;opacity: .7;background: red;left: 44%;top: 13%;border-radius: 20px;width: 70px;height: 50px;font-size: 24px;}

         .note2{position: absolute;opacity: .7;background: green;left: 44%;top: 6%;border-radius: 50%;width: 50px;height: 50px;}
         .color1{width: 270px;height: 249px;background-color: white;position: absolute;top: 40%;left: 43px;}
         .color2{width: 270px;height: 85px;background-color: brown;position: absolute;top: 28%;left: 43px;}
         .color3{width: 270px;height: 110px;background-color: brown;position: absolute;top: 75%;left: 43px;}
         .step1{position: absolute;top: 80%;left: 40%;z-index: 2;border-radius: 10px;background: red;width: 10px;height:100px;animation: animate 8s forwards ; }
         .step2{position: absolute;top: 80%;left: 57%;z-index: 2;border-radius: 10px;background: red;width: 10px;height:100px;animation: animate 8s forwards ; }
         .step3{position: absolute;top: 80%;left: 68%;z-index: 2;background: red;width: 10px;height:100px; border-radius: 10px;animation: animate 8s forwards ;}
         .step4{position: absolute;top: 80%;left: 32%;background: red;width: 10px;height:100px;z-index: 2; }
         .step5{position: absolute;top: 80%;left: 40%;background: red;width: 10px;height:100px;z-index: 2; }
         .step6{position: absolute;top: 80%;left: 68%;background: green;width: 10px;height:100px;z-index: 2; }
         .step7{position: absolute;top: 80%;left: 57%;background: green;width: 10px;height:100px;z-index: 2; }
         

         @keyframes animate {
         	0%{
         		position: absolute;
         		opacity: .4;
         		transition: 3s;
         		animation-direction: alternate-reverse;
         		top: 70%;
         	}
         	20%{
         		position: absolute;
         		top: 7%;
         		transition: 3s;

         	}
         	40%{
         		position: absolute;
         		transition: 3s;
         		animation-iteration-count: ;

         	}
         	60%{
         		position: absolute;
         		transition: 3s;

         	}
         	80%{
         		position: absolute;
         		top: 90;
         		transition: 3s;
         		color: lightgreen;

         	}
         	100%{
         		position: absolute;
         		top: 0%;
         		color: #add;
         		transition: 3s;
         		 transform: rotate(90deg);
         		 animation-play-state: paused;
         		 animation-timing-function: step-end;
         		animation-direction: alternate-reverse;
         	}
         }
    </style>
</head>
<body>
 <div class="font"></div>
 <div class="fon5"></div>
 <div class="fon6"></div>
 <div class="step1"></div>
 <div class="step2"></div>
 <div class="step3"></div>
 <div class="step4"></div>
 <div class="step5"></div>
 <div class="step6"></div>
 <div class="step7"></div>

 <div class="fon7"></div>
 <div class="fon8"></div>
 <div class="fonts"></div>
 <div class="fon"></div>
 <div class="fons"></div>
 <div class="fon1"></div>
 <div class="zinc"></div>
 <div class="color1"></div>
 <div class="color2"></div>
 <div class="color3"></div>
 <div class="color4"></div>
 <div class="zinc1"></div>
 <div class="zinc2"></div>
 <div class="line1"></div>
 <div class="line2"></div>
 <div class="line3"></div>
 <div class="line4"></div>
 <div class="line5"></div>
 <div class="note1"><span style="margin-left: 10px;">)_</span> <span>_(</span> </div>
 <div class="note2"></div>

 <div class="note">Arnauld & Sons</div>
 <div class="win1"></div>
 <div class="win2"></div>
 <div class="win3"></div>
 <div class="win4"></div>

 <div class="d1"></div>
 <div class="d2"></div>
 <div class="d3"></div>
 <div class="d4"></div>
 <div class="d1a"></div>
 <div class="front"></div>

 <div class="font1"></div>
 <div class="font2"></div>
 <div class="font3"></div>
 <div class="font4"></div>
 <div class="font5"></div>
 <div class="font6"></div>
 <div class="font7"></div>
 <div class="font8"></div>
 <div class="font9"></div>
</body>
</html>