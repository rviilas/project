<?php
include ("functions.php");
$register = 'http://enos.itcollege.ee/~rviilas/register.php';
$out_msg = 'You have been successfully logged out.';
$exp_msg = 'Login session has expired due to inactivity.';
$bad_msg = 'That username does not exists.';
$bad_pass = 'You entered an incorrect password';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
 <title>Rain's Login</title>
<link rel="stylesheet" type="text/css" href="stiil3.css" />
<script>
function validateForm() {
	var z = document.forms["logon"]["userId"].value;
	var w = document.forms["logon"]["passwd"].value;
    if ((z == null || z == "") || (w == null || w == "")){
        alert("Username and password are both mandatory");
        return false;
    }
}
</script>
</head>
<body id="main_body">

<?php
if (isset($_GET['bad'])){
echo '<div class="form">
<h3 style="float:top">'.$bad_msg.'</h3>
<a href="index.php" >Back to Login Page</a>
</div>';	
}elseif(isset($_GET['exp'])){
echo '<div class="form">
<h3 style="float:top">'.$exp_msg.'</h3>
<a href="index.php" >Back to Login Page</a>
</div>';
}elseif(isset($_GET['out'])){
echo '<div class="form">
<h3 style="float:top">'.$out_msg.'</h3>
<a href="index.php">Back to Login Page</a>
</div>';
}elseif(isset($_GET['bad_pass'])){
	echo '<div class="form">
<h3 style="float:top">'.$bad_pass.'</h3>
<a href="index.php">Back to Login Page</a>
</div>';
}else{
echo 
'<div class="form">
<div class="form2">
<h3>Login to Rain Guitar Emporium</h3>
<form id="logon" action="index2.php" method="post">
	<p><input type="text" placeholder="Username" name="userId"  minlength="4" maxlength="10" ></p>
    <p><input type="password"  placeholder="Password" name="passwd" minlength="8" maxlength="16" ></p>
	<p class="submit"><input type="submit" name="commit" value="Login" onclick="return validateForm();"></p>
</form>
  <div class="login-help">
      <p>Not a user ? Click<a href="register.php"> here </a>to register.</p>
    </div>
	</div>
</div>';
}
?>

</body>
</html>
