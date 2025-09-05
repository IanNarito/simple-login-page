<?php
$host = "localhost";
$user = "root";  // default XAMPP user
$pass = "";      // default password empty
$db   = "sample";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
