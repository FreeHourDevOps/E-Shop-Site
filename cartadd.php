<?php
session_start();
error_reporting(0);



$id = $_GET["id"];
$name = $_GET["name"];
$priceop = $_GET["priceop"];
$priceos= $_GET["priceos"];
$img= $_GET["img"];
$quantity = $_GET["quantity"];
$image = $_GET['img'];



if (isset($_SESSION['cart']))
{

}
else
{
    $_SESSION['cart'] = array();
    $_SESSION['cart_count'] = 0;

}

$product = [
    'id' => $id,
    'name' => $name,
    'priceop' => $priceop,
    'priceos' => $priceos,
    'img' => $img,
    'quantity' => $quantity ,
    'image_path' => $image ,
    'item_no' => $_SESSION['cart_count'] ,

];


if(in_array($product,$_SESSION['cart']));
{
    array_push($_SESSION['cart'],$product);
    $_SESSION['cart_count'] += 1;
}

?>