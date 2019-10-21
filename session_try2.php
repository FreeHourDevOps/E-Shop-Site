<?php
session_start();
if(isset($_SESSION['data']))
{

}
else{


    $_SESSION['data'] = array();

}
foreach ($_SESSION['data'] as $datum)
{
    echo "$datum[0]";
    echo "<br>";

    echo "$datum[1]";
    echo "<br>";
}