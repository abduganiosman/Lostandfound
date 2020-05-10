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
echo "Connected successfully";


 $sql="INSERT INTO users (username, password, email, name) VALUES ('".$_POST["username"]."', '".$_POST["password"]."','".$_POST["email"]."', '".$_POST["name"]."')";


   if (mysqli_query($conn,$sql)) {
      echo "Values have been inserted successfully";
   }

      echo "testing";



?>
