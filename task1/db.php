<?php
$host = 'localhost';
$user = '2318978';
$pass = '1234'; 
$dbname = '2318978';    
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
