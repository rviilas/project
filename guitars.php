
<body id="main_body">
	<table>
			<?php
			if(!isset($_SESSION['username'])){
			echo 
			'<tr>
			<td id="boxy">
			<a href="?mode=ibanez" title="Ibanez JS2410 MCO"><img style="width:517px;height:360px" src="small/ibanez3.jpg" alt="Ibanez JS2410 MCO" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=shecter" title="Nick Johnston Traditional"><img style="width:517px;height:250px" src="small/shecter2.jpg" alt="Nick Johnston Traditional" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=prs24" title="PRS Custom24"><img style="width:517px;height:360px" src="small/prs24.jpg" alt="PRS Custom24t" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=prs22" title="PRS Custom22"><img style="width:517px;height:360px" src="small/prs222.jpg" alt="PRS Custom22" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=suhr" title="Suhr Classic Pro"><img style="width:517px;height:360px" src="small/suhr2.jpg" alt="Suhr Classic Pro" /></a>
			</td>
			<tr>';
			}else{
			echo "Please log in to access this content.";
			}
			?>
	</table>		

</body>

</html>