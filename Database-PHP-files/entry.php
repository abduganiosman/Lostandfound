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


// $sql="INSERT INTO items (name, description, date, location, image, ctime, //username,extra) VALUES ('".$_POST["name"]."', '".$_POST["description"]."','"//.$_POST["date"]."', '".$_POST["location"]."', ? , , '".$_POST["ctime"]."', '"//.$_POST["username"]."', , '".$_POST["extra"]."')";


  $sql="INSERT INTO items (name, description, date, location, image, ctime, username,extra, id) VALUES ('".$_POST["name"]."','".$_POST["description"]."','".$_POST["date"]."','".$_POST["location"]."','".$_POST["image"]."','".$_POST["ctime"]."','".$_POST["username"]."','extra','".$_POST["id"]."')";


   if (mysqli_query($conn,$sql)) {
      echo "Values have been inserted successfully";
   }

      echo "testing";



?>
