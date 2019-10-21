<?php

session_start();

?>
<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/shpingcart.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="table/css/util.css">
    <link rel="stylesheet" type="text/css" href="table/css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">





</head>

<body>

<?php
error_reporting(0);
?>
<div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php"><h1><strong style="color: white">E-Shop</strong></h1></a>
        <div class="dropdown dropright">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Shop by Catagory
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="Eletronics.php">Electronics</a>
                <a class="dropdown-item" href="furniture.php">Home And Furniture</a>
                <a class="dropdown-item" href="helthandbeauty.php">Health & Beauty</a>
            </div>

        </div>


        <div class="input-group mb-3" style="margin: 15px 20px 35px 30px">
            <input type="text" class="form-control" style="padding:10px margin-left:20px;" placeholder="Search anything">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </div>
        <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"style="margin-right:20px;" >More</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">24x7 Help</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-right:20px;" href="new_cart.php">Cart</a>
                    </li>

                    <?php
                  if (isset( $_SESSION['loginstatus'])) {
                  // echo $_SESSION['loginstatus'];
                       if ($_SESSION['loginstatus'] == 'in')
                       {
                           ?>
                           <li class="nav-item">
                               <a class="nav-link" href="" style="margin-right:20px;">
                                   <?php
                                   echo $_SESSION['name'];
                                   ?>
                               </a>
                           </li>
                        <?php
                       }
                           
                   }
                       else {
                           ?>

                           <li class="nav-item">
                               <a class="nav-link" href="login.php" style="margin-right:20px;">Login</a>
                           </li>

                           <?php

                   }
                    ?>
                </ul>

            </nav>
        </div>
    </nav>
</div>

<hr>




<div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="wishlist_view.php">saved</a>
        </li>





        <div class="dropdown">

                    <a class="nav-link"  href="Eletronics.php">Electronics</a>


        </div>


        <div class="dropdown">

                    <a class="nav-link"  href="helthandbeauty.php">Helth & Beauty</a>


        </div>



        <div class="dropdown">

                    <a class="nav-link"  href="menscloth.php">Men's Clothing</a>

        </div>


        <div class="dropdown">

                    <a class="nav-link"  href="women_cloth.php">Women's Clothing</a>


        </div>


        <div class="dropdown">

                    <a class="nav-link"  href="kids.php">Baby & Kinds</a>

        </div>


        <div class="dropdown">

                    <a class="nav-link"  href="furniture.php">Home & Furniture</a>


        </div>


        <div class="dropdown">

                    <a class="nav-link"  href="books.php">Sport,Book & More</a>


        </div>

    </ul>

    <!-- Tab panes -->
</div>
