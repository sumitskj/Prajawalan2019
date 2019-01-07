<html>
	<head>
		<style>
			body{
				background-color:  rgba(3, 11, 20,0.95);
    			margin: 0px;
			}
			#container{
				z-index: 3;
				background-color: rgba(0,0,0,0);
			}
			
		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" type="text/css" href="common/sidebar/sidebar.css">
		<link rel="stylesheet" type="text/css" href="common/header/header.css">
		<link rel="stylesheet" type="text/css" href="common/background/background.css">
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
		<script src="js/three.js-master/build/three.js"></script>
		<script src="js/three.js-master/examples/js/libs/tween.min.js"></script>
		<script src="js/three.js-master/examples/js/controls/TrackballControls.js"></script>
        <script src="js/three.js-master/examples/js/renderers/CSS3DRenderer.js"></script>
        
        <link rel="stylesheet" href="./workshop/css/portfolio.jquery.css">
        <link rel="stylesheet" href="./workshop/css/workshop.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./workshop/js/portfolio.jquery.js"></script>

        <script>
            $(document).ready(function() {
                $('.thumbs').portfolio({
                    cols: 4,
                    transition: 'slideDown'
                });
            });
        </script>
        <style>
            body {
                font-family: arial;
                background-color: #040b15;
            }
            hr {
                margin-bottom: 40px;
            }
            h1 {
                margin-bottom: 0px;
                margin-top: 30px;
                color: white;
            }
            h3 {
                margin-top: 10px;
                font-weight: normal;
                color: #a6a6a6;
            }
            p {
                line-height: 25px;
                color: white;
            }
            a.button {
                text-decoration: none;
            }
            .button {
                padding: 14px 22px;
                background-color: #cecece;
                color: #333333;
                border-radius: 3px;
                margin-bottom: 20px;
                display: inline-block;
            }
            .button:hover {
                background-color: #e1e1e1;
            }
            .thumbs {
                display: block;
            }
            
        </style>
		
	</head>
	<body style="padding:0;margin:0">
		<div class="light"></div>
		
		<div >
		<div id="container1"></div>
		<?php 
			include './common/sidebar/sidebar.php' ;
			include './common/header/header.php' ;
		?>
		<div id="fh5co-main">
		<div class="container">
		<div class="row">

        <div id="fh5co-board" data-columns>
		
	</div>
        
    <div class="container">
    
       <br>
       <br>
        <ul class="thumbs">
            <li ><a href="#thumb1" class="thumbnail" style="background-image: url('./workshop/images/creo.jpg')">
                <h4>PTC CREO 3.0</h4><span class="description">Learn About CREO</span></a>
            </li>
            <li>
                <a href="#thumb2" class="thumbnail" style="background-image: url('./workshop/images/game.jpg')"><h4>GAME DEVELOPMENT</h4><span class="description">Learn About GAME DEVELOPMENT</span></a>
            </li>
            <li>
                <a href="#thumb3" class="thumbnail" style="background-image: url('./workshop/images/iot.jpg')"><h4>INTERNET OF THINGS</h4><span class="description">Learn About IOT</span></a>
            </li>
            <li>
                <a href="#thumb4" class="thumbnail" style="background-image: url('./workshop/images/pcb.png')"><h4>PCB DESIGNING</h4><span class="description">Learn About PCB</span></a>
            </li>
           
        </ul>

        <div class="portfolio-content">
            <div id="thumb1">
                <div class="media"><img src="./workshop/images/creo.jpg"/><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <h1>PTC CREO 3.0</h1>
                <p>Can you imagine a computing concept where everyday objects have network connectivity? Is it possible for ordinary devices to communicate among themselves?
                Yes!! And the answer is ‘the Internet of Things’.
                This Network of networks extracts and makes sense of data within machines. An estimated 30 million wireless devices are to be connected to the internet by 2020.
                Interesting! Isn't it?
                How beautiful it is when your door can update its Facebook Status every time some one opens it. A song starts playing when you tweet about it. A fire sensor that automatically send an E-Mail to the fire department. Keeping all the awesomeness in mind Innovians Technologies has introduced the Internet of things workshop to get you ready for the future.
                You’ll learn the basic concepts and features of the Internet of Things and build projects utilizing the Arduino platform. You’ll discover fundamental concepts of cloud computing, sensor reading and connecting the Arduino to the Internet, wireless interfaces and Android phones. You’ll also learn to use the most popular open platforms for managing sensor data from the Arduino, how to trigger actuators remotely, and how to reprogram Arduino using cloud services.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb2">
                <div class="media"><img src="./workshop/images/game.jpg"/></div>
                <h1>GAME DEVELOPMENT</h1>
                <p>Due to constant rise of the video game industry, the demand for game developers is increasing at a steadfast rate. The Game Development Workshop will impart participants with the knowledge of the tools and techniques needed for design and development of games. This intensive two-day workshop will explore the day-to-day craft of game design through hands-on activities, group discussion, analysis, and critique. The training focus is to enable participants to develop interactive games using JavaScript and C# with the help of live projects</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb3">
                <div class="media"><img src="./workshop/images/iot.jpg"/></div>
                <h1>INTERNET OF THINGS</h1>
                <p>How beautiful it is when your door can update its Facebook Status every time some one opens it. A song starts playing when you tweet about it. A fire sensor that automatically send an E-Mail to the fire department. Keeping all the awesomeness in mind Innovians Technologies has introduced the Internet of things workshop to get you ready for the future.
                You’ll learn the basic concepts and features of the Internet of Things and build projects utilizing the Arduino platform. You’ll discover fundamental concepts of cloud computing, sensor reading and connecting the Arduino to the Internet, wireless interfaces and Android phones. You’ll also learn to use the most popular open platforms for managing sensor data from the Arduino, how to trigger actuators remotely, and how to reprogram Arduino using cloud services.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb4">
                <div class="media"><img src="./workshop/images/pcb.png"/></div>
                <h1>PCB DESIGNING</h1>
                <p>This will be a two day workshop under which following points will be covered -
                    1. Circuit Designing Techniques.
                    2. Introduction to PCB Designs.
                    3. Software Installation and basic commands.
                    4. Design of basic circuit using software.
                    5. Introduction to 555 Timer IC.
                    6. Circuit Implementation for timer circuit.
                    7. Gerber Layout Creation.
                    8. Netlist creation
                    9. Soldering techniques and tips.
                    10. Etching techniques & process.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>   
        </div>
        
    </div>
		
		
		
	<script src="./common/background/background.js"></script>
		
		
	</body>
</html>