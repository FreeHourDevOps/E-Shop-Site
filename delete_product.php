<?php
session_start();



error_reporting(0);
$product = array( $_GET['id'],$_GET['name'],$_GET['priceop'],$_GET['priceos'],$_GET['img']);

$id = $_GET['item'];

$coun = 0;
sort($_SESSION['wishlist']);
foreach ($_SESSION['wishlist'] as $item)
{
    if($item['item_no'] == $id )
    {
        unset($_SESSION['wishlist'][$coun]);
        print_r($coun);
        echo "item Found";
        print_r( $_SESSION['wishlist'][$coun]);
        //print_r( $_SESSION['cart']  );

    }
    else
    {
        $coun += 1;
        echo "item  Not Found";

    }

}

header('Location:wishlist_view.php');