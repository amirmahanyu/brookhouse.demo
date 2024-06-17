<?php
$servername = "localhost";
$username = "root";
$password = "password"; // If you have a password, replace it here
$dbname = "amir_db";

// Create connection
$conn = new mysqli("localhost", "root","","amir_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
