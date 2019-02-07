
			var container, stats, particle;
			var camera, scene, renderer;
			var group;
			var targetRotation = 0;
			var targetRotationOnMouseDown = 0;
			var mouseX = 0;
			var mouseXOnMouseDown = 0;
			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;
			var loader = new THREE.FontLoader();
			loader.load( 'fonts/droid/droid_sans_regular.typeface.json', function ( font ) {
				init( font );
				animate();
			} );
			function init( font ) {
				container = document.createElement('div');
				container.setAttribute("class","background blur");
				document.body.appendChild(container);

				camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 1, 1000 );
				camera.position.set( 0, 150, 500 );

				scene = new THREE.Scene();

				// Get text from hash
				var theText = "Sponsors";
				var hash = document.location.hash.substr( 1 );
				if ( hash.length !== 0 ) {
					theText = hash;
				}
				var geometry = new THREE.TextGeometry( theText, {
					font: font,
					size: 100,
					height: 20
				});

				geometry.computeBoundingBox();
				var centerOffset = -0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
				var materials = [
					new THREE.MeshBasicMaterial( { color: 0x010101, overdraw: 0.5, opacity: 1 } ),
					new THREE.MeshBasicMaterial( { color: 0x000000, overdraw: 0.1, opacity: 0.7 } )
				];

				var mesh = new THREE.Mesh( geometry, materials );
				mesh.position.x = centerOffset;
				mesh.position.y = centerOffset + 130;
				mesh.position.z = 00;
				mesh.rotation.x = 0;
				mesh.rotation.y = Math.PI * 2;
				group = new THREE.Group();
				group.add( mesh );
				scene.add( group );
				group.rotation.x = -0.3;
				if(window.innerWidth <= 450){
					group.rotation.y = 1.1;
				}

				renderer = new THREE.CanvasRenderer({alpha: true});
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );
				renderer.setClearColor( 0xffffff, 0 );

				//particles
				var PI2 = Math.PI * 2;
				var program = function ( context ) {
					context.beginPath();
					context.arc( 0, 0, 1, 0, PI2, true );
					context.fill();
				};
				particleGroup = new THREE.Group();
				scene.add( particleGroup );
				var i=0,number;
				if(window.innerWidth<450){
					number = 400;
				}else{
					number = 700;
				}
				while(i<number){
					var material = new THREE.SpriteCanvasMaterial( {
						color: Math.random() * 0x000000 + 0xcccccc,
						program: program,
						opacity: 0.7
					} );
					particle = new THREE.Sprite( material );
					particle.position.x = Math.random() * 1000 - 500;
					particle.position.y = Math.random() * 1000 - 500;
					particle.position.z = Math.random() * 1000 - 500;
					particleGroup.add( particle );
					i++;
				}
				//
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );
				//
				window.addEventListener( 'resize', onWindowResize, false );
			}
			function onWindowResize() {
				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize( window.innerWidth, window.innerHeight );
			}
			//
			function onDocumentMouseMove(event) {

				mouseX = event.clientX - windowHalfX;
				mouseY = event.clientY - windowHalfY;
			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length > 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;

				}

			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length == 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;

				}

			}

			//
			function animate() {
				requestAnimationFrame( animate );
				particleGroup.rotation.z += 0.001;

				group.rotation.y += 0.007;

				group.rotation.y += ( mouseX - group.rotation.y ) * .00005;
				particleGroup.rotation.y += ( mouseX - particleGroup.rotation.y ) * .000005;

				renderer.render( scene, camera );
				camera.lookAt( scene.position );
			}