<?php
$host = 'sftp://mi-linux.wlv.ac.ukt';
$user = '2318978';
$pass = '9863225676Al@';
$dbname = 'cricket_players';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>