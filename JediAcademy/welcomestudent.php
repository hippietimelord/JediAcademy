<?php
   include("confiq.php");
   session_start();
?>

<html>
<head>
<title>View Student Record</title>
<link rel="stylesheet" type="text/css" href="background.css">
<style>

table{
	
	width:100%; 
}

table, td, tr{
border:1px solid silver;
padding:10px;


}

tr,td{
	
	font-size:30px;
}

body{
	
	color:white;
	
}
</style> 

</head>
<body>
<center><h1><u>Welcome</u></h1></center> 
<?php	
$id = $_SESSION['id'];
$sql="SELECT id, name, programme, grade FROM student where id='$id'";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Programme</th><th>Grades</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {   
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td> <td> ".$row["programme"]."</td><td> ".$row["grade"]."</td></tr>";
    } 
    echo "</table>";
} else {
    echo "0 results";
}
?>


<p align="center"><a href="logout.php">Log Out</a></p>
</body>
</html>