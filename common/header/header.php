<div style = 'z-index:2'> 
    <img id="logoNew" src="./prajName.png" style="position: absolute;z-index: 2;top:0;left:-10px">
            <h1 class="ml5">
                    <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters letters-left">Central India's Largest</span>
                    <span class="letters letters-right" style="color:#23e8c6">Technical Festival</span>
                    <span class="line line2"></span>
                </span> 
            </h1>
    <img id="logoNew1" src="./gcoeaLogo.png" style="width:30%;position: absolute;z-index: 2;right:3%">
</div>
<script>
			anime.timeline({loop: true})
			.add({
			targets: '.ml5 .line',
			opacity: [0.5,1],
			scaleX: [0, 1],
			easing: "easeInOutExpo",
			duration: 700
			}).add({
			targets: '.ml5 .line',
			duration: 900,
			easing: "easeOutExpo",
			translateY: function(e, i, l) {
				var offset = -0.625 + 0.625*2*i;
				return offset + "em";
			}
			}).add({
			targets: '.ml5 .letters-left',
			opacity: [0,1],
			translateX: ["0.5em", 0],
			easing: "easeOutExpo",
			duration: 900,
			offset: '-=300'
			}).add({
			targets: '.ml5 .letters-right',
			opacity: [0,1],
			translateX: ["-0.5em", 0],
			easing: "easeOutExpo",
			duration: 300,
			offset: '-=600'
			}).add({
			targets: '.ml5',
			opacity: 0,
			duration: 2000,
			easing: "easeOutExpo",
			delay: 1000
			});

			var gcoeaLogo = document.getElementById('logoNew1');
			if(window.innerWidth <=600){
				gcoeaLogo.style.display = 'none';
			}
			
		</script>