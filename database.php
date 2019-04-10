<?php


// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn= new mysqli("localhost", "root", "", "seproject");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{}
?>