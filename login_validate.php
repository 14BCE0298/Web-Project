<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$UN = $_POST['UserId'];
$PW = $_POST['Password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Users WHERE Username='$UN' AND Password='$PW'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: http://localhost/Project/bank.html');//Redirecting to bank login and service page
    }
 else {
    header('Location: http://localhost/Project/do.html');//Redirecting to sign in page with error message
}
$conn->close();
?>
