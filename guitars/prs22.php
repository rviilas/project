
<body id="steven_body">

		<h2>Steven Wilsons Paul Reed Smith</h2>
		<div id="content">
		
		<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<img class="boxy" style="width:340px;height:512px;margin-left:290px;" class="pilt" src="small/prs223.jpg" alt="PRS Custom22"  />
		<p class="role"> PRS Custom22 - H/H</p>
		<p class="bio">
		Steven Wilsons relationship with PRS guitars started through his friend Mikael Akerfeldt for whom he produced some albums for.
		Among others, Steven uses a goldtop PRS22, which as a mahogany body and neck, The fretboard is made out of rosewood and features
		the classic RPS bird inlays. The bridge is the highest quality PRS Tremolo and the headstock has Phase III locking tuners.
		There are slightly different versions of the same 58/15 humbuckers in the neck and bridge. There are two tone knobs and one volume aswell as a 5-way blade switch.
		</p>
		</div>';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>