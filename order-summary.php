<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Order summary</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/checkout-header.php"); ?>

		<section class="content-page">

			<div class="frame">

        <div class="progress">
          <ul>
            <li>1. Billing address</li>
            <li>2. Delivery address</li>
            <li>3. Delivery options</li>
            <li>4. Payment</li>
            <li class="active">5. Order summary</li>
          </ul>
        </div>

        <h1>Order summary</h1>

        <div class="next-button">
          <a class="button" href="https://www.outdoorkit.co.uk/order_registration.php">Confirm Order</a>
        </div>

        <p>Please check your details and press the confirm order button. </p>

        <div class="confirm-addresses">

  				<div class="billing-address">
  					<h3>Billing Address</h3>
  					<p>Mr Ally COl<br>
  					2 SPringfield, Hook, RG278SF<br>0404390503</p>
  					<p><a href="#">Change billing address</a></p>
  				</div>

  				<div class="delivery-address">
  					<h3>Delivery Address</h3>
  					<p>Mr Ally COl<br>
  					2 SPringfield, Hook, RG278SF</p>
  					<p><a href="#">Change delivery address</a></p>
  				</div>

          <div class="delivery-options">
  					<h3>Delivery Options</h3>
  					<p>Delivery by Parcelforce<br>
              3rd September PM £3.95.</p>
  					<p><a href="#">Change delivery options</a></p>
  				</div>

		   </div>



  			<h2>Your Order</h2>

        <div class="summary-item-header">
  				<div class="summ-name">Product</div>
  				<div class="summ-color-size">Size/Colour</div>
  				<div class="summ-quantity">Quantity</div>
  				<div class="summ-price">Price</div>
  			</div>

        <div class="summary-item">
  				<div class="summ-name">Montane Men's Atomic DT Jacket<span class="availability">In Stock</span></div>
  				<div class="summ-color-size">Black - Large</div>
  				<div class="summ-quantity">1</div>
  				<div class="summ-price">&pound;134.99</div>
  			</div>

  			<div class="order-summary-totals">
  				<div class="label">Sub-total</div>
  				<div class="ammount">&pound;134.99</div>
  				<div class="label">Delivery charge </div>
  				<div class="ammount">&pound;3.95</div>
  				<div class="label">Delivery via Parcelforce</div>
  				<div class="ammount">1-2 Working Days</div>
  				<div class="label total-ammount">Total</div>
  				<div class="ammount total-ammount">&pound;138.94</div>
  			</div>

        <div class="confirm-order">
    			<div class="next-button">
    				<a class="button" href="https://www.outdoorkit.co.uk/order_registration.php">Confirm Order</a>
    			</div>
          <div class="change-order">
            <a class="button" href="http://www.outdoorkit.co.uk/basket.php">Change order</a>
          </div>
        </div>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
