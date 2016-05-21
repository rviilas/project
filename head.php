<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Rain's favorites</title>
<link rel="stylesheet" type="text/css" href="stiil3.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>

			
<?php
	/*$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	
		   if(strpos($url, 'storm')  !== false) {
		echo "<body id=$keha[0]>";	
		
	} elseif (strpos($url, 'ember') !== false){
		echo "<body id=$keha[1]>";
	
	} elseif (strpos($url, 'qop') !== false){
		echo "<body id=$keha[2]>";
*/
?>

	
<div id="log">
		<form action="?mode=aut" method="POST">
		<table>
			<tr>
			  <td>Kasutaja</td>
			  <td><input style="color:black;" type="text" name="username"  value="<?php if(isset($SESSION['username'])){ echo ($SESSION['username']);}?>"/></td>
			</tr>
			<tr>
			  <td>Salasõna</td>
			  <td><input type="password" name="passwd" /></td>
			</tr>
			 <tr>
			 <?php if(isset($_SESSION['username'])):?>
			   <a style="color:#FF4500;" href="?mode=logout" >Logi välja!</a>
			 <?php else: ?>
				<td colspan="2"><input type="submit" value="Logi sisse!" /></td>
			<?php endif; ?>
			</tr>
			<tr>
	       	   <td colspan="2"><a id="registreeru" href="?mode=signup">Registreeru</a></td>
			</tr>
	
		</table>
		</form>
		</div>
		
		<div id="wrap">
		<h1>Guitar Emporium</h1>
		
		<ul id="menu">
			<li  style="float:left;"><a style="padding:75px;" href="?mode=home">Home </a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=artists">Artists </a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=guitars">Guitars</a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=amps">Amps</a></li>
		</ul>
		
		