
<?php

$id  = $_GET['id'];
$catagory  = $_GET['catagory'];


//echo $id,$catagory;
include 'navigation_bar.php';

?>




<?php
include 'mysqlconnection.php';
$conn = openconnection();
$query = "select * from $catagory WHERE id='$id'";
$response = $conn->query($query);
if ($response->num_rows > 0) {
    // output data of each row
   while ($row = $response->fetch_assoc()) {


?>











       <section class="ftco-section">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 mb-5 ftco-animate">
                       <a href="<?php echo $row['image_path'] ?>" class="image-popup"><img src="<?php echo $row['image_path'] ?>" class="img-fluid" alt="Colorlib Template"></a>
                   </div>
                   <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                       <h3><?php echo $row['name'] ?> </h3>
                       <p class="price"><span>$<?php echo $row['price_onsite'] ?></span></p>
                       <p>

                           <?php echo $row['other_data'] ?>


                       </p>
                       <div class="row mt-4">

                           <div class="w-100"></div>
                           <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                               <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                               <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                           </div>
                           <div class="w-100"></div>


<p>                          <a href="" onclick="cart(this)" id="<?php echo $row['id'];?>" data-name="<?php echo $row['name'];?>"  data-op="<?php echo $row['price_original'];?>" data-os="<?php echo $row['price_onsite'];?>" data-img="<?php echo $row['image_path'];?>" class="btn btn-black py-3 px-5">Add to Cart</a></p>
                           <p><a href="" onclick="like(this)" id="<?php echo $row['id'];?>" data-name="<?php echo $row['name'];?>"  data-op="<?php echo $row['price_original'];?>" data-os="<?php echo $row['price_onsite'];?>" data-img="<?php echo $row['image_path'];?>" class="btn btn-black py-3 px-5">Add to Wishlist</a></p>
                   </div>
               </div>
           </div>
       </section>



       <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
           <div class="container py-4">
               <div class="row d-flex justify-content-center py-5">
                   <div class="col-md-6">
                       <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                       <span>Get e-mail updates about our latest shops and special offers</span>
                   </div>
                   <div class="col-md-6 d-flex align-items-center">
                       <form action="#" class="subscribe-form">
                           <div class="form-group d-flex">
                               <input type="text" class="form-control" placeholder="Enter email address">
                               <input type="submit" value="Subscribe" class="submit px-3">
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section>
       <footer class="ftco-footer ftco-section">
           <div class="container">
               <div class="row">
                   <div class="mouse">
                       <a href="#" class="mouse-icon">
                           <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                       </a>
                   </div>
               </div>
               <div class="row mb-5">
                   <div class="col-md">
                       <div class="ftco-footer-widget mb-4">
                           <h2 class="ftco-heading-2">Vegefoods</h2>
                           <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                           <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                               <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                               <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                               <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md">
                       <div class="ftco-footer-widget mb-4 ml-md-5">
                           <h2 class="ftco-heading-2">Menu</h2>
                           <ul class="list-unstyled">
                               <li><a href="#" class="py-2 d-block">Shop</a></li>
                               <li><a href="#" class="py-2 d-block">About</a></li>
                               <li><a href="#" class="py-2 d-block">Journal</a></li>
                               <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="ftco-footer-widget mb-4">
                           <h2 class="ftco-heading-2">Help</h2>
                           <div class="d-flex">
                               <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                   <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                   <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                   <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                   <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                               </ul>
                               <ul class="list-unstyled">
                                   <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                   <li><a href="#" class="py-2 d-block">Contact</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-md">
                       <div class="ftco-footer-widget mb-4">
                           <h2 class="ftco-heading-2">Have a Questions?</h2>
                           <div class="block-23 mb-3">
                               <ul>
                                   <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                   <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                   <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12 text-center">


                   </div>
               </div>
           </div>
       </footer>



       <!-- loader -->
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



       <script>
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










        <?php

    }
}



?>

</body>
</html>