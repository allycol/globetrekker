<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Product page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <h1>Your bag</h1>

        <div id="bag">

          <div class="bag-item">
            <div class="pic">
              <a href="#"><img src="http://placehold.it/190" /></a>
            </div>
            <div class="txt">
              <h2><a href="product.php">The North Face Men's McMurdo Parka 2</a></h2>
              <ul>
                <li>TNF Black - Small</li>
                <li>In stock</li>
                <li>Quantity: 1</li>
              </ul>
            </div>
            <div class="functions">
              <div class="price">&pound;269.99</div>
              <a class="remove" href="#"><span class="ico ico-chevron-right ico-xs"></span>Remove</a>
            </div>
          </div>

          <p class="return"><a href="product.php">Return to The North Face Men's McMurdo Parka 2 and continue shopping</a></p>
          <div class="pricebasket">Sub-total: &pound;269.99</div>
          <div style="clear:both;"></div>
          <div class="checkout"><a class="button" href="https://www.outdoorkit.co.uk/checkout.php">Proceed to checkout</a></div>

        </div>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
