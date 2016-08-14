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
  <title>Billing address</title>
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
            <li class="active"><em>1</em><span>Billing address</span></li>
            <li class="active"><em>2</em><span>Delivery address</span></li>
            <li class="active"><em>3</em><span>Delivery options</span></li>
            <li class="active"><em>4</em><span>Order summary</span></li>
            <li class="active"><em>5</em></i><span>Payment</span></li>
          </ul>
        </div>

      <h1>Payment</h1>

      <div class="checkout">
        <iframe width="100%" height="20" scrolling="yes" frameborder="0" src="https://testcheckout.sagepay.com/gateway/service/cardselection?vpstxid={5561E8F5-18F9-D3B7-3A7C-62027193A0D3}"></iframe>
      </div>

      <div class="checkout-help">

        <h2 class="mini-bag-title">Your basket</h2>

        <div class="mini-bag-item">
          <div class="pic">
            <img src="images/SKU_182620-black_main.jpg">
          </div>
          <div class="txt">
            <h3>The North Face Men's McMurdo Parka 2</h3>
            <ul>
              <li>TNF Black - Small</li>
              <li>In stock</li>
              <li>Quantity: 1</li>
            </ul>
            <div class="price">&pound;269.99</div>
          </div>
        </div>

        <div class="mini-bag-item">
          <div class="pic">
            <img src="images/SKU_252567-black-pumpkin_main.jpg">
          </div>
          <div class="txt">
            <h3>The North Face Men's McMurdo Parka 2</h3>
            <ul>
              <li>TNF Black - Small</li>
              <li>In stock</li>
              <li>Quantity: 1</li>
            </ul>
            <div class="price">&pound;269.99</div>
          </div>
        </div>

        <div class="sub-total">Sub-total: £391.99</div>

        <div class="security-logo">
          <!-- <img src="http://placehold.it/350x150?text=Security logo"> -->
          <img src="images/geotrust.jpg" alt="GeoTrust">
        </div>

        <div class="payment-logos">
           <h4>Accepted payment methods</h4>
           <img src="images/payment-icons.png">
         </div>

      </div>

		</div>
	</section>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
