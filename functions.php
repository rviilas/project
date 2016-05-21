<?php

function display_reg_vorm(){	

	include_once("view/signup.php");
}
function display_artists(){

	include_once("artists.php");
}
function display_guitars(){

	include_once("guitars.php");
}
function display_amps(){
	
	include_once("amps.php");
}
function display_home(){
	include_once("pealeht.php");
}
function display_satch(){
	include_once("artists/joe_satriani.php");
}
function display_nick(){
	include_once("artists/nick_johnston.php");
}
function display_opeth(){
	include_once("artists/mikael_akerfeldt.php");
}
function display_steven(){
	include_once("artists/steven_wilson.php");
}
function display_ian(){
	include_once("artists/ian_thornley.php");
}
function display_suhr(){
	include_once("guitars/suhr.php");
}
function display_prs22(){
	include_once("guitars/prs22.php");
}
function display_prs24(){
	include_once("guitars/prs24.php");
}
function display_shecter(){
	include_once("guitars/shecter.php");
}
function display_ibanez(){
	include_once("guitars/ibanez.php");
}
function display_jvm(){
	include_once("amps/jvm.php");
}
function display_yjm100(){
	include_once("amps/yjm.php");
}
function display_be100(){
	include_once("amps/be100.php");
}
function display_badcat(){
	include_once("amps/badcat.php");
}
function display_hedgehog(){
	include_once("amps/hedgehog.php");
}


//sessiooni alustav funktsioon
function alusta_sessioon(){
	session_start();
}

//välja logimise funktsioon, mis suunab sessiooni lõpetamise funktsioonile
function logout(){
	global $myurl;
		lopeta_sessioon();
		header("Location: $myurl");
	}
	
function lopeta_sessioon(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
 	 setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
}

//kasutajaks registreerimise funktsioon
//võtab registreerimisväljade sisestused võrdleb pw1/pw2 ja kasutajanime pikkust
function register(){
 global $myurl;
 $username = $_POST['username'];
 $passwd1 = $_POST['passwd1'];
 $passwd2 = $_POST['passwd2'];
 
 if (empty($passwd1) || $passwd1 != $passwd2){
	header("Location: $myurl?mode=fail1");
	}
 else if(strlen($username) > 10 || empty($username)){
	header("Location: $myurl?mode=fail1");
	}
 else {
  echo "<p>Teie kasutajanimi on : '$username' </br>
		Teie salasõna on : '$passwd1' </p>";
		$_SESSION['passwd1']=$passwd1;
		$_SESSION['username']=$username;
 }

}

function autendi(){
	global $myurl;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		$userError = "";
		$pwError ="";
		$loginError = "";
}	
	if (empty($username)){
		$userError = "Kasutajanime sisestamine on kohustuslik<br><br>";
		echo $userError;
		header("Location: $myurl?mode=fail");
	}
	if (empty($passwd)){
		$pwError = "Salasõna sisestamine on kohustuslik<br><br>";
		echo $pwError;
		header("Location: $myurl?mode=fail");
	}
	
	if ((!empty($userError) ||!empty($pwError)) &&
		$username != $_SESSION['username'] && $passwd != $_SESSION['passwd1']){
		
		$loginError = "Sisestasite valed andmed.";
		echo $loginError;
		include_once("view/signup.php");
	}
	if ($_SESSION['username']==$username && $passwd==$_SESSION['passwd1']){
	
		header("Location: $myurl?mode=success");
 }
}

?>
