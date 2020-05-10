<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();

        if($password == $row['password']){
            echo "pass";
        }else{echo "fail";}

    }
    else {
    echo "fail";
}

?>
