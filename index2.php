<?php
//For authentication with OpenID you need to send two parameters to try_auth.php file
//that will send you to openID login page. If authentication successful user will be redirected
//to our signonUrl where a database check happens to see if user exists in our system. OpenID will monitor
//the success of this check and if user exits in endsystem they will be direct inside the system (returnUrl)
$register = 'http://enos.itcollege.ee/~rviilas/register.php';
$home = 'mainpa';
$out_msg = 'You have been successfully logged out.';
$exp_msg = 'Login session has expired due to inactivity.';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>RWA&Disclosure Delivery Login Page</title>
 <link rel="stylesheet" href="styles_index.css" type="text/css"> 
 <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script language="JavaScript">
    // Kui oleme freimis sees, kolime koige pealmiseks
          if(top.location != document.location) {
                  top.location = document.location;
          }
	
	$(document).ready(function(){
        	$('#statOpenId').attr('src', 'https://identity.ad4.seb.net/provider/logout.do');
	});
	
	var url = '';
	var prod = 'https://rwa.infra3.ad4.seb.net/';
	var dev = 'http://arengrwa.test.ad4.seb.net/';
	function changeUrl(btn){
		if(btn == 'pr'){
			$('#mainForm').attr('action', prod+'openid/try_auth.php');
			$('#redir').attr('value', prod+'rwa_live/frames2.php?');
			$('#signon').attr('value', dev+'rwa_live/frames2.php?');
		}else{
			$('#mainForm').attr('action', dev+'openid/try_auth.php');
			$('#redir').attr('value', dev+'rwa_test/frames2.php?')
			$('#signon').attr('value', dev+'rwa_test/frames2.php?');
		}
	}
	
</script>

</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
?>
<iframe src="https://identity.ad4.seb.net/provider/home.jsp" id="statOpenId"></iframe>
<div class="headerTop"></div>
<div id="container">
	<div id="header">
		<div id="header-logo"></div>
	</div>
	<div id="header-welcome">
	<span class="signin-custom-frame-label">Sign in to RWA&Disclosure and Delivery</span>
	</div>

	<div id="customMenuId" class="signin-custom-menu-bar-position"> </div>
	<div id="brown-box">
<?php if(!isset($_GET['bad']) && !isset($_GET['exp']) && !isset($_GET['out'])){
	echo'	
	<div id="signin-content">
		<div id="prod_wrap">		
			<button id="pr_btn" class="button_dev button" data-status="0">
        			Production
			</button>
		
		<div id="dev_wrap">		
			<button id="dv_btn" class="button_dev button" data-status="0" >
				Development
			</button>
 		</div>
	</div>
	<div id="line"></div>
	';
}
?>
	<script>
        
	$('#pr_btn').on('click', function(){
		chCol('pr');
		checkClicked('pr');
		changeUrl('pr');
	});
	$('#dv_btn').on('click', function(){
		chCol('dv');
		checkClicked('dv');
		changeUrl('dv');
	})
	function chCol(btn){
		if($('#'+btn+'_btn').attr('data-status') == 0){
			$('#'+btn+'_btn').css('color', '#33cc33');
			$('#'+btn+'_btn').attr('data-status', 1);
		}else{	
			$('#'+btn+'_btn').css('color', 'white');
			$('#'+btn+'_btn').attr('data-status', 0);
		}
	}
	checkClicked();
	function checkClicked(btn){
		$('.button').each(function(index, value){
			if($(this).attr('id') != btn+'_btn'){	
				if($('#'+btn+'_btn').attr('data-status') == $('#'+$(this).attr('id')).attr('data-status')){
					$(this).click();
				}
			}
		});
	}  
	</script>

<?php
if (isset($_GET['bad'])){
echo '<div id="out_wrap">
<h2 style="float:top">'.$bad_msg.'</h2>
<form action='.$sign.' method="post">
<input id="lgn_pg_btn" class="button3" type="submit" value="Login Page"></form>
</div>';	
}elseif(isset($_GET['exp'])){
echo '<div id="out_wrap">
<h2 style="float:top">'.$exp_msg.'</h2>
<form action='.$sign.' method="post">
<input id="lgn_pg_btn" class="button3" type="submit" value="Login Page"></form>
</div>';
}elseif(isset($_GET['out'])){
echo'<div id="out_wrap">
<h2 style="float:top">'.$out_msg.'</h2>
<form action='.$sign.' method="post">
<input id="lgn_pg_btn" class="button3" type="submit" value="Login Page"></form>
</div>';
}else{
echo '
<div id="formdiv" style="float:right">
<form id="mainForm"  action="" method="post">
	<input id="redir" type="hidden" name="redirectTo" value="">
	<input id="signon" type="hidden" name="signonUrl" value="">
	<input class="button2" type="submit" value="Sign In" >
</form>
</div>';
}
?>
</div>
</div>
</div>
</body>
</html>
