<?php
session_start();
include 'mysqlconnection.php';
$conn = openconnection();
$username = $_GET['username'];
$pass = $_GET['pass'];
echo $username;
$query = "select * from user WHERE email='$username' and pass= '$pass'";
$response = $conn->query($query);

if ($response->num_rows > 0) {
    // output data of each row
    $row = $response->fetch_assoc();
    $_SESSION['loginstatus'] = 'in';
    $_SESSION['name'] = $row['uname'];
    echo "login Successful";
    
} else {
    echo "0 results";
}


header('location:index.php');
closeconnection($conn);

?>