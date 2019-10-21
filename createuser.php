<?php
include 'mysqlconnection.php';

$conn = openconnection();
$name = $_GET['name'];
$pass = $_GET['pass'];
$gen = $_GET['gender'];
$email = $_GET['email'];
$phn = $_GET['phn'];


$sql =  "insert into USER VALUES ('$name','$pass','$gen','$email',$phn)";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
closeconnection($conn);

?>