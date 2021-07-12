<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";
$fname = $_POST['firstname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact_info (name, email, message)
VALUES ('$fname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: http://localhost/contact/contactus.html');
$conn->close();
?>