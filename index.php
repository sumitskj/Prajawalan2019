<html>
	<head>

	<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		  <link href="common/image/prajwalnicon.png" rel="icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			
			body{
				background-color:  rgba(3, 11, 20,0.95);
			margin: 0px;
			color:#fafafa;
			font-family: "Montserrat", arial, sans-serif;
			}
			#background{
				width: 100%;
				height: 100%;
				overflow: hidden;
				position: fixed;
				top: 0;
				display: block;
				background-color: rgba(3, 11, 20,0.95);
			}
			.broken{
				width: 0;
				height: 0;
				background-color: aqua;
				position: fixed;
				animation: fade 1s 1s forwards;
			}
			.fall{
				width: 0;
				height: 0;
				background-color: rgb(111, 0, 255);
				position: fixed;
				animation: fall 1s forwards;
			}
			@keyframes fade{
				100%{background-color: rgba(3, 11, 20,0.95);}
			}
			@keyframes fall{
				100%{top:100%;}
				
			}
/*sponsors*/
			#slider {
					    opacity:1;
					    transition: opacity 1s;

					}

			#slider.fadeOut {
			    opacity:0;
			}
			#slide_wrap{
					position: absolute;
				    bottom: 5%;
				    right: 9%;
			}
			@media only screen and (min-width: 600px) {
			.spon{
				position: absolute;
				bottom: 110px;
				right: 131px;
			}
			}
			#slide_wrap img{
				height: 10%
			}
			@media only screen and (max-width: 600px) {
				#slide_wrap{
					left:0;
					right:0;
					text-align: center
				}
				#slide_wrap img{
					height: 7%
				}
				.spon{
				position: absolute;
				bottom: 12%;
				left:0;
				right:0;
				text-align:center;
				}
			}
		</style>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="social.css">
		<link rel="stylesheet" type="text/css" href="common/sidebar/sidebar.css">
		<link rel="stylesheet" type="text/css" href="common/header/header.css">
		


		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
		
	</head>
	<body style="padding:0;margin:0">
	<marquee  style="width:100%;position:fixed;bottom:0;color:#fafafa;z-index:2">Update: Congratulations to all the conveners and co-conveners of core committees, Prajwalan 19.</marquee>
	<div class="icon-bar">

		  <a href="https://www.facebook.com/prajwalan.gcoea" class="facebook"><i class="fa fa-facebook"></i></a> 
		  <a href="https://twitter.com/prajwalan5" class="twitter"><i class="fa fa-twitter"></i></a> 
		  <a href="https://play.google.com/store/apps/details?id=org.prajwalan18.app.prajwalanapp" class="google"><i class="fa fa-play"></i></a> 
		  <a href="https://www.instagram.com/prajwalan.techfest/" class="instagram"><i class="fa fa-instagram"></i></a>
		  <a href="https://www.youtube.com/channel/UCGFvFsIlJsn_YQY4Q-pK5_Q" class="youtube"><i class="fa fa-youtube-play"></i></a> 

   </div>
	<div class="light"></div>
		<svg id="background" >
				<defs>
					
					<linearGradient id="grad3" x1="0%" y1="0%" x2="100%" y2="0%">
						<stop offset="0%" style="stop-color:rgb(0,255,255);stop-opacity:1" />
						<stop offset="100%" style="stop-color:rgb(0,0,255);stop-opacity:1" />
					</linearGradient>
				</defs>
		</svg>
		<div id="clockdiv">
			<div>
				<span class="days"></span>
				<div class="smalltext">Days</div>
			</div>
			<div>
				<span class="hours"></span>
				<div class="smalltext">Hours</div>
			</div>
			<div>
				<span class="minutes"></span>
				<div class="smalltext">Minutes</div>
			</div>
			<div>
				<span class="seconds"></span>
				<div class="smalltext">Seconds</div>
			</div>
		</div>
		
		
		
		<?php 
			include './common/sidebar/sidebar.php' ;
			include './common/header/header.php' ;
		?>
		<div class="container">
			<div><img src="logoN.png" id="container_logo"  /></div>
			<div><img src="gray.png" class="container_circle" style="animation: clockwiseSpin 4s linear infinite" /></div>
			<div><img src="black.png" class="container_circle" style="animation: antiClockwiseSpin 5s linear infinite" /></div>
			<div><img src="gray_black.png" class="container_circle" style="animation: clockwiseSpin 6s linear infinite" /></div>
			<div class="patronage">
			<h6 style="text-align: center; padding:0px;margin-bottom:10px">Recieves Patronage from:</h6>
				<img src="./make_in_india.png"/>
				<img src="unisco.png"/>
				<img src="digital_india.png"/>
			</div>
		</div>
	    <p class="spon" style="font-size:1.25rem">Sponsered By:</p>

		<div class="fb absolute" id="slide_wrap">
				<img   class="  " id="slider" src='./sponimg/0.jpg'>
		</div>
		<div class='right_icons_div'>
			
			<div class="right-icon" onclick="menuExpand()" style="cursor:pointer">
			<p>Menu	</p>
			<div>
		</div>
		
		<!--script src="./background_main.js"></script-->
		<script>
			/****** BACKGROUND SCRIPT *******/

			var startTime;
			window.onload = function(){
				var centre_circle = document.getElementsByClassName("container_circle");
				var centre_logo = document.getElementById("container_logo");
				startTime = new Date();
				var background = document.getElementById("background");
				var light = document.getElementsByClassName("light")[0];
				background.width = window.innerWidth;
				background.height = window.innerHeight;
				prevMouseX = 0;
				prevMouseY = 0;
				prevWidth = 0;
				var count=0;
				document.onmousemove = function(event){
					mouseX = event.clientX;
					mouseY = event.clientY;
					centre_logo.style.top = mouseY/15 + 'px';
					centre_logo.style.left = mouseX/15 + 'px';
					for(var i=0;i<3;i++){
						centre_circle[i].style.top = mouseY/25 + 'px';
						centre_circle[i].style.left = mouseX/25 + 'px';
					}
					light.style.top = mouseY-100;
					light.style.left = mouseX-100;
					var rect_width =Math.max(Math.abs((mouseX-prevMouseX)),10);
					if(window.innerWidth>600){
						drawTrapezoid(mouseX,mouseY,prevMouseX,prevMouseY,prevWidth,rect_width);
						if(count>22){
							background.removeChild(background.childNodes[count-20]);
						}
					}
					prevMouseX = mouseX;
					prevMouseY = mouseY;
					prevWidth = rect_width;
						
				}
				
				function drawTrapezoid(mouseX,mouseY,prevMouseX,prevMouseY,prevWidth,rect_width){
					var y2= mouseY+rect_width/2;
					var y1 = prevMouseY+prevWidth/2;
					var y3 = mouseY-rect_width/2;
					var y4 = prevMouseY-prevWidth/2;
					var currentTime = new Date();
					var diff = currentTime - startTime+1000;
					

					var newLine = document.createElementNS('http://www.w3.org/2000/svg','polygon');
					newLine.setAttribute('points',prevMouseX+','+y1+' '+mouseX+','+y2+' '+mouseX+','+y3+' '+prevMouseX+','+y4);
					newLine.setAttribute('fill','url(#grad3)');
					var animate = document.createElementNS('http://www.w3.org/2000/svg','animate');
					animate.setAttribute('attributeName','points');
					animate.setAttribute('to',prevMouseX+','+prevMouseY+' '+mouseX+','+mouseY+' '+mouseX+','+mouseY+' '+prevMouseX+','+prevMouseY);
					animate.setAttribute('dur','1s');
					animate.setAttribute('fill','freeze');
					animate.setAttribute('restart','never');
					animate.setAttribute('begin',diff+'ms');
					newLine.appendChild(animate);
					
					var broken_poly = document.createElementNS('http://www.w3.org/2000/svg','polygon');
					broken_poly.setAttribute('points',prevMouseX+','+y1+' '+mouseX+','+y2+' '+mouseX+','+y3+' '+prevMouseX+','+y4);
					broken_poly.style.fill = '#262f3e';
					var tempMouseX = mouseX+200;
					var tempPrevMousex = prevMouseX+200;
					
					var animate = document.createElementNS('http://www.w3.org/2000/svg','animate');
					animate.setAttribute('attributeType','CSS');
					animate.setAttribute('attributeName','opacity');
					animate.setAttribute('to','0');
					animate.setAttribute('dur','200ms');
					animate.setAttribute('fill','freeze');
					animate.setAttribute('restart','never');
					animate.setAttribute('begin',diff-200+'ms');
					broken_poly.append(animate);
					
					var animate = document.createElementNS('http://www.w3.org/2000/svg','animateTransform');
					animate.setAttribute('attributeType','xml');
					animate.setAttribute('attributeName','transform');
					animate.setAttribute('type','rotate');
					animate.setAttribute('additive','sum');
					//animate.setAttribute('from','0 ');
					animate.setAttribute('to',Math.random()*180-90);
					animate.setAttribute('dur','10s');
					animate.setAttribute('fill','freeze');
					animate.setAttribute('restart','never');
					animate.setAttribute('begin',diff-1000+'ms');
					broken_poly.append(animate);
					
					count++;
					$('#background').append(newLine);
					$('#background').append(broken_poly);
					
					
				}
			}
			
		</script>
		<script>
			function getTimeRemaining(endtime) {
				var t = Date.parse(endtime) - Date.parse(new Date());
				var seconds = Math.floor((t / 1000) % 60);
				var minutes = Math.floor((t / 1000 / 60) % 60);
				var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
				var days = Math.floor(t / (1000 * 60 * 60 * 24));
				return {
					'total': t,
					'days': days,
					'hours': hours,
					'minutes': minutes,
					'seconds': seconds
				};
				}

				function initializeClock(id, endtime) {
				var clock = document.getElementById(id);
				var daysSpan = clock.querySelector('.days');
				var hoursSpan = clock.querySelector('.hours');
				var minutesSpan = clock.querySelector('.minutes');
				var secondsSpan = clock.querySelector('.seconds');

				function updateClock() {
					var t = getTimeRemaining(endtime);

					daysSpan.innerHTML = t.days;
					hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
					minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
					secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

					if (t.total <= 0) {
					clearInterval(timeinterval);
					}
				}

				updateClock();
				var timeinterval = setInterval(updateClock, 1000);
				}

				var deadline = new Date('March 1, 2019 03:24:00');
				initializeClock('clockdiv', deadline);
		</script>
				<script src="slide.js"></script>

	</body>
</html>