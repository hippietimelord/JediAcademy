<!DOCTYPE html>
<html>
<head>
<title>Update Student Data</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="background.css">
<style>
body{
	
	text-align:center;
	font-size:20px;
	color:white;
	
}

a{
	
	color:yellow;
	
}
</style>

</head>
<body>
<h2>Update Data</h2>
<?php
include("confiq.php");
$query = mysqli_query($conn,"SELECT * FROM student");
if (isset($_GET['submit'])) {
$id = $_GET['id'];
$name = $_GET['name'];
$programme = $_GET['programme'];
$subject = $_GET['subject'];
$ass_1 = $_GET['ass_1'];
$ass_2 = $_GET['ass_2'];
$mid_sem = $_GET['mid_sem'];
$finals = $_GET['finals'];
$total_mark = $_GET['total_mark'];
$grade = $_GET['grade'];
$remark = $_GET['remark'];

$query = mysqli_query($conn,"update student set name='$name', programme='$programme', subject='$subject', ass_1='$ass_1', ass_2='$ass_2', mid_sem='$mid_sem', finals='$finals', total_mark='$total_mark', grade='$grade', remark='$remark' where id='$id'");
}
$query = mysqli_query($conn,"select * from student");
while ($row = mysqli_fetch_assoc($query)) {
echo "<b><a href='update.php?update={$row['id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query($conn, "select *from student where id=$update");
while ($row1 = mysqli_fetch_assoc($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
echo "<br />";
echo "<label>" . "Programme:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='programme' value='{$row1['programme']}' />";
echo "<br />";
echo "<label>" . "Subject:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='subject' value='{$row1['subject']}' />";
echo "<br />";
echo "<label>" . "Assignment 1:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='ass_1' value='{$row1['ass_1']}' />";
echo "<br />";
echo "<label>" . "Assignment 2:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='ass_2' value='{$row1['ass_2']}' />";
echo "<br />";
echo "<label>" . "Mid Sem Marks:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='mid_sem' value='{$row1['mid_sem']}' />";
echo "<br />";
echo "<label>" . "Finals:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='finals' value='{$row1['finals']}' />";
echo "<br />";
echo "<label>" . "Total Marks:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='total_mark' value='{$row1['total_mark']}' />";
echo "<br />";
echo "<label>" . "Grade:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='grade' value='{$row1['grade']}' />";
echo "<br />";
echo "<label>" . "Remarks:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='remark' value='{$row1['remark']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";

}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<p style="text-align:right;"><a style= "font-size:180%;" href="logout.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "font-size:180%;" href="welcome.php">Home page</a></p>
</body>
</html>