
<?php

if (isset($_POST['upload']))
{

    $filename =  $_FILES['file']['name'];
    $filetype =  $_FILES['file']['type'];
    $filesize =  $_FILES['file']['size'];
    $file_tem_loc =  $_FILES['file']['tmp_name'];
    $store = "uploads/".$filename;
    print_r($file_tem_loc);
    move_uploaded_file($file_tem_loc,$store);
}

?>

