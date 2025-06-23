<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sitejogo';

global $conn;

// Create connection
$conn = new PDO("mysql:dbname=".$dbname.";host=".$servername, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
?>
