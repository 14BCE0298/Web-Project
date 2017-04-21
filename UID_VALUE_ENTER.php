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

$sql = "INSERT INTO UID (id)
VALUES ('123412343333');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412344444');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412345555');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412346666');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412348888');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412349999');";
$sql .= "INSERT INTO UID (id)
VALUES ('123412347777');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
