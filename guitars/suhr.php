
<body id="ian_body">

		<h2>Ian Thornley's Suhr</h2>
		<div id="content">
	
		<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<img style="width:440px;height:760x;border:5px black ridge;margin-left:30%;" class="pilt" src="small/suhr3.jpg" alt="Suhr Classic Pro"  />
		<p class="role"> Suhr Classic Pro - S/S/H</p>
		<p class="bio">
		Ian Thornley is a Suhr signature artist and he almost exclusively uses Suhr gear for his sound including many of their guitars.
		Although Ian uses Suhr Modern type guitars aswell featuring either a H/H or a H/S/H configuration he has said that
		his most favorite is a strat style S/S/S or S/S/H guitar such as the Suhr Classic Pro he has been seen using.<br><br>
		The Suhr Classic Pro is a classical Stratocaster type guitar with an alder body and a maple neck. It is a 22 fret guitar
		with a rosewood fingerboard and medium stainless steel frets. The bridge is a Gotoh510 tremolo.<br><br>
		The middle and neck pickups are Suhr patented humless V70 single coils and a V70 humbucker in the bridge.
		The control is a classic 5-way blade switch with a volume and 2 tone knobs.

		</p>
		</div>
	';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>