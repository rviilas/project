<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Rain's favorites</title>
<link rel="stylesheet" type="text/css" href="stiil3.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
	
		<div id="wrap">
			<?php		
		echo '<div style="float:right;margin-top:100px;">
				<form action="http://enos.itcollege.ee/~rviilas/project/index2.php?" method="get">
				<input type="hidden" name="logout">
				<input type="submit" value="Logout">
				</form>
		      </div>';
		echo '<h3 style="margin-top:100px;float:right;margin-right:70px;color:#FFCC00">Hello ';
		echo $_SESSION['first_nm'];
		echo ' ';
		echo $_SESSION['last_nm'];
		echo '!</h3> ';
		
		?>
		<h1>Guitar Emporium</h1>
		
		<ul id="menu">
			<li  style="float:left;"><a style="padding:75px;" href="?mode=home">Home </a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=artists">Artists </a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=guitars">Guitars</a></li>
			<li  style="float:left;"><a style="padding:75px;" href="?mode=amps">Amps</a></li>
		</ul>
		<div>