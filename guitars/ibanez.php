
<body id="satch_body">

		<h2>Ibanez JS2410 MCO</h2>
		<div id="content">
		
		<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<img class="boxy" style="width:700px;height:512px;margin-left:120px;" class="pilt" src="small/ibanez2.jpg" alt="JS2410 MCO"/>
		<p class="role"> Ibanez - H/H</p>

		<h3>Joe Satriani Signature Ibanez</h3>
		<p class="bio">
		Joe Satriani has had a longstanding relationship with the Ibanez guitar company and has released several signature models over the years.
		This Ibanez JS2410 MCO is the latest model in the series. MCO standing for the color Muscle Car Orange.<br><br>This is a 6 string guitar that has an alder body and a 3 piece maple neck with a bubinga stripe running through
		for extra stability and tone. 24 jumbo frets and a rosewood fretboard with mother of pearl dot inlays. 6105 frets with prestige edge treatment
		and an edge tremolo bridge with the new ultra lite chrome tremolo arm.<br><br>
		The guitar has a passive ceramic single coil size humbucker in the neck from DiMarzio called the Satch Track and a passive
		alnico humbucker in the bridge called the Mo Joe.<br><br>
		The guitar has a three way switch for pickups and coils can be split with the tone knob. Pulling up on the volume knob engages a highpass filter.
		</p>
		</div>';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>

