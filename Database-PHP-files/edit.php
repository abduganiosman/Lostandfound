<?php

include 'connect.php';

$name = $_POST["name"];
$description = $_POST["description"];
$date = $_POST["date"];
$location = $_POST["location"];
$id = $_POST["id"];

$sql = "UPDATE items SET name='$name', description='$description', date='$date', location='$location'
            WHERE id= '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>
