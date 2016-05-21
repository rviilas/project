
<body id="main_body">
	<table>
					
			<?php
			if(!isset($_SESSION['username'])){
			echo 
			'<tr>
			<td id="boxy">
			<a href="?mode=satch" title="Joe Satriani"><img style="width:450px;height:350px; margin-left:30px;" src="small/satch2.jpg" alt="Joe Satriani" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=nick" title="Nick Johnston"><img style="width:470px;height:320px;margin-left:20px;" src="small/nick2.jpg" alt="Nick Johnston" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=opeth" title="Mikael Akerfeldt"><img style="width:500px;height:350px;margin-left:7px" src="small/opeth2.jpg" alt="Mikael Akerfeldt" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=steven" title="Steven Wilson"><img style="width:320px;height:320px;margin-left:100px;" src="small/steven2.jpg" alt="Steven Wilson" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=ian" title="Ian Thornley"><img style="width:450px;height:300px;margin-left:28px;" src="small/ian2.jpg" alt="Ian Thornley" /></a>
			</td>
			<tr>
			</table>';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>