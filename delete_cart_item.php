<?php
session_start();
//error_reporting(0);



$id = $_GET['item'];

$coun = 0;
sort($_SESSION['cart']);
foreach ($_SESSION['cart'] as $item)
{

    if($item['item_no'] == $id )
    {
        unset($_SESSION['cart'][$coun]);
        print_r($coun);
        echo "item Found";
        print_r( $_SESSION['cart'][$coun]);
        //print_r( $_SESSION['cart']  );

    }
    else
    {
        $coun += 1;
        echo "item  Not Found";

    }

}

header('Location:new_cart.php');