
<body id="main_body">
	<div id="content">
			<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<table id="tab">
			<tr>		
			<td class="boxy">
			<a href="?mode=ibanez" title="Ibanez JS2410 MCO"><img class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:5px;" src="small/ibanez3.jpg" alt="Ibanez JS2410 MCO" /></a>
			</td>
			<td class="boxy">
			<a href="?mode=shecter" title="Nick Johnston Traditional"><img  class="image" onmouseover="flip()" style="width:435px;height:210px;margin-left:5px;" src="small/shecter2.jpg" alt="Nick Johnston Traditional" /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=prs24" title="PRS Custom24"><img  class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:5px;" src="small/prs24.jpg" alt="PRS Custom24" /></a>
			</td>
			<td class="boxy">
			<a href="?mode=prs22" title="PRS Custom22"><img  class="image" onmouseover="flip() "style="width:435px;height:275px;margin-left:5px;" src="small/prs222.jpg" alt="PRS Custom22" /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=suhr" title="Suhr Classic Pro"><img  class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:5px;" src="small/suhr2.jpg" alt="Suhr Classic Pro" /></a>
			</td>
			<tr>
			</table>';
			}else{
			echo "Please log in to access this content.";
			}
			?>

	</body>	
</html>