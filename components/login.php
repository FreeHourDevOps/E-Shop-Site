<?php
$first = $_GET["firstname"];
$last = $_GET["lastname"];
$username = $_GET["username"];
$password= $_GET["password"];

$user = [
    'firstname' => $first,
    'lastname' => $last,
    'username' => $username,
    'password' => $password,
];
try
{
    $bulk = new MongoDB\Driver\BulkWrite;
    $id = $bulk->insert($user);
    $mng = new MongoDB\Driver\Manager();
    $res = $mng->executeBulkWrite('shop.login',$bulk); // namespace: db_name . collection_name
    echo 'user added';
}catch (MongoDB\Driver\Exception\Exception $e)
{
    die("Error Occurred!!!");
}