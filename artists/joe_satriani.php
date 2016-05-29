
<body id="satch_body">

		<h2>Joe Satriani</h2>
		<div id="content">
		<?php
			if(isset($_SESSION['UID'])){
			echo 
			'
		<img class="boxy" style="width:512px;height:288px;margin-left:200px;" class="pilt" src="artists/satch.jpg" alt="Joe Satriani"  />
		<p class="role">Instrumental guitarist - Virtuoso</p>
		<h3>Bio</h3>
		<p class="bio">
		Joseph "Joe" Satriani (born July 15, 1956) is an American instrumental rock guitarist and multi-instrumentalist. Early in his career, Satriani worked as a guitar instructor, with many of his former students achieving fame,
		such as Steve Vai, Larry LaLonde, Rick Hunolt, Kirk Hammett, Andy Timmons, Charlie Hunter, Kevin Cadogan, and Alex Skolnick; he then went on to have a successful solo music career.
		<br><br>He is a 15-time Grammy Award nominee and has sold over 10 million albums, making him the biggest-selling instrumental rock guitarist of all time.
		<br><br>In 1988, Satriani was recruited by Mick Jagger as lead guitarist for his first solo tour. Satriani briefly toured with Deep Purple as the lead guitarist, 
		joining shortly after the departure of Ritchie Blackmore in November 1993. He has worked with a range of guitarists during the G3 tour, which he founded in 1995. 
		<br><br>His G3 collaborators have included Vai, LaLonde, Timmons, Steve Lukather, John Petrucci, Eric Johnson,
		Yngwie Malmsteen, Brian May, Patrick Rondat, Paul Gilbert, Adrian Legg, Kenny Wayne Shepherd, Steve Morse and Robert Fripp.
		<br><br>Satriani has been the guitarist for the supergroup Chickenfoot since joining the band in 2008.
		
		<br><br>
		Satriani is considered a highly technical guitarist, and has been referred to as a top guitar virtuoso.
		Satriani has mastered many performance techniques on electric guitar, including legato, two-handed tapping and arpeggio tapping, 
		volume swells, harmonics and extreme whammy bar effects. During fast passages, Satriani favors a legato technique (achieved primarily through hammer-ons and pull-offs)
		that yields smooth and flowing runs. He is also adept at other speed-related techniques such as rapid alternate picking and sweep picking.
		Satriani was influenced by blues-rock guitar icons such as Jimi Hendrix, Brian May, Eric Clapton, Jimmy Page, Ritchie Blackmore and Jeff Beck,
		as well as jazz fusion guitarist Allan Holdsworth.
		</p>
		<p class="comment">
		Why he made the list:
		<br><br>
		I discovered Joe Satriani through an episode of the comedy cartoon American Dad
		where Steve and Snot where playing an airguitar version of Always With You Always With Me.
		That guitar sound and play just hit me and I was like "Wow, who is this guy and how have I never heard of him".
		So I found out what track it was on the internet and listened through all of Joes albums.
		He is just a phenomenal guitar player with amazing technique as mentioned in his bio but his
		music isnt good because he can play fast and do cool tricks but because he is such a master of the instrument.
		He is really concious of melody and phrasing, being really intelligent with how and when he puts one note after another
		which is really showcased in Always With You Always With Me because most that song is quite slow.
		<br><br>
		Joe actually gave a concert in Estonia in the fall of 2015 and I was so happy to attent. That was maybe the best concert I have
		ever been to. His new album which he played was excellent and he also performed all of his hits from the past. It was
		truly great so see such an awesome player live.
		<br><br>
		- Rain
		</p>
		</tr>
		</table>
		<h3>Songs to listen to</h3>
		<p class="bio">Always With You Always With Me<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/czHYYVyBqCc"  allowfullscreen></iframe>
		<p class="bio">Friends<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/IYgbaM0uCu4" allowfullscreen></iframe></p>
		<p class="bio">Unstoppable Momentum<br><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/5M4BGpdU3pY"></iframe></p>
	
		</div>
	</div>
	';
			}else{
			echo "Please log in to access this content.";
			}
			?>
</body>

</html>