
<body id="main_body">
	<div id="content">
			<?php
			if(isset($_SESSION['UID'])){
			echo 
			'<table id="tab">
			<tr>
			<td class="boxy">
			<a href="?mode=jvm" title="Marshall JVM410H"><img class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:6px;"  src="small/JVM.jpg" alt="Marshall JVM410H" /></a>
			</td>
			<td class="boxy">
			<a href="?mode=be100" title="Friedman BE-100"><img class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:6px;"  src="small/be100.jpg" alt="Friedman BE-100" /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=yjm100" title="Marshall YJM-100"><img class="image" onmouseover="flip()" style="width:435px;height:200px;margin-left:6px;"  src="small/yjm-100.jpg" alt="Marshall YJM-100" /></a>
			</td>
			<td class="boxy">
			<a href="?mode=badcat" title="Badcat Lynx 50"><img class="image" onmouseover="flip()" style="width:435px;height:275px;margin-left:6px;" src="small/badcat.jpg" alt="Badcat Lynx 50" /></a>
			</td>
			</tr>
			<tr>
			<td class="boxy">
			<a href="?mode=hedgehog" title="Suhr Hedgehog 50"><img class="image" onmouseover="flip()" style="width:335px;height:275px;margin-left:45px;"  src="small/hedgehog.jpg" alt="Suhr Hedgehog 50" /></a>
			</td>
			<tr>
			</table>';
			}else{
			echo "Please log in to access this content.";
			}
			?>
	</div>
		<div style="clear: both"></div>
	<div id="frame" >
	<a href="#"><img id="filler" src="#" width="100" height="100" alt="Vaata suuremalt!"/></a>
	<div id="title">ajutine</div>
	</div>
	</body>	
</body>

</html>