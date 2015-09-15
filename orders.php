<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<!--[if lte IE 9]> <html class="old-ie"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
  <link rel="manifest" href="images/icons/manifest.json">
  <title>My account</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <h1>My Orders</h1>

        <div class="history-summary-item-header">

          <div class="history-order-date">Date</div>
          <div class="history-order-number">Order number</div>
          <div class="history-item-name">Product</div>
          <div class="history-total">Price</div>
          <div class="history-status">Status</div>
  			</div>

        <div class="history-summary-item">
          <div class="history-order-date">15-09-2015</div>
          <div class="history-order-number">12353</div>
          <div class="history-item-name">1 x Samite Ceiling Light<br>( One size)</div>
          <div class="history-total">&pound;112.95</div>
          <div class="history-status">Processing</div>
        </div>

        <div class="history-summary-item">
          <div class="history-order-date">15-09-2015</div>
          <div class="history-order-number">12354</div>
          <div class="history-item-name">
            1 x Cross Wall Light (One size)<br>
            1 x Cross Table Lamp (One size)
          </div>
          <div class="history-total">&pound;140.00</div>
          <div class="history-status">Processing</div>
        </div>



			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
