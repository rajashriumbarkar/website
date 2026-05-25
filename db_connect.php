<?php
// Database connection settings
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "product";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connections
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
