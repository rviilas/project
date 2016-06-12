
<body id="main_body">
<div id="content">

<?php

if(isset($_GET['check']) ){
     include("login.php");

	if (isset($_GET['check']) && isset($_SESSION['UID']) && isset($_POST['hinne'])){
		$usr =  $_SESSION['UID'];
		$hinne = trim(htmlspecialchars($_POST['hinne']));
		$d = date("Y-m-d H:i:s" );
		$link_id = db_connect();
	
$sql_query = "INSERT INTO rviilas_hinded(id,uname,grade,time) VALUES (null,'$usr','$hinne', '$d')" ;
$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);

		echo'<table id="tab">
		<h3>Tänan hindamast!</h3>
		</table>';
		exit();

}
}
?>

<?php
if(isset($_SESSION['UID'])){

$link_id = db_connect();
$sql_query = 'select count(*), uname from rviilas_hinded where uname = \''.$_SESSION['UID'].'\'';
$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);	
$sel_info = mysqli_fetch_array($sql_result, MYSQLI_NUM);
	
		if ($sel_info[0]>0) {
echo
'<table id="tab">
<h3>Olete juba oma hinde andnud</h3>
</table>';
}else{
echo 
			'<table id="tab">
		
			
			<h3>Palun anna sellele lehele 1-5 skaalal hinne</h3>
			<form id="hindamine" action="hinda.php?check" method="post">
			<p>Hinne <input type="number" name="hinne" min="1" max="5"></p>
			<p class="submit"><input type="submit" name="commit" value="Anna hinne"></p>
			</form>
			</table>';
}

}else{

	echo "Please log in to access this content.";
			}
	?>

	</body>	
</html>