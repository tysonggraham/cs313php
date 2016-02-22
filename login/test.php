<?php
include("openShiftConnection.php");
	require "password.php";
	session_start();
	$db = loadDatabase(); 
	$status = $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);
	echo $status;
	if(isset($_POST['submit'])){
		$errMsg = '';
		//email and password sent from Form
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		if($email == '')
			$errMsg .= 'You must enter your email<br>';
		
		if($password == '')
			$errMsg .= 'You must enter your Password<br>';
		
		
		if($errMsg == ''){
			$records = $db->prepare('SELECT * FROM users WHERE email = :email');
			$records->bindParam(':email', $email);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if(count($results) > 0 && ($password == $results['password'])){
			//FIX THIS Uses a hash dealy so stop trying to compare with strings!
			// if(count($results) > 0 && password_verify(__toString($password), __toString($results['password']))){
				$_SESSION['email'] = $results['email'];
				header('location:dashboard.php');
				echo('echo');
				exit;
			}else{
				$errMsg .= 'email and Password are not found<br>';
			}
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page PHP Script</title>
	<style type="text/css">
	body
	{
		font-family:Arial, Helvetica, sans-serif;
		font-size:14px;
	}
	label
	{
		font-weight:bold;
		width:100px;
		font-size:14px;
	}
	.box
	{
		border:1px solid #006D9C;
		margin-left:10px;
		width:60%;
	}
	.submit{
		border:1px solid #006D9C;
		background-color:#006D9C;
		color:#FFFFFF;
		float:right;
		padding:2px;
	}
	</style>
</head>
<body bgcolor="#FFFFFF">
	
	<div align="center">
		<br /><a href='registration.php'>Registration</a>
		<div style="width:300px; border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:3px;"><b>Login</b></div>
			<div style="margin:30px">
				<form action="" method="post">
					<label>email  :</label><input type="text" name="email" class="box"/><br /><br />
					<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
					<input type="submit" name='submit' value="Submit" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
