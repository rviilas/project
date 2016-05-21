<?php
define('LOGIN_TIMEOUT', 30*60); 

if(!isset($_GET['userId']) && !isset($_SESSION['UID'])){
logout();
echo '<a href="index.php?index">Please go to the login page</a>'; die();
}

if (isset($_GET['userId'])){
	$userId = $_GET['userId'];
	$_SESSION['UID'] = $userId;
	header('Location: frames2.php');
}else{
	$userId = $_SESSION['UID'];
}
function checkLogin(){

	if (isset($_GET['logout'])) { //kui anti logout käsk, logime välja
		logout();
		header('Location: http://enos.itcollege.ee/~rviilas/index.php?out');
	}
	
	if (isset($_SESSION['UID'])) {
		if(isset($_SESSION['user_id']) && isset($_SESSION['ltime'])){
			if((time()-$_SESSION['ltime']) > LOGIN_TIMEOUT){
			logout();
			header('Location: index.php?exp');
			}else{
			return true;
			}	
		}elseif(db_auth_check($_SESSION['UID'])){;	
			//$_SESSION['userId'] = $user;
			$_SESSION['ltime'] = time();
			return true;
		
	}

	}else
	return 1;
}

function unsetSession(){
	$user = $_SESSION['user_nm'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$d = date("y-m-d H:i:s");
	while (list($k, $v) = each ($_SESSION)){
		unset($_SESSION[$k]);
	}
}
function logout(){
$link_id = db_connect();
$usr =  $_SESSION['UID'];
$dt = date("y-m-d H:i:s");
$srv = $_SERVER['REMOTE_ADDR'];
unsetSession();
$sql_query = "INSERT INTO DBA.USER_LOG(USRNM,LOGIN_OK,LAST_LOGIN,LOGIN_IP) VALUES ('$usr','OUT','$dt', '$srv')" ;
//if($link_id){echo 'live';}else{echo 'die';}
$sql_result = sasql_query($link_id, $sql_query) or die($sql_query);
//header('Location:http://arengrwa.test.ad4.seb.net/rwa_test/index.php');
//exit;
}


function db_auth_check($user){
$link_id = db_connect();
$d = date("Y-m-d H:i:s" );
$da = date("Y-m-d H:i" );
$ip=$_SERVER['REMOTE_ADDR'];


$sql_str = 'SELECT count(*), max(USR_ID) as USR_ID, max(USRNM) as USRNM, max(FRST_NM) as FRST_NM, max(LST_NM) as LST_NM, max(ROLL) as ROLL, max(CHG_DT) as CHG_DT FROM rwausr."USER" as tbl WHERE tbl.USRNM = \''.$user.'\' AND tbl.DLT = 0';

$sql_query = "INSERT INTO DBA.USER_LOG(USRNM,LOGIN_OK,LAST_LOGIN,LOGIN_IP) VALUES ('$user','IN','$d','$ip')" ;
$sql_result3 = sasql_query($link_id,$sql_query) or die($sql_query);

$sel_result = sasql_query( $link_id, $sql_str) or die('Query failed!');

$sel_info = sasql_fetch_array($sel_result);

	if ($sel_info[0]>0) {
$_SESSION['user_id'] = trim($sel_info["USR_ID"]);
$_SESSION['user_nm'] = trim($sel_info["USRNM"]);
$_SESSION['first_nm'] = trim($sel_info["FRST_NM"]);
$_SESSION['last_nm'] = trim($sel_info["LST_NM"]);
$_SESSION['role'] = trim($sel_info["ROLL"]);
$_SESSION['LST_LG'] = trim($sel_info["CHG_DT"]);
$sql_str4 = 'SELECT max(LAST_LOGIN) as LAST_LOGIN  FROM DBA."USER_LOG" as tbl WHERE tbl.USRNM = \''.$user.'\' AND tbl.LAST_LOGIN < \''.$da.'\'';
$sql_result4 = sasql_query($link_id,$sql_str4) or die($sql_str4);
$sel_info4 = sasql_fetch_array($sql_result4);
      if ($sel_info4[0]>0) $_SESSION['llog'] = trim($sel_info4["LAST_LOGIN"]);

return true;
}else{
logout();
header('Location: index.php?bad');
}
return false;
}

if (checkLogin()!= true ) {
echo 'checlogin failed';die();
logout();
header('Location: index.php?bad');
}
?>
