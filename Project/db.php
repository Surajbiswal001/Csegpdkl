<?php
$host = "localhost";
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "school_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
