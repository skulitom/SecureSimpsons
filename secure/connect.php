<?php
include_once('sessionTimeout.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simpsons";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>