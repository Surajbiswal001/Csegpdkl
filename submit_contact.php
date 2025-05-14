<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cs_department";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Sanitize and collect POST data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// Insert into table
$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank you! Your message has been sent.</h2>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
