<?php
include("login.php");
include("functions.php");

$myurl=$_SERVER['PHP_SELF'];
 
 
 $mode="main";				
		
if (isset($_GET['mode']) && $_GET['mode']!=""){
	$mode=$_GET['mode'];
	}				
	
	include_once("head.php");
	
	switch($mode){
	case "artists":
		include_once("artists.php");
	break;
	case "guitars":
		include_once("guitars.php");
	break;
		case "amps":
		include_once("amps.php");
	break;
		case "hinda":
		include_once("hinda.php");
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

