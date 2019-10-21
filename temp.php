<?php
session_start();
/*include 'mysqlconnection.php';
$conn = openconnection();
$query = 'select * from catagory';
$response = $conn->query($query);

if ($response->num_rows > 0) {
    // output data of each row
    while($row = $response->fetch_assoc()) {
        echo $row["name"];
    }
} else {
    echo "0 results";
}



closeconnection($conn);
*/

$_SESSION["try"] = "This is sesson string";
echo $_SESSION["try"];
?>

<a href="try2.php">
    Click Here
</a>