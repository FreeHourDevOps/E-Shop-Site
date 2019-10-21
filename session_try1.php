<?php

 session_start();

 $_SESSION['data'] = array();
 $temparray = array('shubham','welcome');
array_push($_SESSION['data'],$temparray);

$temparray = array('abc','new welcome');
array_push($_SESSION['data'],$temparray);

$temparray = array('xyz','new data');
array_push($_SESSION['data'],$temparray);

?>

<a href="session_try2.php">

    Print Session data

</a>
