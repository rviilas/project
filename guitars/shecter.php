

<body id="nick_body">

		<h2>Nick Johnstons Signature Shecter</h2>
		<div id="content">
	
		<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<img class="boxy" style="width:740px;height:512px;margin-left:100px;" class="pilt" src="small/shecter3.jpg" alt="Shecter"  />
		<p class="role"> Shecter - Nick Johnston Traditional - S/S/S</p>
		<p class="bio">
		Nick Johnston is friends with the Shecter signature artist Keith Marrow who introduced Nick to the company.
		Shecter was so impressed with Nick that they sent him some of their guitars to play which eventually led to a signature model.
		Nick has always been a lover of Stratocasters so his signature guitar was naturally a Strat style guitar with all three pickups
		being single coils.<br><br>
		The guitar features an alder body, a one piece maple bolt-on neck and a rosewood fingerboard. Hipshot locking tuners and a Shecter Vintage two point tremolo system
		for the bridge. The pickups are Seymour Duncan Texas Hot Antiquities which are amazing vintage sounding single coils.
		There is one knob for tone and one for volume control and a classic 5-way blade switch.
		The paint job on the guitar is a one-off for this guitar only called Atomic Silver.
		<br>

		</p>
		</div>';
			}else{
			echo "Please log in to access this content.";
			}
			?>

</body>

</html>