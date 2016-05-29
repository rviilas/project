<?php
function db_connect()
{
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$link_id = mysqli_connect($host, $user, $pass, $db);
	mysqli_query($link_id, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($link_id));
	return $link_id;
}
?>
