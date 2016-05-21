<?php
function db_connect()
{
  $dbhost='localhost';
  $dbusername='test';
  $dbuserpass='t3st3r123';
  $dbname = 'test';
  $charset='utf-8';
  $link_id = mysqli_connect($dbhost, $dbusername, $dbuserpass, $dbname, $charset) or die("ei saa ühendust mootoriga- ".mysqli_error());
  mysqli_query($link_id, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($link_id));
  return $link_id;
}
?>
