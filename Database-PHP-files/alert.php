<?php

include 'connect.php';

$name = $_POST["name"];

$sql = "SELECT * FROM items WHERE name = '$name'";
$result = $conn->query($sql);

if ($result->num_rows >0) {

 while($row[] = $result->fetch_assoc()) {
 $tem = $row;
 $json = json_encode($tem);
 }

}
else {
 echo "No Results Found.";
}
echo $json;
$conn->close();
?>
