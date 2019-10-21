<?php
include 'navigation_bar.php';
error_reporting(0);
?>
<body class="goto-here">

<div class="hero-wrap hero-bread" style="background-image: url('images/kids_cloth.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-7 ftco-animate">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: greenyellow;" >Home</a></span>
                <h1 class="mb-0 bread" style="color: #7abaff;">Baby And Kids</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container" >
        <div class="row">


            <?php
            include 'mysqlconnection.php';
            $conn = openconnection();
            $query = 'select * from kids';
            $response = $conn->query($query);
            $catagory = 'kids';

            try
{
            if ($response->num_rows > 0) {
                // output data of each row
                while($row = $response->fetch_assoc()) {


                    ?>

                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product" >
                            <a href="product_detail.php?id=<?= $row['id'] ?>&catagory=<?= $catagory ?>"" class="img-prod"><img style="height: 300px ;width: 300px;" class="img-fluid" src="
                        <?php
                                echo $row["image_path"];
                                ?>
                        " alt="Colorlib Template">
                                <span class="status">


                            <?php
                            echo $row["price_original"];
                            ?>


                        </span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="product_detail.php?id=<?= $row['id'] ?>&catagory=<?= $catagory ?>">

                                        <?php
                                        echo $row["name"];
                                        ?>
                                    </a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">

                                        <?php
                                        echo $row["price_original"];
                                        ?>

                                    </span><span class="price-sale">

                                        <?php
                                        echo $row["price_onsite"];
                                        ?>
                                    </span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="" onclick="cart(this)" id="<?php echo $row['id'];?>" data-name="<?php echo $row['name'];?>"  data-op="<?php echo $row['price_original'];?>" data-os="<?php echo $row['price_onsite'];?>" data-img="<?php echo $row['image_path'];?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" onclick="like(this)" id="<?php echo $row['id'];?>" data-name="<?php echo $row['name'];?>"  data-op="<?php echo $row['price_original'];?>" data-os="<?php echo $row['price_onsite'];?>" data-img="<?php echo $row['image_path'];?>" class="heart d-flex justify-content-center align-items-center ">
                                    <span>
                                        <i class="ion-ios-heart">
                                        </i>
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php

                }
            } else {
                echo "No Product Available";
            }


    closeconnection($conn);
}
catch(Exception $e)
{
    closeconnection($conn);
}
            ?>



        </div>
</section>



<script>
    function like(product) {

        var productid = product.getAttribute("id");
        var productname = product.getAttribute("data-name");
        var productop = product.getAttribute("data-op");
        var productos = product.getAttribute("data-os");
        var productimg = product.getAttribute("data-img");

        var redirectiolink =   window.location.href;

        window.location = "wishlist.php?id=" + productid  + "&name=" + productname + " &priceop=" + productop + "&priceos=" + productos + "&img=" + productimg + "&redirect=" + redirectiolink ;



    }


    function cart(product) {

        var productid = product.getAttribute("id");
        var productname = product.getAttribute("data-name");
        var productop = product.getAttribute("data-op");
        var productos = product.getAttribute("data-os");
        var productimg = product.getAttribute("data-img");
        var quan = prompt("Enter Quantity:");
        var redirectiolink =   window.location.href;

        window.location = "cartadd.php?id=" + productid  + "&name=" + productname + " &priceop=" + productop + "&priceos=" + productos + "&img=" + productimg  + "&quantity=" + quan + "&redirect=" + redirectiolink ;



    }

</script>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>