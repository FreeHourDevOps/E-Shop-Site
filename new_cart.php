

<?php

if (isset( $_POST['coupanclick'])) {
    include 'mysqlconnection.php';
    $conn = openconnection();
    $coupan = $_POST['coupon'];
    $query = "select * from coupan WHERE coupan ='$coupan' ";
    $response = $conn->query($query);
    if ($response->num_rows > 0) {
// output data of each row
        while ($row = $response->fetch_assoc()) {


            $discount = $row['discount'];
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<body class="goto-here">

<?php

    include 'navigation_bar.php';
$delivery_charges = 0;

?>

<div class="hero-wrap hero-bread" style="background-image: url('images/Cart.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
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
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>



                        <tbody>

                        <?php

                        try {

                        foreach ($_SESSION['cart'] as $product) {

                        ?>
                        <!-- Single Element-->
                        <tr class="text-center">
                            <td class="product-remove"><a href="delete_cart_item.php?item=<?php echo  $product['item_no']; ?>">  <span class="ion-ios-close"></span></a></td>
                            <td class="image-prod"><div class="img" style="background-image:url(

                                <?php
                                echo $product['image_path'];
                                ?>

                            );"></div></td>

                            <td class="product-name">
                                <h3>
                                    <?php
                                    echo $product['name'];
                                    ?>
                                </h3>
                                <p>Far far away, behind the word mountains, far from the countries</p>
                            </td>

                            <td class="price">
                                <?php
                                echo $product['priceos'];
                                ?></td>

                            <td class="quantity">
                                <div class="input-group mb-3">
                                    <input type="text" name="quantity" class="quantity form-control input-number" value="
                                    <?php
                                    echo $product['quantity'];
                                    ?>" min="1" max="100">
                                </div>
                            </td>

                            <td class="total">
                                <?php
                                $tempprice = $product['priceos'] * $product['quantity'] ;
                                echo "₹ $tempprice";
                                $totalprice += $tempprice;
                                ?></td>
                        </tr>

                        <!-- End Of Single Element -->


                            <?php
                        }
                        }

                        catch(Exception $e)
                        {
                            echo "item not found";
                        }
                        ?>


                        </tbody>


                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Coupon Code</h3>
                    <p>Enter your coupon code if you have one</p>
                    <form action="#" method="post" class="info">
                        <div class="form-group">
                            <label for="">Coupon code</label>
                            <input type="text" class="form-control text-left px-3" name="coupon" id="coupon" placeholder="">
                        </div>
                        <p><input type="submit" name="coupanclick" class="btn btn-primary py-3 px-4" value="Apply Coupon"></p>

                    </form>
                </div>
            </div>

            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>₹ <?php echo $totalprice;?></span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>₹ <?php


                            echo $delivery_charges;


                            ?></span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>₹ -
                            <?php


                            echo $discount;


                            ?></span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>₹ <?php echo $delivery_charges + $totalprice - $discount;?></span>
                    </p>
                </div>
                <p>
                    <a href="checkout.php?tot=<?php echo $totalprice ?>&del=<?php echo $delivery_charges ?>&dis=<?php echo $discount ?>" class="btn btn-primary py-3 px-4">Checkout</a>

                </p>
            </div>
        </div>
    </div>
</section>


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