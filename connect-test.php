<?php
$servername   = "127.0.0.1";
$database = "php-api";
$username = "php-api";
$password = "php-api";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>