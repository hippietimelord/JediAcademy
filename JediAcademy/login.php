<?php
   include("confiq.php");
   session_start();
   //check if submitted only run
   if(isset($_POST['submit']))
	{
	   // Connect to server and select databse.
		mysql_connect("$server", "$user_name", "$pass_word")or die("cannot connect"); 
		mysql_select_db("$dbname")or die("cannot select DB");
	
		// username and password sent from form 
		$username= $_POST['username']; 
		$password= $_POST['password']; 
	
		// To protect MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$sql="SELECT * FROM $tblname WHERE username='$username' and password='$password'";
		$result=mysql_query($sql);
	
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
	
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1){
	
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['username']="";
		$_SESSION['password']=""; 
		
		header("location:welcome.php");
		echo "Welcome $username";
	
		}
		else {
		echo "Wrong Username or Password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="UTF-8">

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="background.css">
	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	
	<style>
		h1 {
			font-size: 65px;
			text-indent: 70px;
			color: yellow;
			font-family: 'Reem Kufi', sans-serif;
		}
		form {
			border-radius: 15px;
			width: 400px;
			margin: auto;
			text-align: center;
			font-family: 'Fjalla One', sans-serif;
			font-size: 20px;
			color: black;
			background-color: rgba(255,255,255,0.4);
		}
		.button {
			background-color: white;
			border: none;
			color: black;
			padding: 5px 12px;
			font-family: 'Reem Kufi', sans-serif;
			font-size: 15px;
			text-align: center;
			font-weight: bold;
			text-decoration: none;
			display: inline-block;
			cursor: pointer;
		}
		footer{
			padding: 1px 10px 1px 0px;
			background-color: rgba(255,255,255,0.4);
			position: fixed;
			clear: both;
			left: 0px;
			bottom: 0px;
			right: 0px;
		}
	</style>
</head>
<body>
	<header>
		<h1><img src="JA.png" alt="Logo" style="width: 120px;">&nbsp;Jedi Academy</h1>
	</header>
	
	<main>
		<form action="" method="post">
			<fieldset style="border: 0px;">
				Administration Log In<br><br>
				Username  :&nbsp;<input type = "text" name = "username"><br><br>
                Password  :&nbsp;<input type = "password" name = "password"><br>
				<a style="font-size: 11px;" href="#"><b>Forgot Password?</b></a><br>
                <input type = "submit" name = "submit" value = "Log In" class="button">&nbsp;&nbsp;&nbsp;
			</fieldset>
		</form>
	</main>
	
	<footer>
		<p style="font-family: 'Fjalla One', sans-serif;">&nbsp;&nbsp;&copy 2016 Jedi Academy. Created by CAFSA. All rights reserved.
		<a style="float: right;font-family: 'Fjalla One', sans-serif;color: white;" href="studentlogin.php">You can login as Student&nbsp;&nbsp;</a></p>
	</footer>
</body>
</html>
	