var camera, scene, renderer;
var object1,object2,object3;
var controls;


init();
animate();

function init() {

    
    camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
    camera.position.z = 4000-window.innerWidth;
    
    
    scene = new THREE.Scene();
    
    screenWidth = screen.width/2;
    screenHeight = screen.height/2
    // table
    
    var temp = document.createElement('img');
    temp.setAttribute('src','logoN.png');
    var object = new THREE.CSS3DObject(temp);
    object.position.x = 0;
    object.position.y = 100;
    object.position.z = 800;
    scene.add(object);

    var temp = document.createElement('img');
    temp.setAttribute('src','gray.png');
    temp.className = 'gray_ring';
    object1 = new THREE.CSS3DObject(temp);
    object1.position.x = 0;
    object1.position.y = 150;
    object1.position.z = 200;
    scene.add(object1);

    var temp = document.createElement('img');
    temp.setAttribute('src','black.png');
    temp.className = 'black_ring';
    object2 = new THREE.CSS3DObject(temp);
    object2.position.x = 0;
    object2.position.y = 150;
    object2.position.z = 200;
    scene.add(object2);

    var temp = document.createElement('img');
    temp.setAttribute('src','gray_black.png');
    temp.className = 'gray_black_ring';
    object3 = new THREE.CSS3DObject(temp);
    object3.position.x = 0;
    object3.position.y = 150;
    object3.position.z = 200;
    scene.add(object3);

    
    
    renderer = new THREE.CSS3DRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    renderer.domElement.style.position = 'absolute';
    document.getElementById( 'container' ).appendChild( renderer.domElement );

    controls = new THREE.TrackballControls( camera, renderer.domElement );
    controls.rotateSpeed = 0.5;
    controls.minDistance = 500;
    controls.maxDistance = 6000;
    controls.addEventListener( 'change', render );

    window.addEventListener( 'resize', onWindowResize, false );
    render();

}

screenWidth = screen.width/2;
screenHeight = screen.height/2

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
    camera.position.z = 4000-window.innerWidth;

    render();

}

function animate() {
    requestAnimationFrame( animate );
    
    controls.update();
    
    
}

function render() {
    
    
    renderer.render(scene,camera);
}

function rotate(){
    object1.rotation.z -= 0.005;
    object2.rotation.z += 0.005;
    object3.rotation.z += 0.01;
    render()
}