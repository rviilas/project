<body id="main_body">
	<div id="content">
			<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<table id="tab">
			<tr>
			<td class="boxy">
			<a href="?mode=satch" title="Joe Satriani"><img class="image" style="width:435px;height:275px;margin-left:5px;" onmouseover="flip()" src="small/satch2.jpg"  alt="small/satch2_f.jpg"  /></a>
			</td>
			<td class="boxy">
			<a href="?mode=nick" title="Nick Johnston"><img class="image" style="width:435px;height:275px;margin-left:7px;" onmouseover="flip()" src="small/nick2.jpg"  alt="small/nick2_f.jpg"   /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=opeth" title="Mikael Akerfeldt"><img class="image" style="width:435px;height:275px;margin-left:6px;" onmouseover="flip()" src="small/opeth2.jpg" alt="small/opeth2_f.jpg"/></a>
			</td>
			<td class="boxy">
			<a href="?mode=steven" title="Steven Wilson"><img class="image" style="width:335px;height:275px;margin-left:65px;" onmouseover="flip()" src="small/steven2.jpg" alt="small/steven2_f.jpg" /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=ian" title="Ian Thornley"><img class="image" style="width:435px;height:275px;margin-left:6px;" onmouseover="flip()" src="small/ian2.jpg" alt="small/steven2_f.jpg" /></a>
			</td>
			<tr>
			</table>';
			}else{
			echo "Please log in to access this content.";
			}
			?>

	</body>
</html>
	