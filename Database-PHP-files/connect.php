<?php
$servername = "localhost";
$username = "id12588396_root";
$password = "root12";
$db = "id12588396_lf";

// Create connection
 $conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
