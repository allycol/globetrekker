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

        <div class="bag-header">
          <h1>Your bag</h1>
          <a class="button" href="checkout.php">Proceed to checkout</a>
        </div>

        <div id="bag">

          <div class="bag-item">
            <div class="pic">
              <a href="product.php"><img src="http://placehold.it/300" /></a>
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
              <a class="button smaller remove" href="#">Remove</a>
            </div>
          </div>

          <div class="bag-item">
            <div class="pic">
              <a href="product.php"><img src="http://placehold.it/300" /></a>
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
              <a class="button smaller remove" href="#">Remove</a>
            </div>
          </div>

          <div class="return">
            <a href="product.php"><span class="ico ico-xs ico-chevron-left"></span>Continue shopping</a>
          </div>

          <div class="bag-footer">
            <div class="sub-total">Sub-total: &pound;269.99</div>
            <a class="button" href="checkout.php">Proceed to checkout</a>
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
