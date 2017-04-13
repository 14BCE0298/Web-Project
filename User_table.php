<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Users (
Username VARCHAR(25) PRIMARY KEY, 
Password VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: Users" . $conn->error;
}

$conn->close();
?>
