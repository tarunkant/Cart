<?php
$servername = "localhost";
$username = "root";
$password = "1998";
$dbname = "cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login (username, password, email, fullname)
VALUES ('" .$_POST['username'] ."','" .$_POST['password'] ."','" .$_POST['email'] ."','" .$_POST['fullname'] ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



  