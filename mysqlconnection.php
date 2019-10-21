<?php
function openconnection(){
    DEFINE('dbuser','customer');
    DEFINE('pass','');
    DEFINE('host','localhost');
    DEFINE('name','shop');

    $conn = new mysqli(host,dbuser,pass,name) or die("Connect failed");
    return $conn;
}


function closeconnection($conn)
{
    $conn -> close();
}

?>