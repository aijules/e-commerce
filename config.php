<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "nexora"; // Database name you created

// Create connection
$conn = new mysqli($host, $user, $pwd, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
