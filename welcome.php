<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$UN = $_POST['UserId'];
$PW = $_POST['Password'];
$ID = $_POST['UID'];
echo $ID;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM UID WHERE id='$ID'";
$result = $conn->query($sql);
echo $result->num_rows;
if ($result->num_rows > 0) {
    echo "Valid UID";
	$sql = "INSERT INTO Users (Username, Password)
VALUES ('$UN', '$PW')";

if ($conn->query($sql) === TRUE) {
    echo "New User created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
 else {
    echo "Invalid UID";
}
$conn->close();
?>