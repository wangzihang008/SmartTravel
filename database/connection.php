<?php
$servername = "192.168.64.2";
$username = "Smart2-Travel0-Db18";
$password = "Smart2-Travel0-Db18";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
