<?php include ("connect.php") ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
 <title>Rain's Login</title>
<link rel="stylesheet" type="text/css" href="stiil3.css" />
<script>
function validateForm() {
    var x = document.forms["register"]["fname"].value;
	var y = document.forms["register"]["lname"].value;
	var z = document.forms["register"]["userId"].value;
	var w = document.forms["register"]["passwd"].value;
    if ((x == null || x == "") || (y == null || y == "") || (z == null || z == "") || (w == null || w == "") ){
        alert("All regisration form fields are mandatory");
        return false;
    }
}
</script>
</head>

<body id="main_body">

<?php

	if (isset($_GET['check']) && isset($_POST['userId']) && isset($_POST['passwd']) && isset($_POST['fname']) && isset($_POST['lname'])){
		
		if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST['userId'])){
		echo
		'<div class="login - help">
		<p>Your username can contain only numbers and letters! Click<a href="register.php"> here</a> to try again.</p>
		</div>';
		exit();
		}elseif(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST['passwd'])){
		 echo
		'<div class="login - help">
		<p>Your password can contain only numbers and letters! Click<a href="register.php"> here</a> to try again.</p>
		</div>';
		exit();
		}elseif(!preg_match('/^[a-zA-Z]+$/', $_POST['fname'])){
		 echo
		'<div class="login - help">
		<p>Your first name can contain only letters! Click<a href="register.php"> here</a> to try again.</p>
		</div>';
		exit();
		}elseif(!preg_match('/^[a-zA-Z]+$/', $_POST['lname'])){
		 echo
		'<div class="login - help">
		<p>Your last name can contain only letters! Click<a href="register.php"> here</a> to try again.</p>
		</div>';
		exit();
		}
		
	
	$user =  trim(htmlspecialchars($_POST['userId']));
	$fname = trim(htmlspecialchars($_POST['fname']));
	$lname = trim(htmlspecialchars($_POST['lname']));
	$password = sha1(trim(htmlspecialchars($_POST['passwd'])));
	$ip = $_SERVER['REMOTE_ADDR'];
	$d = date("Y-m-d H:i:s" );
	$link_id = db_connect();
	$sql_query = 'select count(*), uname from rviilas_user where uname = \''.$user.'\'';

	$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);	
	$sel_info = mysqli_fetch_array($sql_result, MYSQLI_NUM);
	
		if (!$sel_info[0]>0) {
		$sql_query = "INSERT INTO rviilas_user(uname, password, fname, lname, open_date, closed_date, lst_ch_date, ip) VALUES ('$user','$password','$fname', '$lname', '$d', null, '$d', '$ip')" ;
		$sql_result = mysqli_query($link_id, $sql_query) or die($sql_query);
	
		echo
		'<div class="login - help">
		<p>Registration successful. Click<a href="index.php"> here</a> to log in.</p>
		</div>';
		
		}else{
			echo
			'<div class="login - help">
			<p>Username is taken. Please try<a href="register.php"> again.</a></p>
			</div>';
		}	
	}else{
	echo 
'<div class="regform">
<div class="form3">
<h3>Register to Rain Guitar Emporium</h3>

<form id="register" action="register.php?check" method="post">


	<p>First name - <input type="text" name="fname" placeholder="First name" minlength="2" maxlength="10"></p>
    <p>Last name  - <input type="text" name="lname" placeholder="Last name" minlength="2" maxlength="20"></p>
	<p>Username   - <input type="text" name="userId" placeholder="Username" minlength="4" maxlength="10"></p>
	<p>Password   - <input type="password" name="passwd" placeholder="Password" minlength="8" maxlength="16"></p>
	<p class="submit"><input type="submit" name="commit" value="Register" onclick="return validateForm();"></p>
</form>
  <div class="login - help">
	  <p>Back to <a href="index.php">home </a>page.</p>
    </div>
	</div>
</div>';
}
?>

</body>
</html>


