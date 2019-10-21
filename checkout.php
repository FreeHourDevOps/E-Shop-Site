<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Out</title>
</head>
<body class="goto-here">
<?php
    include 'navigation_bar.php';
    $subtotal = $_GET["tot"];
    $discount = $_GET["dis"];
    $delivery = $_GET["del"];
    ?>



<div class="hero-wrap hero-bread" style="background-image: url('images/checkout.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-right">
                <p class="breadcrumbs"><span class="mr-2">
                <h1 class="mb-3 bread">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                <form action="#" class="billing-form">

                    <h3 class="mb-4 billing-heading">Billing Details</h3>

                    <div class="alert alert-primary" role="alert">
                        <p id="warning"></p>
                    </div>


                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="firstname">First Name</label>
                                <input type="text" id="firstname" class="form-control" placeholder="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="lastname">Last Name</label>
                                <input id="lastname" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">State / Country</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="country" class="form-control">
                                        <option value="">INDIA</option>
                                        <option value="">UNITED STATE</option>
                                        <option value="">JAPAN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="streetaddress">Street Address</label>
                                <input id="streetaddress" type="text" class="form-control" placeholder="House number and street name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="towncity" for="towncity">Town / City</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="postcodezip">Postcode / ZIP *</label>
                                <input id="postcodezip" type="number" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="phone">Phone</label>
                                <input id="phone" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="emailaddress">Email Address</label>
                                <input id="emailaddress" type="email" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>

                    </div>
                </form><!-- END -->
            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span>
                                    <?php
                                    echo $subtotal;
                                    ?>
                                </span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery</span>
                                <span>
                                    <?php
                                    echo $delivery;
                                    ?></span>
                            </p>
                            <p class="d-flex">
                                <span>Discount</span>
                                <span>
                                    <?php
                                    echo $discount;
                                    ?></span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>

                                <span>
                                    <?php
                                    echo $subtotal + $delivery - $discount;
                                    ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" checked="checked" name="optradio" class="mr-2"> CASH</label>
                                    </div>
                                </div>
                            </div>



                            <p><a id="delivery" onclick="sendtodelivery()" class="btn btn-primary py-3 px-4">Place an order</a></p>

                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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


<script>



    function sendtodelivery() {
        var first = document.getElementById("firstname").value;
        var second = document.getElementById("lastname").value;
        var con = document.getElementById("country").value;
        var town = document.getElementById("towncity").value;
        var zip = document.getElementById("postcodezip").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("emailaddress").value;

     if(first == "")
        {
            //alert("Welcome");
            document.getElementById("warning").innerHTML = "Enter Name";
        }
        else if (second == "")
        {
            document.getElementById("warning").innerHTML = "Enter Last Name";

        }
        else if (con == null)
        {
            document.getElementById("warning").innerHTML = "Select Contry";



        }
        else if (town == "")
        {
            document.getElementById("warning").innerHTML = "Enter Town";



        }
        else if (zip == "")
        {
            document.getElementById("warning").innerHTML = "Enter Zip Code";



        }
        else if (phone == "" || (phone.length == 10) == false )
        {
            document.getElementById("warning").innerHTML = "Enter Phone-No";



        }





        else if (email == "" || !(email.includes("@")) )
        {
            document.getElementById("warning").innerHTML = "Enter Email-ID";



        }

        else
        {

            var loc = "orderconfirm.php?first=" + first + "&last=" + second + "&country=" + con + "&town=" + town + "&zip=" + zip + "&phone=" + phone + "&email=" + email;
            window.location = loc;
        }
    }

    $(document).ready(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });

</script>

</body>
</html>