<?php
$host = 'localhost';  // Database host (usually localhost)
$db = 'ims_database'; // Database name
$user = 'root';       // Database username (default is 'root')
$pass = '';           // Database password (leave blank if no password)

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
