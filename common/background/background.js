
var camera1, scene1, renderer1;
var controls;
var logo;
var objects = [];
var light = document.getElementsByClassName('light')[0];
init1();
animate1();

function init1() {

    camera1 = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
    camera1.position.z = 3500;
    
    scene1 = new THREE.Scene();
    
    screenWidth = screen.width/2;
    screenHeight = screen.height/2
    // table
    for(var i = 0;i<10;i++){
        for(var j=0;j<10;j++){
            var temp = document.createElement('div');
            temp.className = 'small-square';
            var object = new THREE.CSS3DObject(temp);
            object.position.x = i*300-1500;
            object.position.y = j*200-1000;
            object.position.z = Math.random()*2500+1000;
            scene1.add(object);
            objects.push(object);
        }
    }
    
    
    
  

    
  

   
    renderer1 = new THREE.CSS3DRenderer();
    renderer1.setSize( window.innerWidth, window.innerHeight );
    renderer1.domElement.style.position = 'absolute';
    document.getElementById( 'container1' ).appendChild( renderer1.domElement );
    
    


   
    window.addEventListener( 'resize', onWindowResize, false );

}
screenWidth = screen.width/2;
screenHeight = screen.height/2
var mouseX,mouseY;
var background = document.getElementById("background");
prevMouseX = 0;
prevMouseY = 0;
document.onmousemove = function(event){
    mouseX = event.clientX;
    mouseY = event.clientY;
  
    light.style.left = mouseX-150+'px';
    light.style.top = mouseY-150+'px';

    
    
}


function onWindowResize() {

    

    camera1.aspect = window.innerWidth / window.innerHeight;
    camera1.updateProjectionMatrix();
    renderer1.setSize( window.innerWidth, window.innerHeight );
    

    render1();

}

function animate1() {
    
    
    for(var i=0;i<100;i++){
        var pos = objects[i].position.z;
        if(pos >= 3000){
            objects[i].position.z = 0;
            pos = 0;
        }
        objects[i].position.z = pos+1;
    }
    
    
    requestAnimationFrame( animate1 );
    
    render1();
}

function render1() {
   
    renderer1.render(scene1,camera1);
}

