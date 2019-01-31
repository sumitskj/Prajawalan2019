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
	    <link href="common/image/prajwalnicon.png" rel="icon">


		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" type="text/css" href="common/sidebar/sidebar.css">
		<link rel="stylesheet" type="text/css" href="common/header/header.css">
		<link rel="stylesheet" type="text/css" href="common/background/background.css">
		<link rel="stylesheet" type="text/css" href="./events/events.css">

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
		<script src="js/three.js-master/build/three.js"></script>
		<script src="js/three.js-master/examples/js/libs/tween.min.js"></script>
		<script src="js/three.js-master/examples/js/controls/TrackballControls.js"></script>
    	<script src="js/three.js-master/examples/js/renderers/CSS3DRenderer.js"></script>
		
	</head>
	<body style="padding:0;margin:0">
		<div class="light"></div>
		
		<div >
		<div id="container1"></div>
		<?php 
			include './common/sidebar/sidebar.php' ;
			include './common/header/header.php' ;
		?>
        
        <div style="
    text-align: center;
    top: 50%;
    left: 0;
    position: fixed;
    right: 0;">
            <h3 class="eve">Events are coming soon.....</h3>
        </div>
		
		
		<script src="./common/background/background.js"></script>
		
		
	</body>
</html>