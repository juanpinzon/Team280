<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['uid'];


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user_info (first_name, last_name, email)
VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>