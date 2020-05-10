<?php
include 'connect.php';

$username = $_POST['username'];

$sql = "SELECT * FROM users WHERE username = 'Abdugani'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();

        echo $row['password'];


    }


?>
