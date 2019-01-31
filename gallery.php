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
		<link rel="stylesheet" href="gallery/css/animate.css">
		<link rel="stylesheet" href="gallery/css/icomoon.css">
		<link rel="stylesheet" href="gallery/css/magnific-popup.css">
		<link rel="stylesheet" href="gallery/css/salvattore.css">
		<link rel="stylesheet" href="gallery/css/style.css">
		<script src="gallery/js/modernizr-2.6.2.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="common/sidebar/sidebar.css">
		<link rel="stylesheet" type="text/css" href="common/header/header.css">
		<link rel="stylesheet" type="text/css" href="common/background/background.css">
		
		
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
		<div id="fh5co-main">
		<div class="container">
		<div class="row">

        <div id="fh5co-board" data-columns>
            <?php for($i=31;$i>=26;$i--){ ?>
			<div class="item">
        		<div class="animate-box">
	        		<a href="gallery/img/<?php echo ($i); ?>.jpeg" class="image-popup fh5co-board-img" title=" Workshop"><img src="gallery/img/<?php echo ($i); ?>.jpeg" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        	</div>
		<?php } ?>
		<?php for($i=0;$i<25;$i++){ ?>
			<div class="item">
        		<div class="animate-box">
	        		<a href="gallery/img/<?php echo ($i+1); ?>.jpg" class="image-popup fh5co-board-img" title="Prajwalan 2018"><img src="gallery/img/<?php echo ($i+1); ?>.jpg" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        	</div>
		<?php } ?>
		</div>
        </div>
       </div>
	</div>
		
		
		
		
		<script src="gallery/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="gallery/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="gallery/js/jquery.waypoints.min.js"></script>
		<!-- Magnific Popup -->
		<script src="gallery/js/jquery.magnific-popup.min.js"></script>
		<!-- Salvattore -->
		<script src="gallery/js/salvattore.min.js"></script>
		<!-- Main JS -->
		<script src="gallery/js/main.js"></script>

		<script src="./common/background/background.js"></script>
		
		
	</body>
</html>