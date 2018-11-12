<?php
   include("confiq.php");
?>

<html>
<head>
<title>View Student Record</title>
<style>

table, td, tr{
border:1px solid silver;
cellpadding:5px; 
cellspacing:0px;
}
</style>

</head>
<body>
<center><h1><u>Student Database</u></h1></center> 
<?php


$sql="SELECT id, name, programme, grade FROM student";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Programme</th><th>Grades</th><th>Delete</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {   
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td> <td> ".$row["programme"]."</td><td> ".$row["grade"]."</td><td></td></tr>";
    } 
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<p align="center"><a href="index.php">Go Back to Home</a></p>
</body>
</html>