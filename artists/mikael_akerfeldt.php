﻿
<body id="mikael_body">

		<h2>Mikael Akerfeldt</h2>
		<div id="content">
	<?php
			if(isset($_SESSION['UID'])){
			echo 
			'
		<img class="boxy" style="width:768px;height:432px;margin-left:100px;" class="pilt" src="artists/opeth3.jpg" alt="Mikael Akerfeldt"  />
		<p class="role">Vocalist - Guitarist</p>
		<h3>Bio</h3>
		<p class="bio">
		Lars Mikael Åkerfeldt (born 17 April 1974) is a Swedish musician, prominently known as the lead vocalist, guitarist, and primary songwriter of progressive death 
		metal band Opeth, as well as being the former vocalist of death metal supergroup Bloodbath. He was also guitarist for the "one-off" band Steel, and is part 
		of the collaboration Storm Corrosion with Steven Wilson.	<br>	<br>
		Åkerfeldt is known for his progressive rock-influenced songwriting style and his frequent 
		use of both clean baritone and growled vocals. Åkerfeldt was ranked #42 out of 100 Greatest Heavy Metal Guitarists of All Time by Guitar
		World along with Peter Lindgren, and #11 among "The Top 25 Modern Metal Guitarists" on MetalSucks.
		<br>
		Åkerfeldt is known to be friends with Steven Wilson, the frontman of one of his favorite bands, Porcupine Tree.
		</p>
		<p class="comment">
		Why he made the list:
		<br><br>
		After discovering Porcupine Tree, I was reading up on their frontman Steven Wilson and saw that he
		had produced a few albums of a swedish metal band called Opeth.<br>
		I looked them up and started listening. At first I only liked a few of their newer songs which were 
		less heavy. But I really grew into liking their entire catalogue. Their music took time to digest
		and appreciate. Their music is great for some of the same reasons that I like Porcupine Tree so much.
		They have some really tasteful playing when it comes to the drums and guitar getting a lot of interesting blues
		and jazz influences.<br>
		Now Opeth is one of my favorite bands and their frontman Mikael Akerfeldt one of my favorite guitarists.
		<br><br>
		- Rain
		</p>
		</tr>
		</table>
		<h3>Songs to listen to</h3>
		<p class="bio">Burden<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/oF68P5N1RJM" allowfullscreen></iframe></p>
		<p class="bio">To Bid You Farewells<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/qxu1bku4wN0" allowfullscreen></iframe></p>
		<p class="bio">Windowpane<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/3m-ej--Z8Os" allowfullscreen></iframe></p>
		</div>
	</div>
	';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>