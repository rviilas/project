<?php 
session_start();
include("functions.php");
include("connect.php");

//session_unset();
//session_destroy();
//include('connect.php');
//include("login.php");

$myurl=$_SERVER['PHP_SELF'];

$keha=array(	"0"=>"satch_body",		 "1"=>"mikael_body",     "2"=>"nick_body", 
			    "3"=>"ian_body",  		 "4"=>"steven_body",     "5"=>"main_body",
				"6"=>"satch.gtr_body",	 "7"=>"nick.gtr_body",   "8"=>"opeth.gtr_body",
				"9"=>"opeth.gtr_body",   "10"=>"steven.gtr_body","11"=>"ian.gtr_body",
				"12"=>"satch.amp_body",  "13"=>"nick.amp_body",  "14"=>"opeth.gtr_body",
				"15"=>"steven.gtr_body", "16"=>"ian.gtr_body"
);
 
 
 $mode="main";				
		
if (isset($_GET['mode']) && $_GET['mode']!=""){
	$mode=$_GET['mode'];
	}				
	
	include_once("head.php");
	
	switch($mode){
	case "aut":
		autendi();
	break;
	case "register":
		register();
	break;
	case "success":
		echo "<p>Sisselogimine õnnestus!</p>";
		//include_once("view/artists.html");
	break;
	case "fail":
		echo "<p>Sisselogimine ebaõnnestus!</p>";
		display_reg_vorm();
	break;
	case "fail1":
		echo "<p>Registreerumine ebaõnnestus, kontrollige sisestatud andmeid!</p>";
		display_reg_vorm();
	break;
	case "logout":
		logout();
	break;
	case "signup":
		display_reg_vorm();
	break;
	case "artists":
		include_once("artists.php");
	break;
	case "varustus":
		display_varustus();
	break;
	case "guitars":
		include_once("guitars.php");
	break;
		case "amps":
		include_once("amps.php");
	break;
	case "satch":
		display_satch();
	break;
	case "nick":
		display_nick();
	break;
	case "opeth":
		display_opeth();
	break;
	case "steven":
		display_steven();
	break;
	case "ian":
		display_ian();
	break;
	case "suhr":
		display_suhr();
	break;
	case "shecter":
		display_shecter();
	break;
	case "ibanez":
		display_ibanez();
	break;
	case "prs24":
		display_prs24();
	break;
	case "prs22":
		display_prs22();
	break;
	case "jvm":
		display_jvm();
	break;
	case "yjm100":
		display_yjm100();
	break;
	case "be100":
		display_be100();
	break;
	case "badcat":
		display_badcat();
	break;
	case "hedgehog":
		display_hedgehog();
	break;
	case "home":
		display_home();
	break;

		default:
		include("pealeht.php");
	}
?>

