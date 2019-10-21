<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<body class="goto-here">

<?php
include 'navigation_bar.php';
?>

<div class="hero-wrap hero-bread" style="background-image: url('images/wishlist.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-12 ftco-animate">
                <p class="breadcrumbs"><span class="mr-2"> <span style="color: black;">Wishlist The Product</span></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product name</th>
                            <th>Original Price</th>
                            <th>Onsite Price</th>
                        </tr>
                        </thead>



                        <tbody>

                        <?php
                            foreach ($_SESSION['wishlist'] as $item) {


                                    ?>

                                    <!-- Single Element-->
                                    <tr class="text-center">
                                        <td class="product-remove">
                                            <a href="delete_product.php?item=<?php echo  $item['item_no']; ?>"><span class="ion-ios-close"></span></a></td>

                                        <td class="image-prod"><div class="img" style="background-image:url(
                                            <?php

                                            echo $item['img'];;
                                            ?>
                                                );"></div></td>

                                        <td class="product-name">
                                            <h3>
                                                <?php
                                                echo $item['name'];
                                                ?>
                                            </h3>
                                        </td>

                                        <td class="price">
                                            <?php
                                          echo  $item['priceos'];
                                            ?></td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity" class="quantity form-control input-number" value="
                                    <?php
                                                echo $item['priceop'];
                                                ?>">
                                            </div>
                                        </td>

                                    </tr>

                                    <!-- End Of Single Element -->


                                    <?php


                        }

                        ?>


                        </tbody>


                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<script>

    function deleteitem(product) {

        var productid = product.getAttribute("id");
        var productname = product.getAttribute("data-name");
        var productop = product.getAttribute("data-op");
        var productos = product.getAttribute("data-os");
        var productimg = product.getAttribute("data-img");

        var redirectiolink =   window.location.href;

        window.location = "delete_product.php?id=" + productid  + "&name=" + productname + " &priceop=" + productop + "&priceos=" + productos + "&img=" + productimg + "&redirect=" + redirectiolink ;

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