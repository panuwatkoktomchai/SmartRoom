<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "smartRoom";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> <script>console.log("database connected");</script><?php
?>
