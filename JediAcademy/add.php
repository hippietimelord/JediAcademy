<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<meta charset="UTF-8">
	
	<?php
   include("confiq.php");
	?>
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
		form {
			width: 100%;
			margin: auto;
			text-align: left;
			font-family: 'Fjalla One', sans-serif;
			font-size: 20px;
			color: black;
			background-color: rgba(255,255,255,0.4);
		}
		h3 {
			font-size: 35px;
			color: white;
			text-align: center;
			font-family: 'Fjalla One', sans-serif;
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
	</style>
	<!-- PHP CODES BEGIN -->
<!-- To enter data into database -->
<?php
if(isset($_POST['add']))
{

$password=$_POST["password"];
$name=$_POST["name"];
$programme=$_POST["programme"];
$subject=$_POST["subject"]; 
$sub_code=$_POST["sub_code"];
$ass_1=$_POST["ass_1"];
$ass_2=$_POST["ass_2"];
$mid_sem=$_POST["mid_sem"];
$finals=$_POST["finals"];
$total_mark=$_POST["total_mark"];
$grade=$_POST["grade"];
$remark=$_POST["remark"];
$sql="INSERT INTO student(password, name, programme, subject, sub_code, ass_1, ass_2, mid_sem, finals, total_mark, grade, remark)
VALUES('$password','$name','$programme','$subject','$sub_code','$ass_1','$ass_2','$mid_sem','$finals','$total_mark','$grade','$remark')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!-- PHP CODES END-->
	<script type="text/javascript">
		window.sumInputs = function() {
			var inputs = document.getElementsByTagName('input'),
				result = document.getElementById('total'),
				sum = 0;            
			
			for(var i=0; i<inputs.length; i++) {
				var ip = inputs[i];
			
				if (ip.name && ip.name.indexOf("total") < 0) {
					sum += parseInt(ip.value) || 0;
				}
			
			}
			
			if (sum > 100) {
				alert('more than 100');
			} else {
				result.value = sum;	
			}		
		}
	</script>		
</head>
<body>
	<header>
		<h1><img src="JA.png" alt="Logo" style="width: 85px;">&nbsp;Jedi Academy</h1>	
	</header>
	
	<main>
		<div id="left">
			<nav>
			<a style="background-color: rgba(255,255,255,0.4);">Admin Management</a>
				<a class="active" href="add.php">Add User</a>
				<a href="update.php">Edit User</a>
				<a href="delete.php">Delete User</a>
			<a href="logout.php">Log Out</a>
			</nav>
		</div>
		
		<div id="right">
		<h3>Student Data</h3>
			<form name="add" method="post" action="add.php">
				<table style="border:none" cellpadding="5px" cellspacing="0px" align="center" border="0">
				<tr>
					<td colspan="4"></td>
				</tr>
				<tr>
					<tr><td>Student's Name:</td><td><input type="text" name="name" size="30"></td></tr>
					<tr><td>Password (temporary password - pass1word ):</td><td><input type="text" name="password" size="30"></td></tr>
					<tr><td>Programme Name</td><td><input type="text" name="programme" size="30"></td></tr>
					<tr><td>Subject Name</td><td><input type="text" name="subject" size="30"></td></tr>
					<tr><td>Subject Code</td><td><input type="text" name="sub_code" size="30"></td></tr>
					<tr><td>Assignment 1 Marks</td><td><input type="number" name="ass_1" id="marks" min="0" max="10"></td></tr>
					<tr><td>Assignment 2 Marks</td><td><input type="number" name="ass_2" id="marks" min="0" max="20"></td></tr>
					<tr><td>Mid Semester Marks</td><td><input type="number" name="mid_sem" id="marks" min="0" max="20"></td></tr>
					<tr><td>Final Exam Marks</td><td><input type="number" name="finals" id="marks" min="0" max="50"></td></tr>
					<tr><td>Total Marks</td><td><input type="text" name="total" id="total">
					<a href="javascript:sumInputs()" class="button">Total</a></td></tr>
					<tr><td>Grades</td><td><input type="text" name="grade" size="30"></td></tr>
					<tr><td></td>
						<td>
							<ul style="font-size: 15px;">
								<li>Grade A: 80 - 100</li>
								<li>Grade B: 60 - 79</li>
								<li>Grade C: 50 - 59</li>
								<li>Grade D: 40 - 49</li>
								<li>Grade F: 0 - 39</li>
							</ul>
						</td></tr>
					<tr><td>Remarks</td><td><input type="text" name="remark" size="30"></td></tr>
				</tr>
				<tr>
					<td colspan="4" align="center">
					<br>
					<input type="submit" class="button" name="add" value="Add Record"></td>
				</tr>
				</table>
			</form>
		</div>
	</main>
	
	<footer id="all">
		<p style="font-family: 'Fjalla One', sans-serif;">&nbsp;&nbsp;&copy 2016 Jedi Academy. Created by CAFSA. All rights reserved.
		<a style="float: right;font-family: 'Fjalla One', sans-serif;color: white;" href="studentlogin.php">You can login as Student&nbsp;&nbsp;</a></p>
	</footer>
</body>
</html>
