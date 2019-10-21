<?php
session_start();
error_reporting(0);



$id = $_GET["id"];
$name = $_GET["name"];
$priceop = $_GET["priceop"];
$priceos= $_GET["priceos"];
$img= $_GET["img"];
$redirect = $_GET['redirect'];





if (isset($_SESSION['wishlist']))
{

}
else
{
    $_SESSION['wishlist'] = array();
    $_SESSION['wishlist_count'] = 0;

}

$product = [
    'id' => $id,
    'name' => $name,
    'priceop' => $priceop,
    'priceos' => $priceos,
    'img' => $img,
    'item_no' => $_SESSION['wishlist_count'] ,

];

print_r($product);

if(in_array($product,$_SESSION['wishlist']));
{
    array_push($_SESSION['wishlist'],$product);
    $_SESSION['wishlist_count'] += 1;
    echo "Item Added";

    print_r($_SESSION['wishlist']);
}

header("Location:$redirect");

?>

