
<body id="main_body">
	<table>
	<?php
			if(!isset($_SESSION['username'])){
			echo 
			'<tr>
			<td id="boxy">
			<a href="?mode=jvm" title="Marshall JVM410H"><img style="width:515px;height:350px" src="small/JVM.jpg" alt="Marshall JVM410H" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=be100" title="Friedman BE-100"><img style="width:515px;height:350px" src="small/be100.jpg" alt="Friedman BE-100" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=yjm100" title="Marshall YJM-100"><img style="width:515px;height:250px" src="small/yjm-100.jpg" alt="Marshall YJM-100" /></a>
			</td>
			<td id="boxy">
			<a href="?mode=badcat" title="Badcat Lynx 50"><img style="width:500px;height:350px" src="small/badcat.jpg" alt="Badcat Lynx 50" /></a>
			</td>
			</tr>
			<tr>
			<td id="boxy">
			<a href="?mode=hedgehog" title="Suhr Hedgehog 50"><img style="width:400px;height:360px;margin-left:50px;" src="small/hedgehog.jpg" alt="Suhr Hedgehog 50" /></a>
			</td>
			<tr>
			</table>';
			}else{
			echo "Please log in to access this content.";
			}
			?>

</body>

</html>