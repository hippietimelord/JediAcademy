<?php

$server = "localhost";
$user_name = "root";
$pass_word = "";
$dbname = "stddb";
$tblname = "admin";
$tblname2 = "student";

// Create connection
$conn = new mysqli($server, $user_name, $pass_word, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>