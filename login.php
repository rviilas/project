<?php
include("connect.php");
session_start();
define('LOGIN_TIMEOUT', 90*60); 
if (isset($_GET['logout'])) {
		logout();
		header('Location: http://enos.itcollege.ee/~rviilas/project/index.php?out');
	}
	
if((!isset($_POST['userId'])) && (!isset($_SESSION['UID']))){
logout();
echo '<a href="index.php?index">Please go to the login page</a>'; die();
}

	if(isset($_POST['userId'])){

		if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST['userId'])){
		echo
		'<div class="login - help">
		<p>Your username can contain only numbers and letters! Click<a href="index.php"> here</a> to try again.</p>
		</div>
	    <div>';
		exit();
		}elseif(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST['passwd'])){
		 echo
		'<div class="login - help">
		<p>Your password can contain only numbers and letters! Click<a href="index.php"> here</a> to try again.</p>
		</div>
	    <div>';
		exit();
		}
	}
if (isset($_POST['userId']) && isset($_POST['passwd'])){
	$userId = trim(htmlspecialchars($_POST['userId']));
	$_SESSION['UID'] = $userId;
}

function checkLogin(){

	
	if (isset($_SESSION['UID'])) {
		if(isset($_SESSION['user_nm']) && isset($_SESSION['ltime'])){
			
			if((time()-$_SESSION['ltime']) > LOGIN_TIMEOUT){
			logout();
			header('Location: index.php?exp');
			exit();
			}else{
			
			$_SESSION['user_nm']=$_SESSION['UID'];
		
			return true;
			}
		}elseif(db_auth_check($_SESSION['UID'])){;	
			$_SESSION['ltime'] = time();
			return true;	
	}

	}else
	return 1;
}

function logout(){
	$usr = null;
	if(isset($_SESSION['UID'])){
		$usr = $_SESSION['UID'];
	}
$dt = date("y-m-d H:i:s");
$link_id = db_connect();
$srv = $_SERVER['REMOTE_ADDR'];		
$sql_query = "INSERT INTO rviilas_ulog(uname,login_ok,last_login,login_p) VALUES ('$usr','OUT','$dt', '$srv')" ;
$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);
session_unset();
session_destroy();
}


function db_auth_check($user){
$link_id = db_connect();
$d = date("Y-m-d H:i:s" );
$ip=$_SERVER['REMOTE_ADDR'];
$password = SHA1($_POST['passwd']);

$sql_uname_query = "select count(*), max(uname) as UNAME, max(fname) FNAME, max(lname) as LNAME from rviilas_user where uname = '$user' and closed_date is null";
$sel_result4 = mysqli_query($link_id, $sql_uname_query) or die($sql_uname_query);
$sel_info4 = mysqli_fetch_array($sel_result4, MYSQLI_BOTH) or die($sql_uname_query);

$sql_pw_query = "select count(*), max(password) from rviilas_user where password = '$password' and uname = '$user'";
$sel_result5 = mysqli_query($link_id, $sql_pw_query);
$sel_info5 = mysqli_fetch_array($sel_result5, MYSQLI_NUM) or die($sql_pw_query);

if($sel_info4[0]==0){

	logout();
	header('Location: index.php?bad');
	exit();
}

if(($sel_info4[0]>0) && ($sel_info5[0]==0)){

	logout();
	header('Location: index.php?bad_pass');
	exit();
}

	if(($sel_info4[0]>0) && ($sel_info5[0]>0)){
		
$_SESSION['user_nm'] = trim($sel_info4["UNAME"]);
$_SESSION['first_nm'] = trim($sel_info4["FNAME"]);
$_SESSION['last_nm'] = trim($sel_info4["LNAME"]);
$srv = $_SERVER['REMOTE_ADDR'];
$dt = date("y-m-d H:i:s");
$sql_query = "INSERT INTO rviilas_ulog(uname,login_ok,last_login,login_p) VALUES ('$user','IN','$dt', '$srv')" ;
$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);

return true;
}else{
logout();
header('Location: index.php?bad');
exit();
}
return false;
}

if (checkLogin()!= true ) {
logout();
header('Location: index.php?bad');
exit();
}
?>
