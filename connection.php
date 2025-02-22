<?php
$host = "localhost";  // XAMPP default host
$user = "root";       // Default user in XAMPP
$pass = "";           // Default password is empty
$dbname = "photo_db"; // Make sure this matches your actual database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
