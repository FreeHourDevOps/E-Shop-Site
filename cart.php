<?php
include 'navigation_bar.php';

$totalprice = 0;
?>

<font size="4" face="ALTERNATE GOTHIC">
<h1>Shopping Cart</h1>
<br>
<br>
<div class="table100 ver1 m-b-10">
    <div class="table100-head">
        <table>
        <tr class="row100 head">
        <th class="cell100 column1" scope="col">Item</th>
        <th class="cell100 column2" scope="col">Price</th>
        <th class="cell100 column3" scope="col">Quantity</th>
        <th class="cell100 column4" scope="col">Total</th>
    </tr>
        </table>
    </div>
</div>
</font>
<div class="table100-body js-pscroll">
    <table>
        <tbody>
    <?php

    try {
        foreach ($_SESSION['cart'] as $product) {

                        ?>
                    <tr class="row100 body">
                        <td class="cell100 column1" scope="row" >
                                <a href="product_detail.php">
                                    <?php
                                    echo $product['name']."<br>";
                                    ?>
                                </a>
                            </>
                        </td>

                        <td class="cell100 column2">
                            <?php
                                echo $product['peiceos']."<br>";

                            ?>
                        </td>

                        <td class="cell100 column3">
                            <?php
                                echo $product['quantity'].'<br>';
                            ?>
                        </td>
                        <td class="cell100 column4">

                            <?php
                            $tempprice = $product['peiceos'] + $product['quantity'];
                            echo "$tempprice".'<br>';
                            $totalprice += $tempprice;
                            ?>
                    </tr>
                    <?php
            }

    }
    catch(Exception $e)
    {
        echo "item not found";
    }
    ?>
    <tr>
        <td class="quantity-span" colspan="3">Subtotal</td>
        <td class="price"><?php echo $totalprice;?></td>
    </tr>

    <tr>
        <td class="quantity-span" colspan="3">Delivery Charges</td>
        <td class="price"><?php echo $delivery_charges = 35 ;?></td>
    </tr>

    <tr class="totals">
        <td colspan="2"><button type="button" class="btn btn-primary">Update Cart</button></td>
        <td class="quantity-span" colspan="1">Total</td>
        <td class="price"><?php echo $delivery_charges + $totalprice ;?></td>
    </tr>

        </tbody>
    </table><br><br>
</div>

<div class="coupon" style="margin-left: 80%;">
    Have a coupon?
    <div class="input-group mb-3">

        <br>
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">🎁</span>
        </div>
        <input type="text" class="form-control border border-primary" placeholder="Coupan" aria-label="copan" aria-describedby="basic-addon1" style="width: 50px;" >
    </div>
    <button type="button" class="btn btn-warning " >Apply</button>
</div>
<a href="index.php" class="continue-shopping">Continue Shopping</a>
<br>
<a href="payment.php" class="checkout-button">Checkout</a>
</body
</html>
