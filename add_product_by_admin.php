<?php


if (isset($_POST['upload']))
{

$category = $_POST['category'];

$filename =  $_FILES['file']['name'];
$filetype =  $_FILES['file']['type'];
$filesize =  $_FILES['file']['size'];
$file_tem_loc =  $_FILES['file']['tmp_name'];
$store = "uploads/".$filename;
move_uploaded_file($file_tem_loc,$store);

$name = $_POST['pname'];
$sp = $_POST['sprice'];
$op = $_POST['oprice'];
$spec = $_POST['spec'];

include "mysqlconnection.php";

    $conn = openconnection();

if($category == '1') {

    $sql = "insert into electronics (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}
elseif ($category == '2')

{

    $sql = "insert into beauty (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}


elseif ($category == '3')

{

    $sql = "insert into men_cloth (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}


elseif ($category == '4')

{

    $sql = "insert into women_cloth (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}



elseif ($category == '5')

{

    $sql = "insert into kids (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}



elseif ($category == '6')

{

    $sql = "insert into furniture (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}


elseif ($category == '7')

{

    $sql = "insert into books (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}


elseif ($category == '8')

{

    $sql = "insert into special_product (name,price_original,price_onsite,other_data,image_path) VALUES('$name','$op','$sp','$spec','$store')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    closeconnection($conn);

}

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Upload IMage
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<?php
include "navigation_bar.php";
?>

<section class="container">
<br>
<form action="#" method="post" enctype="multipart/form-data">

<div class="form-row">
        <div class="form-group col-md-8">
            <input type="text"  name="pname" id="product_name" placeholder="Product Name" style="width: 700px;">
            <hr>
        </div>
    </div>
    <div class="form-row">

        <br>
        <div class="form-group col-md-3">

            <input type="number" min="0" class="input-group-text" name="sprice" id="sp" placeholder="Price On site">
        </div>

        <div class="form-group col-md-3">

            <input type="number" min="0" class="input-group-text" name="oprice" id="op" placeholder="Original Price">
        </div>

    </div>
    <hr>

    <textarea class="form-control" id="spec" name="spec" rows="3" placeholder="Detailed Specification"></textarea>



    <label class="mr-sm-2 " for="inlineFormCustomSelect">Category</label><br>
    <select class="custom-select mr-sm-2 col-md-3" name="category" id="category">
        <option value="1">Electronics</option>
        <option value="2">Health And Beauty</option>
        <option value="3">Men's Clothing</option>
        <option value="4">Women's Clothing</option>
        <option value="5">Baby and Kids</option>
        <option value="6">Home And Furniture</option>
        <option value="7">Sport, Books And More</option>
        <option value="8">Special Product</option>
    </select>
    <br>
    <hr>
    <p><input type="file" name="file"/></p>
    <br>

    <p><input type="submit" name="upload" value="Upload Image"/></p>

</form>
</section>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>