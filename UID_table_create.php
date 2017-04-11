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
$sql = "CREATE TABLE UID (
id VARCHAR(25) PRIMARY KEY)";

if ($conn->query($sql) === TRUE) {
    echo "Table UID created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>