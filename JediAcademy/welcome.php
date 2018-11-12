<!DOCTYPE html>
<html>
<head>
<?php
   include("confiq.php");
?>
	<title>Admin Management</title>
	<meta charset="UTF-8">

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="background.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	
	<style>
		h1 {
			font-size: 60px;
			text-indent: 20px;
			color: yellow;
			font-family: 'Reem Kufi', sans-serif;
		}
		div#left {
			float: left;
			width: 10%;
			background-color: rgba(255,255,255,0.4);
		}
		div#right {
			float: right;
			width: 90%;
			background-color: rgba(255,255,255,0.4);
		}
	</style>
</head>
<body>
	<header>
		<h1><img src="JA.png" alt="Logo" style="width: 85px;">&nbsp;Jedi Academy</h1>	
	</header>
	
	<main>
		<div id="left">
			<nav>
			<a style="background-color: rgba(255,255,255,0.4);">Admin Management</a>
				<a href="add.php">Add User</a>
				<a href="update.php">Edit User</a>
				<a href="delete.php">Delete User</a>
			<a href="logout.php">Log Out</a>
			</nav>
		</div>
		
		<div id="right">
			<h1>Welcome to Jedi Academy </h1>
		</div>
	</main>
	
	<footer id="all">
		<p style="font-family: 'Fjalla One', sans-serif;">&nbsp;&nbsp;&copy 2016 Jedi Academy. Created by CAFSA. All rights reserved.
		<a style="float: right;font-family: 'Fjalla One', sans-serif;color: white;" href="studentlogin.php">You can login as Student&nbsp;&nbsp;</a></p>
	</footer>
</body>
</html>